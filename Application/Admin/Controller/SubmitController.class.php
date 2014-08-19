<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-5 16:56:32 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   数据提交
 */

namespace Admin\Controller;

use Admin\Controller\PublicController;

class SubmitController extends PublicController {

    public function formSubmit() {
        $action = I('action'); //操作方法
        $classname = I('classname'); //模型类
        $setreferer = I('setreferer'); //操作完返回地址
        if ($action == 'add' && !empty($classname)) {
            $Model = D($classname);
            // 根据表单提交的POST数据创建数据对象
            if (!$Model->create()) {
                $this->error($Model->getError());
            }
            $result = $Model->add(); // 根据条件保存修改的数据
            // $SQL = $Model->getLastSql(); //输出sql语句
            //Log::record('调试的SQL：' . $SQL, Log::SQL);
            if (false !== $result) {
                $this->success('新增成功！', $setreferer);
            } else {
                $this->error('新增失败!');
            }
        } elseif ($action == 'edit' && !empty($classname)) {
            $Model = D($classname);
            // 根据表单提交的POST数据创建数据对象
            if (!$Model->create()) {
                $this->error($Model->getError());
            }
            $result = $Model->save(); // 根据条件保存修改的数
            $SQL = $Model->getLastSql(); //输出sql语句
            \Think\Log::record('调试的SQL：' . $SQL);
            if (false !== $result) {
                $this->success('修改成功！', $setreferer);
            } else {
                $this->error('修改失败!');
            }
        } else {
            $this->error('非法操作!');
        }
    }

    public function del() {
        $classname = I('classname');
        $id = I('id');
        $rs = D($classname)->where("id='$id'")->delete();
        if($rs){
            $data['status']  = 1;
            $data['content'] = '删除成功！';
        }  else {
            $data['status'] = 0;
            $data['content'] = '删除失败！';
        }
        $this->ajaxReturn($data);
    }

}
