<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Frontendcontroller;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public  function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view ('shop');
    }

    public function detail()
    {
        return view('detail');
    }

    public function contact()
    {
        return view ('contact');
    }
    public function saveContact(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
}
}
