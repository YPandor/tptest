<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreviousPayments;
use Illuminate\Routing\Controller;


class PaymentsController extends Controller
{
    public function getAllPayments() {
        $payments = PreviousPayments::all();
        //return $payments;
        return view('previous', ['payments' => $payments]);
    }
}
