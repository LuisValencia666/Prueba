<form action="{{url('/prueba/'.$prueba->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('prueba.formulario')
</form>
