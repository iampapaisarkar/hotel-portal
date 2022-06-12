<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Records;
use App\Models\UserDetails;
use App\Models\ContactDetails;
use App\Models\OtherDetails;
use App\Models\Restaurant;
use App\Models\RestaurantContact;
use App\Models\ParentCompany;
use App\Models\RestaurantCategory;
use App\Models\RestaurantAmenities;
use App\Models\RoomType;
use App\Models\RestaurantMeals;
use App\Models\RestaurantCancellation;
use App\Models\User;
use  App\Http\Requests\AgentRequest;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\Http\Service\FileUpload;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurants = Records::select('records.*')
        ->where('type', 'restaurant')
        ->latest();

        if(Auth::user()->hasRole(['admin'])){
            $restaurants = $restaurants->get();
        }else{
            $restaurants = $restaurants->where('user_id', Auth::user()->id)->get();
        }

        if($request->json == '1'){
            return response()->json($restaurants, 200);
        }

        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
