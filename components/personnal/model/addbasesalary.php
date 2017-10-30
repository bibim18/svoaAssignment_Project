<?php
    include 'connect.php';
?>

<!-- Modal Addbasesalary-->
<div class="modal fade" id="addbasesalary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  method="get" enctype="multipart/form-data" id="formaddbasesalary" name="formaddbasesalary">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลฐานเงินเดือน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของฟอร์มเพิ่มฐานเงินเดือนตำแหน่ง-->
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสฐานเงินเดือน</label>
                    <?php 
                        $sql="select max(id_basesalary) as id_basesalary from basesalary order by id_basesalary";
                        $objParse = oci_parse($objConnect, $sql);
                        oci_execute ($objParse,OCI_DEFAULT);
                        $objResult = oci_fetch_array($objParse,OCI_BOTH);

                        $idsalary = substr($objResult['ID_BASESALARY'], 2, 5);
                        $intsalary = intval($idsalary+1);;
                    ?>
                    <input type="text" name="id_basesalary" class="form-control" value="<?php echo "BS0".$intsalary; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ตำแหน่ง</label>
                    <select name="name_basesalary" class="form-control" id="sel1">
                            <?php 
                                $sql="select * from position";
                                $objParse = oci_parse($objConnect, $sql);
                                oci_execute ($objParse,OCI_DEFAULT);
                                $objResult = oci_fetch_array($objParse,OCI_BOTH);
                                
                                while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                                {
                            ?>
                                      
                                      <option  value="<?php echo $objResult['ID_POSITION'];?>" selected="selected"><?php echo $objResult['NAME_POSITION'];?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">เงินเดือน</label>
                    <input type="text" name="id_basesalary" class="form-control" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save-basesalary" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
    
  </div>
</div>


