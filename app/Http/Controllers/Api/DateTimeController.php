<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateTimeController extends Controller
{
    public function getCurrentDateTime()
    {
        $currentDateTime = Carbon::now('Asia/Jakarta');

        return response()->json([
            'date_time'=>$currentDateTime->toDateTimeString(), // Format 'YYYY-MM-DD HH:MM:SS'
            'date' => $currentDateTime->toDateString(), // Format 'YYYY-MM-DD'
            'time' => $currentDateTime->toTimeString()  // Format 'HH:MM:SS'
        ]);
    }
}
