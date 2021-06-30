
<html>
<head></head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Kreditpacket</th>
        <th>Anzahl Tage</th>
        <th>Status</th>
    </tr>
<?php
require('database.php');
$query =$pdo->prepare('SELECT * FROM user ');
$query->execute();

$result = $query->fetchAll();
foreach($result as $result)
{




    echo '<tr>';
    echo '<td>'.$result['name'].'</td>';
    echo '<td>'.$result['email'].'</td>';
    echo '<td>'.$result['telephone'].'</td>';
    echo '<td>'.$result['creditpackages'].'</td>';
    echo '<td>'.$result['tage'].'</td>';
    echo '<td>'.$result['status'].'</td>';
    echo '</tr>';


}
?>
</table>
</body>
</html>