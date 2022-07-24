<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function index(){
        $index = News::all();
        return response()->json($index);
    }
}
