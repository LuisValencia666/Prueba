<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Semestre</th>
            <th>Grupo</th>
            <th>Turno</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prueba as $prueba)
        <tr>
            <td>{{$prueba->id}}</td>
            <td>{{$prueba->nombre}}</td>
            <td>{{$prueba->apellidos}}</td>
            <td>{{$prueba->edad}}</td>
            <td>{{$prueba->email}}</td>
            <td>{{$prueba->telefono}}</td>
            <td>{{$prueba->semestre}}</td>
            <td>{{$prueba->grupo}}</td>
            <td>{{$prueba->turno}}</td>
            <td>
            <a href = "{{url('/prueba/'.$prueba->id.'/edit')}}" method = "post">
                Editar
            </a>
                <form action="{{url('/prueba/'.$prueba->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Borrar" onclick = "return confirm('Confirmar borrado')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>