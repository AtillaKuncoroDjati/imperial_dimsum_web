<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;
use App\Mail\email;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
    
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Data yang akan digunakan dalam email
     
            $name = $validated['name'];
            $email = $validated['email'];
            $subject = $validated['subject'];
            $message = $validated['message'];
        

        // Mengirim email
        // Mail::send('emails.contact', $data, function($message) use ($data) {
            mail::to('imperialdimsumpalace@gmail.com')->send(new email($subject,$email,$name,$message));
            return redirect('/');
        //             ->subject($data['subject']);
        // });

        // Redirect kembali dengan pesan sukses
    }
}

