<div>
    <style>
        .myButton {
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	background-color:#7892c2;
	border-radius:14px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:16px;
	padding:8px 37px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.myButton:hover {
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	background-color:#476e9e;
}
.myButton:active {
	position:relative;
	top:1px;
}

      

    </style>
    <div class="container-fluid">
       
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg">
                         {{-- <img width="100%" alt="user" src="../plugins/images/large/img1.jpg"> --}}
                         <img width="100%" alt="user" src="/img/users/{{$img}}" >
                        <div class="overlay-box" style="background: #4f5467;">
                            <div class="user-content">
                                {{-- <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a> --}}
                                <h4 class="text-white">{{$nombre}}</h4>
                  
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>
                            {{-- <h1>258</h1> --}}
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="ti-twitter"></i></p>
                            {{-- <h1>125</h1> --}}
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="ti-dribbble"></i></p>
                            {{-- <h1>556</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <ul class="nav nav-tabs tabs customtab">
                        
                        <li class="tab active">
                            <a href="#" style="    font-weight: 500;" wire:click="edit" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Información</span> </a>
                        </li>
                    </ul>
                    @if ($estadoEdit==1)
                        
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings">
                           <form wire:ignore.self>
                                <div class="form-group">
                                    <label class="col-md-12">Nombres</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe" wire:model="name" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Correo</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="pepito@gmail.com" class="form-control form-control-line"  wire:model="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password"  wire:model="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Imagen</label>
                                    <div class="col-md-12">
                                        <input type="file" wire:model="imagen" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-success" wire:click.prevent:click="update({{ $primary }})">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .right-sidebar -->
       
        <!-- /.right-sidebar -->
    </div>
</div>
