<?php

namespace Elmmac\Laravelcontactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Elmmac\Laravelcontactform\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Elmmac\Laravelcontactform\Mail\ContactMailable;


class ContactController extends Controller
{
    //
    public function index() // to display the form
    {
        return view('Laravelcontactform::contact');
    }

    public function send(Request $request) // to send the email
    {
    //    $result = Contact::create($request->all());
    //    return $result;
        // var_dump($result);
        // Mail::to('misael@elmmac.co.za')->send(new ContactMailable($request->message, $request->firstname));
        // Mail::to(config('Laravelcontactform.send_email_to'))->send(new ContactMailable($request->message, $request->firstname));
        $value = config('contact.send_email_to');
        Mail::to($value)->send(new ContactMailable($request->message, $request->firstname)); // this is the contact.php file from the main projects config file folder of laravel project. now the admin/package user can modify the contact.php file / email straight from the main projects config folder and not the package config folder.
        if(Contact::create($request->all()) == true){
            echo "Your Message Has been Sent Successfully";
        } else {
            // echo "Message failed to Send";
            return redirect(route('Laravelcontactform::contact'));
        }

    }

    public function save() // to save message on database
    {

    }


}
