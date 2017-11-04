
<?php 
            $sql="select * from educations where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
              
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>มหาวิทยาลัย</th>
      <th>วุฒิการศึกษา</th>
      <th>เกรดเฉลี่ย</th>
      <th>ปีที่จบการศึกษา</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
    ?>
    <tr>
      <td><?php echo $objResult["NAME_UNIVERSITY"];?></td>
      <td><?php echo $objResult["NAME_DIPLOMA"];?></td>
      <td><?php echo $objResult["GPA"];?></td>
      <td><?php echo $objResult["END"];?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>