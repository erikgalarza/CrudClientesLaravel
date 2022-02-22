
<h1> {{ $modo}} empleado </h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>


@endif

<div class="form-group" >
<label for="Nombre"> Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group" >
<label for="Apellido"> Apellido</label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido) ? $empleado->Apellido:old('Apellido') }}" id="Apellido">
<br>
</div>


<div class="form-group" >
<label for="Email"> Email</label>
<input type="text" class="form-control" name="Email" value="{{ isset($empleado->Email) ? $empleado->Email:old('Email') }}" id="Email">
<br>
</div>

<div class="form-group" >
<label for="Foto"></label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>
<br>

<input type="submit" value="{{ $modo }} Datos" class="btn btn-success">

<a href="{{ url('empleado/') }}" class="btn btn-primary" >Regresar</a>


<br>

</div>