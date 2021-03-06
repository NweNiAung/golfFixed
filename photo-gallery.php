<!doctype html>
<html lang="jp">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<head>

<title>photo-gallery｜ゴルフ予約ＪＰ</title>

<link rel="stylesheet" href="css/import.css" media="all">
<!-- <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script
	src="js/custom.js"></script>

<!--[if lt IE 9]><script src="js/ie8.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
	<div class="rg-image-wrapper">
		
		<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
			<div class="rg-caption" style="display:none;">
				<p></p>
			</div>
		</div>
{{if itemsCount > 1}}
			<div class="rg-image-nav">
				<a href="#" class="rg-image-nav-prev">Previous Image</a>
				<a href="#" class="rg-image-nav-next">Next Image</a>
			</div>
		{{/if}}
	</div>
</script>
</head>
<body>

	<header>
<?php include 'inc/menu_login.php'?>
	</header>
	<article>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="content" id="content">
						
						<div id="rg-gallery" class="rg-gallery">
	<div class="rg-thumbs">
		<!-- Elastislide Carousel Thumbnail Viewer -->
		<div class="es-carousel-wrapper">
			<div class="es-nav">
				<span class="es-nav-prev">Previous</span>
				<span class="es-nav-next">Next</span>
			</div>
			<div class="es-carousel">
				<ul>
					<li>
						<a href="#">
							<img src="img/thumbs/1.jpg" data-large="img/1.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					
					<li>
						<a href="#">
							<img src="img/thumbs/2.jpg" data-large="img/2.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/3.jpg" data-large="img/3.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/4.jpg" data-large="img/4.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/5.jpg" data-large="img/5.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/6.jpg" data-large="img/6.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/7.jpg" data-large="img/7.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/8.jpg" data-large="img/8.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/9.jpg" data-large="img/9.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/10.jpg" data-large="img/10.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/11.jpg" data-large="img/11.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/12.jpg" data-large="img/12.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/13.jpg" data-large="img/13.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/14.jpg" data-large="img/14.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/15.jpg" data-large="img/15.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/16.jpg" data-large="img/16.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/17.jpg" data-large="img/17.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/18.jpg" data-large="img/18.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/19.jpg" data-large="img/19.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/thumbs/20.jpg" data-large="img/20.jpg" alt="image20" data-description="Some description" />
						</a>
					</li>
					
				</ul>
			</div>
		</div>
		<!-- End Elastislide Carousel Thumbnail Viewer -->
	</div><!-- rg-thumbs -->
</div><!-- rg-gallery -->
					

				</div>

			</div>
			<div class="row mt30">
				<div class="col-sm-12">
					<div class="panel panel-default border-none">
						<div class="panel-heading bg-red fw-bold txt-white center">お役立ち情報＆お気に入り保存</div>
						<div class="panel-body">
							<div class="col-sm-12 padding-none">
								<ul class="center">
									<li class="btn-weather"><a href=""> <img
											src="img/btn-weather.png" class="img-responsive" alt="" />
									</a></li>
									<li class="btn-hotel"><a href=""><img
											src="img/btn-hotel.png" class="img-responsive" alt="" /></a></li>
									<li class="btn-car"><a href=""><img
											src="img/golf-car.png" class="img-responsive" alt="" /></a></li>
									<li class="btn-golfbag"><img src="img/btn-golfbag.png"
										class="img-responsive" alt="" /></li>
								</ul>

							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		</div>

	</article>
	<footer>
		<div class="container">
			<div class="row dis-none-pc">
			<div class="col-sm-8 ">
			
				<div class="col-sm-6 ">
					<button type="button"
						class="btn btn-success btn-block center">>予約カレンダーを見る</button>
				</div>
				<div class="col-sm-6">
					<button type="button"
						class="btn btn-danger btn-block center">>
						お気に入りに保存</button>
