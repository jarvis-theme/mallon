        <div class="breadcrumb">
            <p>Lupa Password</p>
        </div>
        <div class="inner-column row">
            <div id="center_column" class="inner-bg col-lg-12 col-xs-12">
                <div class="col-lg-4">
                    <h2 class="title">Lupa Password</h2><hr><br>
                    <div class="input-group">
                        <form class="form-horizontal forget" action="{{url('member/forgetpassword')}}" method="post">
                            <input type="email" class="form-control lp" placeholder="Email anda" name='recoveryEmail' required>
                            <span class="input-group-btn btnlp">
                                <button class="btn btn-warning" type="submit">Reset Password</button>
                            </span>
                        </form>
                    </div>
                    <br><br>
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h2 class="title">Pelanggan Baru</h2><hr><br>
                    <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
                    <a href="{{URL::to('member/create')}}" class="btn btn-warning bottom">Daftar</a>
                </div>
            </div>
        </div>