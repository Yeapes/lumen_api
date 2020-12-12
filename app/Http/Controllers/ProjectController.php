<?php
namespace App\Http\Controllers;
use App\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function onSelect3(){
        $result = ProjectModel::limit(3)->get();
        return $result;
    }
   /* public function onSelectAll(){
        $result = ProjectModel::all();
        return $result;
    }*/

    public function allProjects(){
        $data = ProjectModel::all();
        return $data;
    }

    public function onSelectDetails($id){
        $id = $id;
        $result = ProjectModel::where(['id'=>$id])->get();
        return $result;
    }

}
