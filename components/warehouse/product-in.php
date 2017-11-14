<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SVOA 1.0 |  การนำเข้าสินค้า</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
        </script>
    </head>
    <body  style="font-family: 'Kanit', sans-serif;">
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Library</li>
      </ol> -->
      <SCRIPT Language="JavaScript">

      function startCalc(){
      interval = setInterval("calc()",1);
      }
      function calc(){
      one = document.autoSumForm.target.value;
      two = document.autoSumForm.sumassess.value;
      document.autoSumForm.gapp.value = (one);
      document.autoSumForm.gap.value = (two) * (one);
      }
      function stopCalc(){
      clearInterval(interval);
      }
      </SCRIPT>
      <?php

        include("connect.php");
          $sql="select * from product_in  join partner using (partner_id)";
          $objParse = oci_parse($objConnect, $sql);
          oci_execute ($objParse,OCI_DEFAULT);
      ?>
      <div class="card" style="margin-left:20px; margin-right:20px; margin-bottom:20px;">
    <div class="card-header bg-danger  text-white">
          <div class="name-header" style="width:93%; float:left; margin-top:4px;">
          จัดการข้อมูลการนำเข้าสินค้า
          </div>
          <div style="float:left;">
 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#insertpro" >เพิ่ม</button>
          </div>
    </div>
        <div class="card-block">
            <br>
            <table id="myTable" class="display bg-info " cellspacing="0" width="100%">
              <thead >
                <td ><center>รหัสการนำเข้าสินค้า</td>
                <td><center>ชื่อบริษัทคู่ค้า</td>
                <td width="100px"><center>วันที่การนำเข้าสินค้าา</td>
								<td><center>ดูรายละเอียด</td>
                <td><center>ลบข้อมูล</td>
              </thead>
              <?php
              while($objResult = oci_fetch_array($objParse,OCI_BOTH))
              {
               $PRODUCT_IN_ID=$objResult["PRODUCT_IN_ID"];
               $PARTNER_NAME=$objResult["PARTNER_NAME"];
               $PRODUCT_IN_TIME=$objResult["PRODUCT_IN_TIME"];

              ?>
              <tr>
                <td><div align="center"><?php echo $objResult["PRODUCT_IN_ID"];?></td>
                <td><div align="center"><?php echo $objResult["PARTNER_NAME"];?></td>
                <td><div align="center"><?php echo $objResult["PRODUCT_IN_TIME"];?></td>
                <td align="center">
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $objResult["PRODUCT_IN_ID"];?>" >ดูรายละเอียด </button>
                </td>
                <td align="center"><a href='del-product-in.php?submit=DEL&id=<?=$objResult["PRODUCT_IN_ID"];?>' onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
      <?php
      $sql="select * from product_in  join partner using (partner_id)";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      while($objResult1 = oci_fetch_array($objParse,OCI_BOTH))
      {
        $id_PRODUCT=$objResult1["PRODUCT_IN_ID"];
        $PARTNER_NAME=$objResult1["PARTNER_NAME"];
        $PRODUCT_IN_TIME=$objResult1["PRODUCT_IN_TIME"];
      ?>
      <div class="modal fade bd-example-modal-lg" id="<?php echo $id_PRODUCT;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">ใบการนำเข้าสินค้า</h4>
            </div>
            <div class="modal-body">

           <table  class="table table-striped">
                 <td>รหัสใบการนำเข้าสินค้า : <?php echo $id_PRODUCT;?></td>
                 <td>ชื่อบริษัทคู่ค้า : <?php
                 echo $PARTNER_NAME;?></td>
                 <td>วันที่ : <?php echo $PRODUCT_IN_TIME;?></td>
               </tr>

           </table>
           <table class="table table-striped" >
             <thead>
               <tr>
                 <th>สินค้า</th>
                 <th>ราคา</th>
                 <th>จำนวนสินค้า</th>
                 <th>ราคารวม</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <?php

                 $sqlq="select * from product_in join product_in_detail  USING (product_in_id) join product using (product_id) join partner using (partner_id) where product_in_id='$id_PRODUCT' ";
                 $objParseq = oci_parse($objConnect, $sqlq);
                 oci_execute ($objParseq,OCI_DEFAULT);
                 while($objResultq = oci_fetch_array($objParseq,OCI_BOTH))
                 {
                 $many=$objResultq["PRODUCT_IN_MANY"];
                 $price=$objResultq["PRODUCT_PRICE"];
                  ?>
                 <td><?php echo $objResultq["PRODUCT_NAME"];?></td>
                 <td><?php echo $objResultq["PRODUCT_PRICE"];?></td>
                 <td><?php echo $objResultq["PRODUCT_IN_MANY"];?></td>
                   <td><?php echo $many*$price;?></td>
               </tr>
             </tbody>
           <?php } ?>
           </table>
            </div>
          </div>
        </div>
      </div>
        <?php } ?>
        <div class="modal fade bd-example-modal-lg" id="insertpro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">เพิ่มการนำเข้าสินค้า</h4></center>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <form class="form" name="searchform" id="searchform">
                              <table class="table table-striped">
                                <div class="form-group">
                                    <label for="textsearch" >รหัสสินค้า</label>
                                    <input type="text" name="itemname" id="itemname"  placeholder="รหัสสินค้า !!!" autocomplete="off">
                                <button type="button" class="btn btn-primary" id="btnSearch">
                                    <span class="glyphicon glyphicon-search"></span>
                                    ค้นหา
                                </button>
                                  </div>
                                  </table>

                                    <div class="loading"></div>
                                      <table class="row" id="list-data" style="">

                                      </table>
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
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
    <script  type="text/javascript">
    function popitup(url)
    {
      newwindow=window.open(url,'name','height=630,width=900');
      if (window.focus) {newwindow.focus()}
      return false;
    }
    </script>
</html>
