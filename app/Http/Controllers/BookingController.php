<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Branch;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $bookings=Booking::get();
        $loc = Branch::all();

        return view('booking.dashboard', compact('loc'));
    }


    public function showbooking(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $departure_date= $request->input('departure_date');
        $passengers =$request->input('no_of_passengers');

        // dd($request->all());
        $data=\DB::table('bookings')
        ->where('departure_day',$departure_date)
        ->where('departure_state',$from)
        ->where('arrival_state',$to)
        ->get();

        if($data){
            return view('booking.index',compact('data','passengers'));
        }else {

            return back()->with('error','No Booking Found');

        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
