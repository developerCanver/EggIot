<div>

    <div class="row bg-title m-3">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Clasificaciones</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
                class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                Now</a>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Dashboard</a></li>
                <li class="active">Clasificaciones</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <br>

    <h3 class="box-title">Clasificacion de Huevos según su peso </h3>
    <br>

    <div class="row">
        <div class="col-sm-6 col-12 mb-3">
            <div class="mb-3">
                <table class="table table-dark full-color-table full-inverse-table hover-table">
                    <thead>
                        <tr>
                            <th scope="col">Categorías</th>
                            <th scope="col">Peso en Gramos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jumbp</td>
                            <td>78.0 g</td>
                        </tr>
                        <tr>
                            <td>AAA</td>
                            <td>67.0 - 77.9 g</td>
                        </tr>
                        <tr>
                            <td>AA</td>
                            <td>60.0 - 66.9 g</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>53.0 - 59.9 g</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>46.0 - 52.9 g</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>
                                &lt; 46.0 g
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6 col-12 mb-3">
            <div class="mb-3">
                @php
                    $Pjumbo=round(($jumbo/35), 1);
                    $PAAA=round(($AAA/35), 1);
                    $PAA=round(($AA/35), 1);
                    $PA=round(($A/35), 1);
                    $PB=round(($B/35), 1);
                    $PC=round(($C/35), 1);
                    $totalPanales=$Pjumbo+$PAAA+$PAA+$PA+$PB+$PC;
                @endphp
                <table class="table table-dark full-color-table full-inverse-table hover-table">
                    <thead>
                        <tr>
                            <th scope="col">Categorías</th>
                            <th scope="col">Cantidad de Huevos</th>
                            <th scope="col">Cantidad Panales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Jumbp</td>
                            <td>{{$jumbo}}</td>
                            <td>{{$Pjumbo}}</td>
                        </tr>
                        <tr>
                            <td>AAA</td>
                            <td>{{$AAA}}</td>
                            <td>{{$PAAA}}</td>
                        </tr>
                        <tr>
                            <td>AA</td>
                            <td>{{$AA}}</td>
                            <td>{{$PAA}}</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>{{$A}}</td>
                            <td>{{$PA}}</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>{{$B}}</td>
                            <td>{{$PB}}</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>{{$C}}</td>
                            <td>{{$PC}}</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th scope="col" style="    
                            background-color: #f9fafb;                           
                            color: #040404;">Cantidad Total:</th>

                            <th scope="col"  style="    
                            background-color: #f9fafb;                           
                            color: #040404;">{{$jumbo+$AAA+$AA+$A+$B+$C}}</th>
                            
                            <th scope="col"  style="    
                            background-color: #f9fafb;                           
                            color: #040404;">{{$totalPanales}}</th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
