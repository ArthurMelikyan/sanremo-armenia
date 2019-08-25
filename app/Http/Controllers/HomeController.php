<?php

namespace App\Http\Controllers;

use App\HomeHeader;
use App\NoticeBoard;

class HomeController extends Controller
{
    public function index()
    {
        $homeHeader = HomeHeader::latest()
            ->first()
            ->only(
                [
                    'cover_photo',
                    'overlay_logo',
                    'overlay_title',
                    'overlay_description',
                ]);
        $noticeBoard = NoticeBoard::latest()
            ->first()
            ->only(
                [
                    'title',
                    'text',
                    'status'
                ]);
        return view('index', [
            'homeHeader' => $homeHeader,
            'noticeBoard' => $noticeBoard,
            '_title' => 'Գլխավոր',
            '_desc' => 'ԳԼԽԱՎՈՐ ֊ Սան Ռեմո պատանի երգիչների միջազգային մրցույթ փառատոն ,որին այս տարի կմասնակցի նաև Հայաստանը',
            ]);
    }
}
