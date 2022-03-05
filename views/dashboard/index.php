    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <h3 class = "" style = "padding: 20px;"> Welcome <?php echo $_SESSION['fname']; ?>! </h3>
          </div>
        </div>
    </div>


    <!-- Calendar -->
    <div class="row">
      <div class="col-md-12" >
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            
          </div>
    </div>
  </div>
         

  </section>
       


