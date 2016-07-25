<footer>

<div class='span12 prime' style='text-align:center;'>

<script type="text/javascript">

( function() {

if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };

var unit = {"calltype":"async[2]","publisher":"teampublish","width":"auto","height":"auto","sid":"Chitika Default"};

var placement_id = window.CHITIKA.units.length;

window.CHITIKA.units.push(unit);

document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');

}());

</script>

<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>

</div>

<div class="container">

<section class="row foot">

@foreach(all_menu() as $key=>$group)

@if($key!=0)

<article class="span3">

<strong>{{$group->nama}}</strong>

<ul>

@foreach($group->link as $key=>$link)

<li><a href='{{menu_url($link)}}'>{{$link->nama}}</a></li>

@endforeach

</ul>

</article>

@endif

@endforeach

<article class="span3">

<strong>Posting Terbaru</strong>

<ul>

@foreach (list_blog() as $items)

<li><a href="{{blog_url($items)}}">{{$items->judul}}</a><br /><small>diposting pada {{waktuTgl($items->created_at)}}</small></li>

@endforeach

</ul>

</article>

<article class="span3">

<strong>Newsletter</strong>

<div id="mc_embed_signup">

<form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate form-inline" target="_blank" novalidate>

<input type="email" placeholder="Email anda" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" required {{@$mailing->action==''?'disabled style="cursor:default"':''}}>

<button type="submit" class="btn" {{ @$mailing->action==''?'disabled="disabled"':'' }}><i class="icon-direction"></i></button>

</form>

</div>

@if($kontak->alamat!='')

<address class="row-fluid">

<div class="pull-left clabel"><i class="icon-location"></i></div>

<div class="pull-left cdata">{{$kontak->alamat}}</div>

</address>

<address class="row-fluid">

<div class="pull-left clabel"><i class="icon-phone"></i></div>

<div class="pull-left cdata">{{$kontak->telepon}}</div>

</address>

<address class="row-fluid">

<div class="pull-left clabel"><i class="icon-mail"></i></div>

<div class="pull-left cdata"><a href="mailto:{{$kontak->email}}" target="_top">{{$kontak->email}}</a></div>

</address>

@if($kontak->bb!='')

<address class="row-fluid">

<div class="pull-left clabel"><img src="//onlinemarchandise.com/img/bbm.png"></div>

<div class="pull-left cdata">{{$kontak->bb}}</div>

</address>

<div class="row-fluid" style="text-align: center;">

<iframe allowtransparency="true" frameborder="0" hspace="0" vspace="0" marginheight="0" marginwidth="0" scrolling="no" width="234" height="60" src="https://localbitcoins.com/affiliate-embed/half-banner?ch=5dbc" target="_blank"></iframe>

</div>

@endif

@if($kontak->ym)

<address class="row-fluid">

<div class="pull-left clabel"></div>

<div class="pull-left cdata">{{ymyahoo($kontak->ym)}}</div>

</address>

@endif

@else

<div></div>

@endif

</article>

</section>

</div>

<section class="row-fluid doubleline">

<div class="container">

<div class="span12">

@foreach(list_banks() as $value)

<img src="{{bank_logo($value)}}" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}" />

@endforeach

@foreach(list_payments() as $pay)

@if($pay->nama == 'ipaymu' && $pay->aktif == 1)

<img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="payment" />

@endif

@if($pay->nama == 'bitcoin' && $pay->aktif == 1)

<img src="{{url('img/bitcoin.png')}}" alt="bitcoin" title="Payment" />

@endif

@endforeach

@if(count(list_dokus()) > 0 && list_dokus()->status == 1)

<img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Payment" />

@endif

<img src="https://lh3.googleusercontent.com/-wzS-_oIBOHM/VviyGvosmRI/AAAAAAAAAJI/x7u__Pm2mLIJfVnzPcfhHCbcPm_7O-GQgCCo/s144-Ic42/label_trustklik_03_185x60.png" />

<a href="//www.polisionline.com/2014/08/onlinemarchandisecom-toko-online.html" target="_blank">

<img src="https://lh3.googleusercontent.com/-TjVgfJYdWog/Vvi1o6N6eQI/AAAAAAAAAJg/--aYq1lU4LwLN38OayLueBvrJ18M0-TaACCo/s144-Ic42/LOGO%2B-%2BPOLISI%2BONLINE.jpg" /></a>

<script type="text/javascript" language="javascript" src="//www.tkqlhce.com/placeholder-20432319?target=_top&mouseover=N" target="_blank"></script>

</div>

</div>

</section>

<section class="row-fluid social">

<div class="container">

<div class="pull-left">© {{date('Y')}} {{ Theme::place('title') }} </div>

<div class="pull-right">

<ul>

@if($kontak->fb)

<li><a target="_blank" href="{{url($kontak->fb)}}"><i class="icon-facebook"></i></a></li>

@endif

@if($kontak->tw)

<li><a target="_blank" href="{{url($kontak->tw)}}"><i class="icon-twitter"></i></a></li>

@endif

@if($kontak->gp)

<li><a target="_blank" href="{{url($kontak->gp)}}"><i class="icon-gplus"></i></a></li>

@endif

@if($kontak->pt)

<li><a target="_blank" href="{{url($kontak->pt)}}"><i class="icon-pinterest"></i></a></li>

@endif

@if($kontak->tl)

<li><a target="_blank" href="{{url($kontak->tl)}}"><i class="icon-tumblr"></i></a></li>

@endif

@if($kontak->ig)

<li><a target="_blank" href="{{url($kontak->ig)}}"><i class="icon-instagrem"></i></a></li>

@endif

</ul>

</div>

</div>

</section>

<!-- Start of StatCounter Code for Default Guide -->

<script type="text/javascript">
var sc_project=10704875;
var sc_invisible=1;
var sc_security="d5a044c9";
var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "//www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost + "statcounter.com/counter/counter.js'></"+"script>");

</script>

<noscript>
	<div class="statcounter">
		<a title="create counter" href="//statcounter.com/free-hit-counter/" target="_blank">
			<img class="statcounter" src="https://c.statcounter.com/10704875/0/d5a044c9/1/" alt="create counter">
		</a>
	</div>
</noscript>
<!-- End of StatCounter Code for Default Guide -->

</footer>

{{pluginPowerup()}}