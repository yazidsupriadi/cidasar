<?php

class Home extends CI_Controller {

	
	public function beranda()
	{
		$this->load->view('home');
	}

	public function about(){
        
		$this->load->view('about');
	}

    public function profile(){
        
		$this->load->view('profile');
    }
}
