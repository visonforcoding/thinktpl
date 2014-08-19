<?php

/**
 * 后台管理
 */

namespace Admin\Controller;

use Admin\Controller\PublicController;

class IndexController extends PublicController {

    public function index() {
        if (!$this->ckUserLogin()) {
            $url = U('Admin/Index/login');
            $this->error('请先登录！', $url);
        }
        $this->display();
    }

    public function login() {
        $this->display();
    }

    public function doLogin() {
        $username = I('username');
        $password = I('password');
        $remember = I('remember');
        $pwd = setPlainPassword($password);
        $Admin = D('Admin');
        $ck = $Admin->where("username= '$username' and pwd = '$pwd' ")->find();

        if (!$ck) {
            $url = U('Admin/Index/login');
            $this->error('用户名或密码错误', $url, 3);
        }
        if ($remember) {
            cookie('USER_NAME', $username, 3600 * 24 * 30);
            cookie('USER_PWD', $password, 3600 * 24 * 30);
        }
        $userId = $ck['id'];
        $nickname = $ck['nickname'];
        session(C('ADMIN_AUTH_KEY'), $userId);
        session('LOGIN_NAME', $nickname);
        $adminUrl = U('Admin/index/index');
        redirect($adminUrl);
    }

}
