<x-layout>
    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-6">
                <div class="card">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Imagen del artículo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <p class="small text-muted fst-italic">{{ $article->category->name }}</p>
                        <p class="card-text">{{ $article->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el {{ $article->created_at->format('d/m/Y') }} por 
                        <p class="small fst-italic"> Escrito el {{$article->created_at->format('d/m/Y')}} por
                            {{$article->user->name}}
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic">{{ $article->category->name }}</a>
                    </div>
                    @if(Auth::user() && Auth::user()->is_revisor)
                        <a href="{{ route('revisor.acceptArticle', compact('article')) }}" class="btn btn-success text-white my-5">Aceptar</a>
                        <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn btn-danger text-white my-5">Rechazar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
