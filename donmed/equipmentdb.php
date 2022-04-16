<!DOCTYPE html>
<html>
<h1 style="color:black;text-align:center;">EQUIPMENT</h1>
    <title>
        Equipment
</title>
<style type="text/css">

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
    font-size:20px;
    text-align:center;
    
    
}

    </style>
<body>
    <br><br>
    <table>
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Equipment Name</th>
            
            <th>Manufactured Date</th>
            <th>Warranty</th>
            <th>Description</th>
            <th>Images</th>
            <th>Result</th>


        </tr>
        <?php
  $conn = mysqli_connect("localhost","root","","online medicine donation");
  if($conn-> connect_error){
      die("Connection failed:".$conn-> connect_error);

  }
  $sql="SELECT DISTINCT name,email,eqpname,mmdate,warranty,detail,imgupload from registration,equipment";
  $result=$conn-> query($sql);

  if($result->num_rows > 0){
      while($row = $result-> fetch_assoc()){
          echo "<tr><td>".$row["name"]."<td>".$row["email"]."<td>".$row["eqpname"]."<td>".$row["mmdate"]."<td>".$row["warranty"]."<td>".$row["detail"]."<td>".$row["imgupload"]. "<td>
          <form action='approve.php'>
          <input type='submit' value='Approve' onclick='approve.php'>
          </form>
          <form action='deny.php'>
          <input type='submit' value='DENY'>
          </form>
          <form action='match.php'>
          <input type='submit' value='MATCH'>
          </form>"."<td><tr>";

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