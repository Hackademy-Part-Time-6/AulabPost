<x-layout>
    <div class="container">
        <h1>Lista de artículos</h1>
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text">{{$article->subtitle}}</p>
                                <p class="small text-muted fst-italic">{{$article->category->name}}</p>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                                Publicado el {{$article->created_at->format('d/m/Y')}} por {{$article->user->name}}
                                @if($article->category)
                                    <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic">{{ $article->category->name }}</a>
                                @else
                                    <p class="small text-muted fst-italic">
                                        Sin categoría
                                    </p>
                                @endif
                                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"> Leer </a>
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