<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Chrisbjr\ApiGuard\Models\ApiKey;
//load Models
use App\Api;

class ApiAuthController extends ApiGuardController
{
    protected $apiMethods = [
        'loginUser' => [
            'keyAuthentication' => false
        ],    
        'registerUser' => [
            'keyAuthentication' => false
        ]           
    ];

    // public function basicSetup(Request $request){
    //     $data = $request->json()->all();
    //     $response =  []; 
    //     if ($data) {
    //        $response =  Api::make_response(1,[],'Valide request');
    //      } else{
    //        $response =  Api::make_response(0,[],'Invalide request');
    //      }
    //     return $response;     	
    // }    
    
    public function registerUser(Request $request){
        $data = $request->json()->all();
        $response =  []; 
        if ($data) {
           $response =  Api::make_response(1,[],'Valide request');
         } else{
           $response =  Api::make_response(0,[],'Invalide request');
         }
        return $response;     	
    }    
    
    public function loginUser(Request $request){
        $data = $request->json()->all();
        $response =  []; 
        if ($data) {
           $response =  Api::make_response(1,[],'Valide request');
         } else{
           $response =  Api::make_response(0,[],'Invalide request');
         }
        return $response;     	
    }    

    public function logoutUser(Request $request){
        $data = $request->json()->all();
        $response =  []; 
        if ($data) {
           $response =  Api::make_response(1,[],'Valide request');
         } else{
           $response =  Api::make_response(0,[],'Invalide request');
         }
        return $response;     	
    }
}
