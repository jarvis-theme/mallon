        <div class="breadcrumb">
            <p>Login Member</span>
        </div>
        <div class="inner-column row padd">
            <div id="center_column" class="inner-bg col-lg-12 col-xs-12">
                <div class="login-page">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 loginform">
                            <div class="login-wrap">
                                <h2 class="title">Login</h2>
                                <form action="{{url('member/login')}}" method="post" enctype="multipart/form-data">
                                    <div class="content-login">
                                        <b>*Email</b><br>
                                        <input type="text" placeholder="Email" name="email" class="form-control" value="{{Input::old('email')}}" required><br>
                                        <b>*Password</b><br>
                                        <input type="password" placeholder="Password" name="password" class="form-control" required><br>
                                        <a href="{{url('member/forget-password')}}" class="forgot">Lupa Password?</a><br><br>
                                        <input type="submit" value="Login" class="btn btn-warning">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-offset-2">
                            <div class="login-desc">
                                <h2 class="title">Pendaftaran</h2>
                                <h4>Daftar untuk mendapatkan keuntungan :</h4>
                                <ul class="ul">
                                    <li>Cepat dan Mudah dalam bertransaksi</li>
                                    <li>Mudah untuk mengetahui Order Histori dan Status</li>
                                </ul>
                            </div><br>
                            <div class="tabs-btn-login">
                                <a href="{{url('member/create')}}" class="register btn btn-warning">Register</a>
                            </div>
                        </div>
                    </div>
                </div><br><br>
            </div>
        </div>