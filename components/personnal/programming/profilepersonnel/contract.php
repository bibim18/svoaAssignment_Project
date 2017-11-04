
<?php 
            $sql="select id_contract,date_start,date_end,description,status from contract join (select * from personnel join description_contract using (id_personnel)) using (id_contract) where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
            $objResult = oci_fetch_array($objParse,OCI_BOTH);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">เลขสัญญา</label>
                    <input type="text" class="form-control" value="<?php echo $objResult["ID_CONTRACT"];?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">สถานะปัจจุบัน</label>
                    <input type="text" class="form-control" value="<?php echo $objResult["STATUS"];?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">วันที่เริ่มสัญญา</label>
                    <input type="text" class="form-control" value="<?php echo $objResult["DATE_START"];?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">วันที่สิ้นสุดสัญญา</label>
                    <input type="text" class="form-control" value="<?php echo $objResult["DATE_END"];?>" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">รายละเอียดสัญญา</label>
                    <textarea type="textarea" class="form-control" size="70" disabled> <?php echo "ไม่มีรายละเอียด";?></textarea>
                </div>
            </div>
        </div>
    </div>


</table>