<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style= 'color: #7d5757; text-align: center; border: 2px solid black; font-family:Helvetica;' >FAQ</h1>
<h2 style= 'color: white; text-align: center; background-color: #a27373; font-family:Helvetica;' >Here are all the questions you may have in mind concerning our products</h2>
</body>
</html>

<?php
//declaring some variables
$host = "localhost";
$user = "root";
$password = "";
$dbname = "faqs";
$Question = '';
$Answer = '';
$Category = '';

//connect to server + select database
$connect = mysqli_connect($host, $user, $password, $dbname)
or die("Connection is not found");

//Find
if(isset($_POST['FIND'])){
    $Question = $_POST['question'];
    $query = "SELECT * FROM `product` WHERE `questions` LIKE '%$Question%'";
    $result = mysqli_query($connect, $query) or die ("query is failed" . mysqli_error($connect));
    if (($row = mysqli_fetch_row($result)) == true) {
        $Question = $row[0];
        $Answer = $row[1];
        $Category = $row[2];
    }
    else echo "Question not found";
}

//Retreive all 
$query = "SELECT * FROM `product`";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
echo "<table border= '1' style='font-family:Helvetica; align:center; padding:10px'>";
echo "<tr style= 'background-color: white;'><th>question</th><th>answer</th><th>category</th></tr>";
while (($row = mysqli_fetch_row($result)) == true) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}  
echo "</table>";
//Step 3: Close the connection
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = 'background-color: #e6d7d7;'>

<h2 style= 'color: white; text-align: center; background-color: #a27373; font-family:Helvetica;' >You can also type your question below to get right to the point :</h2>

<form method="POST" style='font-family: Helvetica; align:center;' >   

    <p style= 'color:#7d5757;'> Enter Question:<input type="text" size="80" placeholder="Enter Question" name="question" value="<?php echo $Question ?>" /></p>
    <p style= 'color:#7d5757;'> Answer:<input type="text" size="80" name="answer" value="<?php echo $Answer ?>" /></p>
    <p style= 'color:#7d5757;'> Category:<input type="text" size="80" name="category" value="<?php echo $Category ?>" /></p>
	<input type="submit" value="Find" name="FIND" style='color: #7d5757; padding:5px; border: solid; border-radius:8px; font-family:Helvetica;'/>
</form>
</body>
</html>







