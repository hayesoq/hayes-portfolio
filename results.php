<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("functions.php");
echo '<!--results start -->';
echo '<section id="about" class="about">';
echo '<div class="section-heading text-center">';
echo '<h2>Contact Form Results</h2>';
$dblink = db_connect("contact_data");
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Name</th>';
echo '<th>Email</th>';
echo '<th>Subject</th>';
echo '<th>Comment</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$sql = "Select * from `contact_info`";
$result = $dblink->query($sql) or
	die("<h2>Something went wrong with:$sql<br>".$dblink->error().'</h2>');
while($data = $result->fetch_array(MYSQLI_ASSOC)) {
	echo '<tr>';
	echo '<td>'.$data['auto_id'].'</td>';
	echo '<td>'.$data['name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['subject'].'</td>';
	echo '<td>'.$data['comment'].'</td>';
	echo '</tr>';
}
echo '</tbody>';
echo '</table>';


echo '	</div>';
echo '</section><!--/.about-->';
echo '<!--results end -->';