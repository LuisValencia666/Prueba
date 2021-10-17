<form action="{{url('/prueba')}}" method="post">
@csrf
@include('prueba.formulario');
</form>