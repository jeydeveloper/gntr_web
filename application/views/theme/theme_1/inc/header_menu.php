<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
	Preloader Start
*************************************-->
<div class="preloader">
    <div id="status"></div>
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>

        </div>
    </div>
</div>
<!--************************************
	Preloader END
*************************************-->
<!--************************************
	Wrapper Start
*************************************-->
<div id="wrapper">
<!--************************************
		Header Start
*************************************-->

<!--************************************
		Header End
*************************************-->

<header id="header" class="tg-haslayout" data-spy="affix" data-offset-top="10">
	<div class="container">
		<strong class="logo">
			<a href="index.html">
				<img src="<?php echo $assets['images']; ?>/logopbm_new.png" alt="logo putra bahari mandiri">
			</a>
		</strong>
		<div class="navigation-area">
			<nav id="nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php $last = strtolower(end($this->uri->segment_array())); $cls_activated = 'current-menu-item'; ?>
					<ul>
						<li class="<?php echo (!in_array($last, array('about', 'service', 'project', 'our-work', 'contact')) ? $cls_activated : ''); ?>"><a href="<?php echo site_url('/'); ?>">Home</a></li>
						<li class="<?php echo ($last == 'about' ? $cls_activated : ''); ?>"><a href="<?php echo site_url('/about'); ?>">About</a></li>
						<li class="<?php echo ($last == 'service' ? $cls_activated : ''); ?>"><a href="#">Services</a>
							<ul>
								<li><a href="<?php echo site_url('/arsitektual'); ?>">Arsitektual</a></li>
								<li><a href="<?php echo site_url('/sipil'); ?>">Sipil</a></li>
								<li><a href="<?php echo site_url('/mekanikal'); ?>">Mekanikal</a></li>
								<li><a href="<?php echo site_url('/elektrikal'); ?>">Elektrikal</a></li>
								<li><a href="<?php echo site_url('/procurement'); ?>">Pengadaan Barang & Jasa</a></li>
								<li><a href="<?php echo site_url('/outsourcing'); ?>">Outsourcing</a></li>
							</ul>
						</li>
						<li class="<?php echo ($last == 'project' ? $cls_activated : ''); ?>"><a href="<?php echo site_url('/project'); ?>">Projects</a></li>
						<li class="<?php echo ($last == 'our-work' ? $cls_activated : ''); ?>"><a href="<?php echo site_url('/our-work'); ?>">Our Works</a></li>
						<li class="<?php echo ($last == 'contact' ? $cls_activated : ''); ?>"><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>