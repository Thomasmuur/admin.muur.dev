<?php
// WHERE YEARWEEK(datum) = YEARWEEK(NOW())
require_once('connection.php');

$select_i = $db->prepare('SELECT * FROM deadlines WHERE YEARWEEK(date) = YEARWEEK(NOW())');
$select_i->execute();

$select = $select_i->get_result();

while ($row = $select->fetch_assoc()) {
  echo json_encode($row);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - MuurDEV</title>
  </head>
  <body>

  </body>
</html>
