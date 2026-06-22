<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?php echo base_url();?>assets/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?php echo base_url();?>assets/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 7.7.3, nicepage.com">
    <meta name="referrer" content="origin">
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="it"><header class="u-clearfix u-header u-header" id="header" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a title="Home page" href="<?php echo base_url('codeigniter/');?>" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img style="width:170%" class="u-logo-image u-logo-image-1" src="<?php echo base_url();?>assets/images/logo-1.png">
        </a>
        <a href="<?php echo base_url('codeigniter/');?>login" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Login"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/807292-123ea829.png" alt=""></span>&nbsp;Login
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="block-1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-4-base u-preserve-proportions u-shape u-shape-circle u-shape-1"></div>
        <div class="u-palette-5-base u-shape u-shape-rectangle u-shape-2"></div>
        <div class="u-palette-5-base u-shape u-shape-rectangle u-shape-3"></div>
        <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-palette-4-base u-preserve-proportions u-radius u-shape u-shape-round u-shape-4"></div>
            <h2 class="u-text u-text-body-alt-color u-text-default u-text-1"> Benvenuto</h2>
            <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><span class="u-icon"></span>Sei​​ un amministratore o un responsabile?<br>
              <br>Accedi alla tua area personale con le credenziali che ti sono state fornite<br>
              <br>
            </p>
            <div class="u-container-style u-group u-palette-5-base u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-align-center u-custom-font u-heading-font u-text u-text-body-color u-text-default u-text-3">Log in</p>
						
				
                <div class="u-expanded-width u-form u-form-1">
				
					<form action="<?php echo base_url('codeigniter/');?>login" method="post" class="u-clearfix u-form-spacing-25 u-inner-form" name="form" style="padding: 10px;">
						<?= csrf_field() ?>
						<p class="u-custom-font u-form-group u-form-text u-heading-font u-text u-text-body-color u-text-4" style="margin-bottom: 30px;"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-2"><img src="<?php echo base_url();?>assets/images/456212-f32801bc.png" alt=""></span>
						Email
						</p>						
						<div class="u-form-group u-label-none"> 
							<input type="input" name="email" placeholder="Inserisci la tua Email" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-input-1" style="margin-bottom: 30px;" />
							<?php if (session()->getFlashdata('errore_login_email')): ?>
							<p style="margin:0px;color: red;font-size:1.15rem;margin-top: -30px;margin-bottom: 20px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
								Errore: <?= session()->getFlashdata('errore_login_email') ?>
								<?php session()->remove('errore_login_email'); ?>					
							</p>
							<?php endif; ?>						
						</div>						
						<p class="u-custom-font u-form-group u-form-text u-heading-font u-text u-text-body-color u-text-5" style="margin-bottom: 30px;"><span class="u-file-icon u-icon u-text-palette-4-base"><img src="<?php echo base_url();?>assets/images/17354-8b5d4ffe.png" alt=""></span>&nbsp;
						Password
						</p>
						<div class="u-form-group u-label-none u-form-group-4">
							<input type="input" name="password" placeholder="Inserisci la tua Password" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-input-2"  style="margin-bottom: 30px;">
							<?php if (session()->getFlashdata('errore_login_password')): ?>
							<p style="margin:0px;color: red;font-size:1.15rem;margin-top: -30px;margin-bottom: 20px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
								Errore: <?= session()->getFlashdata('errore_login_password') ?>
								<?php session()->remove('errore_login_password'); ?>
							</p>
							<?php endif; ?>							
						</div>
						 <div class="u-align-center u-form-group u-form-submit u-label-none">
							<input type="submit" name="submit" value="Login" class="u-form-control-hidden">
							 <a href="#" class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">Accedi</a>
						</div>    
					</form>				  
                </div>			
              </div>
            </div>
            <p class="u-align-center u-hover-feature u-text u-text-6" style="margin-bottom: 10px;"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-4" data-href="<?php echo base_url('codeigniter/');?>" data-page-id="12247714" title="Home"><img src="<?php echo base_url();?>assets/images/69524-a9ccadc1.png" alt=""></span>&nbsp;
            </p>
          </div>
        </div>
      </div>
      
    </section>
    
    
    
    <footer class="u-align-center u-border-2 u-border-custom-color-1 u-clearfix u-container-align-center u-footer u-palette-4-base u-footer" id="footer"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="Menu">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-custom-color-1" aria-label="Open menu" aria-controls="23fa" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-74ca"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-74ca" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container"></div>
          <div id="23fa" role="region" aria-label="Menu panel" class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close" aria-label="Close menu"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>contatti">Contatti</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>about">Informazioni su</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <nav class="u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-2">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-hamburger-link-2" aria-label="Open menu" aria-controls="562c" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-5797"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-5797" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="<?php echo base_url('codeigniter/');?>" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="<?php echo base_url('codeigniter/');?>about" style="padding: 10px 0px;">Informazioni su</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="<?php echo base_url('codeigniter/');?>contatti" style="padding: 10px 0px;">Contatti</a>
</li></ul>
          </div>
          <div id="562c" role="region" aria-label="Menu panel" class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close" aria-label="Close menu"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>about">Informazioni su</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('codeigniter/');?>contatti">Contatti</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
  
</body></html>