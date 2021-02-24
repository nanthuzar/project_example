<x-frontend>


    <div class="container-fluid login-wrapper">
        <div class="login-box">
            {{-- <h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Sleekadmin</h1> --}}
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12 login-box-info">
                            
                        
                        <h3 class="mb-4">Sign up</h3>
                        <p class="mb-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                        <p class="text-center"><a href="{{ route('register') }}" class="btn btn-light">Register here</a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
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
                                <button class="btn btn-theme btn-block p-2 mb-1">Login</button>
                                <a href="#">
                                    <small class="text-theme"><strong>Forgot password?</strong></small>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-frontend>