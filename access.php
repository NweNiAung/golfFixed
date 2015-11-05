<!doctype html>
<html lang="jp">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<head>

<title>アクセス｜ゴルフ予約ＪＰ</title>

<link rel="stylesheet" href="css/import.css" media="all">
<!-- <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
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
	<header>
		<?php include 'inc/menu_login.php';?>
		</header>
	<article>
		<div class="container">
			<div class="row mt20 map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d963.9671102585552!2d139.73455123118237!3d35.64286160565683!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1441767280709"
					width="100%" height="450" frameborder="0" style="border: 0"
					allowfullscreen></iframe>
			</div>
			
			<div class="row">
				<div class="col-sm-12 pt15 pl0 pr0">
					<table class="table table-bordered cleaarfix" id="no-more-tables">
						<tbody>
							<tr>
								<th class="table-head">所在地</th>
								<td class="tabledata">〒511-0502三重県いなべ市藤原町上相場640-7
									
								</td>
								<th class="table-head">連絡先</th>
								<td class="tabledata">TEL:0594-46-4111 FAX:</td>
							</tr>
							<tr>
								<th class="table-head">休日</th>
								<td class="tabledata">無休</td>
								<th class="table-head">開場日</th>
								<td class="tabledata">平成05年06月26日</td>
							</tr>
							<tr>
								<th class="table-head" rowspan="2">開場時間</th>
								<td class="tabledata" rowspan="2"></td>
								<th class="table-head">予約開始日</th>
								<td class="tabledata">プレー日の92日前­</td>
							</tr>
							<tr>
								<th class="table-head">冬季クローズ</th>
								<td class="tabledata">なし</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 pl0 pr0">
					<div class="panel panel-default border-none">
						<div class="ttl-1 bg-purple">お役立ち情報＆お気に入り保存</div>
						<div class="pt10 pb10">
							<div class="col-sm-12 padding-none">

								<div class="col-sm-3 pl0 pr20">
									<a href="" class="btn btn-shadow btn-block btn-brown"> ゴルフ場周辺の天気 </a>
								</div>
								<div class="col-sm-3 pl0 pr20">
									<a href="" class="btn btn-shadow btn-block btn-brown"> 宿・ホテル・旅館 </a>
								</div>
								<div class="col-sm-3 pl0 pr20">
									<a href="" class="btn btn-shadow btn-block btn-brown"> ゴルフバッグ宅急便 </a>
								</div>
								<div class="col-sm-3 pl0 pr0">
									<a href="" class="btn btn-shadow btn-block btn-brown">レンタカー予約 </a>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<footer>
		<?php include 'inc/footer.php';?>


	</footer>

	<script>
		// Only enable if the document has a long scroll bar
		// Note the window height + offset
		if (($(window).height() + 100) < $(document).height()) {
			$('#top-link-block').removeClass('hidden').affix({
				// how far to scroll down before link "slides" into view
				offset : {
					top : 100
				}
			});
		}
	</script>
</body>
</html>