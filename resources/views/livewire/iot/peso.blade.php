<div>
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">IOT</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Iot 1</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Listado Peos de Huevos</h3>
                <p class="text-muted m-b-30">Peso</p>
                <div class="table-responsive">
                    <table  class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Peso g.</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultas as $consulta)
                            <tr>
                                <td>{{$consulta->id}}</td>
                                <td>{{$consulta->codigo}}</td>
                                <td>{{$consulta->peso}}</td>
                              
                            </tr>
                            @endforeach
                           
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
</div>
