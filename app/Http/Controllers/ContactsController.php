<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('contacts', compact(
            'user'
        ));
    }
}