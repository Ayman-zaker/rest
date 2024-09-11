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
                     
<h5 class="mb-0">Login Page</h5></div>
<div class="card-body">
            <div class="card-body mt-1">
              <h4 class="mb-1">Welcome to ! 👋🏻</h4>
              <p class="mb-5">Please sign-in </p>

              <form id="formAuthentication" class="mb-5" action="checklogin.php" method="POST">
                <div class="form-floating form-floating-outline mb-5">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Enter your email or username"
                    autofocus />
                  <label for="email">Email or Username</label>
                </div>
                <div class="mb-5">
                  <div class="form-password-toggle">
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
                </div>
               
                <div class="mb-5">
                  <button class="btn btn-primary d-grid w-100" type="submit">login</button>
                </div>
              </form>

              <p class="text-center mb-5">
               
                <a href="register.php">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
                  

<?php include("rear.php");?>