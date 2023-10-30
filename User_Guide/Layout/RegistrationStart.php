<div class="container-fluid bg-registration py-5" style="margin: -50px 0;" id="Singup">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> Book Package</h1>
                    </div>
                    <p class="text-white">You can Do</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Plan Trip</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Social Activity</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Read Blog</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Add Review</li>

                    </ul>
                </div>
                <div class="col-lg-5" style="margin: -60px 0;">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5" >
                            <form action="./User_Guide/UserAction/UserRegister.php" method="post" onsubmit="return validation()" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" name="name" id="user"  autocomplete="off"/>
                                </div>
                                <span id="user_rr" class="text-danger font-weight-bold"></span>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" name="email" id="email" autocomplete="off"  />
                                </div> <div class="form-group">
                                <span id="email1" class="text-danger font-weight-bold"></span>

                                    <input type="text" class="form-control p-4" placeholder="Your contact" name="contact" id="contact" autocomplete="off"  />
                                </div>
                                <span id="contact1" class="text-danger font-weight-bold"></span>

                                <!-- <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Add Description" name="adhar"  />
                                </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your Address" name="address" id="address" autocomplete="off"  />
                                </div>
                                <span id="address1" class="text-danger font-weight-bold"></span>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control p-4"  name="profile" id="profile" autocomplete="off"  />
                                    <label class="custom-file-label">Upload Profile</label>
                                </div>
                                <span id="profile1" class="text-danger font-weight-bold"></span>

                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Create  Password" name="pass" id="pass" autocomplete="off"  />
                                </div>
                                <span id="pass1" class="text-danger font-weight-bold"></span>

                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;" id="country">
                                    <option value="">Select Country</Select></option>  
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;" id="state" >
                                      <option value="">Select State</Select></option>  
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;" id="city">
                                    <option value="">Select City</Select></option>

                                    </select> 
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="user_signup">Sign Up Now</button><br>
                                    <a href="./User_Guide/Layout/login.php">I Have Already An Account </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    