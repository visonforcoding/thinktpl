<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-4 20:13:42 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   公共控制器
 */

namespace Admin\Controller;

use Think\Controller;

class PublicController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 检测cookie 是否合法
     * @param type $username
     * @param type $password
     * @return boolean
     */
    public function ckUser($username, $password) {
        $Member = D('Admin');
        $pwd = setPlainPassword($password);

        $ckUser = $Member->where("username = '$username' and  pwd = '$pwd'")
                ->find();

        if (is_array($ckUser)) {
            return $ckUser;
        } else {
            return FALSE;
        }
    }

    /**
     * 检测用户登录
     * @return boolean
     */
    public function ckUserLogin() {
        $AUTH_KEY = C('ADMIN_AUTH_KEY');
        $authKey = session($AUTH_KEY);
        $COOKIE_USER_NAME = cookie('USER_NAME');
        $COOKIE_USER_PWD = cookie('USER_PWD');
        if (empty($authKey)) {
            if (empty($COOKIE_USER_NAME) || empty($COOKIE_USER_PWD)) {
                return false;
            } else {
                $ckUser = $this->ckUser($COOKIE_USER_NAME, $COOKIE_USER_PWD);
                if (!is_array($ckUser)) {
                    return false;
                } else {
                    session($AUTH_KEY, $ckUser['id']);
                    return TRUE;
                }
            }
            return false;
        } else {
            return TRUE;
        }
    }

    public function setSessionInfo() {
        $ck = $this->ckUserLogin();
        if ($ck) {
            $userId = session(C('ADMIN_AUTH_KEY'));
            $Member = D('Admin');
            $user = $Member->where("id = $userId")
                    ->find();
            $this->assign('user', $user);
            return true;
        } else {
            return false;
        }
    }

}
