<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
class ContactController extends Controller
{
    public function onContactSend(Request $request){

        // $request->getContent();

       $contactArray =  json_decode($request->getContent(),true);

        $user_name = $contactArray['user_name'];
        $email = $contactArray['email'];
        $message = $contactArray['message'];

        $result = ContactModel::insert(['user_name'=>$user_name,'email'=>$email,'message'=>$message]);

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
}
