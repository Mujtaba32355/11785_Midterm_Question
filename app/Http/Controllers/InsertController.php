<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class InsertController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function insertion(Request $req)
    {
        $req->validate(
        [
            'first_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'email'=>'required|email',
        ]);
        echo "<pre>";
        print_r($req->all());
        $data=new Registration;
        $data->first_name=$req['first_name'];
        $data->last_name=$req['last_name'];
        $data->dob=$req['dob'];
        $data->email=$req['email'];
        $data->save();

    } 
}
