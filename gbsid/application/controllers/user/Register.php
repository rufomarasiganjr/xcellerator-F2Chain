<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->library('curl'); 

      }

	public function index()
	{   
        $datas['api_status'] = "null";
		$this->load->view('pages/register',$datas);
    }
   
    public function new(){ 
        $userType = $this->input->post('usertype');
        $userName = $this->input->post('name');
        $email = $this->input->post('email');  
        $password = $this->input->post('password');

        /* API URL */
        $url = 'http://localhost:5000/api/users';   

        /* Init cURL resource */        
        $ch = curl_init($url);    
            
        /* Array Parameter Data */        
        $data = json_encode(['name'=> $userName, 'email'=> $email, 'password' => $password, 'userType' =>  $userType]);               

        /* pass encoded JSON string to the POST fields */        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);       
                    
        /* set the content type json */        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));       
                    
        /* set return type json */        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
                    
        /* execute request */        
        $result = curl_exec($ch);        
            
        /* close cURL resource */        
        curl_close($ch);

        $api_status = json_decode($result,true);

        if($api_status['msg'] ==""){
            $datas['api_status'] = "0";
        } else {
            $datas['api_status'] = $api_status['msg'];
        }
        $this->load->view('pages/register',$datas);

    }

    public function allUsers(){        
        //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');
        
        //Request using GET Method
        $this->curl->create('http://localhost:5000/api/rpc/users');
        $r = $this->curl->execute();
        //echo "<pre>";
        $x = json_decode($r,true);
        echo $x['users'][0]["name"];
    }
}