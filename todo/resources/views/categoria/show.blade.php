@extends('menu')
@section('content')

<div class="container w-25 borde p-4">
    <form action="{{route('categoria.update',['categorium'=>$categoria->id])}}" method="POST">
        @method('PATCH')
        @csrf
        <!-- Agrega el token CSRF -->
        <div class="form-group">
            <label for="nombre">Nombre de la Categoria:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$categoria->nombre}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Categoria</button>
    </form>

    <div>
        @if($categoria->todos->count()>0)

        @foreach($categoria->todos as $todo)
        <div class="row py-1">
            <a href="{{ route('todo-edit', ['id' => $todo->id]) }}">{{ $todo->nombre }}</a>
        </div>

        @endforeach
        
        @else
        No hay


        @endif

    </div>
</div>
@endsection