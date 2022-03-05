<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">List Of Summary Reports</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class = "table-responsive">
              <table id="table_orders" class="table table-bordered table-hover">
                <thead>
                  <tr>
                   <th>LRN</th>
                   <th>Name</th>
                   <th>Grade</th>
                   <th>Section</th>
                   <th>Absent</th>
                   <th>Tardy</th>
                   <th>Polo(Non Compliance)</th>
                   <th>Pants(Non Compliance)</th>
                   <th>Earings(Non Compliance)</th>
                   <th>ID(Non Compliance)</th>
                   <th>Blouse(Non Compliance)</th>
                   <th>Skirt(Non Compliance)</th>
                   <th>Haircut(Non Compliance)</th>
                   <th>Hair Color(Non Compliance)</th>
                
                  </tr>
                </thead>
                <tbody>
                <?php
                $arraydata = array();
                $arraydata2 = array();
                  foreach ($this->getAllReports as $key => $value) {

                      $allEvents = json_decode( $value['allEvents']); 
                            
                          
                          $month = str_split($allEvents[0]->start,4);


                          foreach ($allEvents  as $key1 => $value1) {
                            array_push($arraydata, $value1->title);
                          }
                             array_push($arraydata2,array_count_values($arraydata));
                      ?>
                        <tr>
                            <td><?php echo $value['student_lrn'] ?></td>
                            <td><?php echo $value['student_fname'] . ' ' .  $value['student_lname'] ?></td>
                            <td><?php echo $value['student_gradelevel'] ?></td>
                            <td><?php echo $value['student_section']; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Absent']) ) { echo 0; } else { echo $arraydata2[$key]['Absent'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Tardy']) ) { echo 0; } else { echo $arraydata2[$key]['Tardy'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Polo(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Polo(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Pants(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Pants(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Earings(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Earings(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['ID(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['ID(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Blouse(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Blouse(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Skirt(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Skirt(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Haircut(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Haircut(Non Compliance)'];  }; ?></td>
                            <td><?php  if( empty($arraydata2[$key]['Hair Color(Non Compliance)']) ) { echo 0; } else { echo $arraydata2[$key]['Hair Color(Non Compliance)'];  }; ?></td>
                        </tr>
                 <?php }  ;  ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>LRN</th>
                   <th>Name</th>
                   <th>Grade</th>
                   <th>Section</th>
                   <th>Absent</th>
                   <th>Tardy</th>
                   <th>Polo(Non Compliance)</th>
                   <th>Pants(Non Compliance)</th>
                   <th>Earings(Non Compliance)</th>
                   <th>ID(Non Compliance)</th>
                   <th>Blouse(Non Compliance)</th>
                   <th>Skirt(Non Compliance)</th>
                   <th>Haircut(Non Compliance)</th>
                   <th>Hair Color(Non Compliance)</th>
                </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a type="button" class="btn btn-success" style = "position: absolute; right: 0; margin-right: 20px;" href="printpdf"> <i class = "fa fa-print"> </i> Print Report </a>
    </section>
