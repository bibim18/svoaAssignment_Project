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
                $('#myTable').DataTable();
            });
        </script>
        <?php
            include 'connect.php';
        ?>
        <?php
            $id = @$_POST["id_position"];
            $name = @$_POST["name_position"];
        ?>

        <?php 
            if(isset($id)&&isset($name))
            {
                $sql="update position set name_position='$name' where id_position='$id'";
                $objParse = oci_parse($objConnect, $sql);
                oci_execute ($objParse,OCI_DEFAULT);
                $alert = '<div class="alert alert-info alert-dismissable"  style="margin-left:20px; margin-right:20px; margin-bottom:20px;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>แก้ไขข้อมูลสำเร็จ!</div>';
            }
            echo @$alert;
        ?>
    </head>
    <body  style="font-family: 'Kanit', sans-serif;">
        <div id="error"></div>
        <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
            <div class="card-header">
                <div class="name-header" style="width:93%; float:left; margin-top:4px;">
                จัดการตำแหน่ง
                </div>
                <div style="float:left;">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addposition" align = "right" >
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เพิ่ม
                    </button>
                </div>
            </div>
            <div class="card-block">
                <?php 
                    $sql="select * from positions";
                    $objParse = oci_parse($objConnect, $sql);
                    oci_execute ($objParse,OCI_DEFAULT);
                ?>

                <table id="myTable" class="display" cellspacing="0" width="100%">
                    <br>
                    <thead>
                        <td width="100px"><center>รหัสตำแหน่ง</center></td>
                        <td width="35%"><center>ชื่อตำแหน่ง</center></td>
                        <td width="30%"><center>แผนก</center></td>
                        <td>ดำเนินการ</td>

                    </thead>
                <?php
                    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                    {
                    ?>
                    <tr>
                        <td><div align="center"><?php echo $objResult["ID_POSITION"];?></td>
                        <td><div align="center"><?php echo $objResult["NAME_POSITION"];?></td>
                        <td><div align="center"><?php echo $objResult["NAME_DEPARTMENTS"];?></td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editposition" data-whatever="<?php echo $objResult['ID_POSITION']; ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit
                            </button>
                            <button type="button" class="btn btn-danger" onClick="javascript:deleteNews('<?php echo $objResult["ID_POSITION"];?>'); window.location.reload();">
                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
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
            <?php include("model/addposition.php") ?>
            <!-- เพิ่มแผนก -->

            <!-- แก้ไขแผนก -->
            <?php include("model/editposition.php") ?>
            <!-- แก้ไขแผนก -->

        <!-- จบจัดการ model (popup) -->

        <!-- ควบคุมปุ่มเพิ่มฝ่าย-->
        <script>
                // เพิ่มฝ่าย
                $(document).ready(function () {
                    $('#formaddposition').submit(function(evt)
                    {
                                evt.preventDefault();
                                var formData = new FormData($(this)[0]);
                                $.ajax({
                                    async: true,
                                    url: 'components/personnal/programming/program_addposition.php',
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
                                                $("#addposition").modal('toggle');
                                                //  $('.modal-backdrop').hide();
                                                $("#error").fadeIn(1000, function()
                                                {
                                                            $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign">สำเร็จ!! </span> &nbsp; </div></div>');
                                                });
                                            }
                                            else
                                            {
                                                $("#addposition").modal('toggle');
                                                //  $('.modal-backdrop').hide();
                                                $("#error").fadeIn(1000, function()
                                                {
                                                            $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;ผิดพลาด !!</div></div>');
                                                });
                                            }
                                    }
                                });
                    });

                //แก้ไขตำแหน่ง
                
                    $('#editposition').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var recipient = button.data('whatever') // Extract info from data-* attributes
                        var modal = $(this);
                        var dataString = 'key=' + recipient;
                        $.ajax({
                            async: true,
                            type: "GET",
                            url: "components/personnal/programming/program_editposition.php",
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
                            url: "components/personnal/programming/program_deleteposition.php",
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