<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function report(Request $req)
    {
        $tickets = [
            (object)[
                'name' => 'Килина Ирина Викторовна', 
                'date' => '18.01.2025 / 18:30',
                'tel' => '+79124049239',
                'email' => 'kisslova77@gmail.com',
                'service' => 'Общий клининг',
                'payment' => 'Наличные',
                'status' => 'Новая заявка'
            ],
            (object)[
                'name' => 'Килина Ирина Викторовна', 
                'date' => '18.01.2025 / 18:30',
                'tel' => '+79124049239',
                'email' => 'pantere-ole@bk.ru',
                'service' => 'Химчистка ковров и мебели',
                'payment' => 'Банковская карта',
                'status' => 'Услуга отменена'
            ],
        ];
        return view('dashboard', compact('tickets'));
    }
}
