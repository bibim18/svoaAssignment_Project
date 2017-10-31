<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#myTables').DataTable();
            });
        </script>
    </head>
    <body  style="font-family: 'Kanit', sans-serif;">
        <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
          <div class="card-header">
            <div class="name-header" style="width:93%; float:left; margin-top:4px;">
            จัดการประกัน
            </div>
            <div style="float:left;">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addinsure" align = "right" >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เพิ่ม
                </button>
            </div>
          </div>
          <div class="card-body">

              <?php
              $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
              $objConnect = oci_connect("tee","oracle",$db);
              $strSQL = "SELECT * FROM GENDERINSURE";
              $objParse = oci_parse($objConnect, $strSQL);
              oci_execute ($objParse,OCI_DEFAULT);
              ?>
              <center>
              <table id="myTables" class="display" cellspacing="0" width="100%">
                <thead>
                  <th width="91"> <div align="center">รหัสประเภทประกัน </div></th>
                  <th width="98"> <div align="center">ชื่อประเภทประกัน </div></th>
                  <th width="198"> <div align="center">จัดการข้อมูล</th>
                </thead>
                <?php
                while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                {
                ?>
                <tr>
                  <td><div align="center"><?php echo $objResult["ID_GENDERINSURE"];?></div></td>
                  <td><center><?php echo $objResult["NAME"];?></td>

                  <td>
                  <center>
                      <button type="button" class="btn btn-info">แก้ไข</button>
                      <button type="button" class="btn btn-danger">ลบ</button>
                  </center>
                  </td>
                </tr>

              <?php
              }
              ?>
              </table>

              </center>
              <?php
              oci_close($objConnect);
              ?>

        </div>
        <!-- เพิ่มแผนก -->
        <?php include("model/addinsure.php") ?>
        <!-- เพิ่มแผนก -->


          </div>
        </div>
    </body>
    <script>

    </script>
</html>
