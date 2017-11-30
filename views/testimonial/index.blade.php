        <div class="breadcrumb">
            <p>Testimonial</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(count(best_seller()) > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                    <ul class="block-content">
                        @foreach(best_seller(5, null) as $bestproduk)
                        <li>
                            <a href="{{product_url($bestproduk)}}">
                                <div class="img-block">
                                    {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama,array('title'=>$bestproduk->nama))}}
                                </div>
                                <p class="product-name">{{short_description($bestproduk->nama,12)}}</p>
                                <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="btn-more"><a href="{{url('produk')}}">produk lainnya</a></div>
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
                <div id="single-typical">
                    <div><h1>Testimonial</h1></div>
                    @foreach (list_testimonial() as $items)  
                    <div class="quote-testimo">
                        <blockquote>{{$items->isi}}</blockquote>
                        <p class="quote"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$items->nama}}</p>
                    </div>
                    @endforeach
                    <br>
                    <div class="row">
                        <div class="col-md-12">{{list_testimonial()->links()}}</div>
                    </div>
                    <hr>
                    <div class="respond">
                        <h1 id="title-create">Buat Testimonial</h1>
                        <form class="col-xs-12 col-md-6" id="zeropadding" method="post" action="{{URL::to('testimoni')}}" role="form">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="nama" id="name" value="{{Input::old('nama')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Testimonial</label>
                                <textarea name="testimonial" class="form-control" rows="3" required>{{Input::old('testimonial')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Kirim Testimonial</button>
                            <button type="reset" class="btn btn-default">Reset</button><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>