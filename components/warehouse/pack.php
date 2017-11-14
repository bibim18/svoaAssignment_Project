<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SVOA 1.0 | Pack Product</title>
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
          $sql="select * from pack join OAT.PERSONNEL  USING (ID_PERSONNEL)  ";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header bg-danger  text-white">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูลใบส่งสินค้า
          </div>
          <div style="float:left;">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#pack" >+ การเบิก/แพ็คสินค้า </button>
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display bg-info " cellspacing="0" width="100%">
              <thead>
                <td ><center>รหัสใบการเบิก/แพ็คสินค้า</td>
                <td><center>ชื่อพนักงานน</td>
                <td><center>จำนวนสินค้า</td>
                <td><center>วันที่ส่งสินค้า</td>
								<td><center>ดูรายละเอียด</td>
                <td><center>ลบข้อมูล</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["PACK_ID"];?></td>
                <td><div align="center"><?php echo $objResult["NAME"];?>  <?php echo $objResult["LASTNAME"];?></td>
                <td><div align="center"><?php echo $objResult["PACK_MANY"];?></td>
                <td><div align="center"><?php echo @$objResult["PACK_DAY"];?></td>
                <td align="center"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $objResult["PACK_ID"];?>" >ดูรายละเอียด </button></td>
                <td align="center"><a href='del-pack.php?submit=DEL&id=<?=$objResult["PACK_ID"];?>' onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
      <?php
      $sql="select * from pack join DETAIL_PACK  USING (PACK_ID)join OAT.PERSONNEL  USING (ID_PERSONNEL) join TYPE_SEND  USING (TYPE_SEND_ID) join OAT.LOCATOR using (ID_LOCATOR)";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      while($objResult1 = oci_fetch_array($objParse,OCI_BOTH))
      {
        $PACK_ID=$objResult1["PACK_ID"];
        $PACK_DAY=$objResult1["PACK_DAY"];
      ?>
      <div class="modal fade bd-example-modal-lg" id="<?php echo $PACK_ID;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center><h4 class="modal-title" id="myModalLabel">ใบการเบิก/แพ็คสินค้า : <?php echo $PACK_ID;?></h4></center>
            </div>
            <div class="modal-body">
              <div class="card">
              <span class="card-header">
                  <img src="<?php echo $objResult1["IMG"];?>" alt="" width="50" height="50px">
                  <tr>
                <span class="col-xs-6 col-md-4">ชื่อพนักงาน :<?php echo $objResult1["NAME"];?> <?php echo $objResult1["LASTNAME"];?></span>
                <span class="col-xs-6 col-md-4">วันที่ส่งสินค้า : <?php echo $PACK_DAY;?></span>
         </tr>
         <tr>
           <span class="col-xs-6 col-md-4">การส่งสินค้า : <?php echo $objResult1["TYPE_SEND_NAME"];?></span>
         </tr>
              </span>
              <div class="card-block">
                <div class="col-xs-6 col-md-12">บริษัท :<?php echo $objResult1["NAME_LOCATOR"];?></div><hr>
                <div class="col-xs-6 col-md-12">ที่อยู่บริษัท :<?php echo $objResult1["ADDRESS_LOCATOR"];?></div>
              </div>
              <span class="card-header">
                <span class="col-xs-6 col-md-4">จำนวนสินค้าที่เช็ค : <?php echo $objResult1["PACK_MANY"];?></span>
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php } ?>
        <div class="modal fade bd-example-modal-lg" id="pack" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">เพิ่มใบการเบิก/แพ็คสินค้า </h4></center>
              </div>
              <div class="modal-body">
                <form class="" action="insert-pack.php" method="post" >
                <table class="table table-bordered">
                  <tr>
                    <th><center>รหัสใบการเบิก/แพ็คสินค้า</th>
                    <td>        <?php   $strSQL = "SELECT count(*) as DETAIL_PACK_ID FROM DETAIL_PACK";
                          $objParse = oci_parse($objConnect, $strSQL);
                          oci_execute ($objParse,OCI_DEFAULT);
                          while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                                $id=$objResult["DETAIL_PACK_ID"]+1;
                                $num="DE_PACK_".$id;} ?>
                               <input type="hidden" name="DETAIL_PACK_ID" value="<?php echo $num;?>" >
                      <?php   $strSQL = "SELECT count(*) as PACK_ID FROM PACK";
                    $objParse = oci_parse($objConnect, $strSQL);
                    oci_execute ($objParse,OCI_DEFAULT);
                    while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                          $id=$objResult["PACK_ID"]+1;
                          $num1="PACK_".$id;} ?>
                          <input type="hidden" name="id_pack" value="<?php echo $num1;?>" >
                         <input type="text" name="id_pack" value="<?php echo $num1;?>" disabled>
                    </td>
                  </tr>
                  <tr>
                    <th><center>ชื่อพนักงาน</th>
                    <td>
                      <?php   $strSQL = "SELECT * FROM OAT.PERSONNEL";
                    $objParse = oci_parse($objConnect, $strSQL);
                    oci_execute ($objParse,OCI_DEFAULT); ?>
                      <select class="form-control" name="ID_PERSONNEL">
                        <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                         <option value="<?php echo $objResult["ID_PERSONNEL"];?>"><?php echo $objResult["NAME"];echo "  "; echo $objResult["LASTNAME"];?></option>
                         <?php  } ?>
                      </select>
                    <?php   oci_close($objConnect); ?>
                    </td>
                  </tr>
                  <tr>
                    <th><center>วันที่เบิกสินค้า</th>
                      <td><input type="date" name="date" value="" required></td>
                  </tr>
                  <tr>
                    <th><center>จำนวนสินค้าที่เช็ค</th>
                        <td><input type="number" name="count" value="" min="1" required></td>
                  </tr>
                  <tr>
                    <th><center>การจัดส่ง</th>
                    <td>
                      <?php   $strSQL = "SELECT * FROM TYPE_SEND";
                    $objParse = oci_parse($objConnect, $strSQL);
                    oci_execute ($objParse,OCI_DEFAULT); ?>
                      <select class="form-control" name="TYPE_SEND">
                        <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                         <option value="<?php echo $objResult["TYPE_SEND_ID"];?>"><?php echo $objResult["TYPE_SEND_NAME"];?></option>
                         <?php  } ?>
                      </select>
                    <?php   oci_close($objConnect); ?>

                    </td>
                  </tr>
              </table>
              <div >
                <center></>
                    <a href="JavaScript:if(confirm('ยืนยัน การบันทึกข้อมูล')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>';}" onclick="return confirm('กรุณายืนยันการบันทึกข้อมูลอีกครั้ง !!!')"><button class="btn btn-success" type="submit">บันทึกข้อมูล</button></a>
              </div>
                  </form>
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
