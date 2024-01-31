<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //Get All invoice
    public function all()
    {
        return view('pages.invoice.all-invoice');
    }

    //Get Paid invoice
    public function paid()
    {
        return view('pages.invoice.paid-invoice');
    }

    //Get pending invoice
    public function pending()
    {
        return view('pages.invoice.pending-invoice');
    }

    //View invoice
    public function view()
    {
        return view('pages.invoice.view-invoice');
    }
}
