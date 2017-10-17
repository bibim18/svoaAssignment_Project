<?
$cusid=$_POST["gg"];
$name=$_POST["param_name"];
$add=$_POST["param_add"];
$email=$_POST["param_mail"];
$tel=$_POST["param_tel"];
$type=$_POST["param_type"];
if($type == 1){$type="tc001";}
  else if($type==2){$type="tc002";}
    else {$type="tc003";}
    ?>
    <html>
    <body>
    <table class="display" cellspacing="0" width="100%">
      <tr>
        <td width="100px">รหัสลูกค้าองค์กร</td>
        <td><input type="text" name="param_id" value='<?echo $cusid;?>' disabled="false"/></td>
      </tr>
      <tr>
        <td>ชื่อลูกค้าองค์กร</td>
        <td><input type="text" name="param_name" value='<?echo $name;?>' disabled="false"/></td>
      </tr>
      <tr>
        <td>ที่อยู่</td>
          <td><input type="text" name="param_add" value='<?echo $add;?>' disabled="false"/></td>
      </tr>
      <tr>
        <td>อีเมล์</td>
          <td><input type="text" name="param_mail" value='<?echo $email;?>' disabled="false"/></td>
      </tr>
      <tr>
        <td>เบอร์โทรศัพท์</td>
          <td><input type="text" name="param_tel" value='<?echo $tel;?>' disabled="false"/></td>
      </tr>
      <tr>
        <td width="200px">ประเภทลูกค้าองค์กร</td>
          <td><input type="text" name="param_type" value='<?echo $type;?>' disabled="false"/></td>
      </tr>
      <tr><td align="center"><a href="update.php?i=<?=$cusid;?>&n=<?=$name;?>&a=<?=$add;?>&e=<?=$email;?>&t=<?=$tel;?>&tp=<?=$type;?>"><button>Confirm</button></a></td><td align="center"> <a href=javascript:history.back(1)><button>Back</button></a></td></tr>
    </table>
  </body>
</html>
