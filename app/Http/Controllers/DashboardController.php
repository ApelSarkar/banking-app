<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user')->get();
        return view('dashboard', compact('transactions'));
    }

}
