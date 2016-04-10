<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Customer;

class QueueController extends Controller
{
    public function index()
    {
        $vendors = User::all();
        return view('pages.queueIndex', compact('vendors'));
    }
}
