<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CopyandpayController extends Controller
{
    function request() {
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8ac7a4ca759cd78501759dd759ad02df" .
                    "&amount=92.00" .
                    "&currency=EUR" .
                    "&paymentType=DB";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGFjN2E0Y2E3NTljZDc4NTAxNzU5ZGQ3NThhYjAyZGR8NTNybThiSmpxWQ=='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData)->id;
        //return view('payment', compact($responseData));
        //return $responseData;
        //return view('payment')->with('responseData', '$responseData');
        //return view("payment", compact('responseData'));
        return view('payment', ['checkoutId' => $responseData]);
    }
    //$responseData = request();
}
