@extends('layouts.app')
@section('title')
    {{ 'Pending tickets' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Pending Tickets</h5>
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
                            <tr>
                                <td>
                                    <span class="fw-medium">15995</span>
                                </td>
                                <td>this is demo subject</td>
                                <td>
                                    <span class="badge bg-label-warning me-1">pending</span>
                                </td>
                                <td>
                                    <span class="badge bg-label-warning me-1">pending</span>
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('ticket.view', ['id' => '1']) }}">
                                        <i class="bx bx-show mx-1"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
    <!-- / Content -->
@endsection
