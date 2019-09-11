@extends('layouts.app')

@section('content')
    <section class="container">
        
        <div class="card">
            <div class="card-body">
                    <h1>{{ $post->title }}</h1>

                    <p>
                        {{ $post->body }}
                    </p>
            </div>
        </div>
        
    </section>
    @endsection
