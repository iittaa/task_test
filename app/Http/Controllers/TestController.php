<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(){
        $values = Test::all();

        $tests = DB::table("tests")
        ->select("text")
        ->get();

        // die + var_dump()  処理を止めて変数の中身を表示する。
        dd($tests);

        return view("tests/test", compact("values"));
    }
}
