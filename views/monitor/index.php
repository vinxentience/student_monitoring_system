<style type="text/css">
  #box-of-drag {
    display: none;
  }
</style>
<section class="content">
      <div class="row">
        <div class="col-md-3">

   <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Search</h4>
            </div>
            <div class="box-body">
              <div class="form-group">
          <label for="sel1">Grade Level</label>
              <select class="form-control" id="monitor_grade_level">
                <option value="" disabled selected>--SELECT--</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
        </div>
<div class="form-group">

  <label for="sel1">Section</label>
  <select class="form-control" id="monitor_section">
  </select>
</div>

<div class="form-group">
  <label for="sel1">Student</label>
  <select class="form-control" id="monitor_student">
  </select>
</div>
  
  <input type="hidden" id="cal_title">

  <input type="hidden" id="cal_start">

  <input type="hidden" id="cal_end">


<div class="form-group">
  <button type="button" class="btn btn-success" id="monitor_save"> SAVE </button>
</div>


<!-- <div class="form-group">
  <label for="sel1">Student</label>
  
  <select class="form-control" id="monitor_section">
    <?php  foreach($this->getAllStudents as $key => $value) { ?>
          <option value="<?php echo $value['id']; ?>">
            <?php echo $value['student_fname'] . $value['student_lname']; ?>
          </option>
       <?php }?>
  </select>
</div> -->


            </div>
            <!-- /.box-body -->
          </div>





          <div class="box box-solid" id="box-of-drag" >
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Absent</div>
                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Tardy</div>
                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Polo/Blouse(Non Compliance)</div>
                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Pants/Skirt(Non Compliance)</div>
                <div class="external-event bg-fuchsia ui-draggable ui-draggable-handle" style="position: relative;">Earings(Non Compliance)</div>
                <div class="external-event bg-purple ui-draggable ui-draggable-handle" style="position: relative;">ID(Non Compliance)</div>
                <!-- <div class="external-event bg-gray ui-draggable ui-draggable-handle" style="position: relative;">Blouse(Non Compliance)</div>
                <div class="external-event bg-maroon ui-draggable ui-draggable-handle" style="position: relative;">Skirt(Non Compliance)</div> -->
                <div class="external-event bg-navy ui-draggable ui-draggable-handle" style="position: relative;">Haircut(Non Compliance)</div>
                <div class="external-event bg-teal ui-draggable ui-draggable-handle" style="position: relative;">Hair Color(Non Compliance)</div>
             <!--    <div class="checkbox">
                  <label for="drop-remove">
                    <input type="checkbox" id="drop-remove">
                    remove after drop
                  </label>
                </div> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

        
        </div>
               <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
                <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>

