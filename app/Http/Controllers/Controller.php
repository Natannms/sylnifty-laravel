<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        $socials = Social::all();

        $data = [
            'socials' => $socials,
        ];

        return view('welcome', compact('data'));
    }
}
