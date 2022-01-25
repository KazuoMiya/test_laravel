<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        $test = DB::table('tests')->get();
        // dd($test);
        $values = Test::all();
        return view('tests.test', compact('values'));
    }
}