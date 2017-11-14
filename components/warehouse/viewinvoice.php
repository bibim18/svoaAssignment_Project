<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>รายละเอียดใบสั่งขาย : <?php echo $_GET["id"] ;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php     $id=$_GET["id"] ;
    include("connect.php");
      $sql="select BIBIM.SALES_ORDER.*,BIBIM.SALES_ORDER_DETAIL.*,PRODUCT.PRODUCT_NAME from  BIBIM.SALES_ORDER, BIBIM.SALES_ORDER_DETAIL,PRODUCT where  BIBIM.SALES_ORDER.SO_ID=BIBIM.SALES_ORDER_DETAIL.SO_ID and BIBIM.SALES_ORDER_DETAIL.PRODUCT_ID=PRODUCT.PRODUCT_ID and BIBIM.SALES_ORDER.SO_ID='".$_GET["id"]."' ";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);

    ?>
      <div class="card ">
      <span class="card-header bg-success ">
         <center><h2>รายละเอียดใบสั่งขาย</h2></center>
       <div class="row">
        <div class="col">
        <center>ใบสั่งขาย : <input class="form-control" type="text" name="" value=" <?php echo $id ;?>" disabled>
        </div>
        <div class="col">
          <center>ชื่อพนักงาน :<input class="form-control" type="text"  value="<?php echo $_GET["name"] ;?>" disabled>
        </div>
        <div class="col">
        <center>วันที่ :<input class="form-control" type="text"  value="<?php echo $_GET["date"] ;?>" disabled>
        </div>
      </div>
    </span>
    <center>
      <div class="card ">
         <br>
      <span class="card-header bg-danger">
    <div class="row">
      <div class="col">รหัสสินค้า </div>
      <div class="col">ชื่อสินค้า</div>
      <div class="col">ราคา</div>
      <div class="col">จำนวนสินค้า</div>
    </div>
  </div>
    <hr>
      <?php
        if ($objParse=="NULL") {
                 echo "string";
           }
    else {
      while($objResult = oci_fetch_array($objParse,OCI_BOTH))
   { ?>
     <div class="row">
       <div class="col"> <?php echo $objResult["PRODUCT_ID"];?></div>
       <div class="col"><?php echo $objResult["PRODUCT_NAME"];?></div>
       <div class="col"><?php echo $objResult["SOD_PRICE"];?></div>
       <div class="col"><?php echo $objResult["SOD_QTY"];?></div>
     </div>
     <hr>
<?php }
    }
      ?>
  </body>
</html>
