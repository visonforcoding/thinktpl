<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-7 12:11:52 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   
 */

namespace Admin\Controller;

use Admin\Controller\PublicController;

class AppController extends PublicController {

    /**
     * app列表页
     */
    public function appList() {
        $App = D('App');
        import('Vendor.My.Page2');
        $userCount = $App->count(); //所属类别新闻

        $Page = new \Page2($userCount, 7, 3); // 实例化分页类 传入总记录数和每页显示的记录数
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '&laquo;', 'down' => '&raquo;', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%';
        $show = $Page->pageShow();
        $users = $App->order('ctime desc,updatetime desc')
                ->limit($Page->limit)
                ->select();
        $this->assign(array(
            'show' => $show,
            'Rs' => $users
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
        $Admin = D('App');
        if (!empty($action) && $action == 'edit') {
            $id = I('id');
            $Rs = $Admin->where("id = '$id'")->find();
            $Rs['fcover'] = '<img src="' . $Rs['cover'] . '" width="120" height="120" />';
            $Rs['fwcode'] = '<img src="' . $Rs['wcode'] . '" width="120" height="120" />';
        }
        $this->assign(array(
            'setreferer' => '',
            'classname' => 'App',
            'action' => $action,
            'Rs' => $Rs,
            'id' => $id
        ));
        $this->display();
    }

}
