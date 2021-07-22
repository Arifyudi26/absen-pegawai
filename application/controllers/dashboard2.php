<?php
defined('BASEPATH') or die('No direct script access allowed!');

class dashboard2 extends CI_Controller
{
    public function index()
    {
        $this->load->view('index2');
    }
}