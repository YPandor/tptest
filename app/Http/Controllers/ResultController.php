<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreviousPayments;
use Illuminate\Routing\Controller;


class ResultController extends Controller
{
    function request() {
        $url = "https://test.oppwa.com/v1/checkouts/{checkoutId}/payment";
        $url .= "?entityId=8ac7a4ca759cd78501759dd759ad02df";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGFjN2E0Y2E3NTljZDc4NTAxNzU5ZGQ3NThhYjAyZGR8NTNybThiSmpxWQ=='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData)->result->description;
        return view('result', ['resultData' => $responseData]);
        //return $responseData;
    }

    public function getAllPayments() {
        $payments = PreviousPayments::all();
        //return $payments;
        return view('previous', ['payments' => $payments]);
    }
}

