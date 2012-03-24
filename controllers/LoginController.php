<?php
class LoginController extends ApplicationController {

    function __construct() {
        parent::__construct();
        $this->layout = 'layouts/mainAdmin';

        $this['login-button'] = array(
            'pk_name' => "auth_id",
            'pk_value' => "0",
            'id' => "authentication",
            'process' => "login",
            'button_value' => "Login",
            'extra_style' => 'style="width:70px"',
        );

    }//__construct()

    function index(){
        if(Application::haveActiveLogin()) {
            redirect('/admin');
        }
    }//index()

    function login() {
        $login = Application::doLogin($_REQUEST['username'], $_REQUEST['password']);
        echo $login ? '1^Success' : '0^Invalid Username or Password';
        die;

    }//login()

    function logout(){
        Application::doLogout();
        die;

    }//logout()
}//loginController