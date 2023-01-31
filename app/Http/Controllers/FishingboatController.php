<?php

namespace App\Http\Controllers;

use App\Models\FishingBoat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FishingboatController extends Controller
{
  

    public function index(){
        // $boat = FishingBoat::orderBy('id', 'DESC')->get();

        return view('admin.fishingboats');
    }

    public function fetchboat()
    {
        $boats = FishingBoat::all();
        return response()->json([
            'boats'=>$boats,
        ]);
    }

    public function save(Request $request){

        
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->route('admin.fishingboats')->with('error', 'Please Added the Image !!');
        }else{
            $image_name = time(). "." . $request->image->extension();

            $request->image->move(base_path('\uploads\fishingboats'), $image_name);

            

            $boat = new FishingBoat;

            $boat->boat_name = $request->input('boatname');
            $boat->image = $image_name;
            $boat->short_description = $request->input('discription');
            $boat->length = $request->input('length');
            $boat->beam = $request->input('beam');
            $boat->draft = $request->input('draft');
            $boat->main_hull_beam = $request->input('mainhullbeam');
            $boat->fuel = $request->input('fuel');
            $boat->water = $request->input('water');
            $boat->seating_capacity = $request->input('seating_capacity');
            $boat->speed = $request->input('speed');
            $boat->beds = $request->input('beds');
            $boat->hull_type = $request->input('hulltype');
            $boat->fish_hold_capacity = $request->input('fish_hold_capacity');
            $boat->price = $request->input('price');

            $boat->save();

            return redirect()->route('admin.fishingboats')->with('success', 'Added the Product Successfull !!');

        } 
        
    }


    public function edit($id)
    {
        $boat = FishingBoat::find($id);
        if($boat)
        {
            return response()->json([
                'status'=>200,
                'boat'=> $boat,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No boats Found.'
            ]);
        }

    }

    public function update(){
        
    }

    






}
