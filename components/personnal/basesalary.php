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
            // $id = @$_POST["id_basesalary"];
            // $name = @$_POST["name_basesalary"];
        ?>

        <?php 
            // if(isset($id)&&isset($name))
            // {
            //     $sql="update basesalary set name_basesalary='$name' where id_basesalary='$id'";
            //     $objParse = oci_parse($objConnect, $sql);
            //     oci_execute ($objParse,OCI_DEFAULT);
            //     $alert = '<div class="alert alert-info alert-dismissable"  style="margin-left:20px; margin-right:20px; margin-bottom:20px;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>แก้ไขข้อมูลสำเร็จ!</div>';
            // }
            // echo @$alert;
        ?>
    </head>
    <body  style="font-family: 'Kanit', sans-serif;">
        <div id="error"></div>
        <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
            <div class="card-header">
                <div class="name-header" style="width:93%; float:left; margin-top:4px;">
                จัดการฐานเงินเดือนพนักงาน
                </div>
                <div style="float:left;">
                </div>
            </div>
            <div class="card-block">
                <?php 
                    $sql="select * from basesalaryfull";
                    $objParse = oci_parse($objConnect, $sql);
                    oci_execute ($objParse,OCI_DEFAULT);
                ?>

                <table id="myTable" class="display" cellspacing="0" width="100%">
                    <br>
                    <thead>
                        <td width="100px"><center>รหัสฐานเงินเดือน</center></td>
                        <td width="35%"><center>ตำแหน่ง</center></td>
                        <td width="30%"><center>เงินเดือน</center></td>
                        <td>ดำเนินการ</td>
                    </thead>
                <?php
                    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                    {
                    ?>
                    <tr>
                        <td><div align="center"><?php echo $objResult["ID_BASESALARY"];?></td>
                        <td><div align="center"><?php echo $objResult["NAME_POSITION"];?></td>
                        <td><div align="center"><?php echo $objResult["BASESALARY"];?></td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editbasesalary" data-whatever="<?php echo $objResult['ID_BASESALARY']; ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit
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

            <!-- เพิ่มฐานเงินเดือน -->
            <?php include("model/addbasesalary.php") ?>
            <!-- เพิ่มฐานเงินเดือน -->

            <!-- แก้ไขฐานเงินเดือน -->
            <?php include("model/editbasesalary.php") ?>
            <!-- แก้ไขฐานเงินเดือน -->

        <!-- จบจัดการ model (popup) -->

        <!-- ควบคุมปุ่มเพิ่มฐานเงินเดือน-->
        <script>

                //แก้ไขฐานเงินเดือน
                
                    $('#editbasesalary').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var recipient = button.data('whatever') // Extract info from data-* attributes
                        var modal = $(this);
                        var dataString = 'key=' + recipient;
                        $.ajax({
                            async: true,
                            type: "GET",
                            url: "components/personnal/programming/program_editbasesalary.php",
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
        </script>
    </body>
</html>