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
        <?php
            include 'connect.php';
        ?>
        <?php
            $id = @$_POST["id_department"];
            $name = @$_POST["name_department"];
        ?>

        <?php 
            if(isset($id)&&isset($name))
            {
                $sql="update department set name_departments='$name' where id_department='$id'";
                $objParse = oci_parse($objConnect, $sql);
                oci_execute ($objParse,OCI_DEFAULT);
                $alert = '<div class="alert alert-info alert-dismissable"  style="margin-left:20px; margin-right:20px; margin-bottom:20px;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>แก้ไขข้อมูลข่าวประชาสัมพันธ์ สำเร็จ</div>';
            }
            echo @$alert;
        ?>
</head>
<body>
<div id="error"></div>
<div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการแผนก
          </div>
          <div style="float:left;">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#adddepartment" align = "right" >
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เพิ่ม
              </button>
          </div>
    </div>
    <div class="card-block">
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
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editdepartment" data-whatever="<?php echo $objResult["ID_DEPARTMENT"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit</button></a> 
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedepartment" data-whatever="<?php echo $objResult["ID_DEPARTMENT"]; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
        <?php 
              } 
        ?>
        </table>
    </div>
</div>

<!-- จัดการ model (popup)-->

    <!-- เพิ่มแผนก -->
    <?php include("model/adddepartment.php") ?>
    <!-- เพิ่มแผนก -->

    <!-- แก้ไขแผนก -->
    <?php include("model/editdepartment.php") ?>
    <!-- แก้ไขแผนก -->

    <!-- ลบแผนก -->
    <?php include("model/deletedepartment.php") ?>
    <!-- ลบแผนก -->

<!-- จบจัดการ model (popup) -->

<!-- ควบคุมปุ่มเพิ่มฝ่าย-->
<script>
        // เพิ่มฝ่าย
        $(document).ready(function () {
            $('#formadddepartment').submit(function(evt)
            {
                        evt.preventDefault();
                        var formData = new FormData($(this)[0]);
                        $.ajax({
                            async: true,
                            url: 'components/personnal/programming/program_adddepartment.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success :  function(response)
                            {
                                    if(response.trim()=="0")
                                    {
                                        $("#adddepartment").modal('toggle');
                                        //  $('.modal-backdrop').hide();
                                        $("#error").fadeIn(1000, function()
                                        {
                                                    $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; </div></div>');
                                        });
                                    }
                                    else
                                    {
                                        $("#adddepartment").modal('toggle');
                                        //  $('.modal-backdrop').hide();
                                        $("#error").fadeIn(1000, function()
                                        {
                                                    $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; สำเร็จ ! !</div></div>');
                                        });
                                    }
                            }
                        });
            });

        //แก้ไขฝ่าย
        
            $('#editdepartment').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this);
                var dataString = 'key=' + recipient;
                  $.ajax({
                      async: true,
                      type: "GET",
                      url: "components/personnal/programming/program_editdepartment.php",
                      data: dataString,
                      cache: false,
                      success: function (data) {
                          modal.find('.p').html(data);
                      },
                      error: function(err) {
                          console.log(err);
                      }
                  });
            });
            
            $('#deletedepartment').submit(function(evt){
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this);
                var dataString = 'key=' + recipient;
                
                alert(dataString);
            });
        });
</script>
</body>
</html>