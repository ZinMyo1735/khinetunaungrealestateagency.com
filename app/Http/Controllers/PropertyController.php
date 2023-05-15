<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;                             // import Property Model
use App\Models\Location;                             // import Location Model 

use Illuminate\Support\Facades\Validator;            // import Validator

use Storage;                                         // import Storage for image 

class PropertyController extends Controller
{
    // direct property list page
    // public function list() {
    //     return view('admin.property.list');
    // }
    public function list() {
        $houses = Property::select('properties.*','locations.name as location_name')
                        // Select all from properties but only select name from locations as location_name.
                        // left(properties table) Join locations table. Take location_id from properties = id from properties
                              ->leftJoin('locations','properties.location_id','locations.id')
                              ->when(request('key'),function($query){
                                 $query->where('properties.post_title','like','%'.request('key').'%');    // key နဲ့ search
                              })
                              ->orderBy('properties.id','desc')
                              ->paginate(4);

        $houses->appends(request()->all());

        return view('admin.property.list',compact('houses')); 
    }

    // direct property create page
    public function createPage() {
        $locations = Location::select('id','name')->get();          // location id ပါ ယူလာဖို့ အတွက်
        return view('admin.property.create',compact('locations'));
    }

    // Create Property
    public function create(Request $request) {
        $this->propertyValidationCheck($request,"create");

        $data = $this->requestPropertyData($request);       // သယ်လာတဲ့ data ကို array format change ပေး     

        // for image

            $fileName1 = uniqid().'_'.$request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public',$fileName1);
            $data['image_1'] = $fileName1;

            $fileName2 = uniqid().'_'.$request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public',$fileName2);
            $data['image_2'] = $fileName2;
            
            $fileName3 = uniqid().'_'.$request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public',$fileName3);
            $data['image_3'] = $fileName3;

            $fileName4 = uniqid().'_'.$request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public',$fileName4);
            $data['image_4'] = $fileName4; 

        // dd($data);


        Property::create($data);

        return redirect()->route('property#list')->with(['createSuccess'=>'Created Property Successfully!']);
    }

    // Delete Property
    public function delete($id) {
        // dd($id);
        Property::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>'Deleted Property Successfully!']);
    }

    // Edit Page
    public function edit($id) {
        $houses = Property::where('id',$id)->first();
        $locations = Location::get();

        return view('admin.property.edit',compact('houses','locations'));
    }

    // Update Page
    public function update(Request $request) {
        // dd($request->all());

        $this->propertyValidationCheck($request,"update");
        $data = $this->requestPropertyData($request);
        // dd($request->all());

        // for image
        if($request->hasFile('image1')){
            $oldImageName = Property::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_1;
            Storage::delete('public/'.$oldImageName);

            $fileName1 = uniqid().'_'.$request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public',$fileName1);
            $data['image_1'] = $fileName1;
        }

        if($request->hasFile('image2')){
            $oldImageName = Property::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_2;
            Storage::delete('public/'.$oldImageName);

            $fileName2 = uniqid().'_'.$request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public',$fileName2);
            $data['image_2'] = $fileName2;
        }

        if($request->hasFile('image3')){
            $oldImageName = Property::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_3;
            Storage::delete('public/'.$oldImageName);

            $fileName3 = uniqid().'_'.$request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public',$fileName3);
            $data['image_3'] = $fileName3;
        }

        if($request->hasFile('image4')){
            $oldImageName = Property::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_4;
            Storage::delete('public/'.$oldImageName);

            $fileName4 = uniqid().'_'.$request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public',$fileName4);
            $data['image_4'] = $fileName4;
        }

        Property::where('id',$request->propertyId)->update($data);

        return redirect()->route('property#list')->with(['updateSuccess'=>'Updated Property Successfully!']);
    } 


    // Property Validation Check
    private function propertyValidationCheck($request,$action) {
        $validationRules = [
            'cardTitle1'        => 'required',
            'cardTitle2'        => 'required',
            'postTitle'         => 'required',
            'headerText'        => 'required',
            'bodyText1'         => 'required',
            'bodyText2'         => 'required',
            'bodyText3'         => 'required',
            'bodyText4'         => 'required',
            'propertyPrice'     => 'required',
            'propertyLocation'  => 'required',
            'propertyDimension' => 'required',
            'mBed'              => 'required',
            'dBed'              => 'required',
            'sBed'              => 'required',
            'bathWC'            => 'required',
            'propertyType'      => 'required',
            // 'image1'            => 'required|mimes:jpg,jpeg,png,webp|file',
            // 'image2'            => 'required|mimes:jpg,jpeg,png,webp|file',
            // 'image3'            => 'required|mimes:jpg,jpeg,png,webp|file',
            // 'image4'            => 'required|mimes:jpg,jpeg,png,webp|file', 
        ];

        $validationRules['image1'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image2'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image3'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image4'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        // create ဆိုရင် ပုံထည့်ဖို့လိုမယ်။ update ဆိုရငိတော့ ပုံထည့်ဖို့မလို။

        Validator::make($request->all(),$validationRules)->validate();
    } 

    // Request Property Data
    private function requestPropertyData($request) {
        return [
            'card_title_1'  => $request->cardTitle1,
            'card_title_2'  => $request->cardTitle2,
            'post_title'    => $request->postTitle,
            'header_text'   => $request->headerText,
            'body_text_1'   => $request->bodyText1,
            'body_text_2'   => $request->bodyText2,
            'body_text_3'   => $request->bodyText3,
            'body_text_4'   => $request->bodyText4,
            'price'         => $request->propertyPrice,
            'location_id'   => $request->propertyLocation,
            'dimension'     => $request->propertyDimension,
            'master_bedroom'    => $request->mBed,
            'double_bedroom'    => $request->dBed,
            'single_bedroom'    => $request->sBed,
            'baths'         => $request->bathWC,
            'type'          => $request->propertyType,
        ];
    }
}
