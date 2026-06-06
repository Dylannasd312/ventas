@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Eliminar un cliente</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">¿Estas seguro de eliminar este cliente?</h5>

            <p>
              Una vez eliminado el cliente no podrá ser recuperado.
            </p>

            <table class="table">

              <thead>
                <tr>
                  <th class="text-center">Nombres</th>
                  <th class="text-center">Apellidos</th>
                  <th class="text-center">NIT</th>
                  <th class="text-center">Teléfono</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Tipo Cliente</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">

                  <td>{{ $item->nombres }}</td>
                  <td>{{ $item->apellidos }}</td>
                  <td>{{ $item->nit }}</td>
                  <td>{{ $item->telefono }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->ciudad }}</td>
                  <td>{{ $item->tipo_cliente }}</td>

                </tr>
              </tbody>

            </table>

            <br>

            <form action="{{ route('clientes.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger mt-3">Eliminar cliente</button>

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
