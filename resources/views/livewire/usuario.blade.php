<div>

    <div class="row bg-title m-3">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Usuarios</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
                class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                Now</a>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Dashboard</a></li>
                <li class="active">Usuarios</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <br>
    <br>

    <div class="row m-5">
        <div class="col-11">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Agregar Usuario</button>
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
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Nombre:</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Correo</label>
                        <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Contraseña</label>
                        <input type="password" class="form-control" wire:model="password" id="exampleFormControlInput2">
                        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Imagen</label>
                        <input type="file" class="form-control" wire:model="profile_photo_path"
                            id="exampleFormControlInput2">
                        @error('profile_photo_path') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Tipo Usuario</label>
                            <select wire:model="rol_id" class="form-control">
                                <option value="" selected>Seleccione Tipo usuario...</option>
                                @foreach ($roles as $rol)
                                <option value="{{$rol->id_rol}}">{{$rol->nameRol}}</option>
                                @endforeach
                            </select>
                            @error('rol_id') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Distribuidora</label>
                            <select wire:model="distribuidora_id" class="form-control">
                                <option value="" selected>Seleccione Distribuidora...</option>
                                @foreach ($distribuidoras as $distribuidora)
                                <option value="{{$distribuidora->id_distributor }}">{{$distribuidora->nameDistributor}}</option>
                                @endforeach
                            </select>
                            @error('distribuidora_id') <span class="text-danger">{{ $message }}</span>@enderror
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
                                <th>Img </th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Rol Usuario</th>
                                <th>Distribuidora</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultas as $consulta)
                            <tr>
                                <td>{{$consulta->id}}</td>
                                <td>{{$consulta->profile_photo_path}}</td>
                                <td>{{$consulta->name}}</td>
                                <td>{{$consulta->email}}</td>
                                <td>{{$consulta->nameRol  }}</td>
                                <td>{{$consulta->nameDistributor  }}</td>

                                <td>
                                    <button data-toggle="modal" data-target="#updateModal"
                                        wire:click="edit({{ $consulta->id }})"
                                        class="btn btn-primary btn-sm">
                                       <i class="icon-note"></i></button>

                                    <button onclick="MuestraAlert({{$consulta->id}})" class="btn btn-danger btn-sm">
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
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-white">Editar Usuario</h4>
                        </div>
                            <div class="modal-body">

                                <div class="form-group">                                   
                                    <label for="exampleFormControlInput1">Nombre:</label>
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Telefono</label>
                                    <input type="email" class="form-control" wire:model="email"
                                        id="exampleFormControlInput2">
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Contraseña</label>
                                    <input type="password" class="form-control" wire:model="password" id="exampleFormControlInput2">
                                    @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                             
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Dirección</label>
                                    <input type="file" class="form-control" wire:model="profile_photo_path"
                                        id="exampleFormControlInput2">
                                    @error('profile_photo_path') <span
                                        class="text-danger">{{ $message }}</span>@enderror
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Tipo Usuario</label>
                                        <select wire:model="rol_id" class="form-control">
                                            <option value="" selected>Seleccione Tipo usuario...</option>
                                            @foreach ($roles as $rol)
                                            <option value="{{$rol->id_rol}}">{{$rol->nameRol}}</option>
                                            @endforeach
                                        </select>
                                        @error('rol_id') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Distribuidora</label>
                                        <select wire:model="distribuidora_id" class="form-control">
                                            <option value="" selected>Seleccione Distribuidora...</option>
                                            @foreach ($distribuidoras as $distribuidora)
                                            <option value="{{$distribuidora->id_distributor }}">{{$distribuidora->nameDistributor}}</option>
                                            @endforeach
                                        </select>
                                        @error('distribuidora_id') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" style="background: #ffffff;color:#1a2942;"
                                        class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                                    <button type="button" wire:click.prevent="update({{ $primary }})"
                                        class="btn btn-primary" >Actualizar</button>
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
