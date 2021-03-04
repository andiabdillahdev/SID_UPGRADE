@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Statistik</a></li>
            <li>Kependudukan</li>
          </ol>
          <h2>Kependudukan</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

      <section id="contact" class="contact">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 col-md-6">
                <canvas id="jk" width="100%" height="40%"></canvas>
              </div>
        
              <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
                <canvas id="kawin" width="100%" height="40%"></canvas>
              </div>

              <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
                <canvas id="dusun" width="100%" height="40%"></canvas>
              </div>

              <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
                <canvas id="agama" width="100%" height="40%"></canvas>
              </div>
        </div>
      </section>

  </main>




@endsection
@push('frontJs')
<script>
    $(document).ready(function () {

        var ctx = document.getElementById('jk').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Laki - Laki', 'Perempuan'],
        datasets: [{
           
            data: [<?= $laki ?> , <?= $wanita ?>],
            backgroundColor: [
                'rgba(133, 147, 174, 0.6)',
                'rgba(90, 78, 77, 0.6)'
            ],
            borderColor: [
                'rgba(133, 147, 174, 1)',
                'rgba(90, 78, 77, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {

    responsive: true,
    responsiveAnimationDuration : 0,
    maintainAspectRatio : true,
    aspectRatio :2,

    title: {
                     display: true,
                     position: 'top',
                     fontsize: 20,
                     text: 'Penduduk Berdasarkan Jenis Kelamin'
                 },
      scales: {
          yAxes: [{
            
              ticks: {
                  beginAtZero: true,
                  
              }
             
          }],

          xAxes: [{
            
    gridLines: {
      display: false
    },

 

  }]
      },

      legend: {
    display: false,
    labels: {
              // This more specific font property overrides the global property
              fontSize :5,
          }
  }
  }

});

});

var ctx = document.getElementById('kawin').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Kawin', 'Belum Kawin','Janda /  Duda'],
        datasets: [{
           
            data: [<?= $kawin ?> , <?= $belum ?>, <?= $janda ?>],
            backgroundColor: [
                'rgba(51, 82, 77, 0.6)',
                'rgba(170, 75, 65, 0.6)',
                'rgba(212, 221, 225, 0.6)'
                
            ],
            borderColor: [
                'rgba(51, 82, 77, 1)',
                'rgba(170, 75, 65, 1)',
                'rgba(212, 221, 225, 1)'
               
            ],
            borderWidth: 2
        }]
    },

  
    options: {

responsive: true,
responsiveAnimationDuration : 0,
maintainAspectRatio : true,
aspectRatio :2,

title: {
                     display: true,
                     position: 'top',
                     fontsize: 14,
                     text: 'Penduduk Berdasarkan Status Perkawinan'
                 },


      legend: {
    display: false,
    labels: {
              // This more specific font property overrides the global property
              fontSize :5,
          }
  }
  }

});

var ctx = document.getElementById('dusun').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Bonto Masunggu', 'Tonrong','Mattoanging','Batang-Batang'],
        datasets: [{
           
            data: [<?= $bonto ?> , <?= $tonrong ?>, <?= $mattoanging ?>, <?= $batang ?>],
            backgroundColor: [
                'rgba(76, 181, 245, 0.6)',
                'rgba(183, 184, 182, 0.6)',
                'rgba(52, 103, 92, 0.6)',
                'rgba(179, 193, 0, 0.6)'
            ],
            borderColor: [
                'rgba(76, 181, 245, 1)',
                'rgba(183, 184, 182, 1)',
                'rgba(52, 103, 92, 1)',
                'rgba(179, 193, 0, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {

responsive: true,
responsiveAnimationDuration : 0,
maintainAspectRatio : true,
aspectRatio :2,

title: {
                     display: true,
                     position: 'top',
                     fontsize: 20,
                     text: 'Penduduk Berdasarkan Wilayah Administratif'
                 },
      scales: {
          yAxes: [{
            
              ticks: {
                  beginAtZero: true,
                  
              }
             
          }],

          xAxes: [{
            
    gridLines: {
      display: false
    }
  }]
      },

      legend: {
    display: false,
    labels: {
              // This more specific font property overrides the global property
              fontSize :5,
          }
  }
  }

});

var ctx = document.getElementById('agama').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Islam', 'Kristen','Hindu','Buddha'],
        datasets: [{
           
            data: [<?= $islam ?> , <?= $kristen ?>, 0, 0],
            backgroundColor: [
                'rgba(76, 181, 245, 0.6)',
                'rgba(183, 184, 182, 0.6)',
                'rgba(52, 103, 92, 0.6)',
                'rgba(179, 193, 0, 0.6)'
            ],
            borderColor: [
                'rgba(76, 181, 245, 1)',
                'rgba(183, 184, 182, 1)',
                'rgba(52, 103, 92, 1)',
                'rgba(179, 193, 0, 1)'
            ],
            borderWidth: 2
        }]
    },

    options: {

responsive: true,
responsiveAnimationDuration : 0,
maintainAspectRatio : true,
aspectRatio :2,

title: {
                     display: true,
                     position: 'top',
                     fontsize: 30,
                     text: 'Penduduk Berdasarkan Agama'
                 },


      legend: {
    display: false,
    labels: {
              // This more specific font property overrides the global property
              fontSize :5,
          }
  }
  }

});

</script>
@endpush


