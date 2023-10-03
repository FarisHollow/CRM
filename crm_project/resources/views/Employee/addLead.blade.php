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
                        <form class="col-md-6 card-section">
                            <h3>Add New Record</h3>
                            <div class="form-group">
                                <label for="date">Delivery Date</label>
                                <input type="date" class="form-control" id="d_date" placeholder="Select date">
                            </div>
                           
                            <div class="form-group">
                                <label for="clientName">Client's Name</label>
                                <input type="text" class="form-control" id="clientName" placeholder="Enter client's name">
                            </div>
                            <div class="form-group">
                                <label for="calledAt">Called At</label>
                                <input type="datetime-local" class="form-control" id="calledAt" placeholder="Select date and time">
                            </div>
                            <div class="form-group">
                                <label for="sellRate">Sell Rate</label>
                                <input type="number" class="form-control" id="sellRate" placeholder="Enter sell rate">
                            </div>
                            <div class="form-group">
                                <label for="clientCompany">Client Company Name</label>
                                <input type="text" class="form-control" id="clientCompany" placeholder="Enter client company name">
                            </div>
                            <!-- Progress bar for sell rate -->
                            <div class="form-group">
                                <label for="sellRate">Progress Bar</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </section>
</div>
@endsection
