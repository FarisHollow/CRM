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
                <h1 class="mt-4">Employee List</h1>
                @if($employees->isEmpty())
                <p>No employees found.</p>
                @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Joined date</th>
                                <th>Sale Contribution</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->designation }}</td>
                                <td>{{ $employee->created_at->setTimezone('Asia/Dhaka')->format('Y-m-d h:i A') }}</td>
                                <td>
                                    @php
                                        $totalSellRate = \App\Models\Lead::sum('sell_rate');
                                        $employeeSellRate = $employee->leads->sum('sell_rate');
                                        $percentage = ($employeeSellRate / $totalSellRate) * 100;
                                    @endphp
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                                            {{ number_format($percentage, 2) }}%
                                        </div>
                                    </div>
                                </td>
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
