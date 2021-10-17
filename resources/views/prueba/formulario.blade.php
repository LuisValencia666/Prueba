<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value = "{{$prueba->nombre}}" required>
<br>
<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" id="apellidos" value = "{{$prueba->apellidos}}" required>
<br>
<label for="edad">Edad</label>
<input type="number" name="edad" id="edad" value = "{{$prueba->edad}}" required>
<br>
<label for="email">Email</label>
<input type="email" name="email" id="email" value = "{{$prueba->email}}" required>
<br>
<label for="telefono">Teléfono</label>
<input type="tel"name="telefono" id="telefono" value = "{{$prueba->telefono}}" required pattern= "[0-9]{10}" title="Escribe los 10 números">
<br>
<label for="semestre">Semestre</label >
<input type="text" name="semestre" id="semestre" value = "{{$prueba->semestre}}" pattern= "[0-9]{1,2}"title="Escribe los números del 1 al 99">
<br>
<label for="grupo">Grupo</label>
<input type="text"name="grupo"  id="grupo" value = "{{$prueba->grupo}}" pattern= "[A-Z]{1}[0-9]{2}" title="Escribe una letra y dos número. Ejemplo: A12">
<br>
<label for="turno">Turno</label>
<input type="text"name="turno"  id="turno" value = "{{$prueba->turno}}" pattern= "[M,V]{1}" title="Escribe M o V">
<br>
<input type="submit">