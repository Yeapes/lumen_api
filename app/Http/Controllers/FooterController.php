<?php

namespace App\Http\Controllers;

use App\FooterModel;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    function onSelect(){
        $result = FooterModel::all();
        return $result;
    }
}
