<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    public function index(){
        $about = About::latest()->first();


        return view('about',[
            'about'=>$about,
            '_title' => 'Մեր մասին',
            '_desc' => 'Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
