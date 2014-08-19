<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-8-5 16:20:37 by 曹文鹏 , caowenpeng1990@126.com
 * For          :   公共模型类
 */

namespace Admin\Model;

use Think\Model;

class PublicModel extends Model {

    public function dateFormat() {
        return date('Y-m-d H:i:s');
    }

}
