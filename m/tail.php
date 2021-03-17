<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$call = sql_fetch("SELECT COUNT(*) cnt FROM g4_call_log");
?>

<?if($bo_table){?>
	</div>
<?}?>






<footer>
<!--
	<map name="copy" id="copy">
		<area shape="rect" coords="260,255,380,285" href="javascript:<?=$member["mb_id"] ? "adm" : "login"?>();" alt="관리자">
	</map>
-->
	<div class="footer_div1">

		<ul>
			<li><a href="">오시는 길</a></li>
			<li><a href="javascript:adm()">관리자 페이지</a></li>
			<li>예약문의 064)794-4555</li>
		</ul>

	</div>
			
	<div class="footer_div2">
		<div>
			<p>
				강남 참숯구이<span class="bar">|</span>
				제주특별자치도 서귀포시 안덕면 서광동로 103<br>
				대표자:강남훈, 김선미<span class="bar">|</span>
				TEL:064)794-4555<span class="bar">|</span>
				사업자번호:616-26-87175
			</p>
			<span>Copyright &copy; 2020. <?=$g4['title']?>. All Right Reserved.</span>
		</div>
		<div class="it9">
			<a href="javascript:m_it9()"><img src="/m/images/footer/it9_logo.png" alt="아이티나인 로고" /></a>
		</div>
	</div>

	<div class="footer_div3">
		<a href="#"><img src="/m/images/footer/m_top.png" alt="페이지 위로 올리기 버튼" /></a>
	</div>

</footer>

<script>

	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".footer_div3").addClass("noneTop");
		}
		else {
			$(".footer_div3").removeClass("noneTop");
		}
	}
	
</script>

<!--
<?preg_match("/오늘:(.*),어제:(.*),최대:(.*),전체:(.*)/", $config['cf_visit'], $visit);settype($visit[0], "integer");settype($visit[1], "integer");settype($visit[2], "integer");settype($visit[3], "integer");?>
<div style="position:relative;width:640px;height:40px;font-size:18px;background:#222222;color:#dadada;text-align:center;z-index:20;margin-top:-2px; margin-bottom:100px;">
	<div style="margin:6px 0 0;display:inline-block;">
		<span>Today</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[1]?></span>
	</div>
	<div style="margin:6px 0 0 30px;display:inline-block;">
		<span>Total</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[4]?></span>
	</div>
</div>
-->


</div><!-- #menu_cover_area -->

</div><!-- #wrap -->



<?if($config["cf_kakao_key"]){?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script>
// 사용할 앱의 Javascript 키를 설정해 주세요.
Kakao.init('<?=$config["cf_kakao_key"]?>');
</script>
<?}?>



<?
include_once($g4[mpath]."/tail.sub.php");
?>
