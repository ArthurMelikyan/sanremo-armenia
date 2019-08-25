<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use Mail;
class ContactController extends Controller
{
    public function index(Request $request){
        
if ($request->isMethod('post')) {
    $datacontact = $request->except(['_token']); 
    if (trim($datacontact['phone']) == '') {
        $datacontact['phone'] = 'Հեռախոսահամարը չեն նշել';
    }
    if (trim($datacontact['subject']) == '') {
        $datacontact['subject'] = 'San Remo / Թեման չի նշվել';
    }
    $messages = [
        // "required"=>":attribute դաշտը պարտադիր է",
        "name.required" => "Խնդրում ենք լրացնել անվան դաշտը",
        "email.email" => "Խնդրում ենք ճիշտ լրացնել էլեկտրոնային հասցեն",
        "email.required" => "Խնդրում ենք լրացնել էլեկտրոնային հասցեն",
        "message.required" => "Խնդրում ենք լրացնել նամակի դաշտը",
    ];
    $validator = Validator::make($datacontact, [
        "name" => "required|max:65",
        "email" => "required|email|max:70", 
        "message" => "required",
    ],$messages);
    if ($validator->fails()) {
        $request->flash();
        return redirect()->route('contact')->with('errors', $validator->errors());
    }
    $result = Mail::send('email.email', ['datacontact' => $datacontact], function ($message) use ($datacontact) {
        $message->from($datacontact['email'],
            trim($datacontact['name']),
            trim($datacontact['email']),
            trim($datacontact['phone']),
            trim( $datacontact['subject']),
            trim($datacontact['message'])
        );
        $message->replyTo($datacontact['email'], $datacontact['name']);
        $message->to(config('mail.username'))
            ->subject($datacontact['subject']);
    });
    if (count(Mail::failures()) == 0) {
        if ($validator->passes()) { 
            $request->session()->flash('status', 'Ձեր նամակն հաջողությամբ ուղարկվել է։');
             return redirect('contact');
        }
    }

}
        return view('contact',[
            '_title' => 'Հետադարձ կապ',
            '_desc' => 'ԿԱՊ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
