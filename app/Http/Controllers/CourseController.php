<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;
class CourseController extends Controller
{
    //
    public function onSelectFour(){
        $result = CourseModel::limit(4)->get();
        return $result;
    }
    public function onSelectAll(){
        $result = CourseModel::all();
        return $result;
    }
    public function onSelectDetails($id){

        $id = $id;
        $result = CourseModel::where(['id'=>$id])->get();
        return $result;
    }
}
