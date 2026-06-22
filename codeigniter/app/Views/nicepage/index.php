<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="What We Do, INTUITIVO">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/index.css" media="screen">
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
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head> 
  <body data-home-page="Home.php" data-home-page-title="Home" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="it"><header class="u-clearfix u-header u-header" id="header" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
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
	
    <section class="u-align-center u-clearfix u-container-align-center u-section-2" id="block-3">
      <div style="margin-top: 0px;" class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1">Poliba-Alert</h2>
        <p class="u-align-center u-large-text u-text u-text-variant u-text-2">Utilizza il menu sottostante per segnalare problemi nei servizi digitali del politecnico o per cercare una segnalazione effettuata.<br>Se sei un responsabile o amministratore puoi accedere alla tua area personale attraverso il pulsante di Login
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-1" id="block-1">
      <div style="margin-bottom: 30px;" class="u-clearfix u-sheet u-valign-middle u-sheet-1"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1"><img src="<?php echo base_url();?>assets/images/2602467-9390e9c9.png" alt=""></span>
        <div class="u-form u-form-1">	
			<form action="<?php echo base_url('codeigniter/');?>" method="post" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px; display: flex; align-items: center;">
				<?= csrf_field() ?>
				<div class="u-form-group u-label-none u-form-group-1" style="margin-right: 20px;">
					<input type="input" placeholder="Cerca una segnalazione tramite Codice" name="id_segnalazione" class="u-border-4 u-border-custom-color-3 u-input u-input-rectangle u-radius u-input-1" style="width: 355px;"/>
				</div>
				<div class="u-align-left u-form-group u-form-submit u-label-none" style="margin-left: 0px;">
					<a title="Dettagli segnalazione" href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-1"></a>
					<input type="submit" value="submit" class="u-form-control-hidden">
				</div>
			</form>
				<?php if (session()->getFlashdata('errore_cerca_segnalazione')): ?>
				<p style="margin:0px;color: red;padding-left: 10px;font-size:1.15rem;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
					Errore: <?= session()->getFlashdata('errore_cerca_segnalazione') ?>
					<?php session()->remove('errore_login_password'); ?>					
				</p>
				<?php endif; ?>			
        </div>
      </div>
    </section>	
    <section class="u-clearfix u-section-3" id="block-2" style="margin-bottom: 60px;">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-sheet-1">
        <div class="u-container-style u-grey-10 u-group u-radius u-shape-round u-group-1">
          <div class="u-container-layout u-valign-bottom-xl u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
			 <?php
				for ($i = 0; $i < count($servizio); $i++) {
					$id_servizio_i = $servizio[$i]['id_servizio'];					
			?>
			
					<div class="custom-expanded u-align-center u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" style="margin-top: 20px; margin-bottom: 20px;">
					  <div class="u-container-layout u-valign-top u-container-layout-2">
						<h3 class="u-text u-text-default u-text-1"><?= $servizio[$i]['nome'] ?></h3>
						<p 
						style="color: <?php switch($servizio[$i]['stato']){
										case('attivo'): $colore_stato = 'green';break;
										case('inattivo'): $colore_stato = 'red';break;
										case('in manutenzione'): $colore_stato = '#FFA700';break;
										}
										echo $colore_stato;
										 ?>" 
							class="u-align-center u-large-text u-text u-text-variant u-text-2">Stato: <?= $servizio[$i]['stato'] ?>
						</p>						
						<p class="u-align-center u-large-text u-text u-text-variant u-text-2">Numero di segnalazioni: <?= $count_segnalazioni[$i]["coalesce"] ?>
						</p>
						<!--
						<p class="u-align-center u-large-text u-text u-text-variant u-text-2">URL: <a href="https://<?= $servizio[$i]['url']; ?>" title=<?= $servizio[$i]['nome'] ?> target="_blank"><?= $servizio[$i]['url'] ?>
						</p>
						--!>
						<div class="u-border-4 u-border-palette-5-light-1 u-container-style u-custom-color-6 u-group u-hover-feature u-preserve-proportions u-radius u-shading u-shape-round u-group-3" data-href="<?php echo base_url('codeigniter/');?>invia_segnalazione/<?=$id_servizio_i?>" data-page-id="2792814567" title="Segnala disservizio" data-animation-name="customAnimationIn" data-animation-duration="500" data-animation-delay="0" data-animation-out="0">
						  <div class="u-container-layout u-container-layout-3">
							<p class="u-align-center u-text u-text-body-color u-text-default u-text-3">Segnala disservizio</p>
						  </div>
						</div>
					  </div>
					</div>	
					
			<?php } 
			?> 
			         
      
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