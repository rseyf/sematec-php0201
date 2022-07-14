<?php
namespace App\Http\Controllers;

class UserController extends Controller {
    public function show($name) {
        // dump(env("MEMCACHED_HOST"));
        // return "<h1>Welcome, $name</h1>";
        return view("greetings",[
            "name" => $name
        ]);
    }

    public function store() {
        
        // inja ba data layer kar konam
    }
}