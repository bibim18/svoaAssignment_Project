<div class="container">

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
            <label for="example-tel-input" class="col-2 col-form-label">ฝ่ายงาน / สาขา</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["NAME_DEPARTMENTS"]."   |   ".$objResult["NAME_LOCATOR"]; ?>" id="example-tel-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">ที่อยู่</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["HOME_NUMBER"]." ".@$objResult["SOI"]." ".@$objResult["ROAD"]." ".@$objResult["NAME_DISTRICT"]." ".@$objResult["NAME_LOCALITY"]." ".@$objResult["NAME_PROVINCE"]." ".@$objResult["POST"]; ?>" id="example-password-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-number-input" class="col-2 col-form-label">วันเดือนปีเกิด</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["BIRTHDAY"]; ?>" id="example-password-input">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-datetime-local-input" class="col-2 col-form-label">กรุปเลือด</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["TYPEBLOOD"]; ?>" id="example-password-input">
            </div>
            </div>
            <?php
                    $educationsql=" select distinct id_personnel,name,lastname,name_university,name_diploma,end,gpa from university natural join (select * from diploma natural join (select * from education natural join personnel)) where id_personnel = '$employeeid'";
                    $objParse2 = oci_parse($objConnect, $educationsql);
                    oci_execute ($objParse2,OCI_DEFAULT);
                    $education = oci_fetch_array($objParse2,OCI_BOTH);   

            ?>
            <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Type_Blood</label>
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