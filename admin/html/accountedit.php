<?php
include ("frontcode.php");
include ("meno.php");
?>
<?php
    include('connection.php');
    
	$count = 1;
    $total = 0;
	?>
<h5 class="mb-0">Basic Layout</h5></div>
<div class="card-body">
 <div class="card">
 

	
	<?php 
	if (isset($_POST['remove']))
	{
		echo "you pressed remove";
		$theid = $_POST['id'];
		include('connection.php');

$conn->query("DELETE FROM `account` WHERE id = '$theid'");
?>
<div class="alert alert-danger alert-dismissible" role="alert">
                        Data was removed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
<?php
	}
	?>
	
	<?php
	if (isset($_POST['editinform']))
	{
		//print_r($_POST);
		//
		
		$id = $_POST['id'];
		$accountname = $_POST['accountname'];
		$accountamount = $_POST['accountamount']; 
		$inorout = $_POST['inorout']; 
		$accountdate = $_POST['accountdate'];
		$accountdesc = $_POST['accountdesc']; 
		//echo "UPDATE `account` SET `accountname`='$accountname',`accountamount`='$accountamount',`inorout`='$inorout',`accountdate`='$accountdate',`accountdesc`='$accountdesc' WHERE id = '$id'";
		$conn->query("UPDATE `account` SET `accountname`='$accountname',`accountamount`='$accountamount',`inorout`='$inorout',`accountdate`='$accountdate',`accountdesc`='$accountdesc' WHERE id = '$id'");
		?>
		<div class="alert alert-warning alert-dismissible" role="alert">
                       Data was updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
		<?php
	}
		
	if (isset($_POST['edit']))
	{
	
		$theid = $_POST['id'];
		 $result2 = $conn->query("SELECT `id`, `accountname`, `accountamount`, `inorout`, `accountdate`, `accountdesc` FROM `account` where id ='$theid' ;");
		  while ($row2 = $result2->fetch_assoc()) {
			  $id = $row2['id']; 
			  $accountname = $row2['accountname'];
			  $accountamount = $row2['accountamount']; 
			  $inorout = $row2['inorout'];
			  $accountdate = $row2['accountdate']; 
			  $accountdesc = $row2['accountdesc'];
		 ?>
		  
		 <form role="form" action = "accountedit.php" method='POST'>
		 <input type = 'hidden' name = 'id' value = "<?php echo $id;?>">
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input name = 'accountname' type="text" class="form-control" id="basic-default-name" placeholder="Account name" value = "<?php echo $accountname; ?>"/>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Amount</label>
                          <div class="col-sm-10">
                            <input
							name = 'accountamount'
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Amount" 
							  value = "<?php echo $accountamount;?>"
							  />
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">in or out</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                             <select name = 'inorout' class="form-control" required>
							 <?php 
							 switch($inorout)
							 {
								 case 'in':
									echo "<option selected value='in'>in</option>";
									echo "<option value = 'out'>out</option>";
								 break;
								 case 'out':
								    echo "<option  value='in'>in</option>";
									echo "<option selected value = 'out'>out</option>";
								 break;
								 default:
									echo "<option  value='in'>in</option>";
									echo "<option  value = 'out'>out</option>";
								 
							 }
							 ?>
                    
                </select>
                             
                            </div>
                          
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">date</label>
                          <div class="col-sm-10">
                            <input
							name = 'accountdate'
                              type="date"
                              id="basic-default-phone"
                              class="form-control phone-mask"
							   value = "<?php echo $accountdate;?>"
                               />
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">desc</label>
                          <div class="col-sm-10">
                            <textarea
							
							name = 'accountdesc'
                              id="basic-default-message"
                              class="form-control"
                              placeholder="in here add describtion"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"> <?php echo $accountdesc;?></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
						  <input type = 'hidden' name = "editinform">
                            <button  type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
					  <?php
					  }
		?>
		<?php
		
		
	}
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
						    <th></th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  
					  
					  
                       <?php
					   $result = $conn->query("SELECT `id`, `accountname`, `accountamount`, `inorout`, `accountdate`, `accountdesc` FROM `account` ;");
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
<form action = "accountedit.php" method = "POST">
<input name="id" type = "hidden" value = "<?php echo $row['id']; ?>" >
<input name="edit" type = "hidden">
<input type = "submit"  value = "Edit">
                        
						</form>
						
						
						</td>
						<td>
						<form action ="accountedit.php" method ="POST">
<input name="id" type = "hidden" value = "<?php echo $row['id']; ?>"  >
<input name="remove" type = "hidden">
<input type = "submit"  value = "Delete">
						
						</form>
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