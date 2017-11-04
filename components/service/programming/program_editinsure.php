<?php
    $key = $_GET["key"];
?>

<?php
     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');

     $sqls="select * from services where ID_INSURE = '$key'";
     $objParses = oci_parse($objConnect, $sqls);
     oci_execute ($objParses,OCI_DEFAULT);
     $objResultz = oci_fetch_array($objParses,OCI_BOTH);
?>
<form>
    <!-- ส่วนของฟอร์มเพิ่มฝ่าย -->
    <div class="form-group">
        <label for="exampleInputEmail1">รหัสประกัน</label>
        <input type="text" name="id_insure" class="form-control" value="<?php echo $objResultz["ID_INSURE"];?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">ชื่อประกัน *</label>
        <input type="text" name="name_insure" class="form-control"  value="<?php echo $objResultz["NAME_INSURE"];?>" placeholder="กรุณาใส่ชื่อประกัน" required>
    </div>
    <div class="form-group">
        <label for="insure">ตำแหน่ง</label>
        <select name="type_insure" class="form-control" id="sel1">
                <?php
                    $sql="select * from genderinsure";
                    $objParse = oci_parse($objConnect, $sql);
                    oci_execute ($objParse,OCI_DEFAULT);
                    $objResult = oci_fetch_array($objParse,OCI_BOTH);

                    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                    {
                ?>
                          <option  value="<?php echo $objResult['ID_GENDERINSURE'];?>" selected="selected"><?php echo $objResult['NAME'];?></option>
                <?php
                    }
                ?>
        </select>
    </div>
</form>
<div class="modal-footer">
        <button type="submit" name="save_editinsure" id="save_editinsure" class="btn btn-primary btn-sm" ><i class="fa fa-save fa-fw"></i> บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
</div>
