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
</head>
<body>
<div id="error"></div>
<div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการพนักงาน
          </div>
          <div style="float:left;">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addpersonnel" align = "right" >
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เพิ่ม
              </button>
          </div>
    </div>
    <div class="card-block">
         <?php 
            $sql="select distinct * from employees";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
         ?>

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <br>
            <thead>
                <td width="50px"><center>รหัสตำแหน่ง</center></td>
                <td width="20%"><center>ชื่อ</center></td>
                <td width="20%"><center>นามสกุล</center></td>
                <td width="20%"><center>แผนก</center></td>
                <td width="17%">ดำเนินการ</td>

            </thead>
        <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["ID_PERSONNEL"];?></td>
                <td><div align="center"><?php echo $objResult["NAME"];?></td>
                <td><div align="center"><?php echo $objResult["LASTNAME"];?></td>
                <td><div align="center"><?php echo $objResult["NAME_DEPARTMENTS"];?></td>
                <td>
                    <a href="index.php?depart=employee&employeeid=<?php echo $objResult["ID_PERSONNEL"];?>"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editpersonnel" data-whatever="<?php echo $objResult["ID_DEPARTMENT"]; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เปิดดู
                    </button></a>
                    <button type="button" class="btn btn-danger" onClick="javascript:deleteNews('<?php echo $objResult["ID_DEPARTMENT"];?>'); window.location.reload();">
                        <i class="fa fa-trash" aria-hidden="true"></i> ลบ
                    </button>
                </td>
              </tr>
        <?php 
              } 
        ?>
        </table>
    </div>
</div>

<!-- จัดการ model (popup)-->

    <!-- เพิ่มแผนก -->
    <?php include("model/addpersonnel.php") ?>
    <!-- เพิ่มแผนก -->

    <!-- แก้ไขแผนก -->
    <?php include("model/editpersonnel.php") ?>
    <!-- แก้ไขแผนก -->

    <!-- ลบแผนก -->
    <?php include("model/deletepersonnel.php") ?>
    <!-- ลบแผนก -->

<!-- จบจัดการ model (popup) -->

<!-- ควบคุมปุ่มเพิ่มฝ่าย-->
<script>
        // เพิ่มฝ่าย
        $(document).ready(function () {
            $('#formaddpersonnel').submit(function(evt)
            {
                        evt.preventDefault();
                        var formData = new FormData($(this)[0]);
                        $.ajax({
                            async: true,
                            url: 'components/personnal/programming/program_addpersonnel.php',
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
                                        $("#addpersonnel").modal('toggle');
                                        //  $('.modal-backdrop').hide();
                                        $("#error").fadeIn(1000, function()
                                        {
                                                    $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; </div></div>');
                                        });
                                    }
                                    else
                                    {
                                        $("#addpersonnel").modal('toggle');
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
        
            $('#editpersonnel').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this);
                var dataString = 'key=' + recipient;
                  $.ajax({
                      async: true,
                      type: "GET",
                      url: "components/personnal/programming/program_editpersonnel.php",
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
        });

        function deleteNews(slidekey)
        {
            if(confirm("ต้องการจะลบข่าวประชาสัมพันธ์นี้ใช่หรือไม่ ?"))
            {
                $.ajax({
                      async: true,
                      type: "GET",
                      url: "components/personnal/programming/program_deletepersonnel.php",
                      data: "key="+slidekey,
                      cache: false,
                      success: function (data) {
                             $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> ลบเรียบร้อย </div></div>');
                      },
                      error: function(err) {
                          console.log(err);
                      }
                  });
            }
        }
</script>
</body>
</html>