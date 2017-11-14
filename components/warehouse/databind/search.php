<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </head>
  <body>
    <SCRIPT Language="JavaScript">

    function startCalc(){
    interval = setInterval("calc()",1);
    }
    function calc(){
    one = document.autoSumForm.target.value;
    two = document.autoSumForm.sumassess.value;
    document.autoSumForm.gap.value = (two) * (one);
    }
    function stopCalc(){
    clearInterval(interval);
    }
    </SCRIPT>
    <form name="autoSumForm" action="insert-product-in.php" method="POST">
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
        <input type="hidden" name="PRODUCT_IN_DETAIL" value="<?php echo $num1 ;?>">
       <div class="row">
        <div class="col">
        <center>รหัสใบการนำเข้าสินค้า : <input class="form-control" type="text" name="" value=" <?php echo $num1 ;?>" disabled>
        </div>
        <div class="col">
          <center>ชื่อบริษัทคู่ค้า : <?php   $strSQL = "SELECT * FROM PARTNER";
        $objParse = oci_parse($objConnect, $strSQL);
        oci_execute ($objParse,OCI_DEFAULT); ?>
          <select class="form-control" name="PARTNER">
            <?php while($objResult = oci_fetch_array($objParse,OCI_BOTH)){  ?>
             <option value="<?php echo $objResult["PARTNER_ID"];?>"><?php echo $objResult["PARTNER_NAME"];  ?></option>
             <?php  } ?>
          </select>
        </div>
        <div class="col">
        <center>วันที่ :<input class="form-control" type="date" name="date" value="">
        </div>
      </div>
      <div class="row">
        <div class="col">รหัสสินค้า </div>
        <div class="col">ชื่อสินค้า</div>
        <div class="col">ราคา</div>
        <div class="col">จำนวนสินค้า</div>
      </div>
      <hr>
      <?php
      include("connect.php");
      $sql = "select * from PRODUCT where PRODUCT_ID like '%{$_POST['itemname']}%'";
      $objParse = oci_parse($objConnect, $sql);
      oci_execute ($objParse,OCI_DEFAULT);

      $i=1; while($objResult = oci_fetch_array($objParse,OCI_ASSOC))
      { $PRODUCT_ID=$objResult["PRODUCT_ID"];?>
       <input type="hidden" name="PRODUCT_ID" value="<?php echo $PRODUCT_ID;?>">
      <div class="row">
        <div class="col"> <?php echo $PRODUCT_ID;?></div>
        <div class="col"><?php echo substr($objResult["PRODUCT_NAME"],0,48) ?></div>
        <div class="col"><input class="right" type="number" name="target" value="<?php echo $objResult["PRODUCT_PRICE"];?>"  onFocus="startCalc();" onBlur="stopCalc();" min="1"></input></div>
        <div class="col"><input class="right" type="number" name="sumassess" value="1"  onFocus="startCalc();" onBlur="stopCalc();" min="1"></div>
      </div>
<?php $i++; } ?>
<hr>
<div class="row">
  <div class="col-8"></div>
  <div class="col-4">ราคารวม : <input class="right" type=text name="gap" ></div>
</div>


     <button class="btn btn-success" type="submit" name="button">บันทึกข้อมูล</button>
    </form>
  </body>
</html>
