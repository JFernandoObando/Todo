@extends('menu')
@section('content')

<div class="container w-25 borde p-4">
<form action="{{route('todo-update',['id'=>$todo->id])}}" method="POST">
    @method('PATCH')
    @csrf <!-- Agrega el token CSRF -->
    <div class="form-group">
        <label for="nombre">Nombre de la Película:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$todo->nombre}}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar Película</button>
</form>
</div>
@endsection