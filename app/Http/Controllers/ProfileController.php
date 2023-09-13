<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;

class ProfileController extends Controller
{
    public function index() {


        return view('profile.index');
    }

}
