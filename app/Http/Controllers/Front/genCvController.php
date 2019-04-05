<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\GenCvRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class genCvController extends Controller
{




    public function generate(GenCvRequest $request) {




//        dd($request->all());

        return view('front.cv1', compact('request'));
    }
}
