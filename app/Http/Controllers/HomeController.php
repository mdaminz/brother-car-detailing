<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Session;
use Stripe;

use App\Models\Booking;
use App\Models\Service;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function about()
    {

        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }
    public function service_details($id)
    {
        $service = Service::find($id);

        return view('home.service_details', compact('service'));
    }

    public function add_booking(Request $request, $id)
    {
        $user = Auth::user();

        if (Auth::id()) {
            $userid = $user->id;
        } else {
            $userid = null;
        }

        $data = new Booking();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->car_model = $request->car_model;
        $data->license_plate = $request->license_plate;
        $data->booking_date = $request->booking_date;
        $data->time_slot = $request->time_slot;

        $data->user_id = $userid;
        $data->service_id = $id;

        $data->payment_status = 'Unpaid';
        $data->complete_status = 'In Progress';

        $data->save();

        return redirect()->back()->with('message', 'Slot Booked Successfully');
    }

    public function stripe($id)
    {
        $booking = Booking::find($id);

        $service = Service::find($booking->service_id);

        return view('home.stripe', compact('booking', 'service'));
    }

    public function stripePost(Request $request, $id)
    {
        $booking = Booking::find($id);

        $service = Service::find($booking->service_id);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $service->price * 100,
            "currency" => "myr",
            "source" => $request->stripeToken,
            "description" => "Thank's for Payment"
        ]);

        $booking->payment_status = 'Paid';

        $booking->save();

        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function contact_us(Request $request)
    {

        $data = new Contact();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }

    public function user_view_booked()
    {
        $user = Auth::user();

        $bookings = Booking::where('user_id', $user->id)->get();

        return view('home.user_booked_slot', compact('bookings'));
    }

    public function show_receipt($id)
    {
        $data = Booking::find($id);

        $user = Auth::user();

        $service = Service::find($data->service_id);

        return view('home.show_receipt', compact('data', 'user', 'service'));
    }

    public function review()
    {
        return view ('home.review');
    }
}


