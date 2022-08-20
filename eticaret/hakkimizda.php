<?php include 'header.php'; 

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
  'id' => 0
  ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>
	

<div class="">	

				


		
			<!--Main content-->
				<div class="row-2 ">
				<div class="container">		
					<div class="bigtitle">Hakkımızda</div>	
					<div class="left-row col-md-6">	
						<div class="">
							<h2>Marketplace ve Classifieds platformlarıyla faaliyetlerini yürüten global e-ticaret devi eBay; 1995 yılında Kaliforniya San Jose'de kuruldu.</h2>
						</div>

					</div>	
					<div class="col-md-6 right-row">
						<div class="">
							<h2>Marketplace ve Classifieds platformlarıyla faaliyetlerini yürüten global e-ticaret devi eBay; 1995 yılında Kaliforniya San Jose'de kuruldu.</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="row-3 "><br><br>
					<div class="container">
						
						<div class=""><h1>Türkiye'nin öncü e-ticaret sitesi olarak bundan 21 yıl önce, ülkemizi online pazaryerinden alışverişin kolaylığı ve keyfiyle tanıştırdık.</h1></div>
						<div><h4>Yenilikleri çok sıkı takip eden genç ve dinamik ekibimizle, kullanıcı deneyimini en üst seviyeye çıkarmaya odaklandık; e-ticaretin farkını ve sağladığı imkânları güvenli alışverişe olanak sağlayan Sıfır Risk Sistemi ile kullanıcılarımızla buluşturduk. Odağında dijital dönüşüm olan Türkiye'nin ilk online pazaryeri olarak, 2011 yılında dünyada e-ticaretin küresel liderlerinden eBay'in çatısı altına girdik.

120 bin satıcımız ve 35 milyon kayıtlı kullanıcımızla Türkiye'nin en çok tercih edilen alışveriş sitelerinden biriyiz. Elektronikten dekorasyona, kozmetikten anne bebek ürünlerine, modadan süpermarkete kadar toplam 50 kategoride milyonlarca ürünü kullanıcılara sunuyoruz. KOBİ ve bireysel satıcıların yanı sıra yerli ve yabancı yüzlerce büyük markanın mağazalarına ev sahipliği yapıyoruz. Bir eBay şirketi olarak globale açılan penceremiz sayesinde Türk markalarını ve ürünlerini 190 ülkede 147 milyon aktif kullanıcıyla buluşturuyoruz.

Ticarette fırsat eşitliği sağlayarak herkes için yeni iş olanakları yaratıyoruz. Evde ürettiğini satmak isteyenleri, kendi mağazasındaki ürünleri online dünyaya açmayı hayal edenleri, büyük markalarla aynı platformda milyonlarca kullanıcıyla buluşturuyoruz.</h4></div>
					</div><br><br>
				</div>

				<div class="row-4 "><br>
					<div class="video-title"><h1>TANITIM VİDEOSU</h1></div><br>
					<div class="">
						
						<div class="video"><iframe width="1050" height="600" src="https://www.youtube.com/embed/wwzSOfZp9Y4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div><br><br>
				</div>

				
		
			<!--Main content-->
			
			

		
		<div class="spacer"></div>
	</div>



	
	<?php include 'footer.php'; ?>