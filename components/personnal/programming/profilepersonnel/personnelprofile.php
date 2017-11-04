<div class="container">

    <div class="col-md-3" style="float:left;">
        <center><img src="<?php echo $objResult['IMG']; ?>" class="rounded img-thumbnail"></center>
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
                <input class="form-control" type="text" value="<?php echo $objResult["NAME"];?>" id="example-text-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label">นามสกุล</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["LASTNAME"];?>" id="example-search-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-email-input" class="col-2 col-form-label">รหัสประชาชน</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["ID_CARD"];?>" id="example-email-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-url-input" class="col-2 col-form-label">เพศ</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["SEX"]; ?>" id="example-url-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-tel-input" class="col-2 col-form-label">ฝ่ายงาน / สาขา</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["NAME_DEPARTMENTS"]."   |   ".$objResult["NAME_LOCATOR"]; ?>" id="example-tel-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">ที่อยู่</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["HOME_NUMBER"]." ".@$objResult["SOI"]." ".@$objResult["ROAD"]." ".@$objResult["NAME_DISTRICT"]." ".@$objResult["NAME_LOCALITY"]." ".@$objResult["NAME_PROVINCE"]." ".@$objResult["POST"]; ?>" id="example-password-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-number-input" class="col-2 col-form-label">วันเดือนปีเกิด</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["BIRTHDAY"]; ?>" id="example-password-input" disabled>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-datetime-local-input" class="col-2 col-form-label">กรุปเลือด</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $objResult["TYPE_BLOOD"]; ?>" id="example-password-input" disabled>
            </div>
            </div>
        </div>
    </div>
</div>