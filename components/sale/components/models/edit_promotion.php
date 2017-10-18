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
      <?php
          $id=$_GET["proID"];
          include '../../connect.php';
          $sql="select * from promotion where prom_id='$id'";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
          $objResult = oci_fetch_array($objParse,OCI_BOTH);
      ?>
      <form action="save_pro.php" method="post">
      <table id="myTable" class="display" cellspacing="0" width="100%">
        <tr>
          <td width="100px">รหัสโปรโมชั่น</td>
          <td><input type="text" name="param_id" value='<?echo $objResult["PROM_ID"];?>' disabled="false"/> <input type="hidden" name="gg" value='<?echo $objResult["PROM_ID"];?>'></td>
        </tr>
        <tr>
          <td>รายละเอียดโปรโมชั่น</td>
          <td><input type="text" name="param_name" value='<?echo $objResult["PRO_DETAIL"];?>'/></td>
        </tr>
        <tr>
          <td>ระยะเวลา(วัน)</td>
            <td><input type="text" name="param_add" value='<?echo $objResult["PRO_TIME"];?>'/></td>
        </tr>
        <tr>
          <td width="200px">ประเภทโปรโมชั่น</td>
            <td>
              <select name="param_type">
                <option value="1">tp001 Buy more save more</option>
                <option value="2">tp002 Price off</option>
              </select>
            </td>
        </tr>
        <tr><td align="center"><input type="submit" value="save" name="save" ></td>
        <td align="center"><input type='button' onClick="closeWindow()" value='close' /></td></tr>
        <script>
          function closeWindow() { self.opener=this; self.close();  }
          </script>
      </table>
</form>
    </body>
</html>
