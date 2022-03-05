<?php
	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	$pdf = new Dompdf();

	ob_start();
?>

<style>
html{
  margin: 20px;
}
table, td, th {
  border: 1px solid black;
  padding: 5px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th{
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
  <p style = "font-size: 35px; font-family: Helvetica; text-align: center; margin-top: 10px;"> Student Monitoring System </p>
  <p style = "font-size: 15px; font-family: Helvetica; text-align: center;"> Tagum National Trade School </p>
  <p style = "font-size: 15px; font-family: Helvetica; text-align: center;"> Apokon, Tagum City </p>
	<div class = "table-responsive">
              <table>
                <thead>
                  <tr>
                   <th>LRN</th>
                   <th>Name</th>
                   <th>Grade</th>
                   <th>Section</th>
                   <th>Absent</th>
                   <th>Tardy</th>
                   <th>Polo</th>
                   <th>Pants</th>
                   <th>Earings</th>
                   <th>ID</th>
                   <th>Blouse</th>
                   <th>Skirt</th>
                   <th>Haircut</th>
                   <th>Hair Color</th>
                
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
              </table>
              </div>



<?php
	$html = ob_get_clean();
	$pdf->loadHtml($html);
	$pdf->setPaper('A4', 'portrait');
	$pdf->render();
	$pdf->stream('report.pdf', array("Attachment" => false));
?>