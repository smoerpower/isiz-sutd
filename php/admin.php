<?php include_once 'paggination.php'; ?>

<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Информационная безопасность </title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:500" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- шапка -->
      <div class="col-lg-12">
        <div class="col-lg-8">
          <div class="page-header">
            <h4>
              <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                &nbsp; Управление содержимым
              <small> / <?php echo $textline1; ?> / <?php echo $textline2;?></small>
          </h4>
          </div>
        </div>
        <div class="col-lg-4">

        </div>
      </div>

<div class="row">
  <div class="col-lg-5 col-md-5">
    <div class="panel-group" id="accordion">
        <?php echo $listid; ?>
    </div>
    <ul class="pagination pagination-sm">
        <?php echo $paginationCtrls; ?>
    </ul>
  </div>
</div>




  </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
