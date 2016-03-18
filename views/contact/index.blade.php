        <div class="breadcrumb">
            <p>Kontak</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(count(best_seller()) > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                    <ul class="block-content">
                        @foreach(best_seller(5,null) as $bestproduk)
                        <li>
                            <a href="{{product_url($bestproduk)}}">
                                <div class="img-block">
                                    {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'),$bestproduk->nama,array('width'=>'81','height'=>'64','title'=>$bestproduk->nama))}}
                                </div>
                                <p class="product-name">{{short_description($bestproduk->nama,12)}}</p>
                                <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="btn-more"><a href="{{url::to('produk')}}">Produk Lainnya</a></div>
                </div>
                @endif
                @if(count(list_blog()) > 0)
                <div id="latest-news" class="block">
                    <div class="title"><h2>Artikel <strong>Terbaru</strong></h2></div>
                    <ul class="block-content">
                        @foreach(list_blog(5) as $artikel)
                        <li>
                            <div class="img-block"></div>
                            <h5 class="title-news">{{short_description($artikel->judul, 20)}}</h5>
                            <p>{{short_description($artikel->isi, 46)}} <a class="read-more" href="{{blog_url($artikel)}}">Selengkapnya</a></p>
                            <span class="date-post">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div id="center_column" class="inner-bg col-lg-9 col-xs-12 col-sm-8">
                <div class="tabs-description">
                    <div class="col-md-12 col-xs-12">         
                        <div class="maps" >
                            <h2 class="title">Peta Lokasi</h2>
                            @if($kontak->lat!='0' || $kontak->lng!='0')
                            <iframe class="detailmap" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                            @else
                            <iframe class="detailmap" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <div class="contact-us" >
                            <div class="contact-desc">
                                <br>
                                @if(!empty($kontak->alamat))
                                    <strong>Alamat Toko :</strong> {{$kontak->alamat}}<br>
                                @endif
                                @if(!empty($kontak->telepon))
                                    <strong>Telepon :</strong> {{$kontak->telepon}}<br>
                                @endif
                                @if(!empty($kontak->hp))
                                    <strong>HP :</strong> {{$kontak->hp}}<br>
                                @endif
                                @if(!empty($kontak->bb))
                                    <strong>BBM :</strong> {{$kontak->bb}}<br>
                                @endif
                                @if(!empty($kontak->email))
                                    <strong>Email :</strong><a href="mailto:{{$kontak->email}}"> {{$kontak->email}}</a>
                                @endif
                                <div class="clr"></div>
                            </div>
                            <br><hr>
                            <div class="col-md-6" id="zeropadding">
                                <h2>Hubungi Kami</h2>
                                <form class="contact-form" action="{{url('kontak')}}" method="post">
                                    <p class="form-group">
                                        <input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
                                    </p>
                                    <p class="form-group">
                                        <input class="form-control" placeholder="Email Anda" name="emailKontak" type="email" required>
                                    </p>
                                    <p class="form-group">
                                        <textarea class="form-control" placeholder="Pesan" name="messageKontak" required></textarea>
                                    </p>
                                    <button class="btn btn-warning submitnewletter" type="submit">Kirim</button><br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>