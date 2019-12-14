<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    // Will Return all todos
    public function index(){
        return json_encode(Todo::orderBy('id','desc')->get());
    }
    // Will Save the todo
    public function store(Request $request){
        return Todo::create(["content"=> $request->content]);
    }
}
