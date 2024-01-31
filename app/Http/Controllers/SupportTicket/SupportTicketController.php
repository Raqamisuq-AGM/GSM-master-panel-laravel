<?php

namespace App\Http\Controllers\SupportTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    //Get All ticket
    public function all()
    {
        return view('pages.ticket.all-ticket');
    }

    //Get Answered ticket
    public function paid()
    {
        return view('pages.ticket.answered-ticket');
    }

    //Get closed ticket
    public function closed()
    {
        return view('pages.ticket.closed-ticket');
    }

    //Get pending ticket
    public function pending()
    {
        return view('pages.ticket.pending-ticket');
    }

    //Get ticket details
    public function ticketDetails()
    {
        return view('pages.ticket.view-ticket');
    }

    //Answer ticket to customer
    public function answerTicket()
    {
        return 'answer ticket';
    }

    //Update ticket status
    public function updateTicketStatus()
    {
        return 'update';
    }
}
