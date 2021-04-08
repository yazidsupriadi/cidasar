<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function tentang(){
        
        $this->load->view('profil/tentang');
    }

    public function visimisi(){

        $this->load->view('profil/visimisi');
    }

    public function identitas($nama,$notelp,$nim){

        echo "nama user $nama dan no telponya $notelp dan NiM adalah $nim";
    }



}
