<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

          include 'connect.php';
          $sql="select cus_id,cus_name,cus_address,cus_email,cus_tel,typecus_name from customer join type_customer using (typecus_id)";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูลลูกค้า
          </div>
          <div style="float:left;">
          <a href="" onclick="return popitup('components/sale/components/models/addcustomer.php')">
          <button type="button" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>เพิ่ม</button></a>
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display" cellspacing="0" width="100%">
              <thead>
                <td width="100px">รหัสลูกค้า</td>
                <td>ชื่อลูกค้า</td>
                <td>ที่อยู่</td>
                <td>อีเมล์</td>
                <td>เบอร์โทรศัพท์</td>
                <td width="200px">ประเภทองค์กร</td>
                <td>edit</td>
                <td>delete</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["CUS_ID"];?></td>
                <td><div align="center"><?php echo $objResult["CUS_NAME"];?></td>
                <td><div align="center"><?php echo $objResult["CUS_ADDRESS"];?></td>
                <td><div align="center"><?php echo @$objResult["CUS_EMAIL"];?></td>
                <td><div align="center"><?php echo $objResult["CUS_TEL"];?></td>
                <td><div align="center"><?php echo $objResult["TYPECUS_NAME"];?></td>
                <td><a href="" onclick="return popitup('components/sale/components/models/edit_customer.php?cusID=<?php echo $objResult["CUS_ID"];?>')"><button type="button" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit</button></a></td>
                <td><a href='components/sale/components/models/del_customer.php?submit=DEL&id=<?=$objResult["CUS_ID"];?>' onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
    </body>

    <script language="javascript" type="text/javascript">

    function popitup(url)
    {
      newwindow=window.open(url,'name','height=250,width=431');
      if (window.focus) {newwindow.focus()}
      return false;
    }
    </script>
</html>
