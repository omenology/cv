<div class="container">
	<div id="spybar">
		<div class="menu">
			<a href="#profile">Profile</a>
			<a href="#experience">Experiences</a>
			<a href="#abilitie">Abilities</a>
			<a href="#projects">Projects</a>
			<a href="#contact">Contac</a>
		</div>
	</div>
	<div id="banner">
		<div style="background: url(<?=BASE_URL ?>img/layer6.png);"></div>
		<div style="background: url(<?=BASE_URL ?>img/layer5.png);"></div>
		<div style="background: url(<?=BASE_URL ?>img/layer4.png);"></div>
		<div style="background: url(<?=BASE_URL ?>img/layer3.png);"></div>
		<div style="background: url(<?=BASE_URL ?>img/layer2.png);"></div>
		<div style="background: url(<?=BASE_URL ?>img/layer1.png);"></div>
	</div>
	<div id="profile" class="profile-cv tatacv">
		<h2>Profile</h2>
		<img class="pp" src="<?=BASE_URL ?>img/pp.jpg">
		<div class="isi-profile">
			<h3>Tentang Saya</h3>
			<p style="text-indent: 50px">Saya Ikbal Lukmanul Hakim mahasiswa semester 6 di Sekolah Tinggi Teknologi Garut, Seorang remaja yang mempunyai cita cita menjadi seorang programer, dan saya mampu berkerja tim ataupun mandiri dengan baik dan bertanggung jawab, saya juga orang yang cepat belajar tentang sesuatu hal yang baru. </p>
			<h3>Hobby</h3>
			<p>Fotography, Adventure, nonton film dan membaca cerita.</p>
			<h3>Social Media</h3>
			<a href="https://www.instagram.com/omenology/"><i class="fab fa-instagram"></i></a>
			<a href="https://www.facebook.com/ikballukmanulhakim/"><i class="fab fa-facebook-square"></i></a>
		</div>
	</div>
	<div id="experience" class="Experiences-cv tatacv">
		<h2>Experiences</h2>
		<h3>Education</h3>
		<div class="edu span2">
			<?php foreach ($data['pendidikan'] as $row):?>
			<div>
				<img src="<?=BASE_URL.'img/'.$row['logo']?>">
				<p><?=$row['sekolah'] ?></p>
			</div>
			<?php endforeach; ?>
		</div>
		<h3>Careers</h3>
		<p style="text-align: center;">Belum terisi</p>
		<p style="text-align: center;">Belum terisi</p>
	</div>
	<div id="abilitie" class="kemampuan-cv tatacv">
		<h2>Abilities</h2>
		<h3>Skills</h3>
		<div>
			<span>HTML</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
			<span>CSS</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
			<span>PHP</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>MySQL</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>JavaScript</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>JQuery</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Bootstrap Framework</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
		</div>
		<div>
			<span>SDLC</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>OOP</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>MVC Pattern</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Kanban</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>UML</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>JQuery</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Structured Programming</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
		</div>
		<h3>Languages</h3>
		<div>
			<span>Indonesia</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
			<span>Sunda</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
		</div>
		<div>
			<span>English</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
		</div>
		<h3>Tools</h3>
		<div>
			<span>Windows</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Google Chrome</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
			<span>Sublime Text 3</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</section>
		</div>
		<div>
			<span>Git</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Xampp</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
			<span>Ms Office</span>
			<section>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
			</section>
		</div>
		<div>
			
		</div>
	</div>
	<div id="projects" class="work-cv tatacv">
		<h2>Projects</h2>
		<div>
			<img src="<?=BASE_URL ?>img/CV.png">
			<section>
				<h3>CV saya</h3>
				<p>Personal Project pembuatan Cv</p>
			</section>
		</div>
		<div>
			<img src="<?=BASE_URL ?>img/galeri.png">
			<section>
				<h3>Galery Photo</h3>
				<p>Personal Project pembuatan galeri</p>
			</section>
		</div>
		<div class="lainya span2">
			<a href=""><i class="fab fa-github"></i><h3>Project lainya</h3></a>
		</div>
	</div>
	<div id="contact" ></div>
	<div class="contact-cv tatacv">
		<h2>Contact</h2>
	</div>
</div>