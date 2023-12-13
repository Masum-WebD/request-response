<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = 75;
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];


        return response()->json(['status'=>'success', 'data'=>$data],200);
    }
    public function cookies(){
        $name = "Cookie";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response('Cookie successfully set')->cookie($name, $value, $minutes, $path, $domain,$secure, $httpOnly);
    }
}
