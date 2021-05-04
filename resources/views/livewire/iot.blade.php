<div>

    <div class="row bg-title m-3">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Iot</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
                class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                Now</a>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Dashboard</a></li>
                <li class="active">Iot</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <br>
    <br>

    <div class="row m-5">
        <div class="col-11">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Agregar Iot</button>
        </div>
    </div>
    <br>
    <br>
    {{-- @ if ($isOpen)  Modal--}}
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Agregar Usuario</h4>
                </div>
                <div class="modal-body">


                    <div class="form-group">                       
                        <label for="exampleFormControlInput1">Nombre:</label>
                        <input type="text" class="form-control" wire:model="nameIot">
                        @error('nameIot') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Estado:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="animal" wire:model="status" value="1"
                                class="custom-control-input" checked>
                            <label class="custom-control-label text-xs" for="customRadio1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" wire:model="status" name="animal" value="0"
                                class="custom-control-input">
                            <label class="custom-control-label text-xs" for="customRadio2">Desactivada</label>
                        </div>
                        @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Distribuidora</label>
                            <select wire:model="distributor_id">
                                <option value="" selected>Seleccione Distribuidora...</option>
                                @foreach ($distribuidoras as $distribuidora)
                                <option value="{{$distribuidora->id_distributor}}">{{$distribuidora->nameDistributor}}</option>
                                @endforeach
                            </select>
                            @error('distributor_id') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" style="background: #ffffff;color:#1a2942;"
                            class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                        <button type="submit" wire:click="store" style="background: #009ef4;"
                            class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @ endif --}}



    @if ($consultas->isNotEmpty())
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    {{-- @if ($contadorSelect > 1)
                                                    <button onclick="alertDelAll({{$contadorSelect}})" class="btn
                    btn-danger ml-2 float-right">
                    Eliminar {{$contadorSelect}}, Registros
                    </button>
                    @endif --}}

                    <table id="datatable-buttons" class="table color-table dark-table">

                        <thead>
                            <tr>
                                <th>#ID </th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Distribuidora</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultas as $consulta)
                            <tr>
                                <td>{{$consulta->id_iot}}</td>
                                <td>{{$consulta->nameIot}}</td>
                                <td>
                                @if ($consulta->status == 1)
                                <span class="label label-rouded label-success pull">On</span>
                                @else
                                <span class="label label-rouded label-danger pull">Off</span>
                                @endif
                            </td>
                               
                                <td>{{$consulta->nameDistributor  }}</td>

                                <td>
                                    <button data-toggle="modal" data-target="#updateModal"
                                        wire:click="edit({{ $consulta->id_iot }})"
                                        class="btn btn-primary btn-sm">Edit</button>

                                    <button onclick="MuestraAlert({{$consulta->id_iot}})" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <p>
                        Resultado {{$consultas->firstItem()}} - {{$consultas->lastItem()}} / {{$consultas->total()}}
                    </p>
                    <div class="rol">
                        {{ $consultas->links() }}
                    </div>


                {{-- modal para editar cada tarjeta--}}
                <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header p-3 mb-2 bg-primary ">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-white">Editar Usuario</h4>
                        </div>
                            <div class="modal-body">

                                <div class="form-group">                       
                                    <label for="exampleFormControlInput1">Nombre:</label>
                                    <input type="text" class="form-control" wire:model="nameIot">
                                    @error('nameIot') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Estado:</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="animal" wire:model="status" value="1"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label text-xs" for="customRadio1">Activo</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" wire:model="status" name="animal" value="0"
                                            class="custom-control-input">
                                        <label class="custom-control-label text-xs" for="customRadio2">Desactivada</label>
                                    </div>
                                    @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Distribuidora</label>
                                        <select wire:model="distributor_id">
                                            <option value="" selected>Seleccione Distribuidora...</option>
                                            @foreach ($distribuidoras as $distribuidora)
                                            <option value="{{$distribuidora->id_distributor}}">{{$distribuidora->nameDistributor}}</option>
                                            @endforeach
                                        </select>
                                        @error('distributor_id') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" style="background: #ffffff;color:#1a2942;"
                                        class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                                    <button type="button" wire:click.prevent="update({{ $primary }})"
                                        class="btn btn-primary" data-dismiss="modal">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FIN ACTUALIZAR USUARIO  --}}


    @else
    <div class="container m-5">
        <div class="alert alert-primary" role="alert">
            <p class="text-center m-3"> Ups! no hay registros 😥</p>
        </div>
    </div>
    @endif
</div>

<script>
    function MuestraAlert(id) {
        Swal.fire({
            title: 'Esta seguro de eliminar ID ' + id + '?',
            text: "Una vez borrado, no se podrá deshacer los cambios!",

            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Continuar'
        }).then((result) => {
            if (result.isConfirmed) {
                //console.log(id); 
                @this.destroy(id);
            }
        })
    }

</script>
</div>
