<!doctype html>
<html lang="jp">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title>ゴルフ予約ＪＰ</title>

<link rel="stylesheet" href="css/import.css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="js/jqueryui.min.css">


<!-- slider -->
<link rel="stylesheet" href="js/jquery-ui-slider-pips.min.css">
<!-- <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/custom.js"></script>

<!--[if lt IE 9]><script src="js/ie8.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</script>
</head>


</head>
<body>
<!-- header.php -->

<?php  include 'inc/menu.php'; ?>
	<article>
		<div class="">
			<div class="bodyIn">
				<div class="container clearfix">
					<p class="pt10">
						<span><a href="index.html" class="text-gold">トップページ</a>&nbsp;&gt;ゴルフ場検索結果</span>
					</p>
					<div class="bg-purple mb20">
						<div class="ttl-1">ゴルフ場検索結果</div>
					</div>
					<div class="row bg_topgray mb20 pad20 clearfix">
						<div class="row borderbot pb15 mb15">
							<div class="col-sm-3 pl0">
								<div>
									<span class="ttl-2"> 検索案件 </span> <span> <a href=""
										class="text-gold pl10"> X検索案件全解除 </a>
									</span>
								</div>
								<p class="fall_under fw-bold">
									該当コース: <span class="ratingprice text-red">113</span>件
								</p>
								<a href="#" class="btn btn-m bg-black">検索案件を変更・追加する</a>

							</div>
							<div class="col-sm-9 pr0">
								<div class="col-sm-12 bg-search">
									<p class="pt10 required-search">
										<span>10/19-10/30</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>すべての曜日</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>関東・甲信越</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>関越自動車道</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>所沢ＩＣ～</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>～鶴ケ島ＩＣ</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>5000円から/30</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>10000円まで</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>昼食付き</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>9:00台</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜<span>10:00台</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>&nbsp;｜ <span>連続指定枠2組以上</span> <span> <a href=""
											class="text-gold pl10"> X解除 </a>
										</span>

									</p>
								</div>
							</div>
						</div>
						<div class="row clearfix mb10">
							<p class="ttl-2 fll">プレー日</p>
							<div class="flr pr">
								<div class="day">
									<input type="radio" name="optradio" id="allday"> <label
										class="radio-inline radio-date" for="allday"><span>すべての曜日</span></label>
								</div>
								<div class="day">
									<input type="radio" name="optradio" id="sunday"> <label
										class="radio-inline radio-date" for="sunday"><span>土日祝のみ</span></label>
								</div>
								<div class="day">
									<input type="radio" name="optradio" id="weekday"> <label
										class="radio-inline radio-date" for="weekday"><span>平日のみ</span></label>
								</div>
							</div>
							0
						</div>
						<div class="row mb20">
							<div id="slider1_container" class="bg-white"
								style="position: relative; top: 0px; left: 0px; width: 100%; height: 139px; overflow: hidden;">

								<!-- Slides Container -->
								<div u="slides"
									style="cursor: move; position: absolute; left: 0px; top: 0px; width: 100%; height: 100px; overflow: hidden;">
									<div class="cal bg-grey">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">23</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>
									<div class="cal">
										<span class="cal_month_ttl01">5</span> <span
											class="cal_month_ttl02">月</span>
										<div class="cal_dateWrap">
											<span class="cal_date_ttl01">25</span> <span
												class="cal_day_ttl01">(土)</span> <span
												class="cal_about_ttl01">39件</span>
										</div>
									</div>


								</div>

								<!-- Bullet Navigator Skin Begin -->
								<!-- bullet navigator container -->
								<div u="navigator" class="jssorb03"
									style="position: absolute; bottom: 4px; right: 6px;">
									<!-- bullet navigator item prototype -->
									<div u="prototype"
										style="position: absolute; width: 21px; height: 21px; text-align: center; line-height: 21px; color: white; font-size: 12px;">
										<div u="numbertemplate"></div>
									</div>
								</div>
								<!-- Bullet Navigator Skin End -->

								<!-- Arrow Navigator Skin Begin -->

								<!-- Arrow Left -->
								<span u="arrowleft" class="jssora03l"
									style="width: 55px; height: 55px; top: 25px !important; left: 8px;">
								</span>
								<!-- Arrow Right -->
								<span u="arrowright" class="jssora03r"
									style="width: 55px; height: 55px; top: 25px !important; right: 8px">
								</span>
								<!-- Arrow Navigator Skin End -->

							</div>

						</div>

					</div>
					<div class="bor-botblk clearfix mb0">
						<ul class="show-result flr mb0">
							<li class="">並び替え :</li>
							<li class="active"><a href="">人気順</a></li>
							<li class="choice"><a href="">評価が高い順 </a></li>
							<li class="choice"><a href="">評価が安い順 </a></li>
							<li class="choice"><a href="">ICに近い順</a></li>
						</ul>
					</div>
					<div class="row bg-grey pad20 mb20">
						<div class="row mb20">
							<div class="col-sm-6 pl0 pr0">

								<img src="img/search/img_plan01.jpg" alt=""
									class="img-responsive fll" />

								<div class="col-sm-9 pr0">
									<p class="text-gold fs26 fwbold">
										<a href="" class="text-gold fs26 fwbold"> 大富士ゴルフ場 </a>
									</p>
									<span class="near-by pr10">静岡件</span><span class="pr10 pl10">京葉道路/ＩＣより5km</span>
									<span><img src="img/search/icon_location.png" alt=""
										class="pr10" /></span><span><a href="#" class="text-gold">アクセスマップ</a>
									</span>
								</div>
							</div>

							<div class="col-sm-6 pr0">
								<div class="bg-black flr bor-radius">
									<ul class="plan-review">
										<li>難易度: 簡単</li>
										<li>練習場: 有り</li>
										<li>評&nbsp;価: <img src="img/search/4_stars.png" alt=""></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<table summary="プランカレンダー"
								class="search-tb table bg-white table-responsive">
								<thead class="bg-grey">
									<tr>
										<th rowspan="2" class="center">プラン名</th>
										<th rowspan="2" colspan="2" class="center">プラン内容</th>
										<th class="center plan-time" colspan="9">ティータイム時間帯別料金</th>

									</tr>
									<tr class="date">
										<td>早朝</td>
										<td>7時ー</td>
										<td>8時ー</td>
										<td>9時ー</td>
										<td>10時ー</td>
										<td>11時ー</td>
										<td>12時ー</td>
										<td class="last">午後</td>
									</tr>


								</thead>
								<tbody>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】☆スループレー（セルフ・乗用）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="2人乗カート"><img
														src="common/img/icon/icon-cart2-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】セルフ・乗用カート・昼食付・2サム保証（遅め限定）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="手引きカート"><img
														src="common/img/icon/icon-cart4-on.png" alt="" /></a></span> <span><a
													href="" title="2人から予約可"><img
														src="common/img/icon/icon-grentee2-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play2-on.png" alt="" /></a></span> <span><a
													href=""><img src="common/img/icon/icon-stay-off.png"
														alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">9</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,320</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】
													【平日限定】セルフ・乗用カート・昼食付・2サム保証（遅…</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href=""><img
														src="common/img/icon/icon-cady-off.png" alt="" /></a></span> <span><a
													href="" title="電動カート"><img
														src="common/img/icon/icon-cart3-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href=""><img
														src="common/img/icon/icon-lunch-off.png" alt="" /></a></span> <span><a
													href="" title="9Hプレ"><img
														src="common/img/icon/icon-play3-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>

										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>



									</tr>






								</tbody>

							</table>
						</div>

					</div>
					<div class="row bg-grey pad20 mb20">
						<div class="row mb20">
							<div class="col-sm-6 pl0 pr0">

								<img src="img/search/img_plan02.jpg" alt=""
									class="img-responsive fll" />

								<div class="col-sm-9 pr0">
									<p class="text-gold fs26 fwbold">
										<a href="" class="text-gold fs26 fwbold"> 大富士ゴルフ場 </a>
									</p>
									<span class="near-by pr10">静岡件</span><span class="pr10 pl10">京葉道路/ＩＣより5km</span>
									<span><img src="img/search/icon_location.png" alt=""
										class="pr10" /></span><span><a href="#" class="text-gold">アクセスマップ</a>
									</span>
								</div>
							</div>

							<div class="col-sm-6 pr0">
								<div class="bg-black flr bor-radius">
									<ul class="plan-review">
										<li>難易度: 簡単</li>
										<li>練習場: 有り</li>
										<li>評&nbsp;価: <img src="img/search/4_stars.png" alt=""></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<table summary="プランカレンダー"
								class="search-tb table bg-white table-responsive">
								<thead class="bg-grey">
									<tr>
										<th rowspan="2" class="center">プラン名</th>
										<th rowspan="2" colspan="2" class="center">プラン内容</th>
										<th class="center plan-time" colspan="9">ティータイム時間帯別料金</th>

									</tr>
									<tr class="date">
										<td>早朝</td>
										<td>7時ー</td>
										<td>8時ー</td>
										<td>9時ー</td>
										<td>10時ー</td>
										<td>11時ー</td>
										<td>12時ー</td>
										<td class="last">午後</td>
									</tr>


								</thead>
								<tbody>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】☆スループレー（セルフ・乗用）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="2人乗カート"><img
														src="common/img/icon/icon-cart2-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】セルフ・乗用カート・昼食付・2サム保証（遅め限定）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="手引きカート"><img
														src="common/img/icon/icon-cart4-on.png" alt="" /></a></span> <span><a
													href="" title="2人から予約可"><img
														src="common/img/icon/icon-grentee2-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play2-on.png" alt="" /></a></span> <span><a
													href=""><img src="common/img/icon/icon-stay-off.png"
														alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">9</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,320</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】
													【平日限定】セルフ・乗用カート・昼食付・2サム保証（遅…</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href=""><img
														src="common/img/icon/icon-cady-off.png" alt="" /></a></span> <span><a
													href="" title="電動カート"><img
														src="common/img/icon/icon-cart3-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href=""><img
														src="common/img/icon/icon-lunch-off.png" alt="" /></a></span> <span><a
													href="" title="9Hプレ"><img
														src="common/img/icon/icon-play3-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>

										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>



									</tr>






								</tbody>

							</table>
						</div>

					</div>

					<div class="row bg-grey pad20 mb20">
						<div class="row mb20">
							<div class="col-sm-6 pl0 pr0">

								<img src="img/search/img_plan03.jpg" alt=""
									class="img-responsive fll" />

								<div class="col-sm-9 pr0">
									<p class="text-gold fs26 fwbold">
										<a href="" class="text-gold fs26 fwbold"> 大富士ゴルフ場 </a>
									</p>
									<span class="near-by pr10">静岡件</span><span class="pr10 pl10">京葉道路/ＩＣより5km</span>
									<span><img src="img/search/icon_location.png" alt=""
										class="pr10" /></span><span><a href="#" class="text-gold">アクセスマップ</a>
									</span>
								</div>
							</div>

							<div class="col-sm-6 pr0">
								<div class="bg-black flr bor-radius">
									<ul class="plan-review">
										<li>難易度: 簡単</li>
										<li>練習場: 有り</li>
										<li>評&nbsp;価: <img src="img/search/4_stars.png" alt=""></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<table summary="プランカレンダー"
								class="search-tb table bg-white table-responsive">
								<thead class="bg-grey">
									<tr>
										<th rowspan="2" class="center">プラン名</th>
										<th rowspan="2" colspan="2" class="center">プラン内容</th>
										<th class="center plan-time" colspan="9">ティータイム時間帯別料金</th>

									</tr>
									<tr class="date">
										<td>早朝</td>
										<td>7時ー</td>
										<td>8時ー</td>
										<td>9時ー</td>
										<td>10時ー</td>
										<td>11時ー</td>
										<td>12時ー</td>
										<td class="last">午後</td>
									</tr>


								</thead>
								<tbody>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】☆スループレー（セルフ・乗用）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="2人乗カート"><img
														src="common/img/icon/icon-cart2-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】セルフ・乗用カート・昼食付・2サム保証（遅め限定）</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href="" title="キャディ付"><img
														src="common/img/icon/icon-cady-on.png" alt="" /></a></span> <span><a
													href="" title="手引きカート"><img
														src="common/img/icon/icon-cart4-on.png" alt="" /></a></span> <span><a
													href="" title="2人から予約可"><img
														src="common/img/icon/icon-grentee2-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href="" title="昼食付"><img
														src="common/img/icon/icon-lunch-on.png" alt="" /></a></span> <span><a
													href="" title=".5Rプレー保証"><img
														src="common/img/icon/icon-play2-on.png" alt="" /></a></span> <span><a
													href=""><img src="common/img/icon/icon-stay-off.png"
														alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"><span><a href="">9</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,320</li>
											</ul></td>
										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>



									</tr>
									<tr id="" class="">
										<th rowspan="1" class="plan-name"><p>
												<a href="#" class="text-gold fwbold" rel="nofollow">【限定割】
													【平日限定】セルフ・乗用カート・昼食付・2サム保証（遅…</a>
											</p></th>
										<td class="icon" rowspan="1"><p class="icnList">
												<span><a href=""><img
														src="common/img/icon/icon-cady-off.png" alt="" /></a></span> <span><a
													href="" title="電動カート"><img
														src="common/img/icon/icon-cart3-on.png" alt="" /></a></span> <span><a
													href="" title="2サム保証"><img
														src="common/img/icon/icon-gurentee-on.png" alt="" /></a></span>
											</p>
											<p>
												<span><a href=""><img
														src="common/img/icon/icon-lunch-off.png" alt="" /></a></span> <span><a
													href="" title="9Hプレ"><img
														src="common/img/icon/icon-play3-on.png" alt="" /></a></span> <span><a
													href="" title="宿泊付"><img
														src="common/img/icon/icon-stay-on.png" alt="" /></a></span>
											</p></td>

										<td>
											<p>
												<span class="text-flowerpink"> &yen;4480~&yen;4480; </span><br>
												<span class="fs13"> (総額&yen;5638~&yen;7480) </span><br>
												<span>ポイント</span><span class="text-flowerpink">3倍</span><span><img
													src="img/home/tpoint_small.gif" alt="" class="pl5" /></span>
											</p>
										</td>

										<td class="days"><span><a href="">2</a></span>
											<ul>
												<li class="">\4,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">1</a></span>
											<ul>
												<li class="">\6,480</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"><span><a href="">3</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>

										<td class="days"><span><a href="">5</a></span>
											<ul>
												<li class="">\7,230</li>
											</ul></td>
										<td class="days"></td>
										<td class="days"></td>



									</tr>






								</tbody>

							</table>
						</div>

					</div>


				</div>
			</div>
		</div>
		<!--sp block-->




	</article>
<!-- footer.php -->
<?php  include 'inc/footer.php'; ?>