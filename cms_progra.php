<?php
	$db=new mysqli("localhost","id8550417_kvik","Praveen7*","id8550417_kvik");
		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
		<link rel="icon" href="images/logo.png">
		<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet"> 
		<style>
		div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
  top:-10px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #20b2aa;
  color: white;
}body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color:  #20b2aa;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
<center><div class="logo"><h4>Yuvathi CMS</h4></div><br>
  <a  href="cmsslide.php">Edit Home Slide</a>
  <a href="edit_nav.php">Edit Categories</a>
  <a class="active" href="cms_programmes.php">Edit Products</a>
  <a href="cmsmaterial.php">Edit Materials</a>
  <a href="cmscolor.php">Edit Color</a>
  <a href="cms_offer.php">Edit Offers</a>
  <a href="cms_order.php">View orders</a>
 
  <a href="sales.php">View Sales</a>
  <a href="alogout.php">Logout</a></center>
</div>

			<div class="content">
				<br>	<font color="#20b2aa"><h3 >Edit Products</h3></font><br>
					<?php
						if(isset($_POST["submit"]))
						{ $file = $_POST['text'];
							$target="programme pics/";
							$target_file=$target.basename($_FILES["slide"]["name"]);
							if(move_uploaded_file($_FILES['slide']['tmp_name'],$target_file))
							{
								if($_POST['price']>0)
								{
								$sq = "INSERT INTO product (pid,pname,category,subtype,color,material,price,descriptions,image)  VALUES ('{$_POST["pid"]}','{$_POST["pname"]}','{$_POST["dropdown"]}','{$_POST["dropdown1"]}','{$_POST["dropdown2"]}','{$_POST["dropdown3"]}','{$_POST["price"]}','$file','{$target_file}')";								
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success</div>";
								}
								}
								else
								{
									echo "<div class='error'>Insert Failed.Check values</div>";
								}
							}
					
					}
					
					
					
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="lbox">
					<label>Product Number</label><br>
						<?php
							$no="P1";
							$sql="select * from product order by pid desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["pid"],1,strlen($row1["pid"]));
								$no++;
								$no="P".$no;
							}
						
						
						
						?>
						
					<input type="text" class="input3" name="pid" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label>Product Name</label><br>
					<input type="text" class="input3" name="pname"  required autofocus placeholder="pname" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
			
					<label>Category</label><br>
					<?php $query="SELECT * FROM nav";
		$result=mysqli_query($db,$query);
		echo"<select name = 'dropdown'>";
		while($ro = mysqli_fetch_assoc($result))
			{
            echo"<option value = '".$ro['mid']."'>".$ro['menu']."</option>";
            
		}echo "</select>";?><br><br>
		<label>SubCategory</label><br>
					<?php 
		               echo"<select name = 'dropdown1'>"; $query="SELECT * FROM nav";
		               $result=mysqli_query($db,$query);
					   while($row = mysqli_fetch_assoc($result))
			           {
		               $sq="SELECT * FROM sm where mid='$row[mid]' ";
                       $res=mysqli_query($db,$sq);
					  
		               while($ro = mysqli_fetch_assoc($res))
			           {if($ro['mid']=$row['mid'])
			{
			             echo"<option value = '".$ro['smid']."'>".$ro['sm']."-".$row['menu']."</option>";	
					   }}}echo "</select>";?>
						<br><br>
						<label>Color</label><br>
					<?php $query="SELECT * FROM color";
		$result=mysqli_query($db,$query);
		echo"<select name = 'dropdown2'>";
		while($ro = mysqli_fetch_assoc($result))
			{
            echo"<option value = '".$ro['id']."'>".$ro['color']."</option>";
            
		}echo "</select>";?><br><br>
					<label>Material</label><br>
				<?php $query="SELECT * FROM material";
		$result=mysqli_query($db,$query);
		echo"<select name = 'dropdown3'>";
		while($ro = mysqli_fetch_assoc($result))
			{
            echo"<option value = '".$ro['id']."'>".$ro['material']."</option>";
            
		}echo "</select>";?><br><br>
					<label>Price</label><br>
					<input type="text" class="input3" title="only digits allowed" name="price" required=""><br><br>
				
<textarea name ="text" class="form-control" id="textArea" rows="3" placeholder="Textarea"></textarea>
<script>
//Load editor and replace it with textarea
CKEDITOR.replace( 'textArea' );
</script>
					
					<label>Image</label><br>
					<input type="file"  class="input3" name="slide" required=""><br><br>
					
			
			<button type="submit" style="float:left;" class="btn essence-btn" name="submit">Insert</button>
				</div>
									</form>
				<div class="lbox">
				
					<br><font color="#20b2aa"><h3 style="margin-top:30px;">Products Details</h3></font><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<div style="overflow-x:auto;">
					<table>
						<tr>
							<th>Product image</th>
							<th>Product Number</th>
							<th>Product Name</th>
							<th>Category id</th>
							<th>Subtype id</th>
							<th>Color</th>
							<th>Material</th>
							<th>Price</th>
						</tr>
						<?php
							$s="select * from product order by id desc";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
										echo "
										<tr>
										<td><img src='{$r["image"]}' height='40' width='40'></td>
										<td>{$r["pid"]}</td>
										<td>{$r["pname"]}</td>
										<td>{$r["category"]}</td>
										<td>{$r["subtype"]}</td>
										<td>{$r["color"]}</td>
										<td>{$r["material"]}</td>
										<td>{$r["price"]}</td>	
										
										<td><a href='product_delete.php?id={$r["id"]}' class='btnr'>DELETE!!</a></td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
				</div>
				
				
			</div>
	
	</body>
	
</html>