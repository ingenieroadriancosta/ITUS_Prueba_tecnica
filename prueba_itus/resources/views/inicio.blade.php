@extends( 'layout' )
@section( 'content_title' )
HOME
@endsection
@section( 'h1_main' )
@endsection
@section( 'content_inicio' )


<form method="POST" >
    @csrf
    <input name="name" placeholder="Nombre" > <br>
    <input name="cedula" placeholder="Cedula" > <br>
    <button>Enviar</button> <br>
</form>

@if ( isset($h1_main) )
{{$h1_main}}
@endif


@endsection
