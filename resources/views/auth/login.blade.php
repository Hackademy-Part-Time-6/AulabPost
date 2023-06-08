<x-layout>
    <div class="container bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Iniciar Sesión
            </h1>
        </div>
    </div> 
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <form class="card p-5 shadow" action="{{ route('login') }}" method="post">
                @csrf


                <div class="mb-3">
                    <label for="email" class="form-label">Correo:</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="mt-2">
                    <button class="btn bg-info text-white">Iniciar Sesión</button>
                    <p class="small mt-2">¿No estás registrado?<a href="{{ route('register') }}">Click aqui</a></p>
                </div>
            </form>
        </div>
    </div>
</x-layout>