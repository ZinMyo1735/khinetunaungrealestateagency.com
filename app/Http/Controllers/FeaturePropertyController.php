<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FeatureProperty;                      // import FeatureProperty Model
use App\Models\Location;                             // import Location Model 

use Illuminate\Support\Facades\Validator;            // import Validator

use Storage;                                         // import Storage for image 

class FeaturePropertyController extends Controller
{
    // direct property list page
    public function list() {
        $houses = FeatureProperty::select('feature_properties.*','locations.name as location_name')
                            ->leftJoin('locations','feature_properties.location_id','locations.id')
                            ->orderBy('feature_properties.id','desc')
                            ->paginate(4);

        $houses->appends(request()->all());

        return view('admin.feature.property.list',compact('houses'));
    }

    // direct property create page
    public function createPage() {
        $locations = Location::select('id','name')->get();
        return view('admin.feature.property.create',compact('locations'));
    }

    // Create Property
    public function create(Request $request) {
        $this->fpropertyValidationCheck($request,"create");

        $data = $this->requestFpropertyData($request);   

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

        FeatureProperty::create($data);

        return redirect()->route('fproperty#list')->with(['createSuccess'=>'Created Property Successfully!']);
    }

    // Delete Property
    public function delete($id) {
        // dd($id);
        FeatureProperty::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>'Deleted Property Successfully!']);
    }

    // Edit Page
    public function edit($id) {
        $houses = FeatureProperty::where('id',$id)->first();
        $locations = Location::get();

        return view('admin.feature.property.edit',compact('houses','locations'));
    }

    // Update Page
    public function update(Request $request) {
        // dd($request->all());

        $this->fpropertyValidationCheck($request,"update");
        $data = $this->requestFpropertyData($request);
        // dd($request->all());

        // for image
        if($request->hasFile('image1')){
            $oldImageName = FeatureProperty::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_1;
            Storage::delete('public/'.$oldImageName);

            $fileName1 = uniqid().'_'.$request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public',$fileName1);
            $data['image_1'] = $fileName1;
        }

        if($request->hasFile('image2')){
            $oldImageName = FeatureProperty::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_2;
            Storage::delete('public/'.$oldImageName);

            $fileName2 = uniqid().'_'.$request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public',$fileName2);
            $data['image_2'] = $fileName2;
        }

        if($request->hasFile('image3')){
            $oldImageName = FeatureProperty::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_3;
            Storage::delete('public/'.$oldImageName);

            $fileName3 = uniqid().'_'.$request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public',$fileName3);
            $data['image_3'] = $fileName3;
        }

        if($request->hasFile('image4')){
            $oldImageName = FeatureProperty::where('id',$request->propertyId)->first();
            $oldImageName = $oldImageName->image_4;
            Storage::delete('public/'.$oldImageName);

            $fileName4 = uniqid().'_'.$request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public',$fileName4);
            $data['image_4'] = $fileName4;
        }

        FeatureProperty::where('id',$request->propertyId)->update($data);

        return redirect()->route('fproperty#list')->with(['updateSuccess'=>'Updated Property Successfully!']);
    } 

    // Property Validation Check
    private function fpropertyValidationCheck($request,$action) {
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
        ];

        $validationRules['image1'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image2'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image3'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        $validationRules['image4'] = $action == "create" ? 'required|mimes:jpg,jpeg,png,webp|file' : "mimes:jpg,jpeg,png,webp|file";
        // create ဆိုရင် ပုံထည့်ဖို့လိုမယ်။ update ဆိုရငိတော့ ပုံထည့်ဖို့မလို။

        Validator::make($request->all(),$validationRules)->validate();
    } 

    // Request Property Data
    private function requestFpropertyData($request) {
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
