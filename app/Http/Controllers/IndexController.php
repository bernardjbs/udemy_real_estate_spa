<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    return inertia(
      'Index/Index', 
      [
        'message' => 'Hello there, this is a prop coming from the IndexController!'
      ]
    );
  }
  
  public function show()
  {
    return inertia('Index/Show');
  }
}
