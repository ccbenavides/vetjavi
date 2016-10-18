<?php
class Page extends CI_Controller {

        public function index()
        {
            $this->load->view('data');
        }

        public function data(){
            $this->load->view('data');
        }
}