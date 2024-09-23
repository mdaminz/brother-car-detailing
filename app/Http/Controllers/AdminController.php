<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Service;

use App\Notifications\sendEmailNotification;
use Notification;


class AdminController extends Controller
{
    public function index()
    {
        if ((Auth::id())) {
            
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {

                $service = Service::all();

                return view('home.index', compact('service'));

            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {

        return view('home.index');
    }


    public function create_service()
    {
        return view('admin.create_service');
    }

    public function add_service(Request $request)
    {
        $data = new Service;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->duration = $request->duration;
        $data->image = $request->image;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('service', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_service()
    {

        $data = Service::all();

        return view('admin.view_service', compact('data'));
    }

    public function delete_service($id)
    {
        $data = Service::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function update_service($id)
    {
        $data = Service::find($id);

        return view('admin.update_service', compact('data'));
    }

    public function edit_service(Request $request, $id)
    {
        $data = Service::find($id);

        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->duration = $request->duration;
        $data->image = $request->image;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('service', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function services()
    {
        $service = Service::all();

        return view('home.services', compact('service'));
    }

    public function view_bookings()
    {
        $data = Booking::all();

        return view('admin.view_bookings', compact('data'));
    }

    public function update_booking($id)
    {
        $data = Booking::find($id);

        return view('admin.update_booking', compact('data'));
    }

    public function edit_booking(Request $request, $id)
    {
        $data = Booking::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->car_model = $request->car_model;
        $data->license_plate = $request->license_plate;
        $data->booking_date = $request->booking_date;
        $data->time_slot = $request->time_slot;
        $data->user_id = $request->user_id;
        $data->service_id = $request->service_id;
        $data->payment_status = $request->payment_status;
        $data->complete_status = $request->complete_status;

        $data->save();

        return redirect()->back();
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function view_message()
    {
        $data = Contact::all();

        return view('admin.view_message', compact('data'));
    }

    public function delete_message($id)
    {
        $data = Contact::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);

        return view('admin.send_mail', compact('data'));
    }

    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);

        $details = [
            'greeting' => $request->greeting,
            'mail_body' => $request->mail_body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'end_line' => $request->end_line,

        ];
        Notification::send($data, new sendEmailNotification($details));

        return redirect()->back();
    }

    public function view_user()
    {
        $data = User::all();

        return view('admin.view_user', compact('data'));
    }

    public function delete_user($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back();
    }

}
