<?php
$q = intval($_GET['q']);
//print($q);
$con = mysqli_connect('localhost','root','','mydatabase');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql1="SELECT * FROM patient WHERE id = $q";

$result1 = mysqli_query($con,$sql1);

while($person = mysqli_fetch_array($result1))
{
    echo 'ID: '.$person['ID'].'<Br>';
    echo 'First Name: '.$person['First Name'].'<Br>';
    echo 'Last Name: '.$person['Last Name'].'<Br>';
    echo 'Sex: '.$person['Sex'].'<Br>';
    echo 'Age: '.$person['Age'].'<Br>';
    echo 'Race: '.$person['Race'];
    echo '<Br>'.'<Br>'.'<Br>';
}

if($_GET['q'] == 1){
    $sql2="SELECT * FROM `mydatabase`.`peter griffin`" ;
}
if($_GET['q'] == 2){
    $sql2="SELECT * FROM `mydatabase`.`lois griffin`" ;
}

if($_GET['q'] == 3){
    $sql2="SELECT * FROM `mydatabase`.`Glenn Quagmire`" ;
}

if($_GET['q'] == 4){
    $sql2="SELECT * FROM `mydatabase`.`Joseph Swanson`" ;
}

$result2 = mysqli_query($con, $sql2);
echo "<table border='1' >
<tr>
<th>Type</th>
<th>125</th>
<th>250</th>
<th>500</th>
<th>1000</th>
<th>2000</th>
<th>4000</th>
<th>8000</th>
</tr>";

while($row = mysqli_fetch_array($result2))
{

    echo "<td>" . $row['Type'] . "</td>";
    echo "<td>" . $row['125'] . "</td>";
    echo "<td>" . $row['250'] . "</td>";
    echo "<td>" . $row['500'] . "</td>";
    echo "<td>" . $row['1000'] . "</td>";
    echo "<td>" . $row['2000'] . "</td>";
    echo "<td>" . $row['4000'] . "</td>";
    echo "<td>" . $row['8000'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>