<!doctype html>
<html lang="jp">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<head>

<title>ログイン｜ゴルフ予約ＪＰ</title>

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
<?php include 'inc/menu.php';?>
</header>
	<article>
		<div class="container clearfix">
			<div class="breadcum mt20">
				<span><a href="index.html">トップ</a></span>&nbsp;&gt;&nbsp;<span>ログイン</span>
			</div>
			<div class="panel border-grey mt20">
				<div class="bg-purple">
					<p class="ttl-1 center">ゴルフ予約.jp 登録されている方</p>
				</div>
				<div class="panel-body">
				<div class="mb20 mt20 bg-grey">
					<p class="txt-red fwbold pt10 pb10 pl10">
					ログインIDまたはパスワードに誤りがあります。再度正しくご入力ください。<span ><a href="#" class="text-red">※お問い合わせはこちら</a></span>
					</p>
				</div>
					<form class="form-signin">
						<div class="col-sm-8 pr0">

							<div class="row mb20">
								<div class="form-group ">
									<div class="col-sm-2 pl0">
										<p class="fwbold fs16  pt10">ログインID</p>
									</div>

									<div class="col-sm-10 pl0">
										<input type="text" class="form-control input-lg flr"
											placeholder="ログインID">
									</div>
								</div>
							</div>
							<div class="row mb20">
								<div class="form-group">
									<div class="col-sm-2 pl0">
										<p class="fwbold fs16 pt10">パスワード</p>
									</div>

									<div class="col-sm-10 pl0">
										<input type="password" class="form-control input-lg flr"
											placeholder="パスワード">
									</div>
								</div>
							</div>
							<div class="checkbox">
								<label> <input type="checkbox"> ログイン状態を保持する
								</label>
							</div>
							<div class="form-group">
								<span><a href="#">ログインID・パスワードを忘れた場合</a></span>
								<p>
									<a href="#">ヘルプ</a>
								</p>
							</div>
						</div>
						<div class="col-sm-4 form-group pt20 pl0">
							<a href="#" class="btn btn-l bg-black">ログイン</a>
						</div>

					</form>
				</div>
			</div>
			<div class="panel border-grey mt20">
				<div class="bg-purple">
					<p class="ttl-1 center">ゴルフ予約.jp 登録されている方</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-10 center noFloat">
							<p class="fwbold">初めての方はこちらから新規登録することができます
							
							
							</p>
								<a href="" class="btn btn-l bg-black btn-block center">新規会員登録する</a>
						
						</div>
					</div>
				</div>
			</div>

			<div class="row ">
				<div class="col-sm-12 bg-grey pt20 pb20">
				<div class="ttl-2 mb10">
				他のアカウントでログイン/新登録
				</div>
					<div class="col-sm-3">
						<a href="" class="btn btn-social-icon btn-facebook btn-block"> <i
							class="fa fa-facebook"></i>Facebookでログイン
						</a>
					</div>
					<div class="col-sm-3">
						<a href="" class="btn btn-social-icon btn-twitter btn-block"> <i
							class="fa fa-twitter"></i>twitterでログイン
						</a>
					</div>
					<div class="col-sm-3">
						<a href="" class="btn btn-social-icon btn-google btn-block"> <i class="fa fa-google"></i>googleでログイン
						</a>
					</div>
					<div class="col-sm-3">
						<a class="btn btn-social-icon btn-yahoo btn-block"> <i class="fa fa-yahoo"></i>yahooでログイン
						</a>
					</div>
				</div>
			</div>
			<div class="row mt30">
				<div class="col-sm-12 border-grey ">
					<div class="col-sm-8 pt20">
						<P class="ttl-2">テキストテキストテキストテキストテキストテキストテキストテキスト</P>
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
					<div class="col-sm-4 pt15 pl0 mb20">
						<a href="" class="btn btn-l bg-black btn-block center">お問い合わせ</a>
					</div>
				</div>
			</div>

		</div>

		<!-- /container -->
	</article>
	<footer>
	<?php include 'inc/footer.php';?>
	</footer>
</body>
</html>