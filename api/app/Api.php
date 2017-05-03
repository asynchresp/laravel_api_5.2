<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
	//Created By : Debasis Chakraborty
	public static function make_response($success,$data,$msg,$extraData=[]){
		    $response =  [];
	        $response['success'] = $success;
	        $response['msg'] =$msg;
            foreach ($extraData as $key => $value) {
                $response[$key] =$value;
            }
	        $response['data'] = $data;
	        $response['error'] = [];
	        return Api::replace_null_with_empty_string($response);
	}
	//Created By : Debasis Chakraborty
    public static function replace_null_with_empty_string($array)
    {
        foreach ($array as $key => $value) 
        {
            if(is_array($value))
                $array[$key] = Api::replace_null_with_empty_string($value);
            else
            {
                if (is_null($value))
                    $array[$key] = "";
            }
        }
        return $array;
    } 
}
