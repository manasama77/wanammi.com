<!-- Icon Cards-->
<div class="row mb-3">
  <div class="col-xl-6 col-md-6 col-sm-6 mb-1">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-users"></i>
        </div>
        <div class="mr-5"><?=$count_visit;?> <br>Total Visitor</div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-md-6 col-sm-6 mb-1">
    <div class="card text-white bg-info o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-users"></i>
        </div>
        <div class="mr-5"><?=$count_visit_today;?> <br>Today Visitor</div>
      </div>
    </div>
  </div>
</div>

<!-- Area Chart Example-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Visitor Chart</div>
  <div class="card-body">
    <canvas id="myChart" width="100%" height="40%"></canvas>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Demo scripts for this page-->
<script src="<?=base_url('vendor/sbadmin2/js/Chart.min.js');?>"></script>
<script type="text/javascript">
$(document).ready(function(){
  getChartData();
});

///////////////////////////////////////////////////////////////////////////////// RED LINE


function getChartData()
{
  $.ajax({
    url: "<?=site_url('chart_visit');?>",
    dataType: 'JSON',
    beforeSend: function(){
      $.blockUI({ message: '<h5>Please Wait...</h5>' });
    },
    success: function (result) {
      var data = [];
      data.push(result.thisWeek);
      var labels = result.labels;
      renderChart(data, labels);
      console.log(data);
      $.unblockUI();
    },
    error: function (err) {
      generateToast('Something Wrong', 'Failed to generate Chart', 'info');
      $.unblockUI();
    }
});
}

function renderChart(data, labels) {
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
          label: 'This week',
          data: data[0],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            min: 0
          }
        }]
      },
    }
  });
}
</script>