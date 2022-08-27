<?php

namespace App\Http\Controllers;

class UserController extends Controller{
  public function showData($name, $age, $city=null){
   return 'This is  '. $name.' '.$age.' '.$city;
  }
}