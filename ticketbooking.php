<?php
$con = $con mysqli_connect("127.0.0.1","root","","railway");
mysqli_select_db($con,"railway");
$sql="SELECT * FROM ticket";
$records=mysqli_quary($con,$sql);
?>
<html>
              <head>
                                 <title>Booked Ticket</title>
                                 <center>font colour ="white"  size"7"><u>Booked &nbsp ticket &nbsp history</u><font></center>
           </head>
           <body background="train2.jpg">
          <center>
          <br><br>
         <pre>
                      <table width"600" border="4" cellpadding="3" cellpadding="3" style="colour:white" bgcolor="grey">
                               <font color="white">
                              <tr>
                             <th>Name</th>
                             <th>age</th>
                             <th>departure</th>
                            <th>destination</th>
                            <th>coach</th>
                           <th>date</th>
                           <th><table bgcolor="blue">cancel ticket</table></th>
                          </th>
                         </font>
<?php 
while($rowvalue=mysqli_fetch_array($records))
{
echo "<tr>";
echo"<td>",$rowvalue['name'],"</td>";
echo"<td>",$rowvalue['age'],"</td>";
echo"<td>",$rowvalue['departure'],"</td>";
echo"<td>",$rowvalue['destination'],"</td>";
echo"<td>",$rowvalue['coach'],"</td>";
echo"<td>",$rowvalue['date'],"</td>";
$id=$rowvalue['name'];
echo "<td>","<form action'delete.php"><input type='hidden' name='id' value='$id'   /><input type='sumit'value='cancel ticket'></form>","</td>";
      }
     ?>
    </table>
</pre>
<form action=select.html>
<input  type=submit value="back to home page">
</form>
</center>
</body>
</html>
