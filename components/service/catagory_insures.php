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
         $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
         $objConnects = oci_connect("tee","oracle",$db,'AL32UTF8');
    ?>

        <?php
            $id = @$_POST["ID_GENDERINSURE"];
            $name = @$_POST["NAME"];
        ?>

        <?php
            if(isset($id)&&isset($name))
            {
                $sqlzz="update GENDERINSURE set NAME='$name' where ID_GENDERINSURE='$id'";
                $objParsezz = oci_parse($objConnects, $sqlzz);
                oci_execute ($objParsezz,OCI_DEFAULT);
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
          จัดการประเภทบริการ
          </div>
          <div style="float:left;">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addcatagory_insures" align = "right" >
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> เพิ่ม
              </button>
          </div>
    </div>
    <div class="card-block">
         <?php
             $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
             $objConnect = oci_connect("tee","oracle",$db);
             $strSQL = "SELECT * FROM GENDERINSURE";
             $objParse = oci_parse($objConnect, $strSQL);
             oci_execute ($objParse,OCI_DEFAULT);
         ?>

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <br>
            <thead>
                 <th width="91"> <div align="center">รหัสการประเภทบริการ </div></th>
                 <th width="98"> <div align="center">ชื่อการประเภทบริการ </div></th>
                 <th width="198"> <div align="center">จัดการข้อมูล</th>
            </thead>
        <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["ID_GENDERINSURE"];?></div></td>
                <td><center><?php echo $objResult["NAME"];?></center></td>

                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $objResult["ID_GENDERINSURE"]; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                    <button type="button" class="btn btn-danger" onClick="javascript:deleteNews('<?php echo $objResult["ID_GENDERINSURE"];?>'); window.location.reload();">
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
    <!-- แก้ไขแผนก -->
    <?php include("model/editcatagory_insures.php") ?>
    <!-- แก้ไขแผนก -->

    <!-- เพิ่มแผนก -->
    <?php include("model/addcatagory_insures.php") ?>
    <!-- เพิ่มแผนก -->



<!-- จบจัดการ model (popup) -->

<!-- ควบคุมปุ่มเพิ่มฝ่าย-->
<script>
        // เพิ่มฝ่าย
        $(document).ready(function () {
               $('#formaddcatagory_insures').submit(function(evt)
               {
                           evt.preventDefault();
                           var formData = new FormData($(this)[0]);
                           $.ajax({
                               async: true,
                               url: 'components/service/programming/program_addcatagory_insures.php',
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
                                           $("#addcatagory_insures").modal('toggle');
                                           //  $('.modal-backdrop').hide();
                                           $("#error").fadeIn(1000, function()
                                           {
                                                       $("#error").html('<div class="container"><div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>สำเร็จ &nbsp; </div></div>');
                                           });
                                       }
                                       else
                                       {
                                           $("#addcatagory_insures").modal('toggle');
                                           //  $('.modal-backdrop').hide();
                                           $("#error").fadeIn(1000, function()
                                           {
                                                       $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; สำเร็จ ! !</div>');
                                           });
                                       }
                               }
                           });
               });

        //แก้ไขฝ่าย


                        $('#myModal').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget) // Button that triggered the modal
                            var recipient = button.data('whatever') // Extract info from data-* attributes
                            var modal = $(this);
                            var dataString = 'key=' + recipient;
                            alert(dataString);
                              $.ajax({
                                  async: true,
                                  type: "GET",
                                  url: "components/service/programming/program_editcatagory_insures.php",
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
            if(confirm("ต้องการจะลบใช่หรือไม่ ?"))
            {
                $.ajax({
                      async: true,
                      type: "GET",
                      url: "components/service/programming/program_deletecatagory_insures.php",
                      data: "key="+slidekey,
                      cache: false,
                      success: function (data) {
                             $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> ลบเรียบร้อย </div>');
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
