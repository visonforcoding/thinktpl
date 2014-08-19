<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-8 16:03:37 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   app模型
 */

namespace Admin\Model;

use Admin\Model\PublicModel;

class AppModel extends PublicModel {

    protected $_auto = array(
        array('ctime', 'dateFormat', 1, 'callback'),
        array('updatetime', 'dateFormat', 2, 'callback'),
        array('info', 'htmlspecialchars_decode', self::MODEL_BOTH, 'function'),
    );

}
