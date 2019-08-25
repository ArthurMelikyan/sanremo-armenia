<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class RequestController extends Controller
{
    public function index(Request $request)
    {

        if ($request->isMethod('post')) {
            $datacontact = $request->except(['_token']);
            // dd($datas);
            // dd($datacontact);
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
                "photo.required" => "Նկարը պարտադիր է",
                "photo.mimes" => "Նկարի համար ընդունվում են հետևյալ տիպի ֆայլեր։ jpeg,png",
                "photo.max" => "Նկարը չպետք է գերազանցի 1024 կբ֊ն",
                "passport.required" => "Անձնագիրը (նկարի կամ սքանի տեսքով) պարտադիր է",
                "passport.mimes" => "Անձնագիրը ընդունում ենք հետևյալ տիպի ֆայլերով։ jpeg,png,pdf,docx,doc",
                "passport.max" => "Անձնագիրը պետք է չգերազանցի 1024 կբ֊ն",
            ];
            $validator = Validator::make($datacontact, [
                "name" => "required|max:70",
                "email" => "required|email|max:70", 
                "photo" => "required|mimes:jpeg,png|max:1024",
                "passport" => "required|mimes:jpeg,png,pdf,docx,doc|max:1024" 
            ], $messages);
            if ($validator->fails()) {
                $request->flash();
                return redirect()->route('request')->with('errors', $validator->errors());
            }
            $result = Mail::send('email.email2', ['datacontact' => $datacontact], function ($message) use ($datacontact) {
                $message->from($datacontact['email'],
                    trim($datacontact['name']),
                    trim($datacontact['email']),
                    trim($datacontact['phone']),
                    trim($datacontact['subject']) 
                );
                $message->replyTo($datacontact['email'], $datacontact['name']);
                $message->to(config('mail.username'))
                    ->subject($datacontact['subject']);
                $message->attach($datacontact['passport']->getRealPath(), [
                    'as' => $datacontact['passport']->getClientOriginalExtension(),
                    'mime' => $datacontact['passport']->getMimeType(),
                ]);
                $message->attach($datacontact['photo']->getRealPath(), [
                    'as' => $datacontact['photo']->getClientOriginalExtension(),
                    'mime' => $datacontact['photo']->getMimeType(),
                ]);
            });
            if (count(Mail::failures()) == 0) {
                if ($validator->passes()) {
                    $request->session()->flash('status', 'Ձեր հարցումն հաջողությամբ ուղարկվել է։');
                    return redirect('request');
                }
            }

        }

        return view('request',[
            '_title' => 'ՈՒղարկել հայտ',
            '_desc' => 'ՈՒղարկել հայտ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
        ]);
    }
}
