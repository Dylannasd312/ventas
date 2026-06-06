@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar Cliente</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Editar Cliente</h5>

            <form action="{{ route('clientes.update', $item->id) }}" method="POST">
                @csrf
                @method("PUT")

                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" required name="nombres" id="nombres" value="{{ $item->nombres }}">

                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" required name="apellidos" id="apellidos" value="{{ $item->apellidos }}">

                <label for="nit">NIT</label>
                <input type="text" class="form-control" name="nit" id="nit" value="{{ $item->nit }}">

                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $item->telefono }}">

                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $item->email }}">

                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $item->direccion }}">

                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="{{ $item->ciudad }}">

                <label for="razon_social">Razón Social</label>
                <input type="text" class="form-control" name="razon_social" id="razon_social" value="{{ $item->razon_social }}">

                <label for="tipo_cliente">Tipo Cliente</label>
                <select name="tipo_cliente" id="tipo_cliente" class="form-control">

                    <option value="A" {{ $item->tipo_cliente == 'A' ? 'selected' : '' }}>
                        Cliente A
                    </option>

                    <option value="B" {{ $item->tipo_cliente == 'B' ? 'selected' : '' }}>
                        Cliente B
                    </option>

                    <option value="C" {{ $item->tipo_cliente == 'C' ? 'selected' : '' }}>
                        Cliente C
                    </option>

                </select>

                <label for="actividad">Actividad</label>
                <textarea name="actividad" id="actividad" cols="30" rows="5" class="form-control">{{ $item->actividad }}</textarea>

                <button class="btn btn-warning mt-3">Actualizar</button>

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
