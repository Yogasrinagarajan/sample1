<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use DB;
class TestsController extends Controller
{
    public function index(){

    	// $test=DB::select('select * from tests');
    	// dd($test);
    	// return view('new',['test'=>$test]);




    	 $test=test::all();
    	return view('new',compact('test'));

    	#retrive data from table

    	// $tst=test::all();
    	// foreach ($tst as $test) {
    	// 	echo $test;
    	// }

    	// $tst=test::find(1);
    	// return $tst->title;


    	// $tst=test::where('id',1)->value('title');
    	// return $tst;

    	#data insertion 
    	// $test= new Test;
    	// $test->id="3";
    	// $test->title="qwerw";
    	// $test->mark="sdfds";
    	// $test->save();

    	#update table

  		// $test=test::where('id',2)->update(['title'=>'aaaaa']);


    }
}
