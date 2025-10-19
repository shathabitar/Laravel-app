<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{

public function import(Request $request)
{
    $file = $request->file('csv');
    $handle = fopen($file->getPathname(), 'r');
    fgetcsv($handle); // skip header

    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        Booking::create([
            'user_id' => $data[1],
            'availability_id' => $data[2],
            'payment_id' => $data[3],
            'date' => $data[4],
            'status' => $data[5],
        ]);
    }

    fclose($handle);

    return back()->with('success', 'Data imported successfully!');
}

}
