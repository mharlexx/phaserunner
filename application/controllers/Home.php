<?php
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Home";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('home_view');
        $this->load->view('include/footer');
    }

    public function view_shop() {
        $data['title'] = "Shop";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('shop_view');
        $this->load->view('include/footer'); 
    }

    public function view_aboutus() {
        $data['title'] = "About Us";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('aboutus_view');
        $this->load->view('include/footer'); 
    }

    public function view_login() {
        $data['title'] = "Login";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('login_view');
        $this->load->view('include/footer'); 
    }

    public function view_register() {
        $data['title'] = "Register";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('register_view');
        $this->load->view('include/footer'); 
    }
  
}
?>