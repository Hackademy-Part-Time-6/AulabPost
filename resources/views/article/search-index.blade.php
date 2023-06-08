<x-layout>
    <div class="container p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Todos los artículos por: {{$query}}
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 my-2">
                    <div class="card">
                        <img src="{{Storage::url($article->image)}}" alt="..." class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            @if($article->category)
                                    <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic">{{ $article->category->name }}</a>
                                @else
                                    <p class="small text-muted fst-italic">
                                        Sin categoría
                                    </p>
                                @endif
                                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"> Leer </a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            <p class="small fst-italic"> Escrito el {{$article->created_at->format('d/m/Y')}} por
                                {{$article->user->name}}
                            </p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leer</a>
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