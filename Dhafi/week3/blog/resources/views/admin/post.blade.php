@extends('layouts.app')

@section('content')
<div class="container">
<h1>Article Post</h1>

    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <button type="button" 
            class="btn btn-primary" 
            data-toggle="modal" 
            data-target="#modalForm">
                Create New Post
            </button>
        </div>
    <div class="col-md-12 col-lg-6">
        @if(session()->has('info'))
            <div class="alert alert-success mt-2 text-center">
                {{ session()->get('info')}}
            </div>
        @endif

        @if(session()->has('delete'))
        <div class="alert alert-danger mt-2 text-center">
            {{ session()->get('delete')}}
        </div>
    @endif

    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <div class="modal-body">
                <form id="form" action="{{ route('create_post') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input id="title" type="text" name="title" class="form-control" placeholder="Title Here">
                    </div>
                <div class="form-group">
                    <label>Body</label>
                        <textarea id="body" name="body" 
                                cols="30" 
                                rows="10"
                                class="form-control"
                                placeholder="Your Text..."></textarea>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
        {{-- End Modal --}}

        @php
            // dd($posting);
        @endphp


    <section id="post-list">
        <div class="row pt-4">

            {{-- Post --}}
            @foreach ($posting as $p)
            <div class="col-md-12 col-lg-4 mt-2">
                <div class="card border-info" style="border-radius:10px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $p->name}}</h6>
                        <p class="card-text">{{ $p->body}}</p>

                        <a href="/p/{{ $p->id }}" class="card-link text-primary">View</a>

                        <a href="#" onclick="editPost('{{ json_encode($p) }}')" 
                                    class="card-link text-success">Edit</a>
                                    
                        <a href="/admin/post/{{ $p->id }}/delete" 
                            class="card-link text-danger">Delete</a>
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

</div>
@endsection



{{--  Pembuatan Javascript di Blade yang akan disimpan di Layouts dengan nama  Js-after --}}
@section('js-after')
    <script>
        // alert("Testign Js After")

        function editPost(data){

            // console.log(data);

            $("#modalForm").modal("show");
            // Data = Json, jadi harus di parse terlebih dahulu 
            var d = JSON.parse(data);
            // Set value form
            $("#title").val(d.title);
            $("#body").val(d.body);

            // $("#form").attr("method","PUT");
            $("#form").attr("action",`{{ url('admin/post')}}/${d.id}`);
        }
    </script>
@endsection