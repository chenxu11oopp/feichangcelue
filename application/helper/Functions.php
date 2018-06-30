<?php
/**
 * Created by PhpStorm.
 * User: CHEN
 * Date: 2018/6/7
 * Time: 13:50
 */

namespace app\helper;
function ajax_success($msg = '提交成功',$data=array()){
    $return = array('status'=>'1');
    $return['info'] = $msg;
    $return['data'] = $data;
    exit(json_encode($return,JSON_UNESCAPED_UNICODE));
}