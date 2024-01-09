<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        return view('backend.pages.profile');
    }

    public function userProfile(){
        $user = User::all();
        return view('frontend.pages.profile',compact('user'));
    }

    public function userAllBookings(){
        $authUserId = (auth()->user()->id);
        $getBookings = DB::table('books')->orderByDesc('id')->where('user_id', $authUserId)->get();
        return view('frontend.pages.mybookings',compact('getBookings'));
    }


}
