<div>

    <div class=" card">
        {{-- <div class="row">
        <div class="col-md-3"> 
            <div class="form-floating mb-3">
                <label for="floatingInput">DE</label>
                <input class="form-control mr-sm-2" wire:model.debounce.300ms="de" type="search" placeholder="Buscar" aria-label="de">
          </div>
        </div>
        <div class="col-md-3"> 
            <div class="form-floating mb-3">
                <label for="floatingInput">Hasta</label>
            <input type="search" class="form-control"  wire:model="hasta">
          </div>
        </div>
        
    </div> 
    <br>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary">Buscar</button>

                <button type="button" class="btn btn-info">Limpiar</button>
            </div>
        </div> --}}

    </div>
    <br>
</div>
<br>



<canvas id="myChart" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>

<script type="text/javascript">
    function crearCadenaLineal(json) {
        var parsed = JSON.parse(json);
        var arr = [];

        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script>
    fechas = crearCadenaLineal('<?php echo $fechas ?>');
    pesos = crearCadenaLineal('<?php echo $pesos ?>');

    console.log(pesos)
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: fechas,
            datasets: [{
                label: 'Grafica Total de Huevos',
                data: pesos,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },

        options: {

            responsive: false,
            scales: {
                xAxes: [{
                    ticks: {
                        minRotation: 90
                    }
                }]
            }
        }

    });

</script>

</div>
