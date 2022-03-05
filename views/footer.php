    <div class="modal fade" id="add_student_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Student</h4>
              </div>
              <div class="modal-body">

                  <form role="form">
             <input type="hidden" class="form-control" id="edit_id">
                <!-- text input -->
                <!-- text input -->
                <div class="form-group">
                  <div class="row">
                  <div class="col-xs-12">
                  <label>LRN</label>
                    <input type="text" class="form-control" id="student_lrn" required maxlength="12">
                  </div>
                  <div class="col-xs-6">
                  <label>First Name</label>
                    <input type="text" class="form-control" id="student_fname" required>
                  </div>
                  <div class="col-xs-6">
                  <label>Last Name</label>
                    <input type="text" class="form-control" id="student_lname" required>
                  </div>
                   <div class="col-xs-6">
                    <label for="sel1">Gender</label>
                    <select class="form-control" id="student_gender">
                      <option value="" disabled selected>--SELECT--</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>

<!-- 
                    <input type="text" class="form-control" id="" required> -->
                  </div>
                   <div class="col-xs-6">
                  <label>Grade Level</label>
                     
  <select class="form-control" id="student_gradelevel">
                          <option value="" disabled selected>--SELECT--</option>
                      <?php foreach ($this->getGradeLevel as $key => $value) { ?>
                                <option value="<?php echo $value['grade_level'] ?>"><?php echo $value['grade_level'] ?></option>
                      <?php }  ?>
</select>
                    <!-- <input type="text" class="form-control" id="student_gradelevel" required> -->
                  </div>
                   <div class="col-xs-6">
                  <label>Section</label>
                  <select class="form-control" id="student_section">
                          <option value="" disabled selected>--SELECT--</option>
                      <?php foreach ($this->getSections as $key => $value) { ?>
                                <option value="<?php echo $value['section'] ?>"><?php echo $value['section'] ?></option>
                      <?php }  ?>
</select>
                    <!-- <input type="text" class="form-control" id="" required> -->
                  </div>
                   <div class="col-xs-6">
                  <label>Adviser</label>
                    <input type="text" class="form-control" id="student_adviser" disabled>
                  </div>
                </div>
                </div>
              </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" id="add_student">Add Student</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


       <div class="modal fade" id="edit_student_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Pizza</h4>
              </div>
              <div class="modal-body">
    <form role="form">
             <input type="hidden" class="form-control" id="edit_student_id">
                <!-- text input -->
                <!-- text input -->
                <div class="form-group">
                  <div class="row">
                  <div class="col-xs-12">
                    <label>LRN</label>
                    <input type="text" class="form-control" id="edit_student_lrn" required>
                  </div>
                  <div class="col-xs-6">
                  <label>First Name</label>
                    <input type="text" class="form-control" id="edit_student_fname" required>
                  </div>
                  <div class="col-xs-6">
                  <label>Last Name</label>
                    <input type="text" class="form-control" id="edit_student_lname" required>
                  </div>
                   <div class="col-xs-6">
                  <label>Gender</label>
                    <input type="text" class="form-control" id="edit_student_gender" required>
                  </div>
                   <div class="col-xs-6">
                  <label>Grade Level</label>
                    <input type="text" class="form-control" id="edit_student_gradelevel" required>
                  </div>
                   <div class="col-xs-6">
                  <label>Section</label>
                    <input type="text" class="form-control" id="edit_student_section" required>
                  </div>
                   <div class="col-xs-6">
                  <label>Adviser</label>
                    <input type="text" class="form-control" id="edit_student_adviser" required>
                  </div>
                </div>
                </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit_student">Edit Student</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-info fade in" id="delete_student_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="delete_student_id">
                <h1 style="text-align: center;">Are you sure you want to delete?</h1>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-danger" id="delete_student">YES</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>




   <div class="modal fade" id="edit_settings_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Settings</h4>
              </div>
              <div class="modal-body">
    <form role="form">
             <input type="hidden" class="form-control" id="edit_settings_id">
                <!-- text input -->
                <!-- text input -->
                <div class="form-group">
                  <div class="row">
                  <div class="col-xs-12">
                    <label>Grade Level</label>
                    <input type="text" class="form-control" id="edit_settings_gradelevel" required>
                  </div>
                   <div class="col-xs-12">
                  <label>Section</label>
                    <input type="text" class="form-control" id="edit_settings_section" required>
                  </div>
                   <div class="col-xs-12">
                  <label>Adviser</label>
                    <input type="text" class="form-control" id="edit_settings_adviser" required>
                  </div>
                </div>
                </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit_settings">Edit settings</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->







        <div class="modal modal-info fade in" id="delete_settings_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="delete_settings_id">
                <h1 style="text-align: center;">Are you sure you want to delete?</h1>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-danger" id="delete_settings">YES</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



       <div class="modal modal-danger fade in" id="delete_ingredients_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="delete_ingredients_id">
                <h1 style="text-align: center;">Are you sure you want to delete?</h1>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-success" id="delete_ingredients">YES</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

    <?php 

        // $url_register is declared on header.php
        if(URL !==  $url_register ){  }else{ 

    ?>
    
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php  } ?>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->

