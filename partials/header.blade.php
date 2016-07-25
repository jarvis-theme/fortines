<div class="header-container">
	<div class="container welcome">
		<div class="row-fluid">
			<div class="pull-left greet">
				@if ( !is_login() )
					Selamat berbelanja, {{HTML::link('member', 'Login')}} 
				@else
					Selamat datang {{HTML::link('member', user()->nama)}}, {{HTML::link('logout', 'logout')}} 
				@endif
			</div>
			<div class="pull-right cart tleft" id='shoppingcartplace'>
				{{shopping_cart()}} 
			</div>
		</div>
	</div>

	<div class="container head">
		<div class="row">
			<div class="span12 clearfix">
				<div class="top row">
				@if( logo_image_url() )
					<div class="span8 logo image">
						<a href="{{url('home')}}">
							<img src="{{url(logo_image_url())}}" alt="logo" />
						</a>
					</div>
				@else
					<div class="span8 logo text">
						<a href="{{url('home')}}">{{ Theme::place('title') }}</a>
					</div>
				@endif

					<div class="cart span4">
						<form action="{{url('search')}}" class="topsearch" method='post'>
							<input type="search" class="top-search" placeholder="Cari.." name="search" required/>
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-menu">
		<div class="container">
			<div class="row">
				<div class="span12">
					<nav class="horizontal-nav full-width">
						<ul class="nav" id="nav">
							@foreach(main_menu()->link as $key=>$link)
							@if($key==0)
							<li><a href="{{menu_url($link)}}">BERANDA</a></li>
							@elseif($key==1)
							<li><a href="{{menu_url($link)}}">PRODUK</a></li>
							@elseif($key==2)
							<li><a href="{{menu_url($link)}}">KEGIATAN</a></li>
							@elseif($key==3)
							<li><a href="{{menu_url($link)}}">KONTAK KAMI</a></li>
							@else
							<li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
							@endif
							@endforeach
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
