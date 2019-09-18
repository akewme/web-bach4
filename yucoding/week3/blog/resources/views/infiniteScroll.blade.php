
@foreach ($posting as $item)
    

    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-300 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">
                {{ $item->kategori }}
            </strong>
            <h3 class="mb-0"> {{ $item->title }} </h3>
            <div class="mb-1 mt-2 text-muted">Nov 11</div>
            <p class="mb-auto">{{ str_limit($item->body,200) }}</p>
            <a href="/p/{{ $item->id }}" class="stretched-link pt-2">Continue reading</a>
            </div>
            {{-- <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> --}}
        </div>
    </div>

@endforeach