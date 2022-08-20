<?php  
ob_start();
session_start();
include 'nedmin/netting/baglan.php';
include 'nedmin/production/fonksiyon.php';


$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor -> execute(array(
'id'=> 0
));
$ayarcek=$ayarsor -> fetch(PDO::FETCH_ASSOC);

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor -> execute(array(
'mail'=> $_SESSION['userkullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor -> fetch(PDO::FETCH_ASSOC);

$kategorisor=$db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
$kategorisor->execute();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
  	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
  	<meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
  	<div class="header">
			<!--Header -->
				<!-- <div class="container"> -->
					<div class="row">
						
						<div class="col-xs-6 col-md-2 main-logo">
							<a href="index.php"><img  src="<?php echo $ayarcek['ayar_logo'] ?>" alt="site logosu" ></a>
						</div>

						<div class="col-md-5	">
							<div class="search-btn">
								<div class="topnav col-md-9">
									
											<input type="text" placeholder="Search..">
									
								</div>
								<div class="button col-md-3">
									
										<button class="search">BUL</button>
									
								</div>	
							</div>
						</div>

						<div class="col-md-3">
							<div class="pushright">
								<div class="top">
									<div class="user col-md-2">
										<a href="#"><img src="images/user.png"></a>
									</div>

									<?php 

									if (!isset($_SESSION['userkullanici_mail'])) { ?>

									<a href="#" id="reg" class="btn btn-default btn-dark col-md-4">Giriş Yap<span>veya </span>Kayıt Ol</a>

								<?php } else { ?>

									<a href="" class="btn btn-default btn-dark">Hoşgeldin,<span></span><?php echo $kullanicicek['kullanici_adsoyad']; ?></a>

								<?php } ?>


									<div class="regwrap">
										<div class="row">
											<div class="regform">
												<div class="title-widget-bg">
													<div class="title-widget">Giriş Yap</div>
												</div>



												<form action="nedmin/netting/islem.php" method="POST" role="form">


													<div class="form-group">
														<input type="text" class="form-control" name="kullanici_mail" id="username" placeholder="Kullanıcı Adınız (Mail Adresiniz)">
													</div>


													<div class="form-group">
														<input type="password" class="form-control" name="kullanici_password" id="password" placeholder="Şifreniz">
													</div>


													<div class="form-group">
														<button type="submit" name="kullanicigiris" class="btn btn-default btn-red btn-sm">Giriş Yap</button>
													</div>

												</form>


											
											</div>
											<div class="">
												<!-- <div class="title-widget-bg">
													<div class="title-widget">Kayıt Ol</div>
												</div> -->
												
												<a href="register.php"><button class="btn btn-default btn-red">Kayıt Ol</button></a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<?php 
									$kullanici_id=$kullanicicek['kullanici_id'];
									$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
									$sepetsor->execute(array(
										'id' => $kullanici_id
									));

									while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

										$urun_id=$sepetcek['urun_id'];
										$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
										$urunsor->execute(array(
											'urun_id' => $urun_id
										));

										$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
										$toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
										?><?php } ?>
						<button id="popcart" class="btn btn-default btn-chart btn-sm col-md-1 "><span class="mychart">Sepetim</span>| <span class="price"><?php echo $toplam_fiyat ?> TL</span></button>	
					</div>
				<!-- </div> -->
				<div	></div>
			<!--Header -->
		</div>
	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								

								<li class="dropdown menu-large col-md-3">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Elektronik</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-3">
											<a href="telefon.php"><h4>Cep Telefonu</h4></a>
											<ul>
											<!-- 	<?php 
												
												while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>

													<h4><a href="telefon.php"><?php echo $kategoricek['kategori_ad'] ?></a></h4>

												<?php } ?> -->
												<li><a href="telefon.php">Iphone</a></li>
												<li><a href="telefon.php">Samsung</a></li>
												<li><a href="telefon.php">xiaomi</a></li>
												<li><a href="telefon.php">redmi</a></li>
												<li><a href="telefon.php">Huawei</a></li>
												<li><a href="telefon.php">Oppo</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-3">
											<a href="bilgisayar.php"><h4>Bilgisayar</h4></a>
											<ul>
												<li><a href="bilgisayar.php">Apple</a></li>
												<li><a href="bilgisayar.php">Asus</a></li>
												<li><a href="bilgisayar.php">Hp</a></li>
												<li><a href="bilgisayar.php">Monster</a></li>
												<li><a href="bilgisayar.php">Lenovo</a></li>
												<li><a href="bilgisayar.php">Dell</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-3">
											<a href="televizyon.php"><h4>Televizyon</h4></a>
											<ul>
												<li><a href="index-1.htm">Samsung</a></li>
												<li><a href="category.htm">Sony</a></li>
												<li><a href="category-list.htm">LG</a></li>
												<li><a href="category-fullwidth.htm">Philips</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-3">
											<a href="kamera.php"><h4>Fotoğraf,kamera</h4></a>
											<ul>
												<li><a href="index-1.htm">Canon</a></li>
												<li><a href="category.htm">Nikon</a></li>
												<li><a href="category-list.htm">Sony</a></li>
												<li><a href="category-fullwidth.htm">Fujifilm</a></li>
												<li><a href="product.htm">Samsung</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>	

								

								<li class="dropdown menu-large col-md-3">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ev, Bahçe, Ofis</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-4">
											<a href="kirtasiye.php"><h4>Kırtasiye</h4></a>
											<ul>
												<li><a href="index-1.htm">Kalem</a></li>
												<li><a href="category.htm">Ofis Kırtasiye seti</a></li>
												<li><a href="category-list.htm">Boyama Kalemleri</a></li>
												<li><a href="category-fullwidth.htm">Defter</a></li>
												<li><a href="product.htm">Okul Çantası</a></li>
												<li><a href="page-sidebar.htm">Ofis Masa Setleri </a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<a href="dekorasyon.php"><h4>Dekorasyon</h4></a>
											<ul>
												<li><a href="index-1.htm">Biblo</a></li>
												<li><a href="category.htm">Tablo</a></li>
												<li><a href="category-list.htm">Sehpa</a></li>
												<li><a href="category-fullwidth.htm">Dekoratif raflar</a></li>
												<li><a href="product.htm">Vazo</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<a href="yapi.php"><h4>Yapı Market</h4></a>
											<ul>
												<li><a href="yapi.php">Hırdavat</a></li>
												<li><a href="yapi.php">Boya</a></li>
												<li><a href="yapi.php">Aydınlatma</a></li>
												<li><a href="yapi.php">Prefabrik Ev</a></li>
												<li><a href="yapi.php">Alet Çantası</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>	

								<li class="dropdown menu-large col-md-2">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Moda</a>
									<ul class="dropdown-menu megamenu container row">

										<li class="col-sm-3">
											<a href="erkek.php"><h4>Erkek Giyim</h4></a>
											<ul>
												<li><a href="index-1.htm">Gömlek</a></li>
												<li><a href="category.htm">Pantolon</a></li>
												<li><a href="category-list.htm">Şort</a></li>
												<li><a href="category-fullwidth.htm">Tişört</a></li>
												<li><a href="product.htm">Sweatshirt</a></li>
												<li><a href="page-sidebar.htm">Blazer</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>

										<li class="col-sm-3">
											<a href="kadin.php"><h4>Kadın Giyim</h4></a>
											<ul>
												<li><a href="index-1.htm">Elbise</a></li>
												<li><a href="category.htm">Pantolon</a></li>
												<li><a href="category-list.htm">Etek</a></li>
												<li><a href="category-fullwidth.htm">Tişört</a></li>
												<li><a href="product.htm">Sweatshirt</a></li>
												<li><a href="page-sidebar.htm">Blazer</a></li>
												<div class="dashed-nav"></div>
											</ul>	
										</li>

										<li class="col-sm-3">
											<a href="kids.php"><h4>Çocuk Giyim</h4></a>
											<ul>
												<li><a href="index-1.htm">Tulum</a></li>
												<li><a href="category.htm">Pantolon</a></li>
												<li><a href="category-list.htm">Tişört</a></li>
												<li><a href="category-fullwidth.htm">Mont</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>

										<li class="col-sm-3">

											<a href="saat.php"><h4>Saat</h4></a>
											<ul>
												<li><a href="index-1.htm">Emporio Armani</a></li>
												<li><a href="category.htm">Diesel</a></li>
												<li><a href="category-list.htm">Fossil</a></li>
												<li><a href="category-fullwidth.htm">Daniel Wellington</a></li>
												<li><a href="product.htm">Armani Exchange</a></li>
												<li><a href="page-sidebar.htm">Casio</a></li>
												<div class="dashed-nav"></div>
											</ul>
										</li>
									</ul>
								</li>	
								<li class="dropdown menu-large col-md-4">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kozmetik, Kişisel Bakım</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-4">
											<a href="parfum.php"><h4>Parfüm</h4></a>
											<ul>
												<li><a href="index-1.htm">One Million</a></li>
												<li><a href="category.htm">Hugo Boss</a></li>
												<li><a href="category-list.htm">Calvin klein</a></li>
												<li><a href="category-fullwidth.htm">Dior</a></li>
												<li><a href="product.htm">Versace</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<a href="bakim.php"><h4>Bakım Ürünleri</h4></a>
											<ul>
												<li><a href="index-1.htm">Güneş Kremi</a></li>
												<li><a href="category.htm">Nemlendirici Losyon</a></li>
												<li><a href="category-list.htm">Yüz Bakım Jeli</a></li>
												<li><a href="category-fullwidth.htm">Maske, Peeling</a></li>
												<li><a href="product.htm">Şampuan</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<a href="makyaj.php"><h4>Makyaj</h4></a>
											<ul>
												<li><a href="index-1.htm">Ruj</a></li>
												<li><a href="category.htm">Rimel</a></li>
												<li><a href="category-list.htm">Göz Kalemi</a></li>
												<li><a href="category-fullwidth.htm">Makyaj Paleti</a></li>
												
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>	

								<!-- <li class="dropdown menu-large">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kitap, Oyuncak</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-6">
											<h4>Kitap, Dergi</h4>
											<ul>
												<li><a href="index-1.htm">Roman</a></li>
												<li><a href="category.htm">Biyografi</a></li>
												<li><a href="category-list.htm">Category List Page</a></li>
												<li><a href="category-fullwidth.htm">Category fullwidth</a></li>
												<li><a href="product.htm">Detail Product Page</a></li>
												<li><a href="page-sidebar.htm">Page with sidebar</a></li>
												<li><a href="register.htm">Register Page</a></li>
												<li><a href="order.htm">Order Page</a></li>
												<li><a href="checkout.htm">Checkout Page</a></li>
												<li><a href="cart.htm">Cart Page</a></li>
												<li><a href="contact.htm">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-6">
											<h4>Oyuncak</h4>
											<ul>
												<li><a href="index-1.htm">Home Page</a></li>
												<li><a href="category.htm">Category Page</a></li>
												<li><a href="category-list.htm">Category List Page</a></li>
												<li><a href="category-fullwidth.htm">Category fullwidth</a></li>
												<li><a href="product.htm">Detail Product Page</a></li>
												<li><a href="page-sidebar.htm">Page with sidebar</a></li>
												<li><a href="register.htm">Register Page</a></li>
												<li><a href="order.htm">Order Page</a></li>
												<li><a href="checkout.htm">Checkout Page</a></li>
												<li><a href="cart.htm">Cart Page</a></li>
												<li><a href="contact.htm">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>	


								<li class="dropdown menu-large">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Spor, Outdoor</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-4">
											<h4>Avcılık, Kamp</h4>
											<ul>
												<li><a href="index-1.htm">Home Page</a></li>
												<li><a href="category.htm">Category Page</a></li>
												<li><a href="category-list.htm">Category List Page</a></li>
												<li><a href="category-fullwidth.htm">Category fullwidth</a></li>
												<li><a href="product.htm">Detail Product Page</a></li>
												<li><a href="page-sidebar.htm">Page with sidebar</a></li>
												<li><a href="register.htm">Register Page</a></li>
												<li><a href="order.htm">Order Page</a></li>
												<li><a href="checkout.htm">Checkout Page</a></li>
												<li><a href="cart.htm">Cart Page</a></li>
												<li><a href="contact.htm">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Fitness</h4>
											<ul>
												<li><a href="index-1.htm">Home Page</a></li>
												<li><a href="category.htm">Category Page</a></li>
												<li><a href="category-list.htm">Category List Page</a></li>
												<li><a href="category-fullwidth.htm">Category fullwidth</a></li>
												<li><a href="product.htm">Detail Product Page</a></li>
												<li><a href="page-sidebar.htm">Page with sidebar</a></li>
												<li><a href="register.htm">Register Page</a></li>
												<li><a href="order.htm">Order Page</a></li>
												<li><a href="checkout.htm">Checkout Page</a></li>
												<li><a href="cart.htm">Cart Page</a></li>
												<li><a href="contact.htm">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Bisiklet</h4>
											<ul>
												<li><a href="index-1.htm">Home Page</a></li>
												<li><a href="category.htm">Category Page</a></li>
												<li><a href="category-list.htm">Category List Page</a></li>
												<li><a href="category-fullwidth.htm">Category fullwidth</a></li>
												<li><a href="product.htm">Detail Product Page</a></li>
												<li><a href="page-sidebar.htm">Page with sidebar</a></li>
												<li><a href="register.htm">Register Page</a></li>
												<li><a href="order.htm">Order Page</a></li>
												<li><a href="checkout.htm">Checkout Page</a></li>
												<li><a href="cart.htm">Cart Page</a></li>
												<li><a href="contact.htm">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>	 -->

							<!-- 	<?php 

									$menusor=$db->prepare("SELECT * FROM menu order by menu_sira ASC limit 8");
									$menusor->execute();

									while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){


								 ?>
									
									
								
								<li><a href="

								<?php 

								if (!empty($menucek['menu_url'])) {
								echo $menucek['menu_url'];
								}


								?>									 
										

									"><?php echo $menucek['menu_ad'] ?></a></li>

								<?php } ?> -->
							</ul>
						</div>
					</div>
					<div class="col-md-2 machart">
						
						<div class="popcart">
							<!-- <table class="table table-condensed popcart-inner">
								<tbody>

									<tr>
										<td>
										<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
										</td>
										<td><a href="product.htm">Apple MackBook PRO M1 512GB SSD Gümüş</a><br><span>Color: green</span></td>
										<td>1X</td>
										<td>$138.80</td>
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
									</tr>
										
									
									
								</tbody>
							</table>
							
							<div class="clearfix">
						 		<div class="total">Toplam Fiyat : <span class="bigprice"><?php echo $toplam_fiyat ?> TL</span></div>
							<br>
						
								<div class="btn-popcart">
									<a href="sepet.php" class="btn btn-yellow">Sepete Git</a>
								</div>
								
							</div> -->

							<table class="table table-condensed popcart-inner">
								<tbody>



									<?php 
									$kullanici_id=$kullanicicek['kullanici_id'];
									$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
									$sepetsor->execute(array(
										'id' => $kullanici_id
									));

									while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

										$urun_id=$sepetcek['urun_id'];
										$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
										$urunsor->execute(array(
											'urun_id' => $urun_id
										));

										$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
										$toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
										?>

										<tr>
											<td><img src="<?php echo $uruncek['urun_resim'] ?>" width="50" alt=""></td>
											<td><br><a href=""><?php echo $uruncek['urun_ad'] ?></a></td>
											<td><br><a href=""><?php echo $sepetcek['urun_adet'] ?> Adet</td></a>
											<td><br><a href=""><?php echo $uruncek['urun_fiyat'] ?></td></a>
											<td><!--<a href=""><i class="fa fa-times-circle fa-2x"></i></a>--></td>
										</tr>

									<?php } ?>

								</tbody>
							</table>
							<br>
							<div class="clearfix">
						 		<div class="total-cart">Toplam Fiyat : <span class="bigprice"><?php echo $toplam_fiyat/2 ?> TL</span></div>
							<br>
						
								<div class="btn-popcart">
									<a href="sepet.php" class="btn btn-yellow">Sepete Git</a>
								</div>
								
							</div>

						</div>
				


					<?php 

					if (isset($_SESSION['userkullanici_mail'])) { ?>
					<div class="logout">
						<ul class="small-menu"><!--small-nav -->
				<!-- <li><a href="" class="myacc">Hesabım</a></li>
							<li><a href="" class="myshop">Sepetim</a></li> -->
							<li><a href="logout.php" class="mycheck">Güvenli Çıkış</a></li>
						</ul><!--small-nav -->
					</div>		

					<?php  }?>
					

					
						</div>
				</div>
			</div>
		</div>
	</div><!--end main-nav -->
	<!-- <hr class="endbar"> -->