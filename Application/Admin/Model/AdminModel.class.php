<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-5 16:22:17 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   管理员模型
 */

namespace Admin\Model;

use Admin\Model\PublicModel;

class AdminModel extends PublicModel {

    protected $_validate = array(
        array('username', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
        array('pwd', 'require', '密码不能为空！', 2), //默认情况下用正则进行验证
        array('username', '', '帐号名称已经存在！', 0, 'unique',1), // 在新增的时候验证name字段是否唯一    
        array('pwd2', 'pwd', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致   
    );
    protected $_auto = array(
        array('status', '1'), // 新增的时候把status字段设置为1        
        array('pwd', 'setPwd', 3, 'callback'), // 对password字段在新增和编辑的时候使md5函数处理       
        array('ctime', 'dateFormat', 1, 'callback'),
        array('updatetime', 'dateFormat', 2, 'callback'),
    );

    protected function setPwd($pwd) {
        if (empty($pwd) || !isset($pwd)) {
            return false;
        } else {
            return setPlainPassword($pwd);
        }
    }

}