</div>
				</div>
			</div>
			<div class="col-sm-12 dis-none-pc">

				<div class="content fstart">
					<ul class="basic-linked-list two-columns-list" id="menu">
						<li><a href="#"><div>ショップ</div></a></li>
						<li><a href="#"><div>ゴルフ場予約</div></a></li>
						<li><a href="#"><div>ニュース</div></a></li>
						<li><a href="#"><div>ギア情報</div></a></li>
						<li><a href="#"><div>レッスン・練習</div></a></li>
						<li><a href="#"><div>スコア</div></a></li>
						<li><a href="#"><div>競技・イベント</div></a></li>
						<li><a href="#"><div>メディアパック</div></a></li>
						<li><a href="#"><div>ゴルフスタイル</div></a></li>
						<li><a href="#"><div>MY GDO</div></a></li>
						<li><a href="#"><div>
									コミュニティ<span class="x-small">(PC)</span>
								</div></a></li>
						<li><a href="#" target="_blank"><div>ゴルフテック</div></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">



			<div class="row mt30 dis-none">
				<div class="col-sm-12">
					<dl class="res_seofooter_top">
						<dt>ゴルフ場一覧</dt>
						<dd>
							<ul class="prefectures">
								<li class="first"><a href="#">北海道・東北</a></li>
								<li class="prefecturestop"><a href="#">北海道</a></li>
								<li><a href="#">青森</a></li>
								<li><a href="#">岩手</a></li>
								<li><a href="#">宮城</a></li>
								<li><a href="#">秋田</a></li>
								<li><a href="#">山形</a></li>
								<li><a href="#">福島</a></li>
							</ul>
							<ul class="prefectures">
								<li class="first"><a href="#">関東・甲信越</a></li>
								<li class="prefecturestop"><a href="#">茨城</a></li>
								<li><a href="#">栃木</a></li>
								<li><a href="#">群馬</a></li>
								<li><a href="#">埼玉</a></li>
								<li><a href="#">千葉</a></li>
								<li><a href="#">東京</a></li>
								<li><a href="#">神奈川</a></li>
								<li><a href="#">山梨</a></li>
								<li><a href="#">長野</a></li>
								<li><a href="#">静岡</a></li>
								<li><a href="#">新潟</a></li>
							</ul>

							<ul class="prefectures">
								<li class="first"><a href="#">中部</a></li>
								<li class="prefecturestop"><a href="#">愛知</a></li>
								<li><a href="#">岐阜</a></li>
								<li><a href="#">三重</a></li>
								<li><a href="#">富山</a></li>
								<li><a href="#">石川</a></li>
								<li><a href="#">福井</a></li>
							</ul>

							<ul class="prefectures">
								<li class="first"><a href="#">近畿</a></li>
								<li class="prefecturestop"><a href="#">滋賀</a></li>
								<li><a href="#">京都</a></li>
								<li><a href="#">大阪</a></li>
								<li><a href="#">兵庫</a></li>
								<li><a href="#">奈良</a></li>
								<li><a href="#">和歌山</a></li>
							</ul>

							<ul class="prefectures">
								<li class="first"><a href="#">中国・四国</a></li>
								<li class="prefecturestop"><a href="#">鳥取</a></li>
								<li><a href="#">島根</a></li>
								<li><a href="#">岡山</a></li>
								<li><a href="#">広島</a></li>
								<li><a href="#">山口</a></li>
								<li><a href="#">徳島</a></li>
								<li><a href="#">香川</a></li>
								<li><a href="#">愛媛</a></li>
								<li><a href="#">高知</a></li>
							</ul>

							<ul class="prefectures">
								<li class="first"><a href="#">九州・沖縄</a></li>
								<li class="prefecturestop"><a href="#">福岡</a></li>
								<li><a href="#">佐賀</a></li>
								<li><a href="#">長崎</a></li>
								<li><a href="#">熊本</a></li>
								<li><a href="#">大分</a></li>
								<li><a href="#">宮崎</a></li>
								<li><a href="#">鹿児島</a></li>
								<li><a href="#">沖縄</a></li>
							</ul>

							<ul class="prefectures">
								<li class="first"><a href="#">海外</a></li>
								<li class="prefecturestop"><a href="#">ハワイ</a></li>
								<li><a href="#">グアム</a></li>
								<li><a href="#">サイパン・ロタ</a></li>
								<li><a href="#">アジア</a></li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<span id="top-link-block" class="hidden flr page-top dis-none">
				<a href="#top" class="well well-sm"
				onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
					<i class="glyphicon glyphicon-chevron-up"></i>Back to Top
			</a>
			</span>

		</div>


	</footer>
	
	<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>

</body>
</html>