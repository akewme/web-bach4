@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                            <h1>{{ $post->title }}</h1>
                            <p>
                                {{ $post->body }}
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
