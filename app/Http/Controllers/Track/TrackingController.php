<?php

namespace App\Http\Controllers\Track;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parcel;

class TrackingController extends Controller
{  


    public function index() {
        return view('frontend.home');
    }



    public function track(Request $request) {
        $request->validate(['tracking_id' => 'required|string']);
        
        $parcel = Parcel::where('tracking_id', $request->tracking_id)->with('logs')->first();
        
        if (!$parcel) {
            // return view('frontend.track', compact('parcel'));
            return back()->withErrors(['tracking_id' => 'Invalid Tracking ID. Please cross-check your tracking receipt code.']);
        }

        return view('frontend.track', compact('parcel'));
    }



    public function contact() {
        return view('frontend.contact');
    }


       public function about() {
        return view('frontend.about-us');
    }






    public function login() {
        return view('frontend.login');
    }


}
