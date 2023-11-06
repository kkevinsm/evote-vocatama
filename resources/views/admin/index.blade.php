@extends('layouts.dashboard')

@section('content')
<section class="section" style="min-height: 80vh;">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-12">
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
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Perolehan Suara Ikatan Pelajar Muhammadiyah</div>
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

        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Perolehan Suara Hizbul Wathan</div>
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
            <canvas id="hw"></canvas>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Perolehan Suara Tapak Suci</div>
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
            <canvas id="ts"></canvas>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ipm = document.getElementById('ipm');
  const hw = document.getElementById('hw');
  const ts = document.getElementById('ts');

  new Chart(ipm, {
    type: 'pie',
    data: {
      labels: ['Calon 1', 'Calon 2'],
      datasets: [{
        label: '# of Votes',
        data: [56,44],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(hw, {
    type: 'pie',
    data: {
      labels: ['Calon 1', 'Calon 2'],
      datasets: [{
        label: '# of Votes',
        data: [56,44],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ts, {
    type: 'pie',
    data: {
      labels: ['Calon 1', 'Calon 2'],
      datasets: [{
        label: '# of Votes',
        data: [56,44],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</section>
@endsection