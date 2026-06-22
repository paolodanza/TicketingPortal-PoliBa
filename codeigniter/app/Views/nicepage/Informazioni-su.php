<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/Contatti.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?php echo base_url();?>assets/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?php echo base_url();?>assets/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 7.7.3, nicepage.com">
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="it"><header class="u-clearfix u-header u-header" id="header" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a title="Home page" href="<?php echo base_url('codeigniter/');?>" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img style="width:170%" class="u-logo-image u-logo-image-1" src="<?php echo base_url();?>assets/images/logo-1.png">
        </a>

		<?php if(session()->has('tipo')): ?>
			<a href="<?php echo base_url('codeigniter/');?>logout" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Logout"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/603069-f3322464.png" alt=""></span>&nbsp;Logout
			</a>		
			<a href="<?php echo base_url('codeigniter/');?>pagina_admin" style="margin-right: 150px; margin-top:-59px;margin-bottom:17px" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Area personale <?= session()->get('tipo') ?>"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/4582052-1c279db8.png" alt=""></span>&nbsp;Dashboard
			</a>
		<?php else: ?>
			<a href="<?php echo base_url('codeigniter/');?>login" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Login"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/807292-123ea829.png" alt=""></span>&nbsp;Login
			</a>		
		<?php endif; ?>	
      </div></header>
<section class="u-clearfix u-section-1" id="block-1">	
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-container-layout u-valign-top u-container-layout-1">
        <h2 class="u-align-center u-text u-text-2" style="margin-top: 0px; margin-bottom:5px">Chi siamo</h2>
        <div class="u-border-3 u-border-palette-4-base u-expanded-width u-line u-line-horizontal u-line-1"></div>		  
        <p class="u-text u-text-default" style="margin-top: 20px;">
          La piattaforma Poliba-Alert nasce come strumento a supporto della comunità del Politecnico di Bari, con l'obiettivo di migliorare la qualità e l'efficienza dei servizi telematici offerti.
		  <br><br>Il sistema permette a studenti, docenti e personale di segnalare rapidamente eventuali disservizi relativi a piattaforme digitali, servizi online e infrastrutture informatiche. 
		  <br><br>Ogni segnalazione viene inoltrata ai responsabili competenti, facilitando la gestione e la risoluzione tempestiva dei problemi.
		  <br><br>Il progetto è stato sviluppato con un'architettura chiara e accessibile, incentrata sull’utente e sul principio della trasparenza, poichè 
		  crediamo che la comunicazione diretta e strutturata tra utenti e responsabili sia fondamentale per garantire servizi sempre più affidabili e funzionali.
		</p>
		<h4 class="u-align-center">Grazie per contribuire al miglioramento continuo del nostro Ateneo</h4>
        <p style="margin-top:10px; margin-bottom:5px; scale:2" class="u-align-center u-hover-feature u-text u-text-2"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1" data-href="<?php echo base_url('codeigniter/');?>" data-page-id="12247714" title="Home"><img src="<?php echo base_url();?>assets/images/69524-a9ccadc1.png" alt=""></span>&nbsp;
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