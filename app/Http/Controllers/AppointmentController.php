<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Customer;
use App\Http\Controllers\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $vendors = User::all();

        return view('pages.index', compact('vendors'));
    }

    public function create(Request $request)
    {

        $user = User::find($request->vendor_id);

        $customers = $user->customers->all();

        if(empty($customers))
        {
            $seqNum = 0;
        }
        else
        {
            $seqNum = $customers['0']['seq_num'];
            foreach($customers as $customer)
            {
                if($customer['seq_num'] > $seqNum)
                {
                    $seqNum = $customer['seq_num'];
                }
            }

        }

        $seqNum = $seqNum + 1;
        Customer::create([
            'name' => $request->name,
            'phone' => $request->number,
            'user_id' => $request->vendor_id,
            'seq_num' => $seqNum,
            'status' => false,
         ]);

        return redirect('/queue');
    }

}
