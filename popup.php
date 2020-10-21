 <div id="login-popup" class="mfp-hide">
        <div class="form-login-register">
            <div class="tabs mb-8">
                <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><h3>Log In</h3></a></li>
                    <li class="nav-item"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false"><h3>Register</h3></a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="form-login">
                        <form method="POST" action="login_redirect.php">
                            <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username" class="sr-only">Username</label>
                                <input id="username" type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap align-items-center">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" type="password" class="form-control" name="pass" placeholder="Password"> <a href="forgot.php" class="input-group-append text-decoration-none">Forgot?</a></div>
                                    <input type="hidden" name="type" value="Consumer">
                            </div>
                            <div class="form-group mb-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check">
                                    <label class="custom-control-label text-dark" for="check">Remember</label>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8"> Log In </button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade " id="register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="form-register">
                        <form action="register_handle.php" method="POST">
                            <div class="font-size-md text-dark mb-5">Create Your Account</div>
                            
                             <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Join As</label>
                                <select type="text" required="" name="user_type" class="form-control" >
                                    <option>Dog Owner</option>
                                    <option>Dog Service Provider</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Username</label>
                                <input id="username-rt" type="text" required name="full_name" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="text" required name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password-rt" class="sr-only">Username</label>
                                <input id="password-rt" required name="pass" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="r-password" class="sr-only">Username</label>
                                <input id="r-password" required name="cpass" type="password" class="form-control" placeholder="Retype password">
                            </div>
                            <div class="form-group mb-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check-term">
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our <a target="_blank" href="terms_and_conditions.php">Terms and Conditions</a> </label>
                                </div>
                            </div>
                            <button type="submit" name="add_user" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm"> Create an account </button>
                        </form>
                    </div>
                </div>
            </div>
            <form></form>
        </div>
    </div>