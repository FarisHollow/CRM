@extends('Layout.layout')

@section('content')
<style>
    .notice {
        background: #f5f5f5;
        border: 1px solid #ccc;
        margin: 10px;
        padding: 10px;
        position: relative;
    }

    .notice .notice-number {
        position: absolute;
        top: 5px;
        left: 5px;
        font-size: 16px;
        color: blue;
    }

    .notice .timestamp {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 12px;
        color: blue;
    }

    .notice .posted-by {
        font-size: 10px;
        margin-top: 10px;
    }
</style>

<div class="container-fluide">
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <h1 class="mt-4">Notice Board</h1>
                @if($notices->isEmpty())
                <p>No notices found.</p>
                @else
                <div class="notices">
                    @foreach ($notices as $key => $notice)
                    <div class="notice">
                        <span class="notice-number">{{ $key + 1 }}</span>
                        <h3>{{ $notice->title }}</h3>
                        <div class="posted-by">Posted by: {{ $notice->user->name }}</div>
                        <p>
                            {{ $notice->text }}
                        </p>
                        <div class="timestamp">
                            {{ $notice->created_at->setTimezone('Asia/Dhaka')->format('M j, Y g:i A') }}
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </section>
        </section>
    </section>
</div>
@endsection
