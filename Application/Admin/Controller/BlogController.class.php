<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-6 10:48:41 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   新闻栏目
 */

namespace Admin\Controller;

use Admin\Controller\PublicController;

class BlogController extends PublicController {
    public function about(){
        $About = D('About');
        $about = $About->find();
        $this->assign(array(
            'Rs'=>$about
        ));
        $this->display();
    }
}
