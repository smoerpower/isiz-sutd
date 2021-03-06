<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "smoer";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(id) FROM news";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count

$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 5;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if ($last < 1) {
    $last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if (isset($_GET['page'])) {
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['page']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) {
    $pagenum = 1;
} elseif ($pagenum > $last) {
    $pagenum = $last;
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit



$sql = "SELECT id, title, text, date, time, author FROM news ORDER BY id DESC $limit";
$query = mysqli_query($conn, $sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Новостей: $rows";
$textline2 = "Страниц: $last";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if ($last != 1) {
    /* First we check if we are on page one. If we are then we don't need a link to
       the previous page or the first page so we do nothing. If we aren't then we
       generate links to the first page, and to the previous page. */
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '   <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$previous.'">&laquo;</a></li> &nbsp; &nbsp; ';



        // Render clickable number links that should appear on the left of the target page number
        for ($i = $pagenum-4; $i < $pagenum; $i++) {
            if ($i > 0) {
                $paginationCtrls .= '

                <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a></li> &nbsp;

                ';
            }
        }
    }
    // Render the target page number, but without it being a link
    $paginationCtrls .= '<li class="active"><a href="">'.$pagenum.'</a></li>

    &nbsp;


    ';
    // Render clickable number links that should appear on the right of the target page number
    for ($i = $pagenum+1; $i <= $last; $i++) {
        $paginationCtrls .= '  <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a></li> &nbsp; ';
        if ($i >= $pagenum+4) {
            break;
        }
    }
    // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">&raquo;</a></li> ';
    }
}

$list = '';
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    $id = $row["id"];
    $title = $row["title"];
    $text = $row["text"];
    $date = $row["date"];
    $date = strftime("%e.%m.%Y", strtotime($date));
    $time = $row["time"];
    $time = strftime("%k.%M", strtotime($time));
    $author = $row["author"];



    $list .= '<article id='.$id.'>
	<h2>'.$title.'</h2>
	<small>
   Опубликовано: '.$time.' '.$date.'
   Автор: '.$author.'
  </small>
	<p>'.$row["text"].'</p>
</article>

';



    $listid .= '
    <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$id.'">
              '.$title.'<small> &nbsp #'.$id.' / '.$date.'/ '.$time.' </small>

                <a href="delete.php?id='.$id.'" type ="submit" class="btn pull-right btn-sm "><span class="glyphicon glyphicon-trash"></a>

                  <a href="?id='.$id.'" type ="submit" class="btn btn-sm pull-right" name="save" ><span class="glyphicon glyphicon-pencil"></a>

                    <a href="" type ="submit" name="add" class="btn pull-right btn-sm "><span class="glyphicon glyphicon-plus"></span></a>
              </a>
             </h4>
          </div>
          <div id="collapse'.$id.'" class="panel-collapse collapse">
            <div class="panel-body">
               <p>'.$text.'</p>
            </div>
          </div>
        </div>
';
}

// Close your database connection
mysqli_close($conn);
?>




<!-- <!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
div#pagination_controls{font-size:21px;}
div#pagination_controls > a{ color:#06F; }
div#pagination_controls > a:visited{ color:#06F; }
</style>
</head>
<body>
<div>
  <h2>?php echo $textline1; ?> Страницы</h2>
  <p>?php echo $textline2; ?></p>
  <p>?php echo $list; ?></p>
  <div id="pagination_controls">?php echo $paginationCtrls; ?></div>
</div>
</body>
</html> -->
