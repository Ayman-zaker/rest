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
                      <form method = "POST" action ="itemsave.php">
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input name = 'itemname' type="text" class="form-control" id="basic-default-name" placeholder="Account name" />
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">price</label>
                          <div class="col-sm-10">
                            <input
							name = 'price'
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Amount" />
                          </div>
                        </div>
                       
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Expire Date</label>
                          <div class="col-sm-10">
                            <input
							name = 'expiredate'
                              type="date"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                               />
                          </div>
                        </div>
						
						 <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Types</label>
                          <div class="col-sm-10">
                            <input
							name = 'types'
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Amount" />
                          </div>
                        </div>
						
						
						 <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">quntity</label>
                          <div class="col-sm-10">
                            <input
							name = 'quntity'
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Amount" />
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