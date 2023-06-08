<x-layout>  
    <div class="container p-5 bg-info text-white text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bienvenido, Administrador
            </h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de administrador</h2>
                <x-requests-table :roleRequests="$adminRequests" role="administrador" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de revisor</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisor" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de redactor</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redactor" />
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Los tags de la plataforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Las categorías de la plataforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="category" />
            </div>
        </div>
    </div>

</x-layout>