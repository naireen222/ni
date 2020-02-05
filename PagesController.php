<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return 'this is welcome page';
       // return view('welcome');
        $title="welcome!";
        return view('pages.index')->with('title',$title);
    }
    public function services()
    {
        $data=array(
            'title'=>'service',
            'services'=>['web development','programming','java','laravel','php']
        );
            return view('pages.services')->with($data);
        
    }
public function register()
{
    return view('pages.register');

}
public function register_action(Request $request)
{
    
    $name=$request->input('name');
    echo 'name:'.$name;
    echo '<br>';
    $password=$request->input('password');
    echo 'password:'.$password;
    echo '<br>';

    $this->validate($request,[
        'name'=>'required',
        'password'=>'required'
        ]);
}
}?>