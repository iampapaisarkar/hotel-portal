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
        ->with(
            'agent',
            'uder_details',
            'contact_details',
            'other_details',
            'restaurant',
            'restaurant_contact',
            'parent_company',
            'restaurant_category',
            'restaurant_amenities',
            'restaurant_meals',
            'restaurant_cancalletion'
        )
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
        // return response()->json($request->all(), 500);

        try {
            DB::beginTransaction();

            $record = Records::create([
                'user_id' => Auth::user()->id,
                'type' => "restaurant",
            ]);


            UserDetails::create([
                "record_id" => $record->id,
                "ud_city" => $request->ud_city,
                "ud_dob" => $request->ud_dob,
                "ud_email" => $request->ud_email,
                "ud_first_name" => $request->ud_first_name,
                "ud_gender" => $request->ud_gender,
                "ud_last_name" => $request->ud_last_name,
                "ud_lga" => $request->ud_lga,
                "ud_phone_number" => $request->ud_phone_number,
                "ud_state" => $request->ud_state,
                "ud_country" => 'Nigeria',
            ]);

            ContactDetails::create([
                "record_id" => $record->id,
                "cd_address" => $request->cd_address,
                "cd_email" => $request->cd_email,
                "cd_name" => $request->cd_name,
                "cd_phone_number" => $request->cd_phone_number,
            ]);

            $od_id_document = FileUpload::upload($request->file('od_id_document'), $private = false);

            OtherDetails::create([
                "record_id" => $record->id,
                "od_ac_number" => $request->od_ac_number,
                "od_id_document" => $od_id_document,
                "od_id_number" => $request->od_id_number,
                "od_id_type" => $request->od_id_type,
                "od_name_of_bank" => $request->od_name_of_bank,
            ]);

            Restaurant::create([
                "record_id" => $record->id,
                "r_city" => $request->r_city,
                "r_country" => $request->r_country,
                "r_description" => $request->r_description,
                "r_lga" => $request->r_lga,
                "r_name" => $request->r_name,
                "r_state" => $request->r_state,
                "r_street_name" => $request->r_street_name,
                "r_street_number" => $request->r_street_number,
                "r_zip_code" => $request->r_zip_code,
            ]);

            RestaurantContact::create([
                "record_id" => $record->id,
                "rc_email" => $request->rc_email,
                "rc_phone_number" => $request->rc_phone_number,
            ]);

            ParentCompany::create([
                "record_id" => $record->id,
                "pc_name" => $request->pc_name,
                "pc_rc_number" => $request->pc_rc_number,
            ]);

            RestaurantCategory::create([
                "record_id" => $record->id,
                "rcat_type" => $request->rcat_type,
            ]);

            RestaurantAmenities::create([
                "record_id" => $record->id,
                "ra_amenities" => $request->ra_amenities,
                "ra_type" => $request->ra_type,
            ]);

            $rm_images = FileUpload::upload($request->file('rm_images'), $private = false);

            RestaurantMeals::create([
                "record_id" => $record->id,
                "rm_images" => $rm_images,
                "rm_meals" => $request->rm_meals,
                "rm_price" => $request->rm_price,
                "rm_restaurant_type" => $request->rm_restaurant_type,
            ]);

            RestaurantCancellation::create([
                "record_id" => $record->id,
                "rc_type" => $request->rc_type,
            ]);

            DB::commit();

            return response()->json('Restaurant created successfully.', 200);

        }catch(Exception $e) {
            DB::rollback();
            return response()->json('error','There something internal server errore');
        }
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
