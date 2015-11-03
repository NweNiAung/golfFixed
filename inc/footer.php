	<footer>
	
		<div class="nav_bggrey">
			<div class="container">

				<div class="row pt30 pb30 dis-none nav_bggrey">
					<div class="col-sm-12 clearfix pr0 pl0">
						<dl class="res_seofooter_top">
							<dt class="aside-title">ゴルフ場一覧</dt>
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
									<li class="mt20"><a href="#">新潟</a></li>
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
<!-- 
								<ul class="prefectures">
									<li class="first"><a href="#">海外</a></li>
									<li class="prefecturestop"><a href="#">ハワイ</a></li>
									<li><a href="#">グアム</a></li>
									<li class="footer_span2"><a href="#">サイパン・ロタ</a></li>
									<li><a href="#">アジア</a></li>
								</ul>
								 -->
							</dd>
						</dl>
					</div>

				</div>
			</div>
			<div class="bg-black">
				<div class="footer_nav pc pb20">

					<div>
						<ul class="center footer-list">
							<li><a href="#">ゴルフ予約.JP サービス</a></li>
							<li><a href="#">ゴルフ予約</a></li>
							<li><a href="#">お気に入り</a></li>
							<li><a href="#">閲覧履歴</a></li>
							<li><a href="#">マイページ</a></li>
						</ul>
						<ul class="center footer-list mt20">
							<li><a href="#">利用規約</a></li>
							<li><a href="#">個人情報保護方針</a></li>
							<li><a href="#">お問い合わせ</a></li>
							<li><a href="#">ご意見・ご要望 </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bg-purple center pt30 pb30">
				<span class="text-gold fs13">© 2015 ゴルフ予約.JP</span>
			</div>
		</div>



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

	<!-- ▼jQuery-UI -->

	<script src="js/jquery-ui.min.js"></script>
	<!-- ▼jQuery-UI-datepicker -->
	<script src="js/jquery.ui.datepicker-ja.min.js"></script>

	<script src="js/slick.js"></script>
	<script>
		$(function() {
			//  $(".monthpicker").datepicker();

			$('.monthpicker,.datepicker').datepicker({

				dateFormat : "MM dd"
			});

			$(".switch").click(function() {
				$(".singleSearchBox").show();
				$(".searchBoxContainer").hide();

			});
			$(".switch01").click(function() {
				$(".singleSearchBox").hide();
				$(".searchBoxContainer").show();

			});

		});

		$('.single-Nav').slick({
			dots : true,
			infinite : true,
			speed : 500,
			slidesToShow : 1,
			slidesToScroll : 1
		});
	</script>

	<!-- slider -->
	<script src="js/jquery-ui-slider-pips.js"></script>
	<script src="js/examples.js"></script>

</body>
</html>