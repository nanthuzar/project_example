<x-frontend>


    <div class="container py-5 px-5">
        <div class="row">
            <div class="col offset-md-1 col-md-10 offset-lg-2 col-lg-8 col-12" data-aos="fade-up" data-aos-delay="500">
                <div class="login-box my-5" style="background-color:#e5e4e2">
            </div>
            <form action="{{ route('login') }}" method="POST"  style="background-color:#e5e4e2">
                @csrf
                <div class="row py-5">
                    <div class="offset-md-1 col-md-5 col-sm-6 col-12 login-box-info">
                            
                        
                        <h3 class="my-4 px-2">Sign up</h3>
                        <p class="mb-4 px-2">If you don't have an account, please register here!!</p>
                        <p class="text-center"><a href="{{ route('register') }}" class="btn btn-light rgbtn">Register here</a></p>
                    </div>
                    <div class="col-md-6 col-lg-5 col-12 login-box-form p-4">
                        <h3 class="mb-2">Login</h3>
                        <small class="text-muted bc-description">Sign in with your credentials</small>
                        <form action="" class="mt-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control mt-0" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name="email">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control mt-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                            </div>                

                            <div class="form-group">
                                <button class="btn btn-block p-2 mb-1 btn-primary" id="log">Login</button>
                                <a href="#">
                                    <small class="text-theme" id="fp"><strong>Forgot password?</strong></small>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-frontend>