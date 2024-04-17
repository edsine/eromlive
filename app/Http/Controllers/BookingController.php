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
        $departure_date = $request->input('departure_date');
        $passengers = $request->input('no_of_passengers');

        // dd($request->all());
        $amount = $request->no_of_passengers;

        $data = Booking::with(['arrivalbranch', 'departurebranch'])
            ->where('departure_day', $departure_date)
            ->where('departure_state', $from)
            ->where('arrival_state', $to)
            // ->selectRaw('id,departure_time, departure_day, departure_state, arrival_time, arrival_day, arrival_day, price * ' . $amount . ' AS total_price')
            ->get();

        // dd($data);
        if ($data) {
            return view('booking.index', compact('data', 'passengers', 'amount'));
        } else {

            return back()->with('error', 'No Booking Found');
        }
    }


    public function bookpage($id, $amount)
    {

        // $persons = intval($amount);

      
        // $persons = intval($amount);

        // $booking = Booking::with(['arrivalbranch', 'departurebranch'])->findOrFail($id);
        // $total = $booking->selectRaw('SUM(vat) + SUM(levy) + SUM(tax) + SUBTRACT(discount, (SUM(price * ' . $persons . ') AS total)')->first()->total;

        $persons = intval($amount);

        $booking = Booking::with(['arrivalbranch', 'departurebranch'])->findOrFail($id);
        $total = $booking->selectRaw('(SELECT SUM(vat) + SUM(levy) + SUM(tax) + SUM(price * ' . $persons . ') FROM bookings) - discount AS total')->first()->total;
        

        return view('booking.confirmpage', compact('booking', 'persons', 'total'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $id=$request->input('booking_id');
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $amount=$request->input('thetotalprice');
        
        return view('booking.payment',compact('id','name','email','phone','amount'));

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
