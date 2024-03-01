@extends('layouts.dashboard')

@section('content')
<section class="section" style="min-height: 80vh;">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Statistik</div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $formaturs->count() }}</div>
                            <div class="card-stats-item-label">Calon</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $pemilihs->count() }}</div>
                            <div class="card-stats-item-label">Total Pemilih</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $sudahs }}</div>
                            <div class="card-stats-item-label">Sudah Memilih</div>
                        </div>

                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $belums }}</div>
                            <div class="card-stats-item-label">Belum Memilih</div>
                        </div>
                    </div>
                </div>
                <div class="card-wrap">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="display: flex; justify-content: space-evenly;">
        <div class="col-lg-12 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Perolehan Suara Calon Formatur IPM SEPANJANG</div>
                    @foreach($formaturs as $formatur)
                    <?php 
                        $jumlah = 0;
                        foreach ($pilihans as $pilihan) {
                            if($formatur->id == $pilihan->untuk){
                                $jumlah++;
                            }
                        }
                    ?>
                    @endforeach
                </div>
            </div>
            <canvas id="ipm"></canvas>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ipm = document.getElementById('ipm');

  new Chart(ipm, {
    type: 'bar',
    data: {
      labels: [
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
        'ERLANGGA',
        'RIZKA' ,
      ],
      datasets: [{
        axis: 'y',
        label: '# of Votes',
        data: [
        {{ $suara_ipm_1 }}, {{ $suara_ipm_2 }}, {{ $suara_ipm_3 }}, {{ $suara_ipm_4 }}, {{ $suara_ipm_5 }},
        {{ $suara_ipm_6 }}, {{ $suara_ipm_7 }}, {{ $suara_ipm_8 }}, {{ $suara_ipm_9 }}, {{ $suara_ipm_10 }},
        {{ $suara_ipm_11 }}, {{ $suara_ipm_12 }}, {{ $suara_ipm_13 }}, {{ $suara_ipm_4 }}, {{ $suara_ipm_15 }},
        {{ $suara_ipm_16 }}, {{ $suara_ipm_17 }}, {{ $suara_ipm_18 }}, {{ $suara_ipm_19 }}, {{ $suara_ipm_20 }},
        {{ $suara_ipm_21 }}, {{ $suara_ipm_22 }}, {{ $suara_ipm_23 }}, {{ $suara_ipm_24 }}, {{ $suara_ipm_25 }},
        ],
        backgroundColor: [
        'rgba(255, 99, 132)',
        'rgba(255, 159, 64)',
        'rgba(75, 192, 192)',
        'rgba(54, 162, 235)',
        'rgba(153, 102, 255)',
        'rgba(255, 99, 132)',
        'rgba(255, 159, 64)',
        'rgba(75, 192, 192)',
        'rgba(54, 162, 235)',
        'rgba(153, 102, 255)',
        'rgba(255, 99, 132)',
        'rgba(255, 159, 64)',
        'rgba(75, 192, 192)',
        'rgba(54, 162, 235)',
        'rgba(153, 102, 255)',
        'rgba(255, 99, 132)',
        'rgba(255, 159, 64)',
        'rgba(75, 192, 192)',
        'rgba(54, 162, 235)',
        'rgba(153, 102, 255)',
        'rgba(255, 99, 132)',
        'rgba(255, 159, 64)',
        'rgba(75, 192, 192)',
        'rgba(54, 162, 235)',
        'rgba(153, 102, 255)',
        ],
      }]
    },
    options: {
    indexAxis: 'y',
    },
  });
</script>
@endsection