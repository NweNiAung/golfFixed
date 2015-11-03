<!doctype html>
<html lang="jp">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<head>

<title>予約フロー｜ゴルフ予約ＪＰ</title>

<link rel="stylesheet" href="../css/import.css" media="all">
<link rel="stylesheet" href="css/style.css" />
<!-- <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js">
	
</script>


<!--[if lt IE 9]><script src="js/ie8.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<?php include '../inc/admin-header.php'; ?>
	</header>
	<article>
		<div class="home">
			<div class="container pc pt20">
				<div class="main_content clearfix">
					<div class="mainIn flr">
						<div class="row mb20 bg-admin">

							<div class="ttl-3 mb10">リクエスト未処理一覧</div>
							<p>リクエスト予約の処理を行います。リクエスト予約の回答を行う場合は受付べんごを押してください。</p>
							<p class="txt-red">
								※仮予約リクエストは、受付時間から２４時間以内にご回答ください。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
							<table class="table table-bordered bg-grey mt20 mb0 table-align">
								<thead>
									<tr>
										<td><a href="">受付番号</a></td>
										<td><a href="">受付区分<br>種別
										</a></td>
										<td><a href="">受付日時</a></td>
										<td><a href="">希望プレー日</a></td>
										<td><a href="">希望スタート時間</a></td>
										<td><a href="">組数・人数</a></td>
										<td><a href="">希望プラン</a></td>
										<td><a href="">金額</a></td>
										<td><a href="">申込み</a></td>
									</tr>
								</thead>
							</table>
						</div>

						<!-- block2 -->
						<div class="row mb20 bg-admin">
							<div class="col-sm-12 pl20 pr20">
								<div class="ttl-3 mb10">時間変更・組追加未処理一覧</div>
								<p>時間変更・組追加を行う場合は「受付」を押してください</p>
								<p class="txt-red">※下記の回答期限を過ぎると、返信ができなくなりますので、速やかに回答してください。</p>
								<table class="table table-bordered bg-grey mt20 mb0 table-align">
									<thead>
										<tr>
											<td><a href="">受付番号</a></td>
											<td><a href="">受付日時</a><br> 回答期限</td>
											<td><a href="">プレー日</a></td>
											<td><a href="">希望スタート時間</a></td>
											<td><a href="">希望組数</a></td>
											<td><a href="">プラン</a></td>
											<td><a href="">金額</a></td>
											<td><a href="">申込み</a></td>
										</tr>
									</thead>
								</table>
							</div>
						</div>
						<!-- block3 -->
						<div class="row mb20 bg-admin">

							<div class="ttl-3 mb10">問い合わせ未処理一覧</div>
							<p>申込者からのお問い合わせを受信しております。「受付番号」をクリックし返答またはご確認をお願いします。</p>

							<table class="table table-bordered bg-grey mt20 mb0 table-align">
								<thead>
									<tr>
										<td><a href="">受付番号</a></td>
										<td><a href="">受付日時<br> 回答期限
										</a></td>
										<td><a href="">プレー日</a></td>
										<td><a href="">希望スタート時間</a></td>
										<td><a href="">希望組数</a></td>
										<td><a href="">プラン</a></td>
										<td><a href="">金額</a></td>
										<td><a href="">申込み</a></td>
									</tr>
								</thead>
							</table>
						</div>
						<!-- block4 -->
						<div class="row mb20 bg-admin">
							<div class="ttl-3 mb10">ポイント利用確認未処理一覧</div>
							<p class="txt-red pb0">※未承認のポイント利用の予約があります。</p>
							<span><a href="">ポイント利用一覧</a> &nbsp;</span><span><a href="">9月</a>&nbsp;</span>
							<span><a href="">10月</a>&nbsp;</span> <span><a href="">11月</a>&nbsp;</span>

						</div>

						<!-- block5 -->
						<div class="row mb20 bg-admin">

							<p class="ttl-2">予約・リクエスト・問い合わせ</p>
							<p>
								→<span><a href="">1.月別予約状況一覧</a> &nbsp;</span><span><a href="">9月</a>&nbsp;</span><span><a
									href="">10月</a>&nbsp;</span> <span><a href="">11月</a>&nbsp;</span>
							</p>
							<p>
								→<span><a href="">2.月別予約状況一覧</a></span>
							</p>
							<p>
								→<span><a href="">3.未処理一覧</a></span>
							</p>
							<p>
								→<span><a href="">4.問い合わせ一覧</a></span>
							</p>
							<p>
								→<span><a href="">5.ポイント利用一覧</a> &nbsp;</span><span><a href="">9月</a>&nbsp;</span><span><a
									href="">10月</a>&nbsp;</span>
							</p>
							<p>
								→<span><a href="">6.予約台帳</a></span>
							</p>
							<p>
								→<span><a href="">7.リクエスト台帳</a></span>
							</p>
							<p class="pb0">
								→<span><a href="">8.予約一覧表示</a></span>
							</p>
						</div>

						<!-- block6 -->
						<div class="row mb20 bg-admin">

							<p class="ttl-2">プラン・スタート枠</p>
							<p>
								→<span><a href="">プラン設定・修正</a> &nbsp;</span><span><a href="">9月</a>&nbsp;</span><span><a
									href="">10月</a>&nbsp;</span> <span><a href="">11月</a>&nbsp;</span>
							</p>
							<p>
								→<span><a href="">2.スタート枠追加・削除</a></span>
							</p>
							<p>
								→<span><a href="">3.自動交換設定</a>&nbsp;</span><span><a href="">マスタ登録</a>&nbsp;</span>
							</p>
							<p>
								→<span><a href="">4.月別スタート枠・プラン一覧 </a></span>
							</p>
							<p>
								→<span><a href="">5.スタート枠毎の値段の設定</a> </span>
							</p>
							<p class="pb0">
								→<span><a href="">6.税情報の管理</a></span>
							</p>

						</div>
						<!-- block7 -->
						<div class="row mb20 bg-admin">

							<p class="ttl-2">ゴルフ場情報設定</p>
							<p>
								→<span><a href="">1.トップページ情報の入力</a></span>
							</p>
							<p>
								→<span><a href="">2.コース案内ページ情報の入力</a></span>
							</p>
							<p>
								→<span><a href="">3.ゴルフ場詳細ページ情報の入力 </a></span>
							</p>
							<p>
								→<span><a href="">4.アクセス情報の入力 </a></span>
							</p>
							<p>
								→<span><a href="">5.担当者情報の入力 </a> </span>
							</p>
							<p class="pb0">
								→<span><a href="">6.フォトギャラリー編集 </a></span>
							</p>

						</div>
						<!-- block8 -->
						<div class="row mb20 bg-admin">

							<p class="ttl-2">請求明細修正/キャンセル処理、クローズ処理、受付締切時間設定、口座設定</p>
							<p>
								→<span><a href="">1.請求明細修正/キャンセル処理</a></span>
							</p>
							<p>
								→<span><a href="">2.ポイント充当/利用明細</a></span>
							</p>
							<p>
								→<span><a href="">3.ポイント付与分明細 </a></span>
							</p>
							<p>
								→<span><a href="">4.方法の請求名細間問覧</a></span>
							</p>
							<p>
								→<span><a href="">5.クローズ処理 </a> </span>
							</p>
							<p>
								→<span><a href="">6.クローズ期間短縮・削除 </a></span>
							</p>
							<p>
								→<span><a href="">７．受付締切時間設定 </a></span>
							</p>
							<p>
								→<span><a href="">8．予約一覧メール設定 </a></span>
							</p>
							<p class="pb0">
								→<span><a href="">9．口座設定 </a></span>
							</p>


						</div>
						<!--  block9-->
						<div class="row bg-admin">

							<p class="ttl-2">口コミ返信機能</p>
							<p class="pb0">
								→<span><a href="">1.クチコミ返信</a></span>&nbsp;<span class="txt-red">直近７日間の未回答書き込み:13件</span>
							</p>


						</div>
					</div>
					<aside class="pc col-sm-3 pr20 pl0">

						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">A 予約・リクエスト・問い合わせ</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;</span><a href="">1.月別予約状況一覧</a>
										</p>
										<p>
											<span>&gt;</span><a href="">2.月別予約状況一覧</a>
										</p>
										<p>
											<span>&gt;</span><a href="">3.未処理一覧</a>
										</p>
										<p>
											<span>&gt;</span><a href="">4.問い合わせ一覧</a>
										</p>
										<p>
											<span>&gt;</span><a href="">5.ポイント/クーポン利用一覧</a>
										</p>
										<p>
											<span>&gt;</span><a href="">6.予約台帳</a>
										</p>
										<p>
											<span>&gt;</span><a href="">7.リクエスト台帳</a>
										</p>
									</div>
								</div>
							</div>


						</div>
						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">B プラン・スタート枠</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;</span><a href="">1.プラン設定・修正</a>&nbsp;<a href="">9月</a>&nbsp;<a
												href="">10月</a>&nbsp; <a href="">11月 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">2.スタート枠追加・削除</a>
										</p>
										<p>
											<span>&gt;</span><a href="">3.自動公開設定 マスタ登録 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">4.月別スタート枠・プラン一覧 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">5.スタート枠による値段の選択 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">6.税情報の管理 </a>
										</p>
									</div>
								</div>


							</div>

						</div>
						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">Ｃコースガイド情報設定</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;</span><a href="">1.トップページ情報の入力 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">2.コース案内ページ情報の入力 </a>
										</p>
										<p>
											<span>&gt;</span><a href="">3.ゴルフ場詳細ページ情報の入力 </a>
										</p>
										<p>
											<span>&gt;<a href="">4.アクセス情報の入力 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">5.担当者情報の入力 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">6.フォトギャラリー編集 </a>
										
										</p>
									</div>
								</div>

							</div>

						</div>
						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">Ｄ請求書細修正</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;<a href="">1.請求明再修正/キャンセル処理 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">2.ポイント充当/クーポン利用明細 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">3.ポイント付与分明細 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">4.過去の請求明細閲覧 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">5.クローズ処理 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">6.クローズ期間短縮・解除 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">7.受付締切時間設定 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">8.予約受付開始日設定 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">9.予約一覧メール設定 </a>
										
										</p>
										<p>
											<span>&gt;<a href="">10.口座設定</a>
										
										</p>
									</div>
								</div>

							</div>

						</div>
						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">Ｅクチコミ返信機能</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;<a href="">1.クチコミ返信</a>
										
										</p>

									</div>
								</div>
							</div>

						</div>
						<div class="aside-section mb20">
							<div class="row">
								<div class="col-sm-12 pt20 pb20 pr20 pl20">
									<p class="ttl-2">Ｆ月次公開</p>
									<div class="col-sm-12 pt10 bg-white">
										<p>
											<span>&gt;<a href="">1.基本プラン設定</a>
										
										</p>
										<p>
											<span>&gt;<a href="">2.基本スタート枠設定（平日一括）</a>
										
										</p>
										<p>
											<span>&gt;<a href="">3.基本スタート枠設定（土日一括）</a>
										
										</p>
										<p>
											<span>&gt;<a href="">4.基本スタート枠設定（曜日別）</a> <span><a href="">月</a></span>
												<span><a href="">火</a></span> <span><a href="">水</a></span>
												<span><a href="">木</a></span> <span><a href="">金</a></span>
												<span><a href="">土</a></span> <span><a href="">日</a></span>
										
										</p>
										<p>
											<span>&gt;<a href="">5.日別スタート枠変更</a>
										
										</p>
										<p>
											<span>&gt;<a href="">6.公開内容確認ん</a>
										
										</p>
										<p>
											<span>&gt;<a href="">7.月次公開年月設定</a>
										
										</p>

									</div>
								</div>
							</div>

						</div>

					</aside>
				</div>
			</div>
		</div>
	</article>
	<footer>
	<?php include '../inc/footer.php';?>
	</footer>

</body>

</html>