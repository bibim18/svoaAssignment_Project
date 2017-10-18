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
          $sql="select product_name,date_srt,pro_detail,pro_time from bank.product join (select * from PROMOTION_DETAIL join  promotion  using(prom_id)) using(product_id)";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูล Promotion
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display" cellspacing="0" width="100%">
              <thead>
                <td width="300px" align="center">ชื่อสินค้า</td>
                <td align="center">วันที่เริ่มจัดโปรโมชั่น</td>
                <td align="center">รายละเอียดโปรโมชั่น</td>
                <td align="center">ระยะเวลา(วัน)</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["PRODUCT_NAME"];?></td>
                <td><div align="center"><?php echo $objResult["DATE_SRT"];?></td>
                <td><div align="center"><?php echo $objResult["PRO_DETAIL"];?></td>
                <td><div align="center"><?php echo @$objResult["PRO_TIME"];?></td>
                
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
