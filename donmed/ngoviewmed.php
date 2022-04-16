
<!DOCTYPE html>
<html>
<h1 style="color:black;text-align:center;">MEDICINE</h1>
    <title>
        Medicine
</title>
<style type="text/css">
body{
    background:url("admin.jpg");
    background-repeat:no-repeat;
    background-size:cover;
}
table{
    
    width:100%;
    color:#588c7e;
    font-family:monospace;
    font-size:25px;
    text-align:left;
    
}
th{
    background-color:skyblue;
    color:black;
    text-align:center;

}
tr:nth-child(even){
    background-color:#f2f2f2;
}
td{
    color:black;
    width:100%;
    font-size:22px;
    text-align:center;
    
}

    </style>
<body>
    <br><br>
    <table>
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Medicine Name</th>
            <th>Tablet Count</th>
            <th>Manufactured Date</th>
            <th>Expiry Date</th>
            <th>Description</th>
            <th>Images</th>
            <th>Result</th>


        </tr>
        <?php
  $conn = mysqli_connect("localhost","root","","online medicine donation");
  if($conn-> connect_error){
      die("Connection failed:".$conn-> connect_error);

  }
  $sql="SELECT DISTINCT name,email,medname,tablet,mdate,edate,detail,imgupload from registration,medicine";
  $result=$conn-> query($sql);

  if($result->num_rows > 0){
      while($row = $result-> fetch_assoc()){
          echo "<tr><td>".$row["name"]."<td>".$row["email"]."<td>".$row["medname"]."<td>".$row["tablet"]."<td>".$row["mdate"]."<td>".$row["edate"]."<td>".$row["detail"]."<td>".$row["imgupload"].
          "<td>
          <form action='get.php'>
          <input type='submit' value='GET' onclick='get.php'>
          </form>"
          ."<td><tr>";

      }
      echo "</table>";
  }
  else{
      echo "0 result";
  }
  $conn -> close();


?>

</table>


</body>



</html>