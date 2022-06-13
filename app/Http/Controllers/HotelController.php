<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Records;
use App\Models\UserDetails;
use App\Models\ContactDetails;
use App\Models\OtherDetails;
use App\Models\Hotel;
use App\Models\HotelContact;
use App\Models\ParentCompany;
use App\Models\HotelCategory;
use App\Models\HotelAmenities;
use App\Models\RoomType;
use App\Models\HotelPrice;
use App\Models\BookingDay;
use App\Models\User;
use  App\Http\Requests\AgentRequest;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\Http\Service\FileUpload;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels = Records::select('records.*')
        ->with(
            'agent',
            'uder_details',
            'contact_details',
            'other_details',
            'hotel',
            'hotel_contact',
            'parent_company',
            'hotel_category',
            'hotel_amenities',
            'room_type',
            'hotel_price',
            'booking_day'
        )
        ->where('type', 'hotel')
        ->latest();

        if(Auth::user()->hasRole(['admin'])){
            $hotels = $hotels->get();
        }else{
            $hotels = $hotels->where('user_id', Auth::user()->id)->get();
        }

        if($request->json == '1'){
            return response()->json($hotels, 200);
        }

        return view('hotels.index', compact('hotels'));
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
                'type' => "hotel",
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

            Hotel::create([
                "record_id" => $record->id,
                "h_city" => $request->h_city,
                "h_country" => $request->h_country,
                "h_description" => $request->h_description,
                "h_lga" => $request->h_lga,
                "h_name" => $request->h_name,
                "h_state" => $request->h_state,
                "h_street_name" => $request->h_street_name,
                "h_street_number" => $request->h_street_number,
                "h_zip_code" => $request->h_zip_code,
            ]);

            HotelContact::create([
                "record_id" => $record->id,
                "hc_email" => $request->hc_email,
                "hc_phone_number" => $request->hc_phone_number,
            ]);

            ParentCompany::create([
                "record_id" => $record->id,
                "pc_name" => $request->pc_name,
                "pc_rc_number" => $request->pc_rc_number,
            ]);

            HotelCategory::create([
                "record_id" => $record->id,
                "hcat_bathroom_no" => $request->hcat_bathroom_no,
                "hcat_bed_no" => $request->hcat_bed_no,
                "hcat_days_of_notice" => $request->hcat_days_of_notice,
                "hcat_guest_no" => $request->hcat_guest_no,
                "hcat_room_no" => $request->hcat_room_no,
                "hcat_room_type" => $request->hcat_room_type,
                "hcat_type_of_hotel" => $request->hcat_type_of_hotel,
            ]);

            HotelAmenities::create([
                "record_id" => $record->id,
                "ha_amenities" => $request->ha_amenities,
                "ha_room_type" => $request->ha_room_type,
                "ha_room_type_amenities" => $request->ha_room_type_amenities,
            ]);

            $rt_bathroom_view = FileUpload::upload($request->file('rt_bathroom_view'), $private = false);
            $rt_front_view = FileUpload::upload($request->file('rt_front_view'), $private = false);
            $rt_room_picture = FileUpload::upload($request->file('rt_room_picture'), $private = false);

            RoomType::create([
                "record_id" => $record->id,
                "rt_bathroom_view" => $rt_bathroom_view,
                "rt_front_view" => $rt_front_view,
                "rt_room_picture" => $rt_room_picture,
                "rt_room_type" => $request->rt_room_type,
            ]);

            HotelPrice::create([
                "record_id" => $record->id,
                "hp_corporate_price" => $request->hp_corporate_price,
                "hp_discount_rate" => $request->hp_discount_rate,
                "hp_corporate_price" => $request->hp_corporate_price,
                "hp_room_type" => $request->hp_room_type
            ]);

            BookingDay::create([
                "record_id" => $record->id,
                "bday_cancellation_type" => $request->bday_cancellation_type,
                "bday_checkin_time" => $request->bday_checkin_time,
                "bday_checkout_time" => $request->bday_checkout_time,
                "bday_max_booking_day" => $request->bday_max_booking_day,
                "bday_min_booking_day" => $request->bday_min_booking_day,
            ]);

           
            DB::commit();

            return response()->json('Hotel created successfully.', 200);

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
