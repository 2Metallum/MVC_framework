<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
    public function loginAction() {
        if(!empty($_POST)) {
            $this->view->location('');
        }
        $this->view->render('Авторизация');
    }

    public function registerAction() {
        $this->view->render('Регистрация');
    }
}