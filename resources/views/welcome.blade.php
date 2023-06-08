<x-layout>
    <div class="container p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Aulab Post
            </h1>
        </div>
    </div>
    
    <div class="container mt-5 mb-3">
        <form action="{{ route('article.search') }}" method="GET" class="d-flex">
            <input type="search" name="query" placeholder="¿Qué estás buscando?" class="form-control" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Buscar</button>
        </form>
    </div>

    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Imagen del artículo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <p class="small text-muted fst-italic">{{ $article->category->name }}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Publicado el {{ $article->created_at->format('d/m/Y') }} por {{ $article->user->name }}
                            @if($article->category)
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic">{{ $article->category->name }}</a>
                            @else
                                <p class="small text-muted fst-italic">
                                    Sin categoría
                                </p>
                            @endif
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white">Leer</a>
                        </div>
                        <p class="small fst-italic">
                            @foreach ($article->tags as $tag )
                                #{{ $tag->name }}
                            @endforeach
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>


