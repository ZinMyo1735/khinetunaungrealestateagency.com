<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;                             // import Property Model

use App\Models\Location;                             // import Location Model

use App\Models\FeatureBanner;                        // import FeatureBanner Model
use App\Models\FeatureProperty;                      // import FeatureProperty Model
use App\Models\FeatureCondo;                         // import FeatureCondo Model
 

class PageController extends Controller
{
    // direct welcome page
    public function welcome() {
        $banners = FeatureBanner::select('feature_banners.*','locations.name as location_name')
                                ->leftJoin('locations','feature_banners.location_id','locations.id')
                                ->get();
        $properties = FeatureProperty::get();
        $condos = FeatureCondo::select('feature_condos.*','locations.name as location_name')
                                ->leftJoin('locations','feature_condos.location_id','locations.id')
                                ->get();
        return view('welcome',compact('banners','properties','condos'));
    }

    // direct property grid page
    public function propertyGrid() {
        $houses = Property::select('properties.*','locations.name as location_name')
                            ->leftJoin('locations','properties.location_id','locations.id')
                            ->when(request('key'),function($query){
                                $query->where('properties.post_title','like','%'.request('key').'%')
                                    ->orWhere('properties.price','like','%'.request('key').'%')
                                    ->orWhere('properties.dimension','like','%'.request('key').'%');
                            })
                            ->orderBy('properties.id','desc')
                            ->paginate(6);

        $locations = Location::get();

        return view('propertyGrid',compact('houses','locations'));
    }

    // Filter By Area
    // public function areaFilter(Request $request) {
    //     $houses = Property::orderBy('properties.id','desc');

    //     if($request->sortBy == null) {
    //         $houses = $houses->paginate(5);
    //     }else{
    //         $houses = $houses->where('properties.dimension',$request->sortBy)->paginate(6);
    //     }

    //     $locations = Location::get();

    //     return view('propertyGrid',compact('houses','locations'));
    // }

    // filter location
    public function filter($locationId){
        $houses = Property::where('location_id',$locationId)
                            ->select('properties.*','locations.name as location_name')
                            ->leftJoin('locations','properties.location_id','locations.id')
                            ->orderBy('id','desc')->paginate(6);
        $locations = Location::get();

        return view('propertyGrid',compact('houses','locations'));
    }

    // direct property single page
    public function propertySingle($id) {
        // dd($id);
        $houses = Property::select('properties.*','locations.name as location_name')
                            ->leftJoin('locations','properties.location_id','locations.id')
                            ->where('properties.id',$id)->first();

        return view('propertySingle',compact('houses'));
    }

    // direct property banner single page
    public function propertySingleB($id) {
        
        $banners = FeatureBanner::select('feature_banners.*','locations.name as location_name')
                                ->leftJoin('locations','feature_banners.location_id','locations.id')
                                ->where('feature_banners.id',$id)->first();

        return view('propertySingleB',compact('banners'));
    }

    // direct property single page
    public function propertySingleP($id) {
        
        $properties = FeatureProperty::select('feature_properties.*','locations.name as location_name')
                                ->leftJoin('locations','feature_properties.location_id','locations.id')
                                ->where('feature_properties.id',$id)->first();

        return view('propertySingleP',compact('properties'));
    }

    // direct property condo single page
    public function propertySingleC($id) {
        
        $condos = FeatureCondo::select('feature_condos.*','locations.name as location_name')
                                ->leftJoin('locations','feature_condos.location_id','locations.id')
                                ->where('feature_condos.id',$id)->first();

        return view('propertySingleC',compact('condos'));
    }
}
