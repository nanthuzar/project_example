<x-frontend>
    <div class="container py-5 px-5">
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <x-jet-validation-errors class="mb-4" />
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            
            <div class="col offset-md-1 col-md-10 offset-lg-2 col-lg-8 col-12" data-aos="fade-up" data-aos-delay="500">
                <div class="login-box my-5" style="background-color:#e5e4e2">
                    <div class="container-fluid login-wrapper">
                       <div class="login-box">
                             
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 login-box-info">
                                    <h3 class="my-4">Sign in</h3>
                                    <p class="mb-4">Once you create an account, just login here!
                                    Please enjoy shopping with our services.</p>
                                    <p class="text-center"><a href="{{ route('login') }}" class="btn btn-light rgbtn">Login here</a></p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
                                    <h3 class="mb-2">Sign up</h3>
                                    <small class="text-muted bc-description">Create new account</small>
                                    <form action="{{ route('register') }}" method="POST">
                                    @csrf  
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control mt-0" placeholder="name" aria-label="name" aria-describedby="basic-addon1" name="name">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control mt-0" placeholder="johndoe@gmail.com" aria-label="email" aria-describedby="basic-addon1" name="email">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control mt-0" placeholder="09xxxxxxx" aria-label="phone" aria-describedby="basic-addon1" name="phone">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></i></span>
                                            </div>
                                            <input type="text" class="form-control mt-0" placeholder="alone" aria-label="address" aria-describedby="basic-addon1" name="address">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control mt-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control mt-0" placeholder="Confirm Password" aria-label="password" aria-describedby="basic-addon1" name="password_confirmation">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-theme btn-block p-2 mb-1 btn-primary">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                       </div> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-frontend>