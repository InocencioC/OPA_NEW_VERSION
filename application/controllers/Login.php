<?php
defined('BASEPATH') OR exit ('Ação não permitida');

class Login extends CI_Controller {
    public function index() {

        /*
            email: "admin@admin.com",
            password: "password"
            
        */

$identity = $this->security->xss_clean($this->input->post('email'));
$password = $this->security->xss_clean($this->input->post('password'));
$remember = FALSE; // remember the user
if($this->ion_auth->login($identity, $password, $remember)) {

redirect('home');

}else{
    echo 'Erro na validação';
    $this->load->view('layout/header');
    $this->load->view('login/index');
}
    }
}