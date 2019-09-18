
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title> Blog Ari Bahtiar </title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   
    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/"> --}}

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Style Khusus Blog */

      .blog-header {
        line-height: 1;
        border-bottom: 1px solid #e5e5e5;
      }

      .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        font-size: 2.25rem;
      }

      .blog-header-logo:hover {
        text-decoration: none;
      }

      h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
      }

      .display-4 {
        font-size: 2.5rem;
      }
      @media (min-width: 768px) {
        .display-4 {
          font-size: 3rem;
        }
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .nav-scroller .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
      }

      .card-img-right {
        height: 100%;
        border-radius: 0 3px 3px 0;
      }

      .flex-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
      }

      .h-250 { height: 250px; }
      @media (min-width: 768px) {
        .h-md-250 { height: 250px; }
      }

      /*
      * Blog name and description
      */
      .blog-title {
        margin-bottom: 0;
        font-size: 2rem;
        font-weight: 400;
      }
      .blog-description {
        font-size: 1.1rem;
        color: #999;
      }

      @media (min-width: 40em) {
        .blog-title {
          font-size: 3.5rem;
        }
      }

      /* Pagination */
      .blog-pagination {
        margin-bottom: 4rem;
      }
      .blog-pagination > .btn {
        border-radius: 2rem;
      }

      /*
      * Blog posts
      */
      .blog-post {
        margin-bottom: 4rem;
      }
      .blog-post-title {
        margin-bottom: .25rem;
        font-size: 2.5rem;
      }
      .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #999;
      }

      /*
      * Footer
      */
      .blog-footer {
        padding: 2.5rem 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
      }
      .blog-footer p:last-child {
        margin-bottom: 0;
      }
    </style>
    <!-- Custom styles for this template -->
     <!-- Custom styles for this template -->
    {{-- <link href="blog.css" rel="stylesheet"> --}}
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      {{-- <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div> --}}
      <div class="col-4 text-center offset-lg-4">
        <a class="blog-header-logo text-dark" href="/">
          <span>Ari</span>
          <span class="d-none d-lg-block"> Bahtiar </span> </a>
      </div>
      <div class="col-md-8 col-lg-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

       @foreach (DB::table("post")
                ->distinct("kategori")
                ->select("kategori")
                ->get() as $item)
          <a class="p-2 text-muted" href="/k/{{ $item->kategori }}"> 
            {{ $item->kategori }} 
          </a>
       @endforeach


    </nav>
  </div>
  @php
      $newArtikel = DB::table("post")
                  ->orderBy("id","DESC")
                  ->first();
  @endphp

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
      <h1 class="display-4 font-italic"> {{ $newArtikel->title }}</h1>
      <p class="lead my-3">{{ str_limit($newArtikel->body,150) }}</p>
      <p class="lead mb-0">
        <a href="/p/{{ $newArtikel->id }}" 
          class="text-white font-weight-bold">
          Continue reading...
        </a>
      </p>
    </div>
  </div>

  <div class="row mb-2" id="post-data">
    @php
         $posting = DB::table("post")
            ->join("users","users.id","post.user_id")
            ->select("post.*","users.name")
            ->orderBy("post.id","DESC")
            ->paginate(2);
    @endphp
    @include('infiniteScroll')
      <br>
      <br>
      <div class="ajax-load" style="display:none">
        {{-- .... --}}
      </div>

  </div>


</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript">

  var page = 1;
  
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
  });
  
	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '/getDataInfinite?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#post-data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>


</body>
</html>
