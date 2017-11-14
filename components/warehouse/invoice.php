<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SVOA 1.0 | Invoice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
        </script>
    </head>
    <body  style="font-family: 'Kanit', sans-serif;">
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Library</li>
      </ol> -->
      <?php

        include("connect.php");
          $sql="select * from INVOICE join OAT.PERSONNEL  USING (ID_PERSONNEL) join INVOICE_DETAIL using (INVOICE_ID) ";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header bg-danger  text-white">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูลใบส่งสินค้า
          </div>
          <div style="float:left;">
 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#insertpro" >เพิ่ม</button>
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display bg-info " cellspacing="0" width="100%">
              <thead>
                <td ><center>รหัสใบส่งสินค้า</td>
                <td><center>ชื่อพนักงานน</td>
                <td><center>วันที่ส่งสินค้า</td>
                <td><center>ทะเบียนรถ</td>
								<td><center>ดูรายละเอียด</td>
                <td><center>ลบข้อมูล</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
                $id=$objResult["INVOICE_ID"];
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["INVOICE_ID"];?></td>
                <td><div align="center"><?php echo $objResult["NAME"];?>  <?php echo $objResult["LASTNAME"];?></td>
                <td><div align="center"><?php echo $objResult["DAY_TO_SEND"];?></td>
                <td><div align="center"><?php echo @$objResult["CAR_ID"];?></td>
                <td align="center"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $objResult["INVOICE_ID"];?>" >ดูรายละเอียด </button></td>
                <td align="center"><a href='del-invoice.php?submit=DEL&id=<?=$objResult["INVOICE_ID"];?>' onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
      <?php
      $sql="select * from INVOICE join OAT.PERSONNEL  USING (ID_PERSONNEL) join INVOICE_DETAIL using (INVOICE_ID) join CAR using (CAR_ID)";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      while($objResult1 = oci_fetch_array($objParse,OCI_BOTH))
      {
        $INVOICE_ID=$objResult1["INVOICE_ID"];
        $DAY_TO_SEND=$objResult1["DAY_TO_SEND"];
        $car=$objResult1["CAR_ID"];
        $name=$objResult1["NAME"];
        $name2=$objResult1["LASTNAME"];
        $names=$name."  ".$name2;
        $sql5="select * from CAR,OAT.PERSONNEL where CAR_ID='$car' and CAR.ID_PERSONNEL=OAT.PERSONNEL.ID_PERSONNEL";
        $objParse5 = oci_parse($objConnect, $sql5);
        oci_execute ($objParse5,OCI_DEFAULT);

      ?>
      <div class="modal fade bd-example-modal-lg" id="<?php echo $INVOICE_ID;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
           <center><h4 class="modal-title" id="myModalLabel">ใบส่งสินค้า</h4></center>
              <div class="card">
              <span class="card-header">
                <span class="col-xs-6 col-md-4">รหัสใบส่งสินค้า : <?php echo $INVOICE_ID;?></span>
                <span class="col-xs-6 col-md-4">ชื่อพนักงาน : <?php echo $objResult1["NAME"];?>  <?php echo $objResult1["LASTNAME"];?></span>
                <span class="col-xs-6 col-md-4">วันที่ส่งสินค้า : <?php echo $DAY_TO_SEND;?></span>
              </span>
              <div class="card-block">

                  <span class="col-xs-6 col-md-4">ทะเบียนรถ : <?php echo $objResult1["CAR_ID"];?> </span>
                    <span class="col-xs-6 col-md-4">พนักงานขับรถ :  <?php  while($objResult5 = oci_fetch_array($objParse5,OCI_BOTH))
                      {
                    ?><?php echo $objResult5["NAME"];?>  <?php echo $objResult5["LASTNAME"]; }?> </span>
                    <span class="col-xs-6 col-md-4">ใบสั่งขาย : <a href='viewinvoice.php?&id=<?=$objResult1["SO_ID"];?>&date=<?php echo $DAY_TO_SEND;?>&name=<?php echo $names;?>' target="_blank" va><?php echo $objResult1["SO_ID"];?></a>(กดเพื่อดูรายละเอียด) </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php } ?>
        <div class="modal fade bd-example-modal-lg" id="insertpro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">เพิ่มการใบส่งสินค้า</h4></center>
              </div>
              <div class="modal-body">
                <form name="autoSumForm" action="insert-invoice.php" method="POST">
                  <button class="btn btn-success" type="submit" name="">บันทึกข้อมูล</button>
                      <br>  <br>
                <?php
                  include("connect.php");
                $strSQL = "SELECT count(*) as INVOICE_ID FROM INVOICE";
                   $objParse = oci_parse($objConnect, $strSQL);
                   oci_execute ($objParse,OCI_DEFAULT);
                   while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                         $id=$objResult["INVOICE_ID"]+1;
                         $num="IN_".$id;} ?>
                        <input type="hidden" name="INVOICE" value="<?php echo $num;?>" >
                <?php   $strSQL = "SELECT count(*) as INVOICE_DETAIL_ID FROM INVOICE_DETAIL";
                $objParse = oci_parse($objConnect, $strSQL);
                oci_execute ($objParse,OCI_DEFAULT);
                while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                   $id=$objResult["INVOICE_DETAIL_ID"]+1;
                   $num1="IN_DE_".$id;} ?>
                    <input type="hidden" name="INVOICE_DETAIL_ID" value="<?php echo $num1 ;?>">
                      <input type="hidden" name="status" value="กำลังส่ง">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                       <div class="col">
                       <center>รหัสใบส่งสินค้า
                       </div>
                       <div class="col">
                         <center>ชื่อพนักงาน
                       </div>
                       <div class="col">
                       <center>วันที่ส่งสินค้า
                       </div>
                     </div>
                    </div>
                    <div class="card-block">
                      <blockquote class="card-blockquote">
                        <div class="row">
                         <div class="col">
                         <center><input class="form-control" type="text" name="" value=" <?php echo $num ;?>" disabled>
                         </div>
                         <div class="col">
                           <center><?php   $strSQL = "SELECT * FROM OAT.PERSONNEL";
                         $objParse = oci_parse($objConnect, $strSQL);
                         oci_execute ($objParse,OCI_DEFAULT); ?>
                           <select class="form-control" name="ID_PERSONNEL">
                             <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                              <option value="<?php echo $objResult["ID_PERSONNEL"];?>"><?php echo $objResult["NAME"];  ?>  <?php echo $objResult["LASTNAME"];  ?></option>
                              <?php  } ?>
                           </select>
                         </div>
                         <div class="col">
                         <center><input class="form-control" type="date" name="date" value="" autofocus required>
                         </div>
                       </div>
                      </blockquote>
                    </div>
                    <div class="card-header">
                      <div class="row">
                        <div class="col">
                        <center>ใบสั่งขาย
                        </div>
                       <div class="col">
                       <center>ทะเบียนรถ
                       </div>
                     </div>
                    </div>
                    <div class="card-block">
                      <blockquote class="card-blockquote">
                        <div class="row">
                         <div class="col">
                           <center><?php   $strSQLc = "SELECT * FROM CAR";
                         $objParsec = oci_parse($objConnect, $strSQLc);
                         oci_execute ($objParsec,OCI_DEFAULT); ?>
                           <select class="form-control" name="CAR_ID">
                             <?php while($objResultc = oci_fetch_array($objParsec,OCI_BOTH)){  ?>
                              <option value="<?php echo $objResultc["CAR_ID"];?>"><?php echo $objResultc["CAR_ID"];  ?></option>
                              <?php  } ?>
                           </select>
                         </div>
                         <div class="col">
                         <center><?php   $strSQLs = "SELECT * FROM BIBIM.SALES_ORDER";
                       $objParses = oci_parse($objConnect, $strSQLs);
                       oci_execute ($objParses,OCI_DEFAULT); ?>
                         <select class="form-control" name="SALES_ORDER">
                           <?php while($objResults = oci_fetch_array($objParses,OCI_BOTH)){
                             $SO_ID= $objResults["SO_ID"];  ?>
                            <option value="<?php echo $SO_ID;?>"><?php echo $SO_ID;  ?></option>
                            <?php  } ?>
                         </select>
                         </div>
                       </div>
                      </blockquote>
                    </div>
                  </div>
                </form>
            </div>
              </div>
            </div>
          </div>
        </div>
    </body>

    <script language="javascript" type="text/javascript">

    function popitup(url)
    {
      newwindow=window.open(url,'name','height=630,width=800');
      if (window.focus) {newwindow.focus()}
      return false;
    }
    </script>
</html>
