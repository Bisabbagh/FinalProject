<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class PointController extends Controller
{
    public function create(){

        return view("points.createpoints");

    }
    public function view(){
        $points=Point::all();
        return view("points.view", ['points' => $points]);


    }
    public function edit(Point $point){
        

        return view("points.editpoints",['point'=>$point]);

    }
    public function update(Point $point, Request $request){
        $data =$request->validate([
            'user_id'=>['required','numeric'],
            'point'=>['required','numeric']
        ]);
        $point->update($data);
        return redirect(route('pointview'))->with('success','point update successfully');


    }
    public function store(Request $request){

        $data =$request->validate([
            'user_id'=>['required','numeric'],
            'point'=>['required','numeric']
        ]);
        $newPoints=Point::create($data);
        return redirect(route('pointview'));


    }
    public function delete(Point $point){
        $point->delete();
        return redirect(route('pointview'))->with('del','point delete successfully');


    }
}
