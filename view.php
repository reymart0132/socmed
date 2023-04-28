<?php
// session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
$config = new config();
$con = $config->con();
$sql = "SELECT * FROM tbl_post ORDER BY id DESC ";
$data= $con->prepare($sql);
$data->execute();
 $rows = $data->fetchAll(PDO::FETCH_ASSOC);

// Select data


  echo "<table class='table table-sm table-bordered' id='myTable' >";
  echo "<thead class='thead-dark'>";
  echo "<th class=' text-center'>newsfeed</th>";
  echo "</thead>";
  // Output data of each row
 
  foreach($rows as $row) {
    echo "<tr><td> <div class='card'>
      <div class='card-header'>
      <h5>$row[posted_by]</h5>
      </div>
      <div class='card-body'>
        <blockquote class='blockquote mb-0'>
          <p>$row[post]</p>
          <footer class='blockquote-footer'>DATE:$row[date_posted]</footer>
        </blockquote>
      </div>
    </div> </td></tr>";
  }
  echo "</table>";
?>