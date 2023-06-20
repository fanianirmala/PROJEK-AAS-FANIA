<?php

$server = mysqli_connect("localhost", "root", "", "paniya");

$sql = "SELECT * FROM wakaf";

$query = mysqli_query($server, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
        <p id="beranda"></p>
            <img src="img/wikrama.png">
            <br>
            <label class="logo">SMK Wikrama <br>Bogor</label>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#cara">Cara Wakaf</a></li>
                <li><a href="#data">Data Wakaf</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="https://smkwikrama.sch.id/discover-wikrama" target="_blank">Web Wikrama</a></li>
            </ul>
        </div>
        <div class="content1">
            <img src="img/p.png">
        </div>
        <div class="content">
            <div class="text">
                <h2>Masjid Besar SMK Wikrama Bogor</h2>
            </div>
            <div class="text1">
                <h1>Mari <span>Tingkatkan</span></h1>
            </div>
            <div class="text2">
                <h1><span>Keimanan</span> Masyarakat</h1>
            </div>
            <div class="text3">
                <h1>SMK Wikrama Bogor.</h1>
            </div>
            <div class="button">
                <button type="button"><a href="wakaf.php" style="color: white;">Beri Bantuan shodaqoh</a></button>
            </div>
        </div>
        <div class="content2">
            <div class="kotak">
                <p>            
                    <div class="total">
                    <li>Total Target Dana <br> <p><b>Rp. 40.000,000</b></p></li><li>Total Dana Terkumpul <br> <p><b>Rp. 4.000,000</b></p></li><li>Total Donatur <br> <p><b>34 Orang</b></p></li>
                    </div>  
                </p>
                <hr>
                <br>
                <div class="progress1">
                    <div class="progress">
                        
                    </div>
                    <p style="padding-left: 800px; padding-bottom: 20px; position: absolute; color: #1F3984; font-size: 20px;">30,0% <span style="font-size:15px;">Terpenuhi</span></p>
                </div>
                <div class="progress2">
                    <div class="text-berjalan">
                        <marquee direction ="right">Muhamad Ridwan - Uang : Rp. 2.000,000  Hamba Allah : Barang Emas  Siti Aisyah : Uang Rp. 2.000,000</marquee>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="content3">
            <div class="banner">
                <h1>Banner</h1>
            </div>
        </div>

        <div class="content4">
            <div class="text">
                <h1>Manfaat <span>Wakaf, Infaq <br>Shodaqoh.</span></h1>
                <br>
                <h3>Berikut Adalah Beberapa Keutamaan Waqaf, Infaq <br>Shodaqoh Yang Akan Anda Dapatkan.</h3>
            </div>
        </div>
        <div class="content5">
            <div class="con">
                <div class="card">
                    <div class="img">
                        <img src="img/love.jpg">
                    </div>
                    <h1>Menjadikan Hati Lebih Tenang</h1> <br>
                    <p>Kami berikan harga yang <br>terbaik dibandingkan <br>kompetitor kami.</p>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="img/bunga.jpg">
                    </div>
                    <h1>Terbukanya Pintu Rezeki</h1> <br>
                    <p>Allah SWT akan membuka <br>pintu rezeki dari arah yang <br> tidak di kira sebelumnya.</p>
                </div>
                <div class="tangan">
                    <img src="img/tangan.jpg">
                </div>
            </div>
            <div class="con">
                <div class="card">
                    <div class="img">
                        <img src="img/perisai.jpg">
                    </div>
                    <h1>Menjauhkan Dari Bahaya</h1> <br>
                    <p>Rasulullah SAW pernah <br> bersabda: "Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="img/bintang.jpg">
                    </div>
                    <h1>Pahala Yang Tak Terputus</h1> <br>
                    <p>Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
                </div>
            </div>
        </div>
        <p id="cara"></p>
        <div class="content6">
            <div class="text">
                <h1>Cara Melakukan <span>Wakaf, Infaq <br>Shodaqoh.</span></h1>
                <br>
                <h3>Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk <br>Membantu Pembangunan Masjid Besar SMK WIkrama Bogor.</h3>
            </div>
        </div>
        <div class="content7">
            <div class="con">
                <div class="card0">
                    <h2>01</h2> <br>
                    <h1>Isi Form Data Diri</h1> <br>
                    <p>Isikan form pengisian yang disediakan di form <br>data diri, isikan dengan data diri anda dengan <br>teliti.</p>
                </div>
                <div class="card0">
                    <h2>02</h2> <br>
                    <h1>Isikan Nominal Shodaqoh</h1> <br>
                    <p>Isikan nominal yang akan anda shodaqohkan, <br>pastikanisi nominal dengan seikhlasnya tanpa ada <br>paksaan apapun.</p>
                </div>
            </div>
            <div class="con">
                <div class="card0">
                    <h2>03</h2> <br>
                    <h1>Upload Bukti Pembayaran</h1> <br>
                    <p>Pilih metode pembayaran dan upload bukti <br>pembayarannya.</p>
                </div>
                <div class="card0">
                    <h2>04</h2> <br>
                    <h1>Verifikasi Pembayaran</h1> <br>
                    <p>Pembayaran anda akan diverifikasioleh admin <br>dan jika terferifikasi, nama anda akan tampil.</p>
                </div>
            </div>
        </div>
        <p id="data"></p>
        <div class="content8">
            <div class="text">
                <h1>Data Donatur <span>Wakaf, Infaq <br>Shodaqoh.</span></h1>
                <br>
                <h3>Berikut Adalah Data Donatur Wakaf, Infaq Untuk <br>Masjid Besar SMK Wikrama Bogor</h3>
            </div>
        </div>
        <div class="content9">
        <div style="padding-left: 10%; margin-top: 10px;">
            <button type="button"><a href="wakaf.php" style="color: white;">Beri Bantuan Shodaqoh</a></button>
        </div>
        <center>
        <table border="1" cellspacing="0" cellpadding="10" style="width: 80%;">
            <tr>
                <th style="padding: 10px; margin: auto; height: 20px;">Nama Donatur</th>
                <th style="padding: 10px; margin: auto; height: 20px;">Donatur ID</th>
                <th style="padding: 10px; margin: auto; height: 20px;">Paket</th>
                <th style="padding: 10px; margin: auto; height: 20px;">Kategori</th>
                <th style="padding: 10px; margin: auto; height: 20px;">Nominal / Barang</th>
                <!-- <th style="padding: 10px; margin: auto; height: 20px;">Hapus</th> -->
            </tr>
            <?php if(mysqli_num_rows($query) > 0) { ?>
            <?php while($rows = mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["nama_donatur"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["donatur_id"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["paket"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["kategori"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["nominal_barang"]?></td>
                            <!-- <td style="padding: 10px
                            ; margin: auto; height: 20px;"><a href="hapus.php?nama_donatur=<?php echo $rows['nama_donatur'] ?>">Hapus Data</a></td> -->
                        </tr>
                <?php   } ?>
            <?php } ?>    
        </table>
        </center>
             <br>
        </div>
        <p id="gallery"></p>
        <div class="content10">
            <div class="text">
                <h1>Gallery <span>Masjid Besar SMK <br>Wikrama Bogor.</span></h1>
                <br>
                <h3>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</h3>
            </div>
        </div>
        <div class="content11">
        <div class="gallery">
            <img src="img/1.jpg" >
            <img src="img/2.jpg" >
            <img src="img/3.jpg" >
            <img src="img/4.jpg" >
            <img src="img/5.jpg" >
            <a href="gallery.html">
                <img src="img/buka gallery.jpg" >
            </a>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylee.css">
</head>
<body>
  <footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<div class="kepala" style="display: flex;">
					<img src="img/wikrama.png" style="height: 50px; width: auto; padding-right: 10px;">
				    <h6 style="color: #fff; font-size: 16px;">SMK Wikrama <br>Bogor</h6>
				</div>
				<h5 style="color: #fff; font-size: 18px; padding-top: 15px;">Alamat</h5>
					<br>
					<p style="color: #fff;">Jl. Raya Wangun <br>Kelurahan SindangSari <br>Bogor Timur</p>
					<hr style="width: 90%;">
					<br>
					<h5 style="color: #fff; font-size: 18px; padding-top: 15px;">Telepon</h5>
					<br>
					<p style="color: #fff;" >0251-8242411 /</p>
					<p style="color: #fff;">082221718035(Whatsapp)</p>
					<hr style="width: 90%;">
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Tentang Wikrama</h4>
  	 			<ul>
  	 				<li><a href="#">Sejarah</a></li>
  	 				<li><a href="#">Peraturan Sekolah</a></li>
  	 				<li><a href="#">Rencana Strategi & Prestasi</a></li>
  	 				<li><a href="#">Yayasan</a></li>
  	 				<li><a href="#">Struktur Organisasi</a></li>
					<li><a href="#">Cabang</a></li>
					<li><a href="#">Penghargaan</a></li>
					<li><a href="#">Kerjasama</a></li>
  	 			</ul>
  	 		</div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                <a class="fb" href="https://web.facebook.com/search/top/?q=smk%20wikrama" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a>
                <a class="twt" href="https://twitter.com/smkwikrama" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
                <a class="ig" href="https://www.instagram.com/smkwikrama/" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                <a class="yt" href="https://www.youtube.com/@multimediawikrama7482" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a>
            </div>
            </div>
            <form action="https://formsubmit.co/fanianirmala317@gmail.com" method="post">
                <div class="footer-col">
                <h4 style="color: #fff;">Kirim Pesan</h4>
                <input type="text" name="nama" placeholder="Nama" style="width: 270px;"><br>
                <br>
                <input type="email" name="email" placeholder="Email" style="width: 270px;"><br>
                <br>
                <textarea name="pesan" cols="30" rows="9" style="width: 270px; border-radius: 5px;" placeholder="kirim Pesan"></textarea>
                <br>
                <input type="submit" name="submit"><p style="color: #000; float: left; "></p></button>
                </div>
            </form>
  	 	</div>
  	 </div>
	   <div class="footer-bottom" style="color: #fff;">
		Copyright &copy 2023 - SMK Wikrama Bogor. All Right Reserved.
	</div>
  </footer>
</body>
</html>
</body>
</html>