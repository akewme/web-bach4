@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comment List</h1>

        <div class="row pt-4">
                <div class="col-md-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h5 class="card-title">Post Title / Post Comment</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Name User</h6>
                            <p class="card-text">Some quick example text to build on 
                                the card title and make up the bulk of the card's content.
                            </p>
                            <a href="#" class="card-link text-primary">Reply</a>
                            <a href="#" class="card-link text-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection