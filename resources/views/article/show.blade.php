<x-layout>
    <div class="container my-5" style="height: 100vh">
        <div class="row justify-content-around">
            <div class="col-12 text-center">
                <div class="card blue-body" style="color: white;">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top img-fluid" alt="Imagen del artículo" style="max-width: 100%; max-height: 400px;">
                    <div class="card-body blue-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <p class="small fst-italic text-white">{{ $article->category->name }}</p>
                        <div class="card-footer blue-body">
                            <p class="small fst-italic"> Escrito el {{ $article->created_at->format('d/m/Y') }} por
                                {{ $article->user->name }}
                            </p>
                        </div>
                        <p class="small fst-italic blue-body">
                            @foreach ($article->tags as $tag)
                                #{{ $tag->name }}
                            @endforeach
                        </p>
                        <p class="card-text">{{ $article->body }}</p>
                    </div>
                    <div class="d-flex justify-content-center blue-body">
                        @if(Auth::user() && Auth::user()->is_revisor)
                            <a href="{{ route('revisor.acceptArticle', compact('article')) }}" class="btn btn-success text-white my-5 text-left me-4">Aceptar</a>
                            <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn btn-danger text-white my-5 text-right ms-4">Rechazar</a>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

