<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\GenCvRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class genCvController extends Controller
{

    public function generate(GenCvRequest $request) {

        $jobs = [
            'php developer',
            'ruby developer',
            'java developer',
            'frontend developer',
            'backend developer',
            '.net developer',
            'python developer',
        ];

        $emailNames = [
            'pussydestroier',
            'analdestroyer',
            'zaklinaczwenszy',
            'diabełkowatyaniołek22',
            'cpun3000',
            'ladnelasie',
            'samotnik69',
            'xxxTenctaion',
            'zrupmilaske',
        ];

        $emailDomeins = [
            'interia.pl',
            'gmail.pl',
            'wp.pl',
            'o2.pl',
            'pocztapolska.pl',
        ];

        $skills = [
            'php developer' => ['laravel', 'symfony', 'php oop', 'wzorce obiektowe', 'javascript', 'drupal', 'php', ''],
            'laravel',
            'symfony',
            'php oop',
            'wzorce projektowe',
            'javascript',
            'html',
            'css',
            'jquery',
            'vue',
            'android'
        ];

        return view('front.cv2', compact('request'))->with([
            'job'   => $jobs[rand(0,count($jobs))],
            'email' => $emailNames[rand(0,count($emailNames))].'@'.$emailDomeins[rand(0,count($emailDomeins))],
            ''
        ]);
    }
}
