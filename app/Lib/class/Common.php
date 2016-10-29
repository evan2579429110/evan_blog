<?php

/**
 * Created by PhpStorm.
 * User: yuzhiwen
 * Date: 16/10/27
 * Time: 下午2:02
 */
class Common
{

    public static function output($ret,$detail=[]){

        $result = array();
        $result['ret'] = $ret;
        $result['msg'] =self::getErrorMsg($ret);
        $result['detail'] = $detail;
        header("Content-type: text/html; charset=utf-8");
        echo "var SJ_JSON_RET=".json_encode($result, 256);
    }

    public static function getErrorMsg($ret){
        global $ERROR;
        if(isset($ERROR[$ret])){
            return $ERROR[$ret];
        }
        else{
            return "general error";
        }
    }
}