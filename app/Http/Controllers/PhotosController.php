<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function index(){
        $photos = Photo::orderBy('id','desc')
        ->get(['big_image','little_image','title']);

        return view('photos',[
            'photos'=>$photos,
            '_title' => 'Նկարադարան',
            '_desc' => 'ՆԿԱՐՆԵՐ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
