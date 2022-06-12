<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Records;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function index(){

        // TOTAL COUNT OF AGENTS
        $agents = User::select('users.*', 'user_roles.role_id')
        ->latest()
        ->join('user_roles', 'user_roles.user_id', 'users.id')
        ->join('roles', 'roles.id', 'user_roles.role_id')
        ->whereIn('roles.id', [2])
        ->with(
            'role'
        )->count();

        // TOTAL COUNT OF HOTELS
        $hotels = Records::select('records.*')
        ->where('type', 'hotel');

        if(Auth::user()->hasRole(['admin'])){
            $hotels = $hotels->count();
        }else{
            $hotels = $hotels->where('user_id', Auth::user()->id)->count();
        }

        // TOTAL COUNT OF RESTAURANT
        $restaurants = Records::select('records.*')
        ->where('type', 'restaurant');

        if(Auth::user()->hasRole(['admin'])){
            $restaurants = $restaurants->count();
        }else{
            $restaurants = $restaurants->where('user_id', Auth::user()->id)->count();
        }

        return view('index', compact('agents', 'hotels', 'restaurants'));
    }
}
