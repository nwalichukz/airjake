<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\ParcelLog;
use Validator, Auth;

class AdminController extends Controller
{
        /**
     * logins in a user
     *
     * @param $request
     *
     * @return response/collectio
     *
     */
    public function login(Request $request){
         //return $request->all();

        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $credentials = ['email' => $request['email'],
                        'password'=>$request['password'],
                         'status'=>'active',
                        
                            ];
     

        if($user = Auth::attempt($credentials)){
            //$parcels = Parcel::latest()->get();
            
          return redirect('/admin/dashboard');
         
        }else{
            return redirect()->back()->with('error', 'Invalid user details');
        }

    }


    public function dashboard() {
        if(Auth::check()){
        $parcels = Parcel::latest()->get();
        return view('admin.dashboard', compact('parcels'));
    }else{
        return redirect('/login');
    }
    }




    public function store(Request $request) {
        $data = $request->validate([
            'sender_name' => 'required|string',
            'receiver_name' => 'required|string',
            'receiver_email' => 'required|email',
            'delivery_address' => 'required|string',
            'weight' => 'nullable|string',
            'cost' => 'required|numeric',
            'current_location' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'status_description' => 'nullable|string'
        ]);

        $parcel = Parcel::create($data);

        ParcelLog::create([
            'parcel_id' => $parcel->id,
            'status' => 'Order Confirmed',
            'location' => $parcel->current_location,
            'description' => $request->status_description ?? 'Your shipment has been confirmed and is being processed.'
        ]);

        return redirect('/parcel-receipt/'.$parcel->id);
        //->back()->with('success', 'Parcel created successfully. ID: ' . $parcel->tracking_id);
    }




    public function update(Request $request, Parcel $parcel) {
        $request->validate([
            'status' => 'required|string',
            'current_location' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'status_description' => 'nullable|string'
        ]);

        $parcel->update($request->only(['status', 'current_location', 'latitude', 'longitude', 'status_description']));

        ParcelLog::create([
            'parcel_id' => $parcel->id,
            'status' => $request->status,
            'location' => $request->current_location,
            'description' => $request->status_description
        ]);

        return redirect()->back()->with('success', 'Parcel transit checkpoint updated updated successfully.');
    }




    public function receipt(Parcel $parcel) {
         $parcel = Parcel::where('id', $parcel)->first();
         dd($parcel);
        return view('admin.receipt', compact('parcel'));
    }


}
