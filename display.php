<html>

<head>
	<title> All Complaints</title>



	<style>
		body{

			background-color: #6699ff;

		}
		table{
			background-color: white;
		}
       .delete{
       	background-color: RED;
       	color: white;
       	border: 0;
       	outline: none;
       	border-radius: 5px;
       	height: 23px;
       	width: 80px;
       	font-weight: bold;
       	cursor: pointer;
       }



	</style>
</head>



<?php 
include("connection.php");

$quey = "SELECT * FROM form"; 
$data  = mysqli_query($conn, $quey);

$total= mysqli_num_rows($data);
//echo $total;



if($total != 0) 
{


	?>

	<h2 align="center";><mark>All Complaints</mark></h2>
<center>
<table border="1" cellspacing="7">
	<tr>

	<th>Customer Name</th>
	<th>Number</th>
	<th>Address</th>
	<th>City Name</th>
	<th>Pin Code</th>
	<th>District</th>
	<th>State</th>
	<th>Day</th>
	<th>Month</th>
	<th>Year</th>
	<th>Product Type</th>
	<th>Product Name</th>
	<th>Other Product Name</th>
	<th>Product Image</th>
	<th>Nature of Complatin</th>
	<th>Warranty</th>
	<th>Purchase Proof</th>
	<th>DELETE BUTTON</th>
</tr>




	<?php
	while ($result = mysqli_fetch_assoc($data)) {
		echo "
              <tr>
             
              <td>".$result['name']."</td>
               <td>".$result['number']."</td>
                <td>".$result['address']."</td>
                 <td>".$result['cname']."</td>
                  <td>".$result['pincode']."</td>
                   <td>".$result['district']."</td>
                    <td>".$result['state']."</td>
                    <td>".$result['day']."</td>
                      <td>".$result['month']."</td>
                       <td>".$result['year']."</td>
                        <td>".$result['producttype']."</td>
                         <td>".$result['productname']."</td>
                          
                              
                              <td>".$result['otherproductname']."</td>

                              <td><img src='".$result['product_image']."' height='150px' width='150px'></td>

                           <td>".$result['natureofcomplaint']."</td>
                            <td>".$result['warranty']."</td>
                            <td><img src='".$result['purchase_proof']."' height='150px' width='150px'></td>

                        <td><a href='delete.php?ID=$result[ID]'><input type='submit' value='Delete' class='delete'  onclick = 'return checkdelete()'></a></td>

                    </tr>
";
		

}
}
?>

 </table>
 </center>



 <script>
 	
function checkdelete()
{
	return confirm('Are you sure your want to delete this record')
}



 </script>