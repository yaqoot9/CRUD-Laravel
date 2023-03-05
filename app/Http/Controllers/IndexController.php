<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
public function show(){
$firstname='Yaqoot';
$lastname=' Weshahi';
return view('sow',compact('firstname','lastname'));

}
}
