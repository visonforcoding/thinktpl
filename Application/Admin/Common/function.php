<?php

/**
* Encoding     :   UTF-8
* Created on   :   2014-8-5 16:47:20 by 曹文鹏 , caowenpeng1990@126.com
* For          :   公共函数库
*/

/**
 * 不告诉你这是干嘛的
 */
function setPlainPassword($pwd) {
    $passwd = sha1(md5($pwd) . 'sevenbaby');
    return substr($passwd, 4, 30);
}