<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Location;                             // import Location Model 

use Illuminate\Support\Facades\Validator;            // import Validator

class LocationController extends Controller
{
    // // direct location list page
    // public function list() {
    //     return view('admin.location.list');
    // }
    public function list() {
        $locations = Location::when(request('key'),function($query){
                                    $query->where('name','like','%'.request('key').'%');    // key နဲ့ search
                                })
                                ->orderBy('id','desc')
                                ->paginate(4);      // paginate bootstrap ချိတ်ချင်ရင် AppServiceProvider.php မှာထည့်

        $locations->appends(request()->all());      // paginate 2nd page မှာ search လုပ်တဲ့အခါ url ပျောက်မသွားအောင်လုပ်တာ

        return view('admin.location.list',compact('locations'));
    }

    // direct location create page
    public function createPage() {
        return view('admin.location.create');
    }

    // Create Location
    public function create(Request $request) {
        $this->locationValidationCheck($request);

        $data = $this->requestLocationData($request);       // သယ်လာတဲ့ data ကို array format change ပေး

        Location::create($data);

        return redirect()->route('location#list')->with(['createSuccess'=>'Created Location Successfully!']);
    }

    // Delete Location
    public function delete($id) {
        // dd($id);
        Location::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>'Deleted Location Successfully!']); 
    }

    // Edit Page
    public function edit($id) {
        $location = Location::where('id',$id)->first();
        // dd($id);

        return view('admin.location.edit',compact('location'));
    }

    // Update Page
    public function update(Request $request) {
        // dd($request->all());

        // id ကို input:hidden နဲ့ သယ်လာတဲ့အတွက်ကြောင့် အပေါ်ကလို $id နဲ့သယ်စရာမလိုတော့ဘူး

        $this->locationValidationCheck($request);
        $data = $this->requestLocationData($request);       // list က ၂ခု ကူး

        Location::where('id',$request->locationId)->update($data);

        return redirect()->route('location#list')->with(['updateSuccess'=>'Updated Location Successfully!']);
    }

    // Location Validation Check
    private function locationValidationCheck($request) {
        Validator::make($request->all(),[
            'locationName' => 'required|min:4|unique:locations,name,'.$request->locationId
        ])->validate(); 
    }

    // Request Location Data
    private function requestLocationData($request) {
        return [
            'name' => $request->locationName
        ];
    }
}
