<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        echo "Hallo orang baik";
    }
    public function showaddress($address){
        echo "alamat di". $address;
    }
    public function GetStudent($name, $code){
        echo "nama saya " . $name , " NRP: " .$code;
    }
}
