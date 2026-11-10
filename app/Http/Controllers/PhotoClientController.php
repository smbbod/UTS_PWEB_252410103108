<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoClientController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'client_name' => 'required|min:3',
        ]);

        session(['client_name' => $request->client_name]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $clientName = session('client_name', 'Tamu');
        return view('dashboard', compact('clientName'));
    }

    public function photos()
    {
        $photos = [
            [
                'title' => 'Wisuda Mbak Devi', 
                'category' => 'Wisuda', 
                'url' => asset('images/wisuda-devi.jpg') 
            ],
            [
                'title' => 'Pre-Wedding Studio', 
                'category' => 'Pre-Wedding', 
                'url' => asset('images/prewedd.jpg')
            ],
            [
                'title' => 'Family Portrait', 
                'category' => 'Keluarga', 
                'url' => asset('images/keluarga.jpg')
            ],
        ];

        return view('pengelolaan', compact('photos'));
        }

    public function profile()
    {
        return view('profile');
    }
}