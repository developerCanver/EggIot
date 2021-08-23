<div wire:poll>
    <style>
        .border {
            border-radius: 7px;
        }

    </style>


    <div class="row">
        <div class="col-md-12">
            <div class="white-box">

                <h3 class="box-title">INFORMACIÓN GENERAL DE SELECCIÓN DE HUEVO TIPO B </h3>
            </div>
        </div>
    </div>

    <br>
    <br>
    @if ($huevo)
    <div class="row" style="background: #207582cf;
    -webkit-box-shadow: 0px 0px 6px 5px rgb(0 0 0 / 51%);
    box-shadow: 0px 4px 22px 7px rgb(0 0 0 / 51%);">

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="white-box border">
                <h3 class="box-title">Peso Del Huevo Establecido</h3>
                <div class="text-right"> <span class="text-muted">{{$huevo->created_at }}</span>
                    <h1 ><sup><i class="ti-arrow-up text-success"></i></sup>{{$huevo->weight}}</h1>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="white-box border">
                <h3 class="box-title">Huevos</h3>
                <div class="text-right"> <span class="text-muted">Total</span>
                    <h1 ><sup><i class="ti-arrow-up text-success"></i></sup>{{$cantidadHuevos}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="white-box border">
                <h3 class="box-title">Panales</h3>
                <div class="text-right"> <span class="text-muted">Total</span>
                    <h1 ><sup><i class="ti-arrow-up text-success"></i></sup>{{$panales}}</h1>
                </div>

            </div>
        </div>


    </div>
    @else
    <div class="alert alert-info" role="alert">
        <center>
            No existe ningún dato!
        </center>
    </div>

    @endif
    <br>
    <br>

</div>
