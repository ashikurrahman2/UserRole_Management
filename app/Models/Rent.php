<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Rent extends Model
{

    use HasFactory;
        // Fillable fields to allow mass assignment
        protected $fillable = [
            'rentproperty_id',
            'rentproperty_type',
            'rent_description',
            'rentproperty_status',
            'rentproperty_price',
            'rent_rooms',
            'bed_rooms',
            'bath_rooms',
            'garages',
            'build_up',
        ];

        public static function newRent($request)
        {
            $rent = new self();
            self::saveBasicInfo($rent, $request);
        }
    
        public static function updateRent($request, $rent)
        {
            self::saveBasicInfo($rent, $request);
        }
    
        private static function saveBasicInfo($rent, $request)
        {
            $rent->rentproperty_id       = $request->rentproperty_id;
            $rent->rentproperty_type     = $request->rentproperty_type;
            $rent->rent_description      = $request->rent_description;
            $rent->rentproperty_status   = $request->rentproperty_status;
            $rent->rentproperty_price    = $request->rentproperty_price;
            $rent->rent_rooms            = $request->rent_rooms;
            $rent->bed_rooms             = $request->bed_rooms;
            $rent->bath_rooms            = $request->bath_rooms;
            $rent->garages               = $request->garages;
            $rent->build_up              = Carbon::parse($request->build_up)->format('Y-m-d');
            $rent->save();
        }
    
        public static function deleteRent($rent)
        {
            $rent->delete();
        }
}
