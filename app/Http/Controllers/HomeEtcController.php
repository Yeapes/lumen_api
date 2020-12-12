<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class HomeEtcController extends Controller
{
    //
    public function onSelectVideo(){
        $result = HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }

    public function clientProject(){
        $result = HomeEtcModel::select('total_project','total_client')->get();
        return $result;
    }
    public function techDes(){
        $result = HomeEtcModel::select('technology_des')->get();
        return $result;
    }
    public function homeTitle(){
        $result = HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
    

}
