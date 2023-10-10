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

<div class="container-fluid">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">

              <h1>Permissions to Employees</h1>
                <form method="post" action="{{ route('permit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="notice">Notice Board</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="notice" id="notice" value="1" {{ \App\Models\Permission::first() && \App\Models\Permission::first()->notice ? 'checked' : '' }}>
                            <label class="form-check-label" for="notice">Enable</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="lead">Adding Leads</label>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="lead" id="lead" value="1" {{ \App\Models\Permission::first() && \App\Models\Permission::first()->lead ? 'checked' : '' }}>
                          <label class="form-check-label" for="lead">Enable</label>
                      </div>
                  </div>
                    <button type="submit" class="btn btn-primary">Change permission</button>
                </form>
            </section>
        </section>
    </section>
</div>
@endsection
