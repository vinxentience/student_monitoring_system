<style>
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
</style>

<!-- <nav class="navbar navbar-default" style="background: black; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Monitor</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
  </div>
  
</nav> -->
<body class = "skin-black">
<!-- Main Header -->
  <header class="main-header" style="background-color: black;">

    <!-- Logo -->
    <a href="" class="logo">
    <!-- <img src="<?php echo URL; ?>public/images/logo.png" style="height: 0px; width: 50px;" /> -->
      <span class="logo-lg"><b>SMS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
          <li class="dropdown user user-menu">
            <a  class="dropdown-toggle" href="changepassword">
              <img src="public/images/avatar-1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $_SESSION['userName']; ?> </span>
            </a>
            <li class="dropdown user user-menu">
            <a href="<?php echo URL; ?>login/logout" class="btn btn-warning btn-flat">Sign out</a>
        
        </ul>
      </div>
    
    </nav>
  </header>


<div class ="container">

  <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <h3 class = "" style = "padding: 20px;"> Welcome <?php echo $_SESSION['fname']; ?>! </h3>
          </div>
        </div>
    </div>


  <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
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
</div>
 
</div>
</body>
