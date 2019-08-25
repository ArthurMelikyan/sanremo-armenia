<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PressReview;
class PressController extends Controller
{
    public function index(){
        $reviews = PressReview::orderBy('id','desc')
        ->get(['image','title','link','desc']); 

        return view('press',[
            'reviews'=>$reviews,
            '_title' => 'Մամուլի անդրադարձ',
            '_desc' => 'ՄԱՄՈՒԼԻ ԱՆԴՐԱԴԱՐՁ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            
            ]);
    }
}
