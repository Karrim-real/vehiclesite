<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicleCount = Vehicle::count();
        $messageCount = Contact::count();
        return view('admin.esr-dashboard', compact('vehicleCount', 'messageCount'));
    }
}
