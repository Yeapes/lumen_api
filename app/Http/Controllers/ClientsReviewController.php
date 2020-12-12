<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientsReviewModel;
class ClientsReviewController extends Controller
{
    public function onAllSelect(){
        $result = ClientsReviewModel::all();
        return $result;
    }
}
