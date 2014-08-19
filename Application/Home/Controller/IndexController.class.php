<?php

namespace Home\Controller;

use Home\Controller\PublicController;

class IndexController extends PublicController {

    public function index() {
        $this->display();
    }

    public function app() {
        $this->display();
    }

    public function app2() {
        $this->display();
    }

    public function about() {
        $About = D('about');
        $about = $About->find();
        $this->assign(array(
            'about' => $about
        ));
        $this->display();
    }

    public function download() {
        $this->display();
    }

}
