<?php

namespace App\Http\Controllers;

use App\InformationEtcModel;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    function onSelect(){
        $result = InformationEtcModel::all();
        return $result;
    }
}
