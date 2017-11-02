
<?php
     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');
?>

<!-- Modal addinsure-->
<div class="modal fade" id="addinsure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  method="post" enctype="multipart/form-data" id="formaddinsure" name="formaddinsure">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลประกัน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของฟอร์มบริการงาน-->
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสประกัน</label>
                    <?php
                        $sqlsss = "select max(id_insure) as id_insure from insure join genderinsure using (id_genderinsure)";
                        $objParsesss = oci_parse($objConnect, $sqlsss);
                        oci_execute ($objParsesss,OCI_DEFAULT);
                        $objResultz = oci_fetch_array($objParsesss,OCI_BOTH);
                    ?>
                    <input type="text" name="id_insure" class="form-control" value="<?php echo $objResultz["ID_INSURE"]+1;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อประกัน *</label>
                    <input type="text" name="name_insure" class="form-control" placeholder="กรุณาใส่ชื่อประกัน" required>
                </div>
                <div class="form-group">
                    <label for="insure">ประเภทประกัน</label>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save-insure" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>

  </div>
</div>
