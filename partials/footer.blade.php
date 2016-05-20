            <section id="banks">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 col-sm-7">
                            <h5>Metode Pembayaran</h5>
                            @foreach(list_banks() as $bank)
                                @if($bank->status == 1)
                                <img class="img-responsive payment" src="{{bank_logo($bank)}}" alt="{{$bank->bankdefault->nama}}" title="{{$bank->bankdefault->nama}}">
                                @endif
                            @endforeach
                            @foreach(list_payments() as $pay)
                                @if($pay->nama == 'paypal' && $pay->aktif == 1)
                                <img class="img-responsive payment" src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal">
                                @endif
                                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                                <img class="img-responsive payment" src="{{url('img/bank/ipaymu.jpg')}}" alt="Ipaymu" title="Ipaymu">
                                @endif
                                @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                                <img class="img-responsive payment" src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin">
                                @endif
                            @endforeach
                            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                <img class="img-responsive payment" src="{{url('img/bank/doku.jpg')}}" alt="Doku" title="Doku">
                            @endif
                            @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                                <img class="img-responsive payment" src="{{url('img/bank/veritrans.png')}}" alt="veritrans" title="Veritrans">
                            @endif
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <h5>Ikuti Kami</h5>
                            @if(!empty($kontak->fb))
                            <a href="{{url($kontak->fb)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="fb" title="Facebook">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                            @if(!empty($kontak->tw))
                            <a href="{{url($kontak->tw)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="tw" title="Twitter">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                            @if(!empty($kontak->gp))
                            <a href="{{url($kontak->gp)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="gp" title="Google Plus">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                            @if(!empty($kontak->pt))
                            <a href="{{url($kontak->pt)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="pt" title="Pinterest">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                            @if(!empty($kontak->tl))
                            <a href="{{url($kontak->tl)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="tl" title="Tumblr">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                            @if(!empty($kontak->ig))
                            <a href="{{url($kontak->ig)}}" target="_blank">
                                <span class="fa-stack fa-2x" id="ig" title="Instagram">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            {{ Theme::partial('subscribe') }} 

                            @foreach(all_menu() as $key=>$menu)
                            @if($key == '1' || $key == '2')
                            <div id="links-foot" class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                                <h4 class="title">{{$menu->nama}}</h4>
                                <div class="block-content">
                                    <ul>
                                        @foreach($menu->link as $link_menu)
                                        @if($menu->id == $link_menu->tautanId)
                                        <li><a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div id="contact" class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                                <h4 class="title">Hubungi Kami</h4>
                                <div class="block-content">
                                    <p>Ada pertanyaan? <br><strong>Kirimi kami email atau hubungi kami di Live Chat</strong></p>
                                    <p>
                                        Email : <a href="mailto:{{$kontak->email}}"> {{$kontak->email}}</a><br>
                                        Alamat : {{$kontak->alamat}} 
                                    </p>
                                    @if(!empty($kontak->ym))
                                    <p>{{ ymyahoo($kontak->ym) }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="title-copyright" href="http://jarvis-store.com" target="_blank"> Jarvis Store</a></p>
                    </div>
                </div>
            </footer>