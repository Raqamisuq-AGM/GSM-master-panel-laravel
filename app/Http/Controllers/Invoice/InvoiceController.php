<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Company\Admin;
use App\Models\Company\Company;
use App\Models\Invoice\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //Get All invoice
    public function all()
    {
        // Fetch all invoice from the database using the License model
        $invoices = Invoice::with(['user', 'product'])
            ->orderByDesc('created_at')
            ->get();
        return view('pages.invoice.all-invoice', compact('invoices'));
    }

    //Get Paid invoice
    public function paid()
    {
        // Fetch paid invoice from the database using the License model
        $invoices = Invoice::with(['user', 'product'])
            ->where('status', 'paid')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.invoice.paid-invoice', compact('invoices'));
    }

    //Get pending invoice
    public function pending()
    {
        // Fetch paid invoice from the database using the License model
        $invoices = Invoice::with(['user', 'product'])
            ->where('status', 'pending')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.invoice.pending-invoice', compact('invoices'));
    }

    //View invoice
    public function view()
    {
        // Fetch invoice with user from the database
        $company = Company::all();
        $invoice = Invoice::with(['user', 'product'])->get();
        // dd($invoice[0]->product->title);
        return view('pages.invoice.view-invoice', compact('invoice', 'company'));
    }
}
