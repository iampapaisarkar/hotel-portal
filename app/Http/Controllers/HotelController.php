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
use  App\Http\Requests\AgentRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('users.*', 'user_roles.role_id')
        ->latest()
        ->join('user_roles', 'user_roles.user_id', 'users.id')
        ->join('roles', 'roles.id', 'user_roles.role_id')
        ->whereIn('roles.id', [2])
        ->with(
            'role'
        );

        $users = $users->get();

        return view('hotels.index', compact('users'));
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
        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'referral_code' => $request->referral_code,
                'password' => Hash::make($request->password),
            ]);

            UserRoles::create([
                'user_id' => $user->id,
                'role_id' => 2
            ]);

            DB::commit();

            return response()->json('Agent created successfully.', 200);

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
