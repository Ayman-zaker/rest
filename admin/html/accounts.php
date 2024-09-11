<?php
include ("frontcode.php");
include ("meno.php");
?>

<h5 class="mb-0">Basic Layout</h5></div>
<div class="card-body">
                    <div class="card-body">
					    <?php
    if (isset($_GET['allgood']))
    {
        ?>
					<div class="alert alert-success alert-dismissible" role="alert">
                        Data — Saved!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
				
				          <?php
    }
    ?>
				<br>
                      <form role="form" action = "accountsave.php" method='POST'>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input name = 'accountname' type="text" class="form-control" id="basic-default-name" placeholder="Account name" />
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
                              placeholder="Amount" />
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">in or out</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                             <select name = 'inorout' class="form-control" required>
                    <option value='in'>in</option>
                    <option value = 'out'>out</option>
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
                              aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  

<?php include("rear.php");?>