@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Clientes</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Administrar Clientes</h5>

            <p>
              Administrar los clientes registrados en el sistema.
            </p>

            <a href="{{ route('clientes.create') }}" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar nuevo cliente
            </a>

            <hr>

            <table class="table datatable">

              <thead>
                <tr>
                  <th class="text-center">Nombres</th>
                  <th class="text-center">Apellidos</th>
                  <th class="text-center">NIT</th>
                  <th class="text-center">Teléfono</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Tipo</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($items as $item)
                <tr class="text-center">

                  <td>{{ $item->nombres }}</td>
                  <td>{{ $item->apellidos }}</td>
                  <td>{{ $item->nit }}</td>
                  <td>{{ $item->telefono }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->ciudad }}</td>
                  <td>{{ $item->tipo_cliente }}</td>

                  <td>

                    <a href="{{ route('clientes.edit', $item->id) }}" class="btn btn-warning">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{ route('clientes.show', $item->id) }}" class="btn btn-danger">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>

                  </td>

                </tr>
                @endforeach

              </tbody>

            </table>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection
