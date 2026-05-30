<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\ParcelLog;
use Validator, Auth;
use Carbon\Carbon;

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
             'sender_email' => 'required|email',
             'sender_phone' => 'required|string',
             'sender_address' => 'required|string',
             'sender_location' => 'required|string',
            'receiver_name' => 'required|string',
            'receiver_phone' => 'required|string',
            'receiver_email' => 'required|email',
            'receiver_address' => 'required|string',
            'weight' => 'nullable|string',
            'cost' => 'required|numeric',
            'current_location' => 'required|string',
            'latitude'=> 'nullable|numeric|between:-90,90',  
            'longitude'=> 'nullable|numeric|between:-180,180',
            'status_description' => 'nullable|string'
        ]);

        
        $parcel = new Parcel;
        $parcel->sender_name = $request['sender_name'];
        $parcel->sender_email = $request['sender_email'];
        $parcel->sender_phone = $request['sender_phone'];
        $parcel->sender_address = $request['sender_address'];
        $parcel->sender_location = $request['sender_location'];
        $parcel->receiver_name = $request['receiver_name'];
        $parcel->receiver_phone = $request['receiver_phone'];
        $parcel->receiver_email = $request['receiver_email'];
        $parcel->receiver_address = $request['receiver_address'];
        $parcel->weight = $request['weight'];
        $parcel->cost = $request['cost'];
        $parcel->current_location = $request['current_location'];
        $parcel->latitude = $request['latitude'];
        $parcel->longitude = $request['longitude'];
        $parcel->status_description = $request['status_description'];
        $parcel->expected_arrival_date = Carbon::now()->addDays((int)$request['no_of_delivery_days']);
        $parcel->save();
      

        ParcelLog::create([
            'parcel_id' => $parcel->id,
            'status' => 'Order Confirmed',
            'location' => $parcel->current_location,
            'description' => $request->status_description ?? 'Your shipment has been confirmed and is being processed.'
        ]);

        return redirect('/admin/parcel-receipt/'.$parcel->id);
        //->back()->with('success', 'Parcel created successfully. ID: ' . $parcel->tracking_id);
    }




    public function update(Request $request, Parcel $parcel) {

        // return $request->all();
        $available = ParcelLog::where(['parcel_id'=> $request['parcel_id'], 'status'=>$request->status])->first();
        if(!empty($available->id)){
        $request->validate([
            'status' => 'required|string',
            'current_location' => 'required|string',
           // 'latitude' => 'required|numeric',
           // 'longitude' => 'required|numeric',
            'status_description' => 'nullable|string'
        ]);

        $parcel->update($request->only(['status', 'current_location', 'latitude', 'longitude', 'status_description']));

        ParcelLog::create([
            'parcel_id' => $request->parcel_id,
            'status' => $request->status,
            'location' => $request->current_location,
            'description' => $request->status_description
        ]);

        return redirect()->back()->with('success', 'Parcel transit checkpoint updated updated successfully.');
    }else{
        return redirect()->back()->with('error', 'You have this status already updated.');
    }
    }




    public function receipt($id) {
        // $parcel = Parcel::where('id', $parcel)->first();
          $parcel = Parcel::findOrFail($id);
        return view('admin.receipt', compact('parcel'));
    }


     public function parcelEditPage($id) {
        if(Auth::check()){
        // $parcel = Parcel::where('id', $parcel)->first();
         $parcel = Parcel::with('logs')->findOrFail($id);
        return view('admin.edit-parcel', compact('parcel'));
    }else{
        return redirect('/');
    }
    }


}
