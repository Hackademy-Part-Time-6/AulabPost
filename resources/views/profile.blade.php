<x-layout>
    <div class="container mt-5 mb-3">
        <h2>Artículos creados por {{ Auth::user()->name }}</h2>
    </div>

    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Imagen del artículo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            <span>Publicado el {{ $article->created_at->format('d/m/Y') }}</span>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white">Leer</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

