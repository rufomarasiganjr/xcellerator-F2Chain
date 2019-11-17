<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->library('curl'); 

    }
	public function index()
	{
		if($this->input->post('seller')!=""){
			$id = $this->input->post('seller');
		} else if($this->input->post('business')!=""){
			$id = $this->input->post('business');
		} else {
			redirect('home');
		}
		
        //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

        //Request using GET Method
        $this->curl->create('http://localhost:5000/api/rpc/transactions/'.$id);
       
        $api_data = $this->curl->execute();
        //echo "<pre>";
        $data_decoded = json_decode($api_data,true);

		$data_len = sizeof($data_decoded['x']);
		//var_dump($data_decoded);

		$r5=0;$r4=0;$r3=0;$r2=0;$r1=0;
        for($i=0; $i<$data_len; $i++){
            if($data_decoded['x'][$i]['rating'] == 5){
                $r5 +=1;
            } else if($data_decoded['x'][$i]['rating'] == 4){
                $r4 +=1;
            } else if($data_decoded['x'][$i]['rating'] == 3){
                $r3 +=1;
            } else if($data_decoded['x'][$i]['rating'] == 2){
                $r2 +=1;
            } else if($data_decoded['x'][$i]['rating'] == 1){
                $r1 +=1;
            }
        }

        $data_decoded['rs'] = array (
            'r5' => round($r5/$data_len)*100,
            'r4' => round($r4/$data_len)*100,
            'r3' => round($r3/$data_len)*100,
            'r2' => round($r2/$data_len)*100,
            'r1' => round($r1/$data_len)*100,
            'totalfeedback' => $data_len
        );
		$this->load->view('authentication/view',$data_decoded);
	}
}
