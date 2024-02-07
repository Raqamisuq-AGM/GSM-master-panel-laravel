<?php

namespace App\Http\Controllers\SupportTicket;

use App\Http\Controllers\Controller;
use App\Models\Support\Answer;
use App\Models\Support\Ticket;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    //Get All ticket
    public function all()
    {
        // Fetch all support ticket from the database
        $tickets = Ticket::orderByDesc('created_at')
            ->get();
        return view('pages.ticket.all-ticket', compact('tickets'));
    }

    //Get Answered ticket
    public function answered()
    {
        // Fetch paid support ticket from the database
        $tickets = Ticket::where('status', 'answered')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.ticket.answered-ticket', compact('tickets'));
    }

    //Get closed ticket
    public function closed()
    {
        // Fetch closed support ticket from the database
        $tickets = Ticket::where('status', 'closed')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.ticket.closed-ticket', compact('tickets'));
    }

    //Get pending ticket
    public function pending()
    {
        // Fetch pending support ticket from the database
        $tickets = Ticket::where('status', 'pending')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.ticket.pending-ticket', compact('tickets'));
    }

    //Get ticket details
    public function ticketDetails()
    {
        // Fetch support ticket details from the database
        $ticket = Ticket::with(['user', 'attachments', 'answers'])->get();
        return view('pages.ticket.view-ticket', compact('ticket'));
    }

    //Answer ticket to customer
    public function answerTicket(Request $request)
    {
        $ticketAns = new Answer();
        $ticketAns->ticket_id = $request->input('ansID');
        $ticketAns->answer_type = $request->input('admin');
        $ticketAns->answer = $request->input('ticketAns');
        $ticketAns->save();

        $ticket = Ticket::findOrFail($request->ansID);
        $ticket->update([
            'status' => 'admin-answered',
        ]);
        toastr()->success('Ticket answered successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('ticket.view', ['id' => $request->ansID]);
    }

    //Update ticket status
    public function updateTicketStatus(Request $request)
    {
        $ticket = Ticket::findOrFail($request->closeID);
        $ticket->update([
            'status' => 'closed',
        ]);
        toastr()->success('Ticket closed successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('ticket.view', ['id' => $request->closeID]);
        return 'update';
    }
}
