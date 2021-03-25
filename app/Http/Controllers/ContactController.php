<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function check(ContactRequest $request)
    {
        /*return view('mail.contact.show', ['name' => $request->name,
                        'email' => $request->email,
                        'text' => $request->message,]);*/
        if($this->send($request))
            $response = [
                "status" => "success",
                "url" => route('home'),
                "data" => [
                    "send" => true,
                ]
            ];
        else
            $response = [
                "status" => "error",
                "data" => [
                    "send" => false,
                ]
            ];
        
        return response()->json($response, 200);
    }

    private function send(Request $request)
    {
        try {
            Mail::to(['kanalvlada8@gmail.com'])
                    ->send(new Contact($request));
        } catch (Throwable $e) {
            //report($e);
            return false;
        }
        return true;
    }
}
