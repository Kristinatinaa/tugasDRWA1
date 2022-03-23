<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facedes\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\Validator;
use Illuminate\Foundation\Aunt\RegisterUsers;

class KelasController extends Controller
{
    public function getDataKelas(){

        $ambildata = DB::table('kelas')->get();

        if($ambildata){
            //return response()->json(["Result"=>
            //        ["ResultCode"=>1,
            //        "ResultMessage"=>"Success Login"],
            //        "DataUser"=>$ambildata
            //        ], 200
            //}; 
            return response()-> json($ambildata,200);
        }else{
            return response()-> json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password Salah"]], 401 
            );
        }
    }

    public function getDataKelasById($idkelas){
        $ambildata = DB::table('kelas')
            ->where('id_kelas',$idkelas)
            ->get();

        if($ambildata){
            //return response()->json(["Result"=>
            //        ["ResultCode"=>1,
            //        "ResultMessage"=>"Success Login"],
            //        "DataUser"=>$ambildata
            //        ], 200
            //}; 
            return response()-> json($ambildata,200);
        }else{
            return response()-> json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password Salah"]], 401 
            );
        }
    }
}