<script type="text/javascript">
	var URL = '<?php echo URL; ?>';
</script>
<!-- jQuery 3 -->
<script src="<?php echo URL; ?>public/components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URL; ?>public/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo URL; ?>public/components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- iCheck -->
<script src="<?php echo URL; ?>public/components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo URL; ?>public/plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL; ?>public/dist/js/adminlte.min.js"></script>

<script  src="<?php echo URL; ?>public/js/uploadfile.min.js"></script>

<script  src="<?php echo URL; ?>public/js/moment.js"></script>
<script  src="<?php echo URL; ?>public/js/calendar.min.js"></script>

<script src="<?php echo URL; ?>views/jqueries/main.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });


  
  $(function () {
    $('#table_orders').DataTable();
    $('#table_pizza').DataTable();
    $('#table_users').DataTable();
    $('#table_ingredients').DataTable();
  })
</script>


<script type="text/javascript">
  
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        // {
        //   title          : 'Long Event',
        //   start          : new Date(y, m, d - 5),
        //   end            : new Date(y, m, d - 2),
        //   backgroundColor: '#f39c12', //yellow
        //   borderColor    : '#f39c12' //yellow
        // },
        // {
        //   title          : 'Meeting',
        //   start          : new Date(y, m, d, 10, 30),
        //   allDay         : false,
        //   backgroundColor: '#0073b7', //Blue
        //   borderColor    : '#0073b7' //Blue
        // },
        // {
        //   title          : 'Lunch',
        //   start          : new Date(y, m, d, 12, 0),
        //   end            : new Date(y, m, d, 14, 0),
        //   allDay         : false,
        //   backgroundColor: '#00c0ef', //Info (aqua)
        //   borderColor    : '#00c0ef' //Info (aqua)
        // },
        // {
        //   title          : 'Birthday Party',
        //   start          : new Date(y, m, d + 1, 19, 0),
        //   end            : new Date(y, m, d + 1, 22, 30),
        //   allDay         : false,
        //   backgroundColor: '#00a65a', //Success (green)
        //   borderColor    : '#00a65a' //Success (green)
        // },
        // {
        //   title          : 'Click for Google',
        //   start          : new Date(y, m, 28),
        //   end            : new Date(y, m, 29),
        //   url            : 'http://google.com/',
        //   backgroundColor: '#3c8dbc', //Primary (light-blue)
        //   borderColor    : '#3c8dbc' //Primary (light-blue)
        // }
      ],
      eventClick: function(calEvent, jsEvent, view) {

         $('#calendar').fullCalendar('removeEvents',calEvent._id);
          // change the border color just for fun
          $(this).remove();

        },
        eventDrop : function(event, delta, reverFunct){
        },
      editable  : true,
      displayEventTime: false,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })

</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>