@extends('menu')
@section('content')

<div class="container w-25 borde p-4">
    <form action="/categoria" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre de la categoria:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Guardar Categoria</button>

    </form>

    
    <div class="form-group">
        <label for="categorias_existente">Categorias Existente:</label>

        @foreach ($categoria as $categorias)
        <div>
            <a href="{{ route('categoria.show', ['categorium' => $categorias->id]) }}">{{ $categorias->nombre }}</a>
        </div>
        <div>
            <form action="{{ route('categoria.destroy', ['categorium' => $categorias->id]) }}" method="POST">

                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          
        </div>
        @endforeach
    </div>
</div>
@endsection