<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SVOA 1.0 | Management Information System</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="css/sbs-admin.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style="font-family: 'Kanit', sans-serif;">
<?php include("components/template/navbar.php") ?>

  <div class="content-wrapper" style="font-family: 'Kanit', sans-serif;">


      <?php


        $file = (! empty($_GET["depart"])) ? $_GET["depart"] : require ("components/template/countdetail.php");
        if ($file=="customer")
            include ("components/sale/customer.php");
        if ($file=="promotion")
            include ("components/sale/promotion.php");
        if ($file=="order")
            include ("components/sale/order.php");
        if ($file=="department")
            include ("components/personnal/department.php");
        if ($file=="position")
            include ("components/personnal/position.php");
        if ($file=="basesalary")
            include ("components/personnal/basesalary.php");
        if ($file=="employees")
        {
            include ("components/personnal/employees.php");
        }
        /*ฝ่ายบริการ*/
        if($file=="insure")
        {
          include ("components/service/insure.php");
        }
        if($file=="catagory_insure")
        {
          include ("components/service/catagory_insures.php");
        }
        if($file=="service")
        {
          include ("components/service/services.php");
        }
      ?>

      <!-- footer -->
      <?php include("components/template/footer.php") ?>
      <!-- footer -->
      <!--logout-->
      <?php include("components/template/logout.php") ?>
      <!--logout-->
      <?php include("components/template/scripts.php") ?>
  </div>
</body>

</html>
