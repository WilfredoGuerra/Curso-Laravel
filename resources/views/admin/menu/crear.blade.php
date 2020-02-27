@extends("theme.$theme.layout")
@section('titulo')
    Sistema de Menús
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Menús</h3>
            </div>
                <form method="POST" class="form-horizontal" action="{{route('guardar_menu')}}" id="form-general">
                    @csrf
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-2"></div>
                            <div class="col-lg-6">
                                @include('includes.boton-form-crear')
                            </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection