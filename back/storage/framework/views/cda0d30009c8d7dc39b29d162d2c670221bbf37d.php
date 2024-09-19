<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Dashboard')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1><?php echo e(__('admin.Dashboard')); ?></h1>
      </div>

      <div class="section-body">




        <div class="row">



            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4><?php echo e(__('admin.Total Order')); ?></h4>
                    </div>
                    <div class="card-body">
                    <?php echo e($total_total_order); ?>

                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4><?php echo e(__('admin.Total Balance')); ?></h4>
                    </div>
                    <div class="card-body">
                      <?php echo e($currency_icon->icon); ?><?php echo e($total_total_earning); ?>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-undo"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4><?php echo e(__('admin.Total Withdraw')); ?></h4>
                    </div>
                    <div class="card-body">
                      <?php echo e($currency_icon->icon); ?><?php echo e($total_withdraw_approved); ?>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4><?php echo e(__('admin.Total Product')); ?></h4>
                    </div>
                    <div class="card-body">
                      <?php echo e($total_total_product); ?>

                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4><?php echo e(__('admin.Order Statistics')); ?></h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="javascript:;" id="weeklyReport" class="btn btn-primary"><?php echo e(__('admin.Week')); ?></a>
                      <a href="javascript:;" id="monthlyReport" class="btn"><?php echo e(__('admin.Month')); ?></a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="myChart" height="120"></canvas>
                  <canvas id="myChartMontly" class="d-none" height="120"></canvas>

                </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                      <h4><?php echo e(__('admin.Recent Orders')); ?></h4>
                      <div class="card-header-action">
                        <a href="<?php echo e(route('admin.all-booking')); ?>" class="btn btn-danger"><?php echo e(__('admin.View More')); ?> <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th ><?php echo e(__('admin.Customer')); ?></th>
                                    <th ><?php echo e(__('admin.Amount')); ?></th>
                                    <th ><?php echo e(__('admin.Quantity')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $order_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $order_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order_item->user->name); ?></td>

                                        <td><?php echo e($setting->currency_icon); ?><?php echo e(round($order_item->option_price)); ?></td>

                                        <td><?php echo e($order_item->qty); ?></td>

                                        <td>

                                          <a href="<?php echo e(route('admin.order-show',$order_item->order_id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>


                      </div>
                    </div>
                </div>
            </div>
        </div>


      </div>

    </section>
  </div>



  <script src="<?php echo e(asset('backend/js/page/chart.min.js')); ?>"></script>

<script>

    let currency_icon = "<?php echo e(Session::get('currency_icon')); ?>"
    $("#monthlyReport").on("click", function(){
        $(this).addClass('btn-primary')
        $("#weeklyReport").removeClass('btn-primary')
        $("#yearlyReport").removeClass('btn-primary')

        $("#myChart").addClass('d-none')
        $("#myChartMontly").removeClass('d-none')

    })

    $("#weeklyReport").on("click", function(){
        $(this).addClass('btn-primary')
        $("#monthlyReport").removeClass('btn-primary')
        $("#yearlyReport").removeClass('btn-primary')

        $("#myChart").removeClass('d-none')
        $("#myChartMontly").addClass('d-none')

    })


    function loadMonthlyChart(){

        let monthly_lable = <?php echo json_encode($monthly_lable, 15, 512) ?>;
        monthly_lable = JSON.parse(monthly_lable);

        let monthly_data_for_order = <?php echo json_encode($monthly_data_for_order, 15, 512) ?>;
        monthly_data_for_order = JSON.parse(monthly_data_for_order);

        let dynamic_label = monthly_lable;

        let dynamic_data_for_booking = monthly_data_for_order;


        var statistics_chart = document.getElementById("myChartMontly").getContext("2d");

        var myChart = new Chart(statistics_chart, {
            type: "line",
            data: {
                labels: dynamic_label,
                datasets: [
                    {
                        label: currency_icon,
                        data: dynamic_data_for_booking,
                        borderWidth: 5,
                        borderColor: "#3A70FF",
                        backgroundColor: "transparent",
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#3A70FF",
                        pointRadius: 4,
                    }
                ],
            },
            options: {
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [
                        {
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },

                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                color: "#fbfbfb",
                                lineWidth: 2,
                            },
                        },
                    ],
                },
            },
        });

    }


    function loadWeeklyChart(){

        let weekly_lable = <?php echo json_encode($weekly_lable, 15, 512) ?>;
        weekly_lable = JSON.parse(weekly_lable);



        let weekly_data_for_order = <?php echo json_encode($weekly_data_for_order, 15, 512) ?>;
        weekly_data_for_order = JSON.parse(weekly_data_for_order);

        let dynamic_label = weekly_lable;

        let dynamic_data_for_booking = weekly_data_for_order;


        var statistics_chart = document.getElementById("myChart").getContext("2d");

        var myChart = new Chart(statistics_chart, {
            type: "line",
            data: {
                labels: dynamic_label,
                datasets: [
                    {
                        label: currency_icon,
                        data: dynamic_data_for_booking,
                        borderWidth: 5,
                        borderColor: "#3A70FF",
                        backgroundColor: "transparent",
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#3A70FF",
                        pointRadius: 4,
                    }
                ],
            },
            options: {
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [
                        {
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },

                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                color: "#fbfbfb",
                                lineWidth: 2,
                            },
                        },
                    ],
                },
            },
        });

    }

    loadWeeklyChart()
    loadMonthlyChart()

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\axtro\axtro_laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>