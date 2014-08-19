<?php

/**
* Encoding     :   UTF-8
* Created on   :   2014-8-6 14:32:54 by 曹文鹏 , caowenpeng1990@126.com
* For          :   关于模型
*/
namespace Admin\Model;

use Admin\Model\PublicModel;

class AboutModel extends PublicModel {

    protected $_auto = array(
        array('updatetime', 'dateFormat', 2, 'callback'),
        array('info', 'htmlspecialchars_decode', self::MODEL_BOTH, 'function'),
        array('contact', 'htmlspecialchars_decode', self::MODEL_BOTH, 'function'),
    );


}

