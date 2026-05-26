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
        
        $parcel = Parcel::with('logs')->where('tracking_id', $request->tracking_id)->first();
        
        if (!$parcel) {
            return back()->withErrors(['tracking_id' => 'Invalid Tracking ID. Please cross-check your tracking receipt code.']);
        }

        return view('frontend.track', compact('parcel'));
    }

    

    public function contact() {
        return view('frontend.contact');
    }


}
