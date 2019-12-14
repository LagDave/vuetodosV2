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
    // Will delete all todos
    public function destroy(Todo $todo, Request $request){
        return Todo::destroy($todo->id);
    }
}
