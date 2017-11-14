<!DOCTYPE html>
<?php
include 'connect.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ค้นหาข้อมูล : itoffside.com</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <style>
            body{
                margin-top: 20px;
            }
            .loading{
                background-image: url("ajax-loader.gif");
                background-repeat: no-repeat;
                display: none;
                height: 100px;
                width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <form class="" action="insert-product-in.php" method="get" >
                    <?php
                        include("connect.php");
                      $strSQL = "SELECT count(*) as PRODUCT_IN_ID FROM product_in";
                         $objParse = oci_parse($objConnect, $strSQL);
                         oci_execute ($objParse,OCI_DEFAULT);
                         while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                               $id=$objResult["PRODUCT_IN_ID"]+1;
                               $num="PRO_IN_".$id;} ?>
                              <input type="hidden" name="PRODUCT_IN_ID" value="<?php echo $num;?>" >
                     <?php   $strSQL = "SELECT count(*) as PRODUCT_IN_DETAIL_ID FROM PRODUCT_IN_DETAIL";
                   $objParse = oci_parse($objConnect, $strSQL);
                   oci_execute ($objParse,OCI_DEFAULT);
                   while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
                         $id=$objResult["PRODUCT_IN_DETAIL_ID"]+1;
                         $num1="PD_IN_DE_".$id;} ?>
                    <table  class="table table-striped">
                           <input type="hidden" name="PRODUCT_IN_DETAIL" value="<?php echo $num1 ;?>">
                          <td><center>รหัสใบการนำเข้าสินค้า : <input class="form-control" type="text" name="" value=" <?php echo $num1 ;?>" disabled></th>
                            <td><center>ชื่อบริษัทคู่ค้า : <?php   $strSQL = "SELECT * FROM PARTNER";
                          $objParse = oci_parse($objConnect, $strSQL);
                          oci_execute ($objParse,OCI_DEFAULT); ?>
                            <select class="form-control" name="PARTNER">
                              <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
                               <option value="<?php echo $objResult["PARTNER_ID"];?>"><?php echo $objResult["PARTNER_NAME"];  ?></option>
                               <?php  } ?>
                            </select></td>
                          <td><center>วันที่ :<input class="form-control" type="date" name="date" value=""></td>
                        </tr>
                    </table>
                    <form class="form" name="searchform" id="searchform">
                      <table class="table table-striped">
                        <div class="form-group">
                            <label for="textsearch" >ชื่อสินค้า</label>
                            <input type="text" name="itemname" id="itemname"  placeholder="ข้อความ คำค้นหา!" autocomplete="off">
                        <button type="button" class="btn btn-primary" id="btnSearch">
                            <span class="glyphicon glyphicon-search"></span>
                            ค้นหา
                        </button>
                          </div>
                          </table>
                    </form>
                </div>
            </div>
            <div class="loading"></div>
            <div class="row" id="list-data" style="">

            </div>
        </div>
        <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#btnSearch").click(function () {
                    $.ajax({
                        url: "search.php",
                        type: "post",
                        data: {itemname: $("#itemname").val()},
                        beforeSend: function () {
                            $(".loading").show();
                        },
                        complete: function () {
                            $(".loading").hide();
                        },
                        success: function (data) {
                            $("#list-data").html(data);
                        }
                    });
                });
                $("#searchform").on("keyup keypress",function(e){
                   var code = e.keycode || e.which;
                   if(code==13){
                       $("#btnSearch").click();
                       return false;
                   }
                });
            });
        </script>
    </body>
</html>
