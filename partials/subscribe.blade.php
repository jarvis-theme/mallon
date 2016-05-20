<div id="newsletter-foot" class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
    <h4 class="title">Newsletter</h4>
    <div class="block-content">
        <p>Daftar & Dapatkan penawaran spesial dari <strong>{{Theme::place('title')}}</strong></p>
        <form action="{{@$mailing->action}}" method="post" class="subscribe">
            <input class="form-control" nama="email" type="text" placeholder="Email Anda" {{ @$mailing->action==''? 'disabled=""' : ''}}>
            <button class="btn-newsletter button" value="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>Berlangganan</button>
        </form>
    </div>
</div>