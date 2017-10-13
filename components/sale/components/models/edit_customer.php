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
    <link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#myTables').DataTable();
    });
    </script>
</head>
    <body  style="font-family: 'Kanit', sans-serif;">
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Library</li>
      </ol> -->
      <?php
          $id=$_GET["cusID"];
          include '../../connect.php';
          $sql="select * from customer where cus_id='$id'";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
          $objResult = oci_fetch_array($objParse,OCI_BOTH);

      ?>
      
      <table id="myTable" class="display" cellspacing="0" width="100%">
        <tr>
          <td width="100px">รหัสลูกค้าองค์กร</td>
          <td><input type="text" name="param_id" value="<?echo $id;?>" disabled="false"/></td>
        </tr>
        <tr>
          <td>ชื่อลูกค้าองค์กร</td>
          <td><input type="text" name="param_name" value='<?echo $objResult["CUS_NAME"];?>'/></td>
        </tr>
        <tr>
          <td>ที่อยู่</td>
            <td><input type="text" name="param_add" value='<?echo $objResult["CUS_ADDRESS"];?>'/></td>
        </tr>
        <tr>
          <td>อีเมล์</td>
            <td><input type="text" name="param_mail" value='<?echo $objResult["CUS_EMAIL"];?>'/></td>
        </tr>
        <tr>
          <td>เบอร์โทรศัพท์</td>
            <td><input type="text" name="param_tel" value='<?echo $objResult["CUS_TEL"];?>'/></td>
        </tr>
        <tr>
          <td width="200px">ประเภทลูกค้าองค์กร</td>
            <td><input type="text" name="param_type" value='<?echo $objResult["TYPECUS_ID"];?>'/></td>
        </tr>
      </table>

    </body>
</html>
