<?php

// Auth controller class
class AuthController {

    public function login($params) {
        $view = new AuthView("login");
        $view->render();
    }

    public function register($params) {
        $view = new AuthView("register");
        $view->render();
    }

}