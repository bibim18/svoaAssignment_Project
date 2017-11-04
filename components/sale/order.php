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
          ini_set('max_execution_time', 1000); 
          include 'connect.php';
          $sql="select cus_name,po_date,po_id,pod_qty,product_name from CUSTOMER 
				join (select * from purchase_order 
				join (select * from purchase_order_detail withindex_name 
				join bank.product using (product_id)) using (po_id)) using (cus_id)  where rownum <= 500 order by cus_name";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
         <div class="card-header">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการการสั่งซื้อ
          </div>
          <div style="float:left;">
          
          </div>
    </div>
        <div class="card-block">
            <br>
      <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
          <td width="120px">ชื่อลูกค้าองค์กร</td>
          <td width="100px">วันที่สั่ง</td>
          <td width="100px">เลขที่ใบสั่งซื้อ</td>
          <td>จำนวน</td>
          <td>สินค้า</td>
        </thead>
        <?php
        while($objResult = oci_fetch_array($objParse,OCI_BOTH))
        {
        ?>
        <tr>
          <td><div><?php echo $objResult["CUS_NAME"];?></td>
          <td><div><?php echo $objResult["PO_DATE"];?></td>
          <td><div><?php echo $objResult["PO_ID"];?></td>
          <td><div><?php echo $objResult["POD_QTY"];?></td>
          <td><div><?php echo $objResult["PRODUCT_NAME"];?></td>
        </tr>
        <?php
        }
        ?>
      </table>
      </div>
    </div>
    </body>
</html>
