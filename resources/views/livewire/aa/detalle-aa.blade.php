<div>
    <div class="row m-5">
        <div class="col-11">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Agregar Huevo</button>
        </div>
    </div>
    <br>
    <br>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Agregar Huevo</h4>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Peso Huevo:</label>
                        <input type="number" required class="form-control" wire:model="weight">
                        @error('weight') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Distribuidora Iot</label>
                            <select wire:model="iots_id" required class="form-control">
                                <option value="" selected>Seleccione Distribuidora...</option>
                                @foreach ($distribuidoraIot as $distribuidora)
                                <option value="{{$distribuidora->id_iot }}">{{$distribuidora->nameIot}}
                                </option>
                                @endforeach
                            </select>
                            @error('iots_id') <span class="text-danger">{{ $message }}</span>@enderror
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
                    <table id="datatable-buttons" class="table color-table dark-table">

                        <thead>
                            <tr>
                                <th>#ID </th>
                                {{-- <th>Codigo </th> --}}
                                <th>Peso</th>
                                <th>Iot </th>
                                <th>Fecha y Hora</th>
                       
                                <th>Opción</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultas as $consulta)
                            <tr>
                                <td>{{$consulta->id_egg}}</td>
                                {{-- <td>{{$consulta->code}}</td> --}}
                                <td>{{$consulta->weight}}</td>
                                <td>{{$consulta->nameIot}}</td>
                                <td>{{$consulta->created_at}}</td>
                            
                                <td>
                                    <button data-toggle="modal" data-target="#updateModal"
                                        wire:click="edit({{ $consulta->id_egg }})"
                                        class="btn btn-primary btn-sm">Edit</button>

                                    <button onclick="MuestraAlert({{$consulta->id_egg}})" class="btn btn-danger btn-sm">
                                        <i class=" icon-trash"></i>
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
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">Editar Usuario</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Peso Huevo:</label>
                                        <input type="number" required class="form-control" wire:model="weight">
                                        @error('weight') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput2">Distribuidora Iot</label>
                                            <select wire:model="iots_id" required class="form-control">
                                                <option value="" selected>Seleccione Distribuidora...</option>
                                                @foreach ($distribuidoraIot as $distribuidora)
                                                <option value="{{$distribuidora->id_iot }}">{{$distribuidora->nameIot}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('iots_id') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" style="background: #ffffff;color:#1a2942;"
                                            class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                                        <button type="button" wire:click.prevent="update({{ $id_egg }})"
                                            class="btn btn-primary">Actualizar</button>
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
        <div class="alert alert-info" role="alert">
            <center>
                No existe ningún dato! 😥
            </center>
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