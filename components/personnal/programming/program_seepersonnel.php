<?php 
     $employeeid= $_GET["employeeid"];
?>
<?php
      $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
      $objConnect = oci_connect("oat","oracle",$db,'AL32UTF8');
?>


<div class="container">
    <?php 
                $sql="select distinct * from employees where id_personnel = '$employeeid'";
                $objParse = oci_parse($objConnect, $sql);
                oci_execute ($objParse,OCI_DEFAULT);
                $objResult = oci_fetch_array($objParse,OCI_BOTH);    
    ?>
    <h1>
          <?php echo $objResult['NAME'].'  '.$objResult['LASTNAME'];?>
          <small><h4> <?php echo $objResult['NAME_DEPARTMENTS']; ?></h4></small>
    </h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?depart=employees">จัดการพนักงาน</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $objResult['NAME'];?></li>
        </ol>
    </nav>
    <div class="col-md-3" style="float:left;">
    dd
    </div>
    <?php 
            $sql="select * from locator join (select * from district join (select * from province join (select * from address join (select * from blood join (select * from personnel join department using (id_department)) using (id_blood)) using (id_personnel)) using (id_province)) using (id_district)) using (id_locator) where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
            $objResult = oci_fetch_array($objParse,OCI_BOTH);    
    ?>
    <div class="col-md-9" style="float:left;">
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">ชื่อ</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["NAME"];?>" id="example-text-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label">นามสกุล</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["LASTNAME"];?>" id="example-search-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-email-input" class="col-2 col-form-label">รหัสประชาชน</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["ID_CARD"];?>" id="example-email-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-url-input" class="col-2 col-form-label">เพศ</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["SEX"]; ?>" id="example-url-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
            <div class="col-10">
                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" value="hunter2" id="example-password-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-number-input" class="col-2 col-form-label">Number</label>
            <div class="col-10">
                <input class="form-control" type="number" value="42" id="example-number-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
            <div class="col-10">
                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Date</label>
            <div class="col-10">
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label">Month</label>
            <div class="col-10">
                <input class="form-control" type="month" value="2011-08" id="example-month-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-week-input" class="col-2 col-form-label">Week</label>
            <div class="col-10">
                <input class="form-control" type="week" value="2011-W33" id="example-week-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Time</label>
            <div class="col-10">
                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-color-input" class="col-2 col-form-label">Color</label>
            <div class="col-10">
                <input class="form-control" type="color" value="#563d7c" id="example-color-input">
            </div>
        </div>
    </div>
</div>

