<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeightLogging;

class WeightLoggingController extends Controller
{
	public function index(){
		$data = WeightLogging::orderBy('date', 'desc')->get();
		
		return view('welcome', compact('data'));
	}
	
    public function insert(Request $request){
		$input = $request->all();
		$input['variance'] = $input['max'] - $input['min'];
		WeightLogging::create($input);
		
		return redirect('/');
	}
	
    public function show($id){
		$data = WeightLogging::orderBy('date', 'desc')->where('id', $id)->first();
		
		return view('show', compact('data'));
	}
	
    public function edit($id){
		$data = WeightLogging::orderBy('date', 'desc')->where('id', $id)->first();
		
		return view('edit', compact('data'));
	}
	
    public function update(Request $request){
		$id = $request->id;
		$date = $request->date;
		$max = $request->max;
		$min = $request->min;
		$variance = $max - $min;
		
		WeightLogging::where('id', $id)->update(['date' => $date, 'max' => $max, 'min' => $min, 'variance' => $variance]);
		
		return redirect('/');
	}
}
