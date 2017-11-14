<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SVOA 1.0 | Edite Product</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sbs-admin.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  </head>
  <body>
    <?php
       include("connect.php");
    $id=$_GET["ID"];
       $strSQL = "select * from PRODUCT where PRODUCT_ID='$id'";
     $objParse = oci_parse($objConnect, $strSQL);
     oci_execute ($objParse,OCI_DEFAULT);
     while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
    ?>
    <form class="" action="update-product.php" method="post" >
      <input type="hidden" name="IDS" value="<?php echo $objResult["PRODUCT_ID"];?>">
      <input type="hidden" name="PRODUCT_ID" value="<?php echo $objResult["PRODUCT_ID"];?>">
        <input type="hidden" name="PRODUCT_TYPE_ID" value="<?php echo $objResult["PRODUCT_TYPE_ID"];?>">
          <input type="hidden" name="ID" value="<?php echo $objResult["ID"];?>">
    <table class="table table-bordered">
      <tr>
        <th><center>รหัสสินค้า</th>
        <td><input type="text" class="form-control"  name="PRODUCT_ID" placeholder="รหัสสินค้า" aria-describedby="basic-addon2"value="<?php echo $objResult["PRODUCT_ID"];?>" disabled></td>
      </tr>
      <tr>
        <th><center>ชื่อสินค้า</th>
        <td><input type="text" class="form-control" name="PRODUCT_NAME" placeholder="ชื่อสินค้า" aria-describedby="basic-addon2" value="<?php echo $objResult["PRODUCT_NAME"];?>" ></td>
      </tr>
      <tr>
        <th><center>ประเภทสินค้า</th>
          <td><input type="text" class="form-control" name="PRODUCT_TYPE_ID" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult["PRODUCT_TYPE_ID"];?>" disabled>
        </td>
      </tr>
      <tr>
        <th><center>รหัสประกัน</th>
            <td><input type="number" class="form-control" name="ID" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult["ID"];?>" disabled>
      </td>
      </tr>
      <tr>
        <th><center>ราคา</th>
        <td><input type="number" class="form-control" name="PRODUCT_PRICE" placeholder="ราคา" aria-describedby="basic-addon2" value="<?php echo $objResult["PRODUCT_PRICE"];?>"></td>
      </tr>
      <tr>
        <th><center>จำนวนสินค้า</th>
        <td><input type="number" class="form-control" name="PRODUCT_MANY" placeholder="จำนวนสินค้า" aria-describedby="basic-addon2" value="<?php echo $objResult["PRODUCT_MANY"];?>"></td>
      </tr>
      <tr>
        <th><center>หน่วย</th>
          <td><input type="text" class="form-control" name="UNIT" placeholder="หน่วย" aria-describedby="basic-addon2" value="<?php echo $objResult["UNIT"];?>"></td>
      </tr>
  </table>
    <?php } ?>

  <div >
    <center></>
      <a href="JavaScript:if(confirm('ยืนยัน การบันทึกข้อมูล')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>';}" onclick="return confirm('กรุณายืนยันการบันทึกข้อมูลอีกครั้ง !!!')"><button class="btn btn-success" type="submit">บันทึกข้อมูล</button></a>
  </div>
      </form>
  </body>
</html>
