<?php
include ("frontcode.php");

?>
     <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                     
<h5 class="mb-0">Sign up Page</h5></div>
<div class="card-body">
            <div class="card-body mt-1">
              <h4 class="mb-1">Welcome to ! 👋🏻</h4>
              <p class="mb-5">Please sign-up </p>

              <form id="formAuthentication" class="mb-5" action="index.html" method="POST">
                <div class="form-floating form-floating-outline mb-5">
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    autofocus />
                  <label for="username">Username</label>
                </div>
                <div class="form-floating form-floating-outline mb-5">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                  <label for="email">Email</label>
                </div>
                <div class="mb-5 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="password">Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                  </div>
                </div>

               
                <button class="btn btn-primary d-grid w-100 mb-5">Sign up</button>
              </form>

              <p class="text-center mb-5">
               
                <a href="index.php">
                  <span>Go back to login</span>
                </a>
              </p>
            </div>
                  

<?php include("rear.php");?>