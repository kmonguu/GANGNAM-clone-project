function home(){location.href="/m/index.php";} // 홈
function adm(){location.href="/adm";} //관리자
function login(){location.href="/m/bbs/login.php";} //로그인
function logout(){location.href="/m/bbs/logout.php?url=/index.php";} //로그아웃
function register(){location.href="/m/bbs/register.php";} //회원가입
function order(){location.href="/m/shop/orderinquiry.php";} //주문배송확인
function mypage(){location.href="/m/shop/mypage.php";} //마이페이지
function cart(){location.href="/m/shop/cart.php";} //장바구니
function m_it9(){window.open("http://it9.co.kr/m/bbs/board.php?bo_table=portfolio");} //아이티나인
function revision(){location.href="/m/bbs/member_confirm.php?url=register_form.php";} //회원정보수정

function guide2(){location.href="/m/pages.php?p=100_6_1_1";} //이용약관
function info2(){location.href="/m/pages.php?p=100_7_1_1";} //개인정보취급방침
function email2(){location.href="/m/pages.php?p=100_16_1_1";} //이메일무단수집거부

//function sand(){location.href="/bbs/login.php?url=..%2Fshop%2Forderinquiry.php";} //비회원배송조회

function menum(link_go) {
	switch ( link_go ) {

		//강남참숯구이
		case 'menu01-1' : 
		location.href="/m/pages.php?p=1_1_1_1"; break;


		//메뉴소개
		case 'menu02-1' :
		location.href="/m/pages.php?p=2_1_1_1"; break;


		//CAFE호수
		case 'menu03-1' :
		location.href="/m/pages.php?p=3_1_1_1"; break;


		//예약안내
		case 'menu04-1' : 
		location.href="/m/pages.php?p=4_1_1_1"; break;


		//주변관광지
		case 'menu05-1' : 
		location.href="/m/pages.php?p=5_1_1_1"; break;
		





		}
}
