@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Cliente</h1>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Agregar Nuevo Cliente</h5>

            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" required name="nombres" id="nombres">

                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" required name="apellidos" id="apellidos">

                <label for="nit">NIT</label>
                <input type="text" class="form-control" name="nit" id="nit">

                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono">

                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">

                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion">

                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad">

                <label for="razon_social">Razón Social</label>
                <input type="text" class="form-control" name="razon_social" id="razon_social">

                <label for="tipo_cliente">Tipo Cliente</label>
                <select name="tipo_cliente" id="tipo_cliente" class="form-control">
                    <option value="A">Cliente A</option>
                    <option value="B">Cliente B</option>
                    <option value="C">Cliente C</option>
                </select>

                <label for="actividad">Actividad</label>
                <textarea name="actividad" id="actividad" cols="30" rows="5" class="form-control"></textarea>

                <button class="btn btn-primary mt-3">Guardar</button>

                <a href="{{ route('clientes') }}" class="btn btn-info mt-3">
                    Cancelar
                </a>

            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection
