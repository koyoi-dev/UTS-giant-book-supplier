<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    static $data = [
        "address" => [
            "street" => "Jalan Pembangunan Baru Raya",
            "details" => "Kompleks Pertokoan Emerald Blok III/12",
            "city" => "Bintaro",
            "province" => "Tangerang Selatan",
            "country" => "Indonesia"
        ],
        "phone" => "021-0899776655",
        "email" => "happybookstore@happy.com",
        "openHours" => "08.00 - 20.00"
    ];

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        return view('contact', [
            "data" => self::$data,
        ]);
    }
}
