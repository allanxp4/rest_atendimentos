<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cid;

class CidController extends Controller
{
    public function getTodosCid(){
        return Cid::all();
    }
    
    public function getCidById($id){
        return Cid::find($id);
    }

    public function procuraCid($termo){
        return Cid::where('codigo', 'like', "%$termo%")
            ->get();


    }
}
