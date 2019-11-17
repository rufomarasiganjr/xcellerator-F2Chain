<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->library('curl'); 

    }

    public function index(){
        $datum['login_status'] = "";
        $this->load->view('pages/login',$datum);
    }

    public function validate(){       

        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('pass')
        );
         
        $payload = json_encode($data);
         
        // Prepare new cURL resource
        $ch = curl_init('localhost:5000/api/users/login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
         
        // Set HTTP Header for POST request 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload))
        );
         
        // Submit the POST request
        $result = curl_exec($ch);
         
        // Close cURL session handle
        curl_close($ch);

        $login = json_decode($result,true);
        
        if($login['msg'] == "Invalid Username / Password"){
            //invalid
            $datum['login_status'] = 0;
            $this->load->view('pages/login',$datum);
        } else {
            $sess = array (
                'name' => $login['name'],
                'email' => $login['email'],
                'id' => $login['id'],
                'usertype' => $login['usertype'],
                'sc_id' => $login['sc_id'],
                'token' => $login['token'],
            );
            
            $this->session->set_userdata($sess);
            
            //redirect to dashboard
            redirect('user/dashboard');

        }

    }
    public function logout(){
        $this->session->set_userdata('name', FALSE);
        $this->session->set_userdata('email', FALSE);
        $this->session->set_userdata('id', FALSE);
        $this->session->set_userdata('usertype', FALSE);
        $this->session->set_userdata('sc_id', FALSE);
        $this->session->set_userdata('token', FALSE);

        $this->session->sess_destroy();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        redirect('Home');
    }
}
?>