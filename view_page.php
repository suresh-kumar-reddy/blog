<?php

$conn=mysqli_connect("localhost","id8550417_kvik","Praveen7*","id8550417_kvik");
$query="select * from page";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row["content"]."</td>";
	}
}