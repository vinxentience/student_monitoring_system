    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            		<button class="btn btn-info"  data-toggle="modal" data-target="#add_student_modal">  Add Student</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_orders" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Grade Level</th>
                  <th>Section</th>
                  <th>Adviser</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach( $this->getStudent as $key => $value){ ?>
	                	<tr>
							<td><?php echo $value['student_lrn']; ?></td>
							<td><?php echo $value['student_fname'] . ' ' . $value['student_lname'] ; ?></td>
							<td><?php echo $value['student_gender']; ?></td>
							<td><?php echo $value['student_gradelevel']; ?></td>
							<td><?php echo $value['student_section']; ?></td>
							<td><?php echo $value['student_adviser']; ?></td>
							<td>
								
								<div class="btn-group">
								  <button type="button" class="btn btn-success edit-one-student"  data-toggle="modal" data-target="#edit_student_modal" 
								 	 data-id="<?php  echo $value['id'] ;?>"   
								  	data-student_lrn="<?php  echo $value['student_lrn'] ;?>"  
								  	data-student_fname="<?php  echo $value['student_fname'] ;?>" 
								  	data-student_lname="<?php  echo $value['student_lname'] ;?>" 
								  	data-student_gender="<?php  echo $value['student_gender'] ;?>" 
								  	data-student_gradelevel="<?php  echo $value['student_gradelevel'] ;?>" 
								  	data-student_section="<?php  echo $value['student_section'] ;?>" 
								  	data-student_adviser="<?php  echo $value['student_adviser'] ;?>" ><i class="fa fa-edit"></i></button>
								  <button type="button" class="btn btn-danger delete-one-student" data-toggle="modal" data-target="#delete_student_modal" data-id="<?php echo $value['id']; ?>" ><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
                	<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Grade Level</th>
                  <th>Section</th>
                  <th>Adviser</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>