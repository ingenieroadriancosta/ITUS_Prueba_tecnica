@extends( 'layout' )
@section( 'content_title' )
HOME
@endsection
@section( 'h1_main' )
@endsection
@section( 'content_inicio' )


<form method="POST">
    @csrf
    {!! $errors->first( 'nombre', "<small style='color:red'>:message</small><br>" ) !!}
    <input name="nombre" placeholder="Nombre" value="{{ old('subject') }}"> <br>

    {!! $errors->first( 'apellidos', "<small style='color:red'>:message</small><br>" ) !!}
    <input name="apellidos" placeholder="Apellidos" value="{{ old('subject') }}"> <br>

    {!! $errors->first( 'cedula', "<small style='color:red'>:message</small><br>" ) !!}
    <input name="cedula" placeholder="Cedula" value="{{ old('subject') }}"> <br>

    {!! $errors->first( 'telefono', "<small style='color:red'>:message</small><br>" ) !!}
    <input name="telefono" placeholder="Telefono" value="{{ old('subject') }}"> <br>
    <button>Enviar</button> <br>
</form>



@endsection
