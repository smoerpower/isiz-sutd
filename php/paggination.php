<?php
// Script and tutorial written by Adam Khoury @ developphp.com
// Line by line explanation : youtube.com/watch?v=T2QFNu_mivw
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "smoer";
// This first query is just to get the total count of rows
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['page'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['page']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) {
    $pagenum = 1;
} else if ($pagenum > $last) {
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
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$previous.'"><</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">></a> ';
    }
}
$list = '';
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	$id = $row["id"];
	$title = $row["title"];
	$text = $row["text"];
	$date = $row["date"];
	$date = strftime("%e %b, %Y", strtotime($date));
  $author = $row["author"];

$listid .= "Запись #: $id";


$linkid .= '<a href="index.php?id='.$id.'" class="list-group-item">
		'.$id.' &nbsp '.$title.''.$time.' '.$date.'
		</a>
';







	$list .= '<article id='.$id.'>
  <a href="index.php?id='.$id.'">
	<h2>'.$title.'</h2></a>
	<small>
   Опубликовано: '.$time.' '.$date.'
   Автор: '.$author.'
  </small>
	<p>'.$text.'</p>
</article>';

}


// Close your database connection
mysqli_close($conn);
?>



<?php
include_once("db.php");

$id = $_GET['id'];


$result = mysql_query("SELECT title, text, date, time, author FROM news
                      WHERE id='$id'
      ");     // DESC LIMIT 10 обратный порядок сортировки (вместо id = date)




 $row = mysql_fetch_assoc($result);


if(isset($_POST['save']))


{
    $title = strip_tags(trim ($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));


    mysql_query("UPDATE news SET title = '$title', text='$text', author='$author' WHERE id ='$id' ");
    mysql_close();
}

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
