1 <x-layout>
    <div class="container p-5 bg-info text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bienvenido Revisor
            </h1>
        </div>
    </div>
    
    @if (session('message'))
        <div class="aler alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Artículos para revisar</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Artículos publicados</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Artículos rechazados</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</x-layout>