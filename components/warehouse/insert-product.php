<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SVOA 1.0 | Product</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sbs-admin.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  </head>
  <body>
    <?php
       include("connect.php");
    ?>
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
              <?php   $strSQL = "SELECT * FROM TEE.INSURE";
            $objParse = oci_parse($objConnect, $strSQL);
            oci_execute ($objParse,OCI_DEFAULT); ?>
              <select class="form-control" name="ID">
                <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                 <option value="<?php echo $objResult["ID"];?>"><?php echo $objResult["NAME"];?></option>
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
  </body>
</html>
