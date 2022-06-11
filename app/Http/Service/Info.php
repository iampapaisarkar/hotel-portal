<?php

namespace App\Http\Service;
use Illuminate\Support\Facades\Auth;
use App\Models\State;
use App\Models\Lga;

class Info
{

    public static function states()
    {
        $states = State::get();
        return $states;
    }

    public static function lgas()
    {
        $lgas = Lga::get();
        return $lgas;
    }
}