<?php
include('includes/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
<?php @include("includes/head.php");?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php @include("includes/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php @include("includes/sidebar.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="print">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="modal-header">
                  <h5 class="modal-title" style="float: left;">Booking Details</h5>
                </div>
                

                <div class="card-body table-responsive p-3">
                  <table id="zctb" class="table table-bordered " cellspacing="0" width="100%" border="1">
                    <div class="mb-4 " >
                      <center>
                        <i class="mdi mdi-printer fa-2x" style="font-size: 25px;" aria-hidden="true" OnClick="CallPrint(this.value)" style="cursor:pointer" title="Print"></i>
                      </center>
                    </div>      
                    <tbody>
                      <?php 
                      $aid= $_SESSION['regno'];

                      $sql="SELECT *  from registration where regno='$aid' ";
                      $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query->rowCount() > 0)
                      {
                        foreach($results as $row)
                        {    
                          ?>

                          <tr>
                            <td colspan="6" style="text-align:center; color:blue"><h3>Booking Related Info</h3></td>
                          </tr>
                          <tr>
                            <th>Identification Number :</th>
                            <td><?php echo $row->regno;?></td>
                            <th>Apply Date :</th>
                            <td colspan="3"><?php echo $row->postingDate;?></td>
                          </tr>



                          <tr>
                            <td><b>Hall no :</b></td>
                            <td><?php echo $row->roomno;?></td>
                            <td><b>No of People :</b></td>
                            <td><?php echo $row->seater;?></td>
                            <td><b>Fees PN :</b></td>
                            <td><?php echo $fpm=$row->feespm;?></td>
                          </tr>

                          <tr>
                            <td><b>Equipment Status:</b></td>
                            <td>
                              <?php if($row->foodstatus==0)
                              {
                                echo "Without Equipment";
                              }
                              else
                              {
                                echo "With Equipment";
                              }
                              ;?></td>
                              <td><b>Starts From :</b></td>
                              <td><?php echo $row->stayfrom;?></td>
                              <td><b>Duration:</b></td>
                              <td><?php echo $dr=$row->duration;?> Days</td>
                            </tr>

                            <tr><th>Hall Fee:</th>
                              <td><?php echo $hf=$dr*$fpm?></td>
                              <th>Equipment Fee:</th>
                              <td colspan="3"><?php 
                              if($row->foodstatus==1)
                              { 
                                echo $ff=(2000*$dr);
                              } else { 
                                echo $ff=0;
                                echo "<span style='padding-left:2%; color:red;'>(You booked Hall without Equpiment).<span>";
                              }?></td>
                            </tr>
                            <tr>
                              <th>Total Fee :</th>
                              <th colspan="5"><?php echo $hf+$ff;?></th>
                            </tr>
                            <tr>
                              <td colspan="6" style="color:red"><h4>Personal Info</h4></td>
                            </tr>

                            <tr>
                              <td><b>ID No. :</b></td>
                              <td><?php echo $row->regno;?></td>
                              <td><b>Full Name :</b></td>
                              <td><?php echo $row->firstName;?><?php echo $row->middleName;?><?php echo $row->lastName;?></td>
                              <td><b>Email :</b></td>
                              <td><?php echo $row->emailid;?></td>
                            </tr>


                            <tr>
                              <td><b>Contact No. :</b></td>
                              <td><?php echo $row->contactno;?></td>
                              <td><b>Gender :</b></td>
                              <td><?php echo $row->gender;?></td>
                              <td><b>Description :</b></td>
                              <td><?php echo $row->course;?></td>
                            </tr>


                            <tr>
                              <td><b>Other Contact No. :</b></td>
                              <td><?php echo $row->egycontactno;?></td>
                  
                            </tr>

                            

                            <tr>
                              <td colspan="6" style="color:blue"><h4>Addresses</h4></td>
                            </tr>
                            <tr>
                              <td><b>Correspondense Address</b></td>
                              <td colspan="2">
                                <?php echo $row->corresAddress;?><br />
                                <?php echo $row->corresCIty;?>, <?php echo $row->corresPincode;?><br />
                                <?php echo $row->corresState;?>


                              </td>
                              <td><b>Permanent Address</b></td>
                              <td colspan="2">
                                <?php echo $row->pmntAddress;?><br />
                                <?php echo $row->pmntCity;?>, <?php echo $row->pmntPincode;?><br />
                                <?php echo $row->pmnatetState;?>  

                              </td>
                            </tr>


                            <?php
                            $cnt=$cnt+1;
                          } 
                        }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php @include("includes/footer.php");?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php @include("includes/foot.php");?>
    <!-- End custom js for this page -->
    
    <script>
      $(function () {
        $("[data-toggle=tooltip]").tooltip();
      });
      function CallPrint(strid) {
        var prtContent = document.getElementById("print");
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
      }
    </script>
  </body>
  </html>
