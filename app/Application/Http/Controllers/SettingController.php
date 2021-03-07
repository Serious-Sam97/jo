<?php

namespace App\Application\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return Setting::first();
    }

    public function store(Request $request)
    {
        Setting::updateOrCreate(
            [
                'id' => 1,
            ],
            [
                'bio_pt' => $request->get('bio_pt'),
                'bio_en' => $request->get('bio_en'),
            ]
        );
    }
}
