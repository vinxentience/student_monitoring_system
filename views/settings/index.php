    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h1 class="box-title">Settings</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                    <div class="col-md-6">
                        <div class="col-xs-12">
                        <label>Grade Level</label>
                        <input type="text" class="form-control" id="setting_add_grade_level" required>
                        </div>
                        <div class="col-xs-12">
                        <label>Section</label>
                        <input type="text" class="form-control" id="setting_add_section" required>
                        </div>
                        <div class="col-xs-12">
                        <label>Adviser</label>
                        <input type="text" class="form-control" id="setting_add_adivser" required>
                        </div>
                        <div class="col-xs-12">
                        <label></label>
                        <button type="submit" class="btn btn-info btn-block" id="setting_add"> Add </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                            <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                            <th>Grade Level</th>
                            <th>Section</th>
                            <th>Adviser</th>
                            <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->getSettings as $key => $value) { ?>
                                   <tr>
                                        <td><?php echo $value['grade_level']; ?></td>
                                        <td><?php echo $value['section']; ?></td>
                                        <td><?php echo $value['adviser']; ?></td>
                                        <td><div class="btn-group">
                                            <button type="button" class="btn btn-success edit-one-settings"
                                             data-toggle="modal" data-target="#edit_settings_modal"
                                                data-id="<?php  echo $value['id'] ;?>"   
                                                data-section="<?php  echo $value['section'] ;?>"  
                                                data-grade_level="<?php  echo $value['grade_level'] ;?>"  
                                                data-adviser="<?php  echo $value['adviser'] ;?>" 
                                            ><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger delete-one-settings" data-toggle="modal" data-target="#delete_settings_modal" data-id="<?php echo $value['id']; ?>"><i class="fa fa-trash"></i></button>
                                        </div></td>
                                   </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>Grade Level</th>
                            <th>Section</th>
                            <th>Adviser</th>
                            <th>Action</th>
                            </tr>
                            </tfoot>
                            </table>
                    </div>
            </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
 </section>
    <!-- /.content -->

