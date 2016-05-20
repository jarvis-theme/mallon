            <div id="slide-row">
                <div id="bg-slider">
                    <div class="container">
                        <div class="flexslider">
                            <ul class="slides">
                                @foreach (slideshow() as $val) 
                                <li>
                                    @if($val->url == '')
                                    <a href="#">
                                    @else
                                    <a href="{{filter_link_url($val->url)}}" target="_blank">
                                    @endif
                                        {{HTML::image(slide_image_url($val->gambar), 'slide banner',array('width'=>'1020'))}} 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>