<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-5 14:17:04 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   用户管理
 */

namespace Admin\Controller;

use Admin\Controller\PublicController;

class UserController extends PublicController {

    public function adminList() {
        $Admin = D('Admin');
        import('Vendor.My.Page2');
        $userCount = $Admin->count(); //所属类别新闻

        $Page = new \Page2($userCount, 7, 3); // 实例化分页类 传入总记录数和每页显示的记录数
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '&laquo;', 'down' => '&raquo;', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%';
        $show = $Page->pageShow();
        $users = $Admin->order('ctime desc,updatetime desc')
                ->limit($Page->limit)
                ->select();
        $this->assign(array(
            'show' => $show,
            'admin' => $users
        ));
        $this->display();
    }

    /**
     * 添加/编辑管理员
     */
    public function add() {
        $action = I('action');
        if (empty($action)) {
            $action = 'add';
        }
        $Admin = D('Admin');
        if(!empty($action)&&$action =='edit'){
            $id = I('id');
            $admin = $Admin->where("id = '$id'")->find();
        }
        $this->assign(array(
            'setreferer' => '',
            'classname' => 'Admin',
            'action' => $action,
            'admin'=>$admin,
            'id'=>$id
        ));
        $this->display();
    }

}
