<?php

namespace App\Application\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function index()
    {
        return Social::all();
    }

    public function store(Request $request)
    {
        $socials = $request->get('socials');

        foreach ($socials as $social) {
            Social::updateOrCreate(
                [
                    'id' => $social['id']
                ],
                [
                    'title' => $social['title'],
                    'value' => $social['value'],
                ]
            );
        }
    }

    public function destroy(Social $social)
    {
        $social->delete();
    }
}
