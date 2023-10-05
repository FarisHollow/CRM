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
</style>

<div class="container-fluide">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <h1>Add a Notice</h1>
                <form action="{{ route('notice.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="noticeTitle">Notice Title</label>
                        <input type="text" class="form-control" id="noticeTitle" name="title" placeholder="Enter the notice title" required>
                    </div>
                    <div class="form-group">
                        <label for="noticeText">Notice Text</label>
                        <textarea class="form-control" id="noticeText" name="text" rows="5" placeholder="Enter the notice text" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Notice</button>
                </form>
            </section>
        </section>
    </section>
</div>
@endsection
