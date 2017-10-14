<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
</head>
<body>

<div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header">
          จัดการตำแหน่งงาน
    </div>
    <div class="card-block">
        <?php
            include 'connect.php';
        ?>
         <?php 
            $sql="select * from department";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
         ?>

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <br>
            <thead>
                <td width="100px"><center>รหัสแผนก</center></td>
                <td width="64%"><center>ชื่อแผนก</center></td>
                <td>ดำเนินการ</td>

            </thead>
        <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["ID_DEPARTMENT"];?></td>
                <td><div align="center"><?php echo $objResult["NAME_DEPARTMENTS"];?></td>
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit</button></a> <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
        <?php 
              } 
        ?>
        </table>
    </div>
</div>
</body>
</html>