<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Youtube;
use App\Video;
use Carbon\Carbon;

class VideosController extends Controller
{
    public function index(){
        
        $videos = Video::orderBy('id','desc')->get(['video_id','show']);
         
        return view('videos',[
            'videos'=>$videos,
            '_title' => 'Տեսանյութեր',
            '_desc' => 'ՏԵՍԱՆՅՈՒԹԵՐ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
