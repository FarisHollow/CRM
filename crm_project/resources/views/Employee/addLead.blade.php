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

<div class="container">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="col-lg-9 main-chart">
                    <div class="row mtbox">
                        <!-- Create a form for input fields -->
                        <form class="col-md-6 card-section" method="POST" action="{{ route('leads.store') }}">
                            @csrf
                            <h3>Add New Record</h3>
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                             <!-- Progress bar for sell rate -->
                          
                             <div class="form-group">
                                <label for="sellRate">Your  Progress Bar</label>
                                @php
                                    $totalSales = \App\Models\Lead::sum('sell_rate'); // Calculate the total sell_rate from all leads
                                    $userSales = auth()->user()->leads->sum('sell_rate'); // Calculate the user's total sell_rate
                                    $userSellRate = $totalSales > 0 ? ($userSales / $totalSales * 100) : 0; // Calculate the user's sell rate as a percentage
                                @endphp
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $userSellRate }}%;" aria-valuenow="{{ $userSellRate }}" aria-valuemin="0" aria-valuemax="100">
                                        {{ number_format($userSellRate, 2) }}%
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date">Delivery Date</label>
                                <input type="date" class="form-control" id="d_date" name="d_date" placeholder="Select date">
                            </div>
                           
                            <div class="form-group">
                                <label for="clientName">Client's Name</label>
                                <input type="text" class="form-control" name="cl_name" placeholder="Enter client's name">
                            </div>
                            <div class="form-group">
                                <label for="calledAt">Called At</label>
                                <input type="datetime-local" class="form-control" id="calledAt" name="called_at" placeholder="Select date and time">
                            </div>
                            <div class="form-group">
                                <label for="sellRate">Sell Rate</label>
                                <input type="number" class="form-control" id="sellRate" name="sell_rate" placeholder="Enter sell rate">
                            </div>
                            <div class="form-group">
                                <label for="clientCompany">Client Company Name</label>
                                <input type="text" class="form-control" id="clientCompany" name="company_name" placeholder="Enter client company name">
                            </div>
                           
                            

                            
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                       </ul>
                    </div>
                </div>
            </section>
        </section>
    </section>
</div>
@endsection
