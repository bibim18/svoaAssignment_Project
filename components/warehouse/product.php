<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SVOA 1.0 | Product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
          $sql="SELECT * from PRODUCT ";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header bg-danger  text-white">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูลสินค้า
          </div>
          <div style="float:left;">
 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#insert" >เพิ่ม</button>
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display bg-info " cellspacing="0" width="100%">
              <thead>
                <td width="100px">รหัสสินค้า</td>
                <td width="300px">ชื่อสินค้า</td>
                <td>ประเภทสินค้า</td>
                <td>รหัสประกัน</td>
                <td>ราคา</td>
                <td >จำนวนสินค้า</td>
                <td>หน่วย</td>
								<td>Edite</td>
                <td>delete</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["PRODUCT_ID"];?></td>
                <td><div align="center"><?php echo $objResult["PRODUCT_NAME"];?></td>
                <td><div align="center"><?php echo $objResult["PRODUCT_TYPE_ID"];?></td>
                <td><div align="center"><?php echo @$objResult["ID"];?></td>
                <td><div align="center"><?php echo $objResult["PRODUCT_PRICE"];?></td>
                <td><div align="center"><?php echo $objResult["PRODUCT_MANY"];?></td>
									<td><div align="center"><?php echo $objResult["UNIT"];?></td>
                <td>  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $objResult["PRODUCT_ID"];?>" >แก้ไข </button></td>
                <td><a href='delete-product.php?submit=DEL&id=<?=$objResult["PRODUCT_ID"];?>' onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
      <?php
      $sql="SELECT * from PRODUCT ";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      while($objResult1 = oci_fetch_array($objParse,OCI_BOTH))
      {
      ?>
      <div class="modal fade bd-example-modal-lg" id="<?php echo $objResult1["PRODUCT_ID"];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">แก้ไข - อัพเดตข้อมูลสินค้า</h4>
            </div>
            <div class="modal-body">

              <?php
                 include("connect.php");
              $id=$objResult1["PRODUCT_ID"];
                 $strSQL3 = "select * from PRODUCT where PRODUCT_ID='$id'";
               $objParse3 = oci_parse($objConnect, $strSQL3);
               oci_execute ($objParse3,OCI_DEFAULT);
               while($objResult2 = oci_fetch_array($objParse3,OCI_BOTH)){
              ?>
              <form class="" action="update-product.php" method="post" >
                <input type="hidden" name="IDS" value="<?php echo $objResult2["PRODUCT_ID"];?>">
                <input type="hidden" name="PRODUCT_ID" value="<?php echo $objResult2["PRODUCT_ID"];?>">
                  <input type="hidden" name="PRODUCT_TYPE_ID" value="<?php echo $objResult2["PRODUCT_TYPE_ID"];?>">
                    <input type="hidden" name="ID" value="<?php echo $objResult2["ID"];?>">
              <table class="table table-bordered">
                <tr>
                  <th><center>รหัสสินค้า</th>
                  <td><input type="text" class="form-control"  name="PRODUCT_ID" placeholder="รหัสสินค้า" aria-describedby="basic-addon2"value="<?php echo $objResult2["PRODUCT_ID"];?>" disabled></td>
                </tr>
                <tr>
                  <th><center>ชื่อสินค้า</th>
                  <td><input type="text" class="form-control" name="PRODUCT_NAME" placeholder="ชื่อสินค้า" aria-describedby="basic-addon2" value="<?php echo $objResult2["PRODUCT_NAME"];?>" ></td>
                </tr>
                <tr>
                  <th><center>ประเภทสินค้า</th>
                    <td><input type="text" class="form-control" name="PRODUCT_TYPE_ID" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult2["PRODUCT_TYPE_ID"];?>" disabled>
                  </td>
                </tr>
                <tr>
                  <th><center>รหัสประกัน</th>
                      <td><input type="number" class="form-control" name="ID" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult2["ID"];?>" disabled>
                </td>
                </tr>
                <tr>
                  <th><center>ราคา</th>
                  <td><input type="number" class="form-control" name="PRODUCT_PRICE" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult2["PRODUCT_PRICE"];?>"></td>
                </tr>
                <tr>
                  <th><center>จำนวนสินค้า</th>
                  <td><input type="number" class="form-control" name="PRODUCT_MANY" placeholder="จำนวนสินค้า" aria-describedby="basic-addon2" value="<?php echo $objResult2["PRODUCT_MANY"];?>"></td>
                </tr>
                <tr>
                  <th><center>หน่วย</th>
                    <td><input type="text" class="form-control" name="UNIT" placeholder="หน่วย" aria-describedby="basic-addon2" value="<?php echo $objResult2["UNIT"];?>"></td>
                </tr>
            </table>
            <button class="btn btn-success" type="submit" name="button">แก้ไขข้อมูล</button>
            <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="btn btn-danger">ปิด</span></button>
              <?php } ?>
                </form>

            </div>
          </div>
        </div>
      </div>
          <?php } ?>
          <div class="modal fade bd-example-modal-lg" id="insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel1">เพิ่มข้อมูลสินค้า</h4>
                </div>
                <div class="modal-body">
                  <form class="" action="INSERTdata.php" method="post" >
                  <table class="table table-bordered">
                    <tr>
                      <th><center>รหัสสินค้า</th>
                      <td><input type="text" class="form-control"  name="PRODUCT_ID"placeholder="รหัสสินค้า" aria-describedby="basic-addon2" autofocus required ></td>
                    </tr>
                    <tr>
                      <th><center>ชื่อสินค้า</th>
                      <td><input type="text" class="form-control" name="PRODUCT_NAME" placeholder="ชื่อสินค้า" aria-describedby="basic-addon2" required ></td>
                    </tr>
                    <tr>
                      <th><center>ประเภทสินค้า</th>
                        <td>
                          <?php   $strSQL = "SELECT * FROM PRODUCT_TYPE";
                        $objParse = oci_parse($objConnect, $strSQL);
                        oci_execute ($objParse,OCI_DEFAULT); ?>
                          <select class="form-control" name="PRODUCT_TYPE_ID">
                            <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                             <option value="<?php echo $objResult["PRODUCT_TYPE_ID"];?>"><?php echo $objResult["PRODUCT_TYPE_NAME"];?></option>
                             <?php  } ?>
                          </select>
                        <?php   oci_close($objConnect); ?></td>
                    </tr>
                    <tr>
                      <th><center>รหัสประกัน</th>
                          <td>
                            <?php   $strSQL3 = "SELECT * FROM TEE.INSURE";
                          $objParse3 = oci_parse($objConnect, $strSQL3);
                          oci_execute ($objParse3,OCI_DEFAULT); ?>
                            <select class="form-control" name="ID">
                              <?php while($objResult3 = oci_fetch_array($objParse3,OCI_BOTH)){  ?>
                               <option value="<?php echo $objResult3["ID_INSURE"];?>"><?php echo $objResult3["NAME_INSURE"];?></option>
                               <?php  } ?>
                            </select>
                          <?php   oci_close($objConnect); ?></td>
                    </tr>
                    <tr>
                      <th><center>ราคา</th>
                      <td><input type="number" class="form-control" name="PRODUCT_PRICE" placeholder="ราคา" aria-describedby="basic-addon2" required></td>
                    </tr>
                    <tr>
                      <th><center>จำนวนสินค้า</th>
                      <td><input type="number" class="form-control" name="PRODUCT_MANY" placeholder="จำนวนสินค้า" aria-describedby="basic-addon2" required></td>
                    </tr>
                    <tr>
                      <th><center>หน่วย</th>
                        <td><input type="text" class="form-control" name="UNIT" placeholder="หน่วย" aria-describedby="basic-addon2" required></td>
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
