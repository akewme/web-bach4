@extends('layouts.app')

@section('content')
    <div class="container">
       

        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h1>Posting Article
                    <button type="button" 
                    class="btn btn-primary btn-lg" 
                    data-toggle="modal" 
                    data-target="#exampleModalCenter">
                        Create New Post
                    </button>
                </h1>
            </div>
            <div class="col-md-12 col-lg-6">
                @if(session()->has('info')) 
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session()->get('info') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
            </div>
          
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create_post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title Here">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="body" 
                                      cols="30" 
                                      rows="10" 
                                      class="form-control" 
                                      placeholder="Body here"></textarea>
                        </div>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
            </div>
        </div>

        {{-- End Modal --}}

        @php
            // dd($posting);
        @endphp
        {{-- Post List --}}
        <section id="post-list">
            <div class="row">
                {{-- Post --}}
                @foreach($posting as $p)
                <div class="col-md-12 col-lg-4 mt-2">
                    <div class="bg-white shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> {{ $p->name }}</h6>
                            <p class="card-text">{{ $p->body }}</p>
                            <a href="#" class="card-link text-primary">View</a>
                            <a href="#" class="card-link text-success">Edit</a>
                            <a href="#" class="card-link text-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- End Post --}}
                <div class="col-md-12 mt-2">
                        {{ $posting->links() }}
                </div>
            </div>
        </section>
        {{-- End Post List --}}


    </div>
@endsection