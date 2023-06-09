<x-layout>
    <div class="container p-5 blue-body text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Todos los artículos por: {{$query}}
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-md-4 mb-4 text-center">
                <a href="{{ route('article.show', $article) }}" class="card blue-body text-decoration-none" style="color: white;">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Imagen del artículo">
                    <div class="card-body blue-body text-white">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <p class="small text-muted fst-italic">
                            <span class="text-white">{{ $article->category->name }}</span>
                        </p>
                    </div>
                    <div class="card-footer blue-body text-muted d-flex justify-content-between align-items-center">
                        <span style="color: white">Publicado el {{ $article->created_at->format('d/m/Y') }} por {{ $article->user->name }}</span>
                        <span class="small fst-italic" style="color: white;"><i class="fas fa-clock"></i> {{ $articles[count($articles) - 1]->readDuration() }} min</span>
                    </div>
                    <p class="small fst-italic blue-body">
                        @foreach ($article->tags as $tag)
                        <span class="text-white text-left">#{{ $tag->name }}</span>
                        @endforeach
                    </p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>