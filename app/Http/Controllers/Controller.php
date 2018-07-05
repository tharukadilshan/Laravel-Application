<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function usersignup(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $phoneno = $request->input('phone');
   
   if(empty($name) || empty($email) ||empty($password) || empty($phoneno))
   {
    echo '<script type="text/javascript">'; 
    echo 'alert("Fields are empty! Sign Up Again");'; 
    echo 'window.location.href = "/signup";';
    echo '</script>';
    //return redirect('/signup');
   }
    else
    {
    $data = DB::insert("insert into users(name,email,password,phone_number) values ('$name','$email','$password','$phoneno')");
    if($data==true){ 
    echo '<script type="text/javascript">'; 
    echo 'alert("You are registered !");'; 
    echo 'window.location.href = "/";';
    echo '</script>';
}   else{
    echo '<script type="text/javascript">'; 
    echo 'alert("You are not registered !");'; 
    echo 'window.location.href = "/signup";';
    echo '</script>';
        }
        
    }

}

public function usersignin(Request $request)
{
 $username = $request->input('name');
 $password = $request->input('password');
 $login = DB::table('users')->where(['name'=>$username,'password'=>$password])->get();
 if(count($login)>0)
 {
    echo '<script type="text/javascript">'; 
    echo 'alert("Login Successful !");'; 
    echo 'window.location.href = "/createpost";';
    echo '</script>';
 }
 else{
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Login Failed, Try again !");'; 
    echo 'window.location.href = "/welcome";';
    echo '</script>';
 }
}

public function addpost(Request $request)
{

    $title = $request->input('posttitle');
    $description = $request->input('description');
   // $data = DB::insert("insert into users(name,email,password,phone_number) values ('$name','$email','$password','$phoneno')");
   if(empty($title) || empty($description))
   {
    echo '<script type="text/javascript">'; 
    echo 'alert("Fields are empty! Re add the post");'; 
    echo 'window.location.href = "/createpost";';
    echo '</script>';
    //return redirect('/signup');
   }
    else
    {
    $data = DB::insert("insert into posts(title,description) values ('$title','$description')");
    if($data==true){ 
    echo '<script type="text/javascript">'; 
    echo 'alert("Post has added Succesfully !");'; 
    echo 'window.location.href = "/createpost";';
    echo '</script>';
    }   else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Post has not added sucessfully !");'; 
    echo 'window.location.href = "/createpost";';
    echo '</script>';
        }
        
    }

}
}
