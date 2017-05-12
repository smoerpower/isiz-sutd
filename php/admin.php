<?php
include_once "paggination.php";
?>
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
            <h4><a href="admin.php">
              <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                &nbsp; Управление содержимым
              <small> / <?php echo $textline1; ?> / <?php echo $textline2;?></small></a>
          </h4>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
<!-- col-lg-5 col-md-5 -->
<div class="row">
  <div class="col-lg-5 col-md-5">
    <div class="panel-group" id="accordion">
        <?php echo $listid; ?>
    </div>
    <ul class="pagination pagination-sm">
        <?php echo $paginationCtrls; ?>
    </ul>
  </div>

<!-- col-lg-7 col-md-7 -->


<?php include_once 'edit.php'; $author = 'Administrator'; ?>

            <div class="col-lg-7 col-md-7">
               <form method="post">
                 <div class="form-group">
                  <div class="col-lg-10 col-md-10">
                    <input type="text"  id="focusedInput" class="form-control"
                     name ="title" autofocus placeholder="Введите заголовок.."  value="<?php echo $title;?>"/>
                  </div>
                   <div class="col-lg-10 col-md-10">
                     <textarea id="focusedInput" class="form-control" rows="15"
                    name ="text"  placeholder="Введите текст..">
                    <?php echo $text;?>
                  </textarea>
                   </div>
                    <div class="col-lg-12">

                      <div class="input-group" role="toolbar">
                        <div class="col-lg-3 col-md-3">
                          <input type="text"  id="focusedInput" class="form-control input-md" placeholder="Введите автора.." name="author" value="<?php echo $author;?>"/>
                        </div>
                        <div class="col-lg-3 col-md-3 ">
                          <input type="text"  id="focusedInput" class="form-control input-md" name="date" value="<?php echo $date = strftime('%e.%m.%Y');?>"/>
                        </div>
                        <div class="col-lg-3 col-md-3 ">
                          <input type="text"  id="focusedInput" class="form-control input-md" name="time" value="<?php echo $time = strftime('%k:%M');?>"/>
                        </div>

                        <div class="col-lg-3 col-md-3 ">

                        </div>
                    </div>
                    </div>
                          <div class="col-lg-10">

                          <input type="submit" value="Добавить" name="add" class="btn btn-success btn-sm" />

                          <input type ="submit" value="Сохранить" name="save" class="btn btn-warning btn-sm" />


                          </div>
                      </div>
                    </form>
                  </div>




                </div>



</div>

</div>



  </div>
</div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
