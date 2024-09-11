<?php
include ("frontcode.php");
include ("meno.php");
?>
<?php
    include('connection.php');
    $result = $conn->query("SELECT `id`, `accountname`, `accountamount`, `inorout`, `accountdate`, `accountdesc` FROM `account` ;");
	$count = 1;
    $total = 0;
	?>
<h5 class="mb-0">Basic Layout</h5></div>
<div class="card-body">
 <div class="card">
 
 <?php
     if (isset($_GET['allgood']))
    { ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                        Data was removed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                      <div class="alert alert-warning alert-dismissible" role="alert">
                       Data was updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
					  
	
	<?php }
	?>
                
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Account Name</th>
                          <th>Account Amount</th>
                          <th>Account in or out</th>
                          <th>Account Date</th>
                          <th>Account Desc</th>
                         <th></th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  
					  
					  
                       <?php
					       while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>";
        echo $row['accountname'];
        echo "</td>";
        echo "<td>" . $row['accountamount'] . "</td>";
        echo "<td>" . $row['inorout'] . "</td>";
        echo "<td>" . $row['accountdate'] . "</td>";
        echo "<td>" . $row['accountdesc'] . "</td>";
				?>
<td>
                        <button type="button" class="btn rounded-pill btn-warning">Edit</button>
						<button type="button" class="btn rounded-pill btn-danger">Delete</button>
</td>
<?php
        echo "</tr>";
        $count = $count + 1;
        if ($row['inorout'] == 'in')
            $total = $total + $row['accountamount'];
        else
            $total = $total - $row['accountamount'];

    }
    echo "<tr>";
    echo "<td colspan='2'>Total</td>";
    if ($total > 0)
        echo "<td><font color='green'>" . $total . "</font></td>";
    else
        echo "<td><font color='red'>" . $total . "</font></td>";

    echo "</tr>";
					   ?>








                      </tbody>
                    </table>
                  </div>
               
              </div>
                  

<?php include("rear.php");?>