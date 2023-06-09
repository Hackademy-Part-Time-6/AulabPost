<x-layout>
    <div class="container p-5 blue-body text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Aulab Post
            </h1>
        </div>
    </div>
    
    <div class="container mt-5 mb-3">
        <form action="{{ route('article.search') }}" method="GET" class="d-flex">
            <input type="search" name="query" placeholder="¿Qué estás buscando?" class="form-control" aria-label="Search">
            <button class="btn btn-outline-info" type="submit"">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mb-4 text-center">
            <a href="{{ route('article.show', $articles[count($articles) - 1]) }}" class="card blue-body text-decoration-none" style="color: white;">
                <img src="{{ Storage::url($articles[count($articles) - 1]->image) }}" class="card-img-top" alt="Imagen del artículo">
                <div class="card-body  blue-body ">
                    <h5 class="card-title">{{ $articles[count($articles) - 1]->title }}</h5>
                    <p class="card-text">{{ $articles[count($articles) - 1]->subtitle }}</p>
                    <p class="small text-muted fst-italic">
                        <span class="text-light">{{ $articles[count($articles) - 1]->category->name }}</span>
                    </p>
                </div>
                <div class="card-footer blue-body text-muted d-flex justify-content-between align-items-center text-white">
                    <span style="color: white">Publicado el {{ $articles[count($articles) - 1]->created_at->format('d/m/Y') }} por {{ $articles[count($articles) - 1]->user->name }}</span>
                    <span class="small fst-italic" style="color: white;"><i class="fas fa-clock"></i> {{ $articles[count($articles) - 1]->readDuration() }} min</span>
                </div>
                <p class="small fst-italic blue-body ">
                    @foreach ($articles[count($articles) - 1]->tags as $tag)
                        <span class="text-light">#{{ $tag->name }}</span>
                    @endforeach
                </p>
            </a>
            
            
            
        </div>


        <div class="col-md-4 mb-4 category-list d-none d-md-block">
            <div class="card blue-body">
                <div class="card-body blue-body">
                    <h5 class="card-title text-white text-center" style="font-size: 2rem;">Categorías</h5>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item categories text-center" style="font-size: 1.5rem;">
                                <a href="{{ route('article.byCategory', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        

            @foreach ($articles as $key => $article)
                @if ($key < count($articles) - 1)
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
                @endif
            @endforeach
        </div>
    </div>
</x-layout>