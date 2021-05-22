<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "생산공정"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "제품생산공정"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>



	<section id="business_wrap" class="scontents">

		<div class="bg_vline"></div>
		<p class="eng"><em>대광주철</em> 제품 생산 공정</p>
		<p class="stitle">모든 공정을 시스템에 의해 관리함으로써 완벽한 제품생산을 위한 생산라인의 연구, 시설투자 및 품질관리에 최선의 노력을 다하고 있습니다.</p>

<!--
		<div class="business">
		<ul>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_1.jpg" alt="사업영역">
				<strong>홈페이지 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
				
			</li>
			<li class="wow fadeInDown">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_2.jpg" alt="사업영역">
				<strong>쇼핑몰 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_3.jpg" alt="사업영역">
				<strong>웹컨텐츠 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
		</div>
	</section>

	<section id="business_wrap">
		<div class="business_area wow fadeInUp">
			<div class="business_tit">
				<p>SERVICE</p>
				<span>고객만족을 위해 최선을 다하는 기업이 되겠습니다.</span>
			</div>
		</div>
-->
			<div id="pro_tab_1">
				<ul class="tab">
					<li class="all on"><a href="#proList1">맨홀 뚜껑</a></li>
					<li class="all"><a href="#proList2">기계 주물</a></li>

				</ul>		

				<div id="proList1" class="active wow fadeInUp" style="clear:both;">
					<div class="business_list">
						<dl>
							<dt>용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>1.수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>2.용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>3.성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt>자동조형 및 EPC조형</dt>
							<dd class="">
								<div class="hover_area">
									<b>4.주물사 처리</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>5.주물사 검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>6.조형</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>7.스티로폼 성형</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>8.도형 및 건조</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>9.EPC조형</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt>주입</dt>
							<dd class="">
								<div class="hover_area">
									<b>10.출탕</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>11.주입</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>12.조직검사/성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt>후처리</dt>
							<dd class="">
								<div class="hover_area">
									<b>13.탈형 및 탈사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>14.사상</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>15.외관 전수 검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt>도장,조립 및 제품검사</dt>
							<dd class="">
								<div class="hover_area">
									<b>16.도장</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>17.조립,포장,출하</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>18.완제품 검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
					</div>
				</div>

				<div id="proList2" class="wow fadeInUp" style="clear:both;">					
					<div class="business_list">
						<dl>
							<dt><span>1</span> 용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt><span>1</span> 용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt><span>1</span> 용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt><span>1</span> 용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
						<dl>
							<dt><span>1</span> 용해</dt>
							<dd class="">
								<div class="hover_area">
									<b>수입검사</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								<!--<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">자세히 보기</a>-->
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business1.jpg" alt="">
							</dd>
							<dd class="">
								<div class="hover_area">
									<b>용해</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business2.jpg" alt="">

							</dd>
							<dd class="">
								<div class="hover_area">
									<b>성분분석</b>
									<p>
										간략한 설명글이 들어갈자리<br>
										간략한 설명글이 들어갈자리
									</p>
								</div>
								<img src="<?php echo G5_THEME_URL;?>/html/image/business3.jpg" alt="">
							</dd>
						</dl>
					</div>
				</div>

			</div>

			<script>
				var tabMenu = function(item,active){
				  var $item = $(item);
				  active($item);
				}

				tabMenu('#pro_tab_1 .tab a',function(item,active){
				  item.on('click', function(e){
					var $parent = $(this).parent();
					var id = $(this).attr("href");
					if(!$parent.hasClass('on')){
					  $('#pro_tab_1 li').siblings('.on').removeClass('on');
					  $parent.addClass('on');					  				  
					  $('#pro_tab_1 > div').hide();
					  $(id).fadeIn();
					}
					return false;
				  });
				});
			</script>

	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>