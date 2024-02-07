@extends('layouts.app')
@section('title')
    {{ 'Closed tickets' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Tickets</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ticket no</th>
                                <th>Subject</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tickets as $ticket)
                                <tr>
                                    <td>
                                        <span class="fw-medium">{{ $ticket->ticket_id }}</span>
                                    </td>
                                    <td>{{ $ticket->subject }}</td>
                                    <td>
                                        <span
                                            class="badge
                                            @if ($ticket->priority == 'high') bg-label-danger
                                            @elseif($ticket->priority == 'medium')
                                            bg-label-warning
                                            @elseif($ticket->priority == 'normal')
                                            bg-label-success @endif
                                             me-1">
                                            {{ $ticket->priority }}
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge
                                        @if ($ticket->status == 'closed') bg-label-danger
                                            @elseif($ticket->status == 'pending')
                                            bg-label-warning
                                            @elseif($ticket->status == 'answered')
                                            bg-label-success @endif me-1">
                                            {{ $ticket->status }}
                                        </span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('ticket.view', ['id' => $ticket->id]) }}">
                                            <i class="bx bx-show mx-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No tickets found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
    <!-- / Content -->
@endsection
