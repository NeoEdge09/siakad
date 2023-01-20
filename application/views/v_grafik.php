<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo base_url() ?>/assets/chart/Chart.js"></script>
    <title>Grafik dengan chart</title>
</head>
<body>
<div class="content-wrapper">
    <section class="content">
<br>
    <h4>Grafik Data Mahasiswa</h4>
    <canvas id="myChart" style="width: 100px; max-width: 800px;"></canvas>
    <?php
    $nama_jurusan= " ";
    $jumlah=null;

    foreach ($hasil as $item){
        $jur=$item->jurusan;
        $nama_jurusan .="'$jur',";
        $jum=$item->total;
        $jumlah .="$jum,";
        
    }
    
    ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: [<?php echo $nama_jurusan ?>],
                datasets: [{
                    label: 'Grafik Data Mahasiswa', 
                    backgroundColor: [  'rgb(147,112,219)',
                                        'rgb(255, 159, 64)',
                                        'rgb(0,255,0)', 
                                        'rgb(255,255,0)', 
                                        'rgb(54, 162, 235)', 
                                        'rgb(153, 102, 255)', 
                                        'rgb(205,133,63)'],
                    borderColor: 'rgb(105,105,105)',
                    data: [<?php echo $jumlah ?>]
                }]
            },

            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <a href="<?= base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
    
</body>
</html>























