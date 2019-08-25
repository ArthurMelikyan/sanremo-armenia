<?php

namespace App\Http\Controllers;
use App\Requirement;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    public function index(){
        if (Requirement::latest()->first() != null) {
           $requirement =  Requirement::latest()->first();
        }
        else {
            $requirement = '';
        }
        return view('requirements',[
            'requirement' => $requirement,
            '_title' => 'Պայմաններ',
            '_desc' => 'ՊԱՅՄԱՆՆԵՐ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
