<?
$cusid=$_POST["gg"];
$name=$_POST["param_name"];
$add=$_POST["param_add"];
$type=$_POST["param_type"];
if($type == 1){$type="tp001";}
  else if($type==2){$type="tp002";}
    ?>
    <html>
    <body style="font-family: 'Kanit', sans-serif;">
    <table class="display" cellspacing="0" width="100%">
    <td width="100px">รหัสโปรโมชั่น</td>
    <td><input type="text" name="param_id" value='<?echo $cusid;?>' disabled="false"/></td>
  </tr>
  <tr>
    <td>รายละเอียดโปรโมชั่น</td>
    <td><input type="text" name="param_name" value='<?echo $name;?>' disabled="false"/></td>
  </tr>
  <tr>
    <td>ระยะเวลา(วัน)</td>
    <td><input type="text" name="param_add" value='<?echo $add;?>' disabled="false"/></td>
  </tr>
  <tr>
    <td width="200px">ประเภทโปรโมชั่น</td>
    <td><input type="text" name="param_type" value='<?echo $type;?>' disabled="false"/></td>
  </tr>
      <tr><td align="center"><a href="update_pro.php?i=<?=$cusid;?>&n=<?=$name;?>&a=<?=$add;?>&e=<?=$email;?>&t=<?=$tel;?>&tp=<?=$type;?>"><button>Confirm</button></a></td><td align="center"> <a href=javascript:history.back(1)><button>Back</button></a></td></tr>
    </table>
  </body>
</html>
