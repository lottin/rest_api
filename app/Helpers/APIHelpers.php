<?php 

namespace App\Helpers;

class APiHelpers{
    public static function createAPIResponse($is_error,$code, $message,$content){
        $result =[];
        if($is_error){
            $result['success']=false;
            $result['code']=$code;
            $result['message']=$message;
        }else{
            $result['success']=true;
            $result['code']=$code;
            if($content ==null) {
                $return['message']=$message;
            }else{
                $result['content']=$content;
            }
        }
        return $result;
    }
}



?>