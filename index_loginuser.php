
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


</head>
<body>
	<!-- header.php -->

<?php  include 'inc/menu_login.php'; ?>
		<div class="merit bg-purple pc">
		<ul class="headerIn clearfix">
			<li><img src="img/home/merit.png" alt="" /></li>
			<li><img src="img/home/merit1.png" alt="" /></li>
			<li><img src="img/home/merit2.png" alt="" /></li>
			<li><img src="img/home/merit3.png" alt="" /></li>
		</ul>
	</div>

	<article>
		<div class="">
			<div class="bodyIn home">
				<div class="container pt20">
					<div class="main_content">
						<div class="mainIn">
							<ul class="nav nav-tabs top-pill">
								<li class="active"><a data-toggle="pill" href="#tab1">エリア・高速道路から<span
										class="text-flowerpink">最安値</span>検索
								</a></li>
								<li class="tab_sp pc">&nbsp;</li>
								<li><a data-toggle="pill" href="#tab2">Myゴルフ場から検索</a></li>

							</ul>

							<div class="tab-content">
								<div id="tab1" class="tab-pane fade-in active">

									<div class="mr20 ml20">
										<div class="row borderbot pb15 mb15">
											<p class="barTitle_black mt5 sp-fll">プレー日</p>
											<div class="col-sm-6 pl0 pr0">

												<div class="search-box-date sp-flr">
													<input type="text"
														class="monthpicker daypicker search-input" name="month"
														id="month" placeholder="日付選択" /> から <select
														name="widthday" class="widthday ml10">
														<option value="1" selected="selected">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="15">15</option>
														<option value="20">20</option>
														<option value="31">31</option>
													</select> 日分

												</div>

											</div>
											<div class="col-sm-6 date pl0 pr0 pt10 sp-flr">
												<div class="day">
													<input type="radio" name="optradio" id="allday" /> <label
														class="radio-inline radio-date" for="allday"><span>すべての曜日</span></label>
												</div>
												<div class="day">
													<input type="radio" name="optradio" id="sunday" /> <label
														class="radio-inline radio-date" for="sunday"><span>土日祝のみ</span></label>
												</div>
												<div class="day">
													<input type="radio" name="optradio" id="weekday" /> <label
														class="radio-inline radio-date" for="weekday"><span>平日のみ</span></label>
												</div>
											</div>
										</div>
										<div class="row pb5 borderbot ">

											<div class="col-sm-6 pr0 pl0 clearfix">
												<p class="barTitle_black mt0 sp-fll">エリア</p>
												<div class="sp-flr area-search">
													<button type="button"
														class="btn btn-default bg_gradient fw-modal"
														data-toggle="modal" data-target=".mymodal">
														追加・変更<i class="glyphicon glyphicon-play"></i>
													</button>
													<span class="select_desc sp-flr">地域や都道府県を選択できます</span>
												</div>
												<!-- Modal -->
												<div class="modal fade mymodal" tabindex="-1" role="dialog"
													aria-labelledby="myModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">

															<div class="modal-body">
																<div class="inner">
																	<div class="bggray">
																		<div class="areacheckbox">
																			<dl>
																				<dt>
																					<label for="id_region_0"><input type="checkbox"
																						id="id_region_0" value="北海道・東北" name="region">
																						北海道・東北</label>
																				</dt>
																				<dd>
																					<label for="id_region_1"><input type="checkbox"
																						id="id_region_1" value="北海道" name="region"> 北海道</label>
																				</dd>
																				<dd>
																					<label for="id_region_2"><input type="checkbox"
																						id="id_region_2" value="青森県" name="region"> 青森県</label>
																				</dd>
																				<dd>
																					<label for="id_region_3"><input type="checkbox"
																						id="id_region_3" value="岩手県" name="region"> 岩手県</label>
																				</dd>
																				<dd>
																					<label for="id_region_4"><input type="checkbox"
																						id="id_region_4" value="宮城県" name="region"> 宮城県</label>
																				</dd>
																				<dd>
																					<label for="id_region_5"><input type="checkbox"
																						id="id_region_5" value="秋田県" name="region"> 秋田県</label>
																				</dd>
																				<dd>
																					<label for="id_region_6"><input type="checkbox"
																						id="id_region_6" value="山形県" name="region"> 山形県</label>
																				</dd>
																				<dd>
																					<label for="id_region_7"><input type="checkbox"
																						id="id_region_7" value="福島県" name="region"> 福島県</label>
																				</dd>
																			</dl>
																			<dl>
																				<dt>
																					<label for="id_region_8"><input type="checkbox"
																						id="id_region_8" value="関東・甲信越" name="region">
																						関東・甲信越</label>
																				</dt>
																				<dd>
																					<label for="id_region_9"><input type="checkbox"
																						id="id_region_9" value="茨城県" name="region"> 茨城県</label>
																				</dd>
																				<dd>
																					<label for="id_region_10"><input type="checkbox"
																						id="id_region_10" value="栃木県" name="region"> 栃木県</label>
																				</dd>
																				<dd>
																					<label for="id_region_11"><input type="checkbox"
																						id="id_region_11" value="群馬県" name="region"> 群馬県</label>
																				</dd>
																				<dd>
																					<label for="id_region_12"><input type="checkbox"
																						id="id_region_12" value="埼玉県" name="region"> 埼玉県</label>
																				</dd>
																				<dd>
																					<label for="id_region_13"><input type="checkbox"
																						id="id_region_13" value="千葉県" name="region"> 千葉県</label>
																				</dd>
																				<dd>
																					<label for="id_region_14"><input type="checkbox"
																						id="id_region_14" value="東京都" name="region"> 東京都</label>
																				</dd>
																				<dd>
																					<label for="id_region_15"><input type="checkbox"
																						id="id_region_15" value="神奈川県" name="region"> 神奈川県</label>
																				</dd>
																				<dd>
																					<label for="id_region_16"><input type="checkbox"
																						id="id_region_16" value="山梨県" name="region"> 山梨県</label>
																				</dd>
																				<dd>
																					<label for="id_region_17"><input type="checkbox"
																						id="id_region_17" value="静岡県" name="region"> 静岡県</label>
																				</dd>
																				<dd>
																					<label for="id_region_18"><input type="checkbox"
																						id="id_region_18" value="新潟県" name="region"> 新潟県</label>
																				</dd>
																				<dd>
																					<label for="id_region_19"><input type="checkbox"
																						id="id_region_19" value="長野県" name="region"> 長野県</label>
																				</dd>
																			</dl>
																			<dl>
																				<dt>
																					<label for="id_region_20"><input type="checkbox"
																						id="id_region_20" value="中部" name="region"> 中部</label>
																				</dt>
																				<dd>
																					<label for="id_region_21"><input type="checkbox"
																						id="id_region_21" value="愛知県" name="region"> 愛知県</label>
																				</dd>
																				<dd>
																					<label for="id_region_22"><input type="checkbox"
																						id="id_region_22" value="岐阜県" name="region"> 岐阜県</label>
																				</dd>
																				<dd>
																					<label for="id_region_23"><input type="checkbox"
																						id="id_region_23" value="富山県" name="region"> 富山県</label>
																				</dd>
																				<dd>
																					<label for="id_region_24"><input type="checkbox"
																						id="id_region_24" value="石川県" name="region"> 石川県</label>
																				</dd>
																				<dd>
																					<label for="id_region_25"><input type="checkbox"
																						id="id_region_25" value="福井県" name="region"> 福井県</label>
																				</dd>
																				<dd>
																					<label for="id_region_26"><input type="checkbox"
																						id="id_region_26" value="三重県" name="region"> 三重県</label>
																				</dd>
																			</dl>
																		</div>
																		<div class="areacheckbox">
																			<dl>
																				<dt>
																					<label for="id_region_27"><input type="checkbox"
																						id="id_region_27" value="近畿" name="region"> 近畿</label>
																				</dt>
																				<dd>
																					<label for="id_region_28"><input type="checkbox"
																						id="id_region_28" value="滋賀県" name="region"> 滋賀県</label>
																				</dd>
																				<dd>
																					<label for="id_region_29"><input type="checkbox"
																						id="id_region_29" value="京都府" name="region"> 京都府</label>
																				</dd>
																				<dd>
																					<label for="id_region_30"><input type="checkbox"
																						id="id_region_30" value="大阪府" name="region"> 大阪府</label>
																				</dd>
																				<dd>
																					<label for="id_region_31"><input type="checkbox"
																						id="id_region_31" value="兵庫県" name="region"> 兵庫県</label>
																				</dd>
																				<dd>
																					<label for="id_region_32"><input type="checkbox"
																						id="id_region_32" value="奈良県" name="region"> 奈良県</label>
																				</dd>
																				<dd>
																					<label for="id_region_33"><input type="checkbox"
																						id="id_region_33" value="和歌山県" name="region"> 和歌山県</label>
																				</dd>
																			</dl>
																			<dl>
																				<dt>
																					<label for="id_region_34"><input type="checkbox"
																						id="id_region_34" value="中国・四国" name="region">
																						中国・四国</label>
																				</dt>
																				<dd>
																					<label for="id_region_35"><input type="checkbox"
																						id="id_region_35" value="鳥取県" name="region"> 鳥取県</label>
																				</dd>
																				<dd>
																					<label for="id_region_36"><input type="checkbox"
																						id="id_region_36" value="島根県" name="region"> 島根県</label>
																				</dd>
																				<dd>
																					<label for="id_region_37"><input type="checkbox"
																						id="id_region_37" value="岡山県" name="region"> 岡山県</label>
																				</dd>
																				<dd>
																					<label for="id_region_38"><input type="checkbox"
																						id="id_region_38" value="広島県" name="region"> 広島県</label>
																				</dd>
																				<dd>
																					<label for="id_region_39"><input type="checkbox"
																						id="id_region_39" value="山口県" name="region"> 山口県</label>
																				</dd>
																				<dd>
																					<label for="id_region_40"><input type="checkbox"
																						id="id_region_40" value="徳島県" name="region"> 徳島県</label>
																				</dd>
																				<dd>
																					<label for="id_region_41"><input type="checkbox"
																						id="id_region_41" value="香川県" name="region"> 香川県</label>
																				</dd>
																				<dd>
																					<label for="id_region_42"><input type="checkbox"
																						id="id_region_42" value="愛媛県" name="region"> 愛媛県</label>
																				</dd>
																				<dd>
																					<label for="id_region_43"><input type="checkbox"
																						id="id_region_43" value="高知県" name="region"> 高知県</label>
																				</dd>
																			</dl>
																			<dl>
																				<dt>
																					<label for="id_region_44"><input type="checkbox"
																						id="id_region_44" value="九州・沖縄" name="region">
																						九州・沖縄</label>
																				</dt>
																				<dd>
																					<label for="id_region_45"><input type="checkbox"
																						id="id_region_45" value="福岡県" name="region"> 福岡県</label>
																				</dd>
																				<dd>
																					<label for="id_region_46"><input type="checkbox"
																						id="id_region_46" value="佐賀県" name="region"> 佐賀県</label>
																				</dd>
																				<dd>
																					<label for="id_region_47"><input type="checkbox"
																						id="id_region_47" value="長崎県" name="region"> 長崎県</label>
																				</dd>
																				<dd>
																					<label for="id_region_48"><input type="checkbox"
																						id="id_region_48" value="熊本県" name="region"> 熊本県</label>
																				</dd>
																				<dd>
																					<label for="id_region_49"><input type="checkbox"
																						id="id_region_49" value="大分県" name="region"> 大分県</label>
																				</dd>
																				<dd>
																					<label for="id_region_50"><input type="checkbox"
																						id="id_region_50" value="宮崎県" name="region"> 宮崎県</label>
																				</dd>
																				<dd>
																					<label for="id_region_51"><input type="checkbox"
																						id="id_region_51" value="鹿児島県" name="region"> 鹿児島県</label>
																				</dd>
																				<dd>
																					<label for="id_region_52"><input type="checkbox"
																						id="id_region_52" value="沖縄県" name="region"> 沖縄県</label>
																				</dd>
																			</dl>
																		</div>
																		<div class="areacheckbox">
																			<dl>
																				<dt>
																					<label for="id_region_53"><input type="checkbox"
																						id="id_region_53" value="海外" name="region"> 海外</label>
																				</dt>
																				<dd>

																					
																				<dd>
																			
																			
																			</dl>
																		</div>
																	</div>
																	<!-- .bggray -->
																	<p class="fall_under center">
																		該当コース: <span class="rating">1,599</span><span
																			class="matter">件</span>
																	</p>

																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default"
																	data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary">Save
																	changes</button>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="col-sm-6 pr0  br_dotted clearfix">
												<p class="barTitle_black mt0 sp-fll">高速道路</p>
												<div class="sp-flr road-search">
													<button type="button"
														class="btn btn-default fll mr10 bg_gradient fw-modal"
														data-toggle="modal" data-target=".mymodal2">
														追加・変更<i class="glyphicon glyphicon-play"></i>
													</button>
													<p class="fll mb0">
														高速道路:<span class="text-gold">未設定</span><br> IC:<span
															class="text-gold">未設定</span><br>
													</p>
												</div>
												<div class="modal fade mymodal2" tabindex="-1" role="dialog"
													aria-labelledby="myModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-body">
																<div class="inner">
																	<div class="bggray">
																		<dl>
																			<dt>エリアの選択</dt>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="北海道・東北"> 北海道・東北</label>
																			</dd>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="関東・甲信越"> 関東・甲信越</label>
																			</dd>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="中部"> 中部</label>
																			</dd>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="近畿"> 近畿</label>
																			</dd>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="中国・四国"> 中国・四国</label>
																			</dd>
																			<dd>
																				<label><input type="radio" name="region_state"
																					value="九州・沖縄"> 九州・沖縄</label>
																			</dd>
																		</dl>
																		<dl>
																			<dt>高速道路の選択</dt>
																			<dd>
																				<select id="id_heightway_items" size="10"
																					name="course_highway" style="">
																					<option value="伊勢自動車道">伊勢自動車道</option>
																					<option value="海南湯浅御坊自動車道">海南湯浅御坊自動車道</option>
																					<option value="関越自動車道">関越自動車道</option>
																					<option value="館山自動車道">館山自動車道</option>
																					<option value="京都縦貫自動車道">京都縦貫自動車道</option>
																					<option value="京奈和自動車道">京奈和自動車道</option>
																					<option value="京葉道路">京葉道路</option>
																					<option value="阪和自動車道">阪和自動車道</option>
																					<option value="山陽自動車道">山陽自動車道</option>
																					<option value="上信越自動車道">上信越自動車道</option>
																					<option value="常磐自動車道">常磐自動車道</option>
																					<option value="新名神高速道路">新名神高速道路</option>
																					<option value="神戸淡路鳴門自動車道">神戸淡路鳴門自動車道</option>
																					<option value="西名阪自動車道">西名阪自動車道</option>
																					<option value="中央自動車道">中央自動車道</option>
																					<option value="中国自動車道">中国自動車道</option>
																					<option value="長野自動車道">長野自動車道</option>
																					<option value="東海北陸自動車道">東海北陸自動車道</option>
																					<option value="東関東自動車道">東関東自動車道</option>
																					<option value="東北自動車道">東北自動車道</option>
																					<option value="東名高速道路">東名高速道路</option>
																					<option value="東名阪自動車道">東名阪自動車道</option>
																					<option value="磐越自動車道">磐越自動車道</option>
																					<option value="舞鶴若狭自動車道">舞鶴若狭自動車道</option>
																					<option value="北関東自動車道">北関東自動車道</option>
																					<option value="北陸自動車道">北陸自動車道</option>
																					<option value="名阪国道">名阪国道</option>
																					<option value="名神高速道路">名神高速道路</option>
																					<option value="圏央自動車道">圏央自動車道</option>
																					<option value="新東名高速道路">新東名高速道路</option>
																					<option value="九州自動車道">九州自動車道</option>
																					<option value="宮崎自動車道">宮崎自動車道</option>
																					<option value="長崎自動車道">長崎自動車道</option>
																					<option value="大分自動車道">大分自動車道</option>
																					<option value="東九州自動車道">東九州自動車道</option>
																					<option value="阪神高速道路">阪神高速道路</option>
																				</select>
																			</dd>
																		</dl>
																		<dl class="ic_select">
																			<dt>ICの選択</dt>
																			<dd class="from_ic">
																				<select size="1" name="course_ic_nearby_from"
																					style="">

																					<option value="">指定なし（IC区間）</option>
																				</select>
																			</dd>
																			から
																			<dd class="to_ic">
																				<select size="1" name="course_ic_nearby_to" style="">

																					<option value="">指定なし（IC区間）</option>
																				</select>
																			</dd>
																		</dl>
																	</div>
																	<!-- .bggray -->
																	<p class="fall_under center">
																		該当コース: <span class="ratingprice text-red">1500</span><span
																			class="matter">件</span>
																	</p>

																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default"
																	data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary">Save
																	changes</button>
															</div>
														</div>
													</div>
												</div>

											</div>

										</div>
										<div class="row pb10 pt10 borderbot pt15">
											<div class="col-sm-6 pr0 pl0 pt5 clearfix">
												<p class="barTitle_black mt0 sp-fll">料金・条件</p>

												<div class="sp-flr price-search">
													<div class="price_col">
														<select name="price" class="price">
															<option value="1" selected="selected">指定なし</option>
															<option value="2">指定なし</option>

														</select>円～

													</div>

													<div class="price_col">
														<select name="price" class="price">
															<option value="1" selected="selected">指定なし</option>
															<option value="2">指定なし</option>

														</select>円

													</div>
												</div>


											</div>
											<div class="row">

												<div class="col-sm-6 date br_dotted pr0 pt5 clearfix">
													<p class="barTitle_black mt0 mb15 sp-fll">プレースタイル</p>
													<div class="sp-flr play-style">
														<div class="checkboxbg ml10">
															<input type="checkbox" id="lunch"> <label for="lunch"><span>昼食付き</span></label>
														</div>
														<div class="checkboxbg">
															<input type="checkbox" id="wranty"> <label for="wranty"><span>2サム保証</span></label>
														</div>
														<div class="checkboxbg">
															<input type="checkbox" id="caddy"> <label for="caddy"><span>キャディ付き</span></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row pb5 pt10 ">
											<div class="col-sm-6 pr0 pl0 clearfix">
												<div class="barTitle_black mt5 sp-fll">スタート時間</div>
												<div class="sp-flr time-search clearfix">
													<div class="col-sm-12 date pl0 pr0 pt5 clearfix">
														<div class="checkboxbg">
															<input type="checkbox" id="sixTime"> <label for="sixTime"><span>6時台</span></label>
														</div>
														<div class="checkboxbg">
															<input type="checkbox" id="sevenTime"> <label
																for="sevenTime"><span>7時台</span></label>
														</div>
														<div class="checkboxbg">
															<input type="checkbox" id="eightTime"> <label
																for="eightTime"><span>8時台</span></label>
														</div>
													</div>
													<div class="col-sm-12 date pl0 pr0 clearfix">
														<div class="checkboxbg">
															<input type="checkbox" id="nineTime"> <label
																for="nineTime"><span>9時台</span></label>
														</div>

														<div class="checkboxbg">
															<input type="checkbox" id="tenTime"> <label for="tenTime"><span>10時台</span></label>
														</div>
														<div class="checkboxbg">
															<input type="checkbox" id="elevenTime"> <label
																for="elevenTime"><span>11時台～</span></label>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-6 pr0 br_dotted clearfix">
												<p class="barTitle_black mt5 sp-fll">連続枠を指定</p>


												<div class="price_col pb20 sp-fll">
													<select name="price" class="price large_select">
														<option selected>指定なし</option>
														<option value="2">2組以上</option>
														<option value="3">3組以上</option>
														<option value="4">4組以上</option>
														<option value="5">5組以上</option>
														<option value="6">6組以上</option>
														<option value="7">7組以上</option>
														<option value="8">8組以上</option>
														<option value="9">9組以上</option>
														<option value="10">10組以上</option>

													</select>

												</div>



											</div>

										</div>
									</div>

									<div class="row pb20 border-fixed clearfix">
										<div class="searchhomeLeft">
											<div class="search_wrapBtn">
												<a href="" data-toggle="modal" data-target=".mymodal3"
													class="text-gold underline"> <img
													src="img/home/add_btn.png" alt=""
													class="img-responsive fll mr5"> こだわり条件を追加する
												</a>
												<div class="modal fade mymodal3" tabindex="-1" role="dialog"
													aria-labelledby="myModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-body">
																<div class="careAboutTitle">
																	<h2>こだわり条件</h2>
																</div>
																<table class="search_panel_main table table-bordered"
																	summary="ゴルフ場検索パネル">
																	<tbody>
																		<tr>
																			<th>ICからの距離</th>
																			<td><select name="course_ic_nearby_distance" style="">
																					<option value="" selected="selected">指定なし</option>
																					<option value="5km以内">5km以内</option>
																					<option value="10km以内">10km以内</option>
																					<option value="15km以内">15km以内</option>
																					<option value="20km以内">20km以内</option>
																					<option value="25km以内">25km以内</option>
																					<option value="30km以内">30km以内</option>
																			</select></td>
																		</tr>
																		<tr>
																			<th>スタート時間</th>
																			<td>
																				<ul>
																					<li><label><input type="checkbox" value="～5時台"
																							name="start_time">～5時台</label></li>
																					<li><label><input type="checkbox" value="6時台"
																							name="start_time">6時台</label></li>
																					<li><label><input name="start_time" value="7時台"
																							type="checkbox"> 7時台</label></li>
																					<li><label><input name="start_time" value="8時台"
																							type="checkbox"> 8時台</label></li>
																					<li><label><input name="start_time" value="9時台"
																							type="checkbox"> 9時台</label></li>
																					<li><label><input name="start_time" value="10時台"
																							type="checkbox"> 10時台</label></li>
																					<li><label><input name="start_time" value="11時台"
																							type="checkbox"> 11時台</label></li>
																					<li><label><input name="start_time" value="12時台～"
																							type="checkbox"> 12時台～</label></li>
																					<li><label><input name="start_time" value=""
																							type="checkbox"> 時間指定なし</label></li>
																				</ul>
																			</td>
																		</tr>


																		<tr class="other_search_menu">
																			<th>プレースタイル</th>
																			<td>
																				<ul>
																					<li><label><input name="playstyle" value="セルフ"
																							type="checkbox"> セルフ</label></li>
																					<li><label><input name="playstyle" value="乗用カート"
																							type="checkbox"> 乗用カート</label></li>
																					<li><label><input name="playstyle" value="歩き"
																							type="checkbox"> 歩き</label></li>
																					<li><label><input name="playstyle" value="宿泊付"
																							type="checkbox"> 宿泊付</label></li>
																					<li><label><input name="playstyle" value="1.5ラウンド可"
																							type="checkbox">
																							1.5ラウンド可</label></li>
																					<li><label><input name="playstyle" value="早朝スルー"
																							type="checkbox"> 早朝スルー</label></li>
																					<li><label><input name="playstyle" value="午後スルー"
																							type="checkbox"> 午後スルー</label></li>
																					<li><label><input name="playstyle" value="オープンコンペ"
																							type="checkbox"> オープンコンペ</label></li>
																					<li><label><input name="playstyle"
																							value="ハーフプレー（0.5Ｒ）" type="checkbox">
																							ハーフプレー（0.5Ｒ）</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>特別プラン</th>
																			<td>
																				<ul>
																					<li><label><input name="specialplan"
																							type="checkbox"
																							value="【GDO×MIZUNO】毎月ハワイが当たるキャンペーン">
																							【GDO×MIZUNO】毎月ハワイが当たるキャンペーン</label></li>
																					<li><label><input name="specialplan" value="直前優待"
																							type="checkbox"> 直前優待</label></li>
																					<li><label><input name="specialplan" value="早割でお得"
																							type="checkbox"> 早割でお得</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>コンペプラン</th>
																			<td>
																				<ul>
																					<li><label><input name="compeplan" value="コンペプラン全て"
																							type="checkbox">
																							コンペプラン全て</label></li>
																					<li><label><input name="compeplan" value="2組～予約可"
																							type="checkbox"> 2組～予約可</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>プレーヤー評価</th>
																			<td>
																				<ul>
																					<li><label><input name="course_rate_total_facet"
																							value="4.5以上" type="radio"> 4.5以上</label></li>
																					<li><label><input name="course_rate_total_facet"
																							value="4.0以上" type="radio"> 4.0以上</label></li>
																					<li><label><input name="course_rate_total_facet"
																							value="3.5以上" type="radio"> 3.5以上</label></li>
																					<li><label><input name="course_rate_total_facet"
																							value="3.0以上" type="radio"> 3.0以上</label></li>
																					<li><label><input name="course_rate_total_facet"
																							value="" type="radio"> 指定しない</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>コースタイプ</th>
																			<td>
																				<ul>
																					<li><label><input name="course_course_type"
																							value="丘陵" type="checkbox"> 丘陵</label></li>
																					<li><label><input name="course_course_type"
																							value="林間" type="checkbox"> 林間</label></li>
																					<li><label><input name="course_course_type"
																							value="山岳" type="checkbox"> 山岳</label></li>
																					<li><label><input name="course_course_type"
																							value="シーサイド" type="checkbox"> シーサイド</label></li>
																					<li><label><input name="course_course_type"
																							value="河川敷" type="checkbox"> 河川敷</label></li>
																					<li><label><input name="course_course_type"
																							value="その他" type="checkbox"> その他</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>プレーヤータイプ</th>
																			<td>
																				<ul>
																					<li><label><input name="specialplan" value="レディス"
																							type="checkbox"> レディス</label></li>
																					<li><label><input name="specialplan" value="シニア"
																							type="checkbox"> シニア</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>付帯施設</th>
																			<td>
																				<ul>
																					<li><label><input name="facility" value="練習場"
																							type="checkbox"> 練習場</label></li>
																					<li><label><input name="facility" value="温泉"
																							type="checkbox"> 温泉</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="other_search_menu">
																			<th>利用可能サービス</th>
																			<td>
																				<ul>
																					<li><label><input name="service"
																							value="ポイント＆クーポン利用可能コース" type="checkbox">
																							ポイント＆クーポン利用可能コース</label></li>
																					<li><label><input name="service" value="クラブバス送迎"
																							type="checkbox"> クラブバス送迎</label></li>
																				</ul>
																			</td>
																		</tr>
																		<tr class="exclude_cell">
																			<th>除外設定</th>
																			<td>
																				<ul>
																					<li><label><input name="exclude" value="ハーフプレーを除く"
																							type="checkbox">
																							ハーフプレーを除く</label></li>
																					<li><label><input name="exclude" value="コンペプランを除く"
																							type="checkbox">
																							コンペプランを除く</label></li>
																					<li><label><input name="exclude" value="オープンコンペを除く"
																							type="checkbox">
																							オープンコンペを除く</label></li>
																					<li><label><input name="exclude" value="スループレーを除く"
																							type="checkbox">
																							スループレーを除く</label></li>
																				</ul> <!-- extra_exclusion -->
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default"
																	data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary">Save
																	changes</button>
															</div>
														</div>
													</div>
												</div>
												<p class="fall_under fw-bold">
													該当コース: <span class="ratingprice text-red">1500</span><span
														class="matter">件</span>
												</p>
											</div>
										</div>
										<div class="searchhome">
											<a href="#"><img src="img/home/search_btn.png" class="img-responsive" alt=""/></a>
										</div>

									</div>
								</div>
								<div id="tab2" class="tab-pane fade">
									<div class="row pt10">
										<div class="col-sm-6">
											<div class="golf-drag_plan1"></div>
											<div class="golf-drag_plan1"></div>

										</div>
										<div class="col-sm-6">
											<div class="golf-drag_plan1"></div>
											<div class="golf-drag_plan1"></div>
										</div>

									</div>
									<div
										class="panel-heading bg-grey2 fw-bold txt-white clearfix mb20">
										<form class="form-inline flr">

											<div class="form-group">
												<label for="golf_name" class="sr-only">例：成田フェアフィ―ルド</label>
												<input type="text" class="form-control" id="golf_name"
													placeholder="例：成田フェアフィ―ルド">
											</div>
											<button type="submit" class="btn btn-default">ゴルフ場追加</button>
										</form>
									</div>
								</div>

							</div>
							<div class="row bg_topgray mb20">
								<div class="col-sm-12 pl20 pr0">
									<div class="golf-left03In">
										<p class="barTitle_black">ゴルフ場名から最安値検索</p>
										<div class="searchbydate fw-bold clearfix">
										<span class="sp-fll ml10">
										プレー日 <input type="text"
												class="datepicker search-input hasDatepicker" name="date"
												id="date" value="日付選択">
												</span><span class="sp-fll ml10">ゴルフ場名
											<input name="serachname" class="search-sm ml10"
												placeholder="例：ABCカントリークラブ" type="text" autocomplete="off">
												</span>
											<input name="" id="search_c_name_submit2"
												class="snavBtnSearch " type="submit" value="検索">
										</div>



									</div>
								</div>
							</div>

							<!-- my plan -->

							<div class="planWrap bg_topgray mb20 pb20">
								<div class="mr20 ml20">
									<p class="barTitle_black mt20">よく行くゴルフ場の今だけの特別割引</p>
									<div class="myplan_ttl mt20 pc">
										<ul>
											<li>～9月4日（金）</li>
											<li>9月中のプレー</li>
											<li>10/1～</li>
										</ul>

									</div>
									<div class="clearfix">
										<div class="reco mr30 shadow ">
											<div class="mygolf_plan">
												<h4>プレー日直前のお得なプラン</h4>
											</div>
											<div class="reco_box bg-plangray">


												<div class="crs-box clearfix specialplan">
													<h3>
														<a href="#" class="text-darkgreen fwbold">直前割</a>
													</h3>
													<p>プレー日直前だからこそお得！今すぐ予約可能なプランをご紹介！</p>
												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">アクアラインゴルフクラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img01.jpg"
															alt="月夜野カントリークラブ（群馬県）"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;5,213</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">房総カントリークラブ 房総ゴ…</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img04.jpg" alt=""></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd>
																<span class="text-flowerpink">&yen;4,028</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">2倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5 bg-grey">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->
											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none mb10">
													<a href="" class="btn-more btn-shadow">> 直前割プランをもっと見る</a>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->


										</div>
										<!-- reco Wrapper -->
										<div class="reco mr30 shadow">
											<div class="mygolf_plan2">
												<h4>5月はキャディ付きプラン特集</h4>
											</div>
											<div class="reco_box bg-plangray">


												<div class="crs-box clearfix specialplan">
													<h3>
														<a href="#" class="text-darkblue">特別プラン</a>
													</h3>
													<p>ここだけの特別にお得なプランをご用意しました。早い者勝ち！</p>
												</div>
												<!-- photo area-->
											</div>
											<div class="reco_box">
												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">南市原ゴルフクラブ（旧：天ヶ…</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img02.jpg" alt=""></a>
													</div>
													<div class="txt">
														<dl>
															<dt>女性限定アフタスイ..</dt>
															<dd class="text-flowerpink">&yen;51,86</dd>
															<dd>
																ポイント<span class="text-flowerpink">2倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5 bg-grey">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->
											</div>
											<!-- reco box -->
											<div class="reco_box ">
												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">ミルフィーユゴルフクラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img05.jpg" alt=""></a>
													</div>
													<div class="txt">
														<dl>
															<dt>昼食･1ﾄﾞﾘﾝｸ付”生中ＯＫ</dt>
															<dd>
																<span class="text-flowerpink">&yen;7,750</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 bg-grey">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->
											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none mb10">
													<a href="" class="btn-more btn-shadow">&gt; 特別プランをもっと見る</a>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
										</div>
										<!-- reco Wrapper -->
										<div class="reco shadow">
											<div class="mygolf_plan3">
												<h4>かなりお得な早めの予約プラン</h4>
											</div>
											<div class="reco_box bg-plangray">
												<div class="crs-box clearfix specialplan">
													<h3>
														<a href="#" class="text-darkpink">早割</a>
													</h3>
													<p>予定が決まったらまずはチェック！早めの予約がお得です。</p>
												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box">

												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">ベルセルバカントリークラブ市…</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img03.jpg" alt=""></a>
													</div>
													<div class="txt">
														<dl>
															<dt>キャデイ付き</dt>
															<dd class="text-flowerpink">&yen;37,13</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5 bg-grey">2回プレー</span><span
																	class="golfplan_btn02 bg-grey">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">
												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">キャパンPGAゴルフクラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/top_plan_img06.jpg" alt=""></a>
													</div>
													<div class="txt">
														<dl>
															<dt>練習場コインプレゼント</dt>
															<dd>
																<span class="text-flowerpink">&yen;4,862</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">5倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none mb10">
													<a href="" class="btn-more btn-shadow">> 早割プランをもっと見る</a>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->

										</div>
										<!-- reco Wrapper -->
									</div>
								</div>
							</div>

							<!-- end of plan -->

							<div class="planWrap bg_topgray pb20">
								<div class="mr20 ml20">
									<p class="barTitle_black mb20">（仮タイトル）プラン特集</p>

									<div class="clearfix">
										<div class="reco mr30 shadow ">
											<div class="reco_ttl">
												<span>特集A</span>
											</div>
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd>
																<span class="text-flowerpink">&yen;7,000</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->


										</div>
										<!-- reco Wrapper -->
										<div class="reco mr30 shadow">
											<div class="reco_ttl">
												<span>特集B</span>
											</div>
											<div class="reco_box">
												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd>
																<span class="text-flowerpink">&yen;7,000</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->


										</div>
										<!-- reco Wrapper -->
										<div class="reco shadow">
											<div class="reco_ttl">
												<span>特集C</span>
											</div>
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box">


												<div class="crs-box clearfix">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd class="text-flowerpink">&yen;7,000</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->
											<div class="reco_box ">


												<div class="crs-box clearfix border-none">
													<h3>
														<a href="#" class="text-gold">グレンオークスカントリークラブ</a>
													</h3>
													<div class="photo">
														<a href="#"> <img src="img/home/plan_img01.png"
															alt="月夜野カントリークラブ（群馬県）" width="80" height="60"></a>
													</div>
													<div class="txt">
														<dl>
															<dt>ボールプレゼント</dt>
															<dd>
																<span class="text-flowerpink">&yen;7,000</span>
															</dd>
															<dd>
																ポイント<span class="text-flowerpink">3倍</span><span><img
																	alt="" src="img/home/st_point.png"></span>
															</dd>
															<dd>
																<span class="golfplan_btn01 mr5">2回プレー</span><span
																	class="golfplan_btn02 ">お気に入り </span>
															</dd>
														</dl>
													</div>

												</div>
												<!-- photo area-->


											</div>
											<!-- reco box -->


										</div>
										<!-- reco Wrapper -->
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- main content -->
				
				<!-- main content -->
<?php  include 'inc/aside_login.php'; ?>

				
																				
																				</div>
			</div>
		</div>
		</div>
	</article>

<?php  include 'inc/footer.php'; ?>