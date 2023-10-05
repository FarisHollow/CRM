@extends('Layout.layout')

@section('content')

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        padding-left: 150px;
    }

    /* Add some custom styles for the card section */
    .card-section {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 5px; /* Add margin to create space */
    }

    /* Add margin to the box components */
    .box0 {
        margin: 10px;
    }
</style>

<div class="container">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="col-lg-9 main-chart">
                    <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 box0">
                            <a href="{{ route('notice-board.index') }}">
                            <div class="box1">
                                <span class="fas fa-clipboard-list"></span>
                                <h3>{{ \App\Models\Notice::count() }}</h3>
                            </div>
                            <p>You have {{ \App\Models\Notice::count() }} notices by Admin</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_news"></span>
                                <h3>{{ auth()->user()->leads->count() }}</h3>
                            </div>
                            <p>{{ auth()->user()->leads->count() }} leads were added by you.</p>
                        </div>

                       
                        
                        
                        <div class="col-md-6">
                          <div class="card-section">
                            <h3><a class="btn btn-link btn-lg" href="{{ route('leads.index') }}">Leads</a></h3>
                            <p>Click the button below to add current lead.</p>
                              <a class="btn btn-primary" href="{{ route('lead') }}">Add Lead</a>
                              <img src="add.png" alt="Activity Image" style="max-width: 100%; margin-top: 20px;">
                          </div>
                      </div>
                      
                    </div>
                </div>
            </section>
        </section>
    </section>
</div>
@endsection
