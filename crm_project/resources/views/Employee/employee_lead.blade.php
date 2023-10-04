@extends('Layout.layout')

@section('content')

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        padding-left: 350px;
    }

    /* Style for progress bar */
    .progress {
        margin-bottom: 15px;
    }
</style>

<div class="container-fluide">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <h1 class="mt-4">Leads List</h1>
                <a href="{{ route('my-leads') }}" class="btn btn-primary">Your Leads</a>
                @if($leads->isEmpty())
                <p>No leads found.</p>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Client's Name</th>
                                <th>Called At</th>
                                <th>Sell Rate</th>
                                <th>Company Name</th>
                                <th>Delivery Date</th>
                                <th>Time</th>
                                <th>Update By</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                            <tr>
                                <td>{{ $lead->cl_name }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->called_at)->setTimezone('Asia/Dhaka')->format('Y-m-d h:i A') }}</td>
                                <td>{{ $lead->sell_rate }}</td>
                                <td>{{ $lead->company_name }}</td>
                                <td>{{ $lead->d_date }}</td>
                                <td>{{ $lead->created_at->setTimezone('Asia/Dhaka')->format('Y-m-d h:i A') }}</td>
                                <td>{{ $lead->user->name }}</td>
                                <td>{{ $lead->user->designation }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </section>
        </section>
    </section>
</div>
@endsection
