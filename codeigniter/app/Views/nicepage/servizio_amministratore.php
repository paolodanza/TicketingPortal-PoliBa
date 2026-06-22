<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Servizio_amministratore</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/Servizio_Responsabile.css" media="screen">
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
    <meta property="og:title" content="Servizio_amministratore">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="it"><header class="u-clearfix u-header u-header" id="header" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a title="Home page" href="<?php echo base_url('codeigniter/');?>" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img style="width:170%" class="u-logo-image u-logo-image-1" src="<?php echo base_url();?>assets/images/logo-1.png">
        </a>
			<a href="<?php echo base_url('codeigniter/');?>logout" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Logout"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/603069-f3322464.png" alt=""></span>&nbsp;Logout
			</a>		
			<a href="<?php echo base_url('codeigniter/');?>pagina_admin" style="margin-right: 150px; margin-top:-59px;margin-bottom:17px" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Area personale <?= session()->get('tipo') ?>"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/4582052-1c279db8.png" alt=""></span>&nbsp;Dashboard
			</a>
      </div></header>
    <section class="u-clearfix u-section-1" id="block-2">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div style="min-height:unset;" class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <div style="justify-content: flex-start;" class="u-container-layout u-valign-bottom u-container-layout-1">
            <h2 style="width:100%;text-align:center;margin-top:0px" class="u-align-left u-text u-text-default u-text-1"> <?= $servizio['nome'] ?><span style="text-decoration: underline !important;"></span>
				</h2>
            <h3 style="width:100%;text-align:center;margin-top:50px" class="u-align-left u-text u-text-default u-text-1">Proprietà<span style="text-decoration: underline !important;"></span>
				</h3>				
            <div style="min-height:unset;margin-bottom:50px;" class="u-border-2 u-border-palette-4-base u-container-style u-expanded-width u-group u-palette-5-base u-radius u-shape-round u-group-2">
              <div class="u-container-layout u-container-layout-2">
			  
<?php if($modifica_servizio === false): // FILE IN MODALITA' LETTURA?>					  
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-3" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-align-left u-text u-text-body-color u-text-2"><?= $servizio['nome']; ?></p>
                    <h4 class="u-align-center u-text u-text-default u-text-3">Nome</h4>
                  </div>
                </div>
				
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-3" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-align-left u-text u-text-body-color u-text-2"><?= $servizio['id_servizio']; ?></p>
                    <h4 class="u-align-center u-text u-text-default u-text-3">ID</h4>
                  </div>
                </div>
				
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-4">
                    <p class="u-align-left u-text u-text-body-color u-text-4"><a href="https://<?= $servizio['url']; ?>" target="_blank"><?= $servizio['url']; ?></a></p>
                    <h4 class="u-align-center u-text u-text-default u-text-5">URL</h4>
                  </div>
                </div>
 
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-4">
                    <p class="u-align-left u-text u-text-body-color u-text-4"><?= $responsabile_servizio['nome']." ".$responsabile_servizio['cognome']; ?></p>
                    <h4 class="u-align-center u-text u-text-default u-text-5">Responsabile</h4>
                  </div>
                </div>

				<div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:10px;">
				  <div class="u-container-layout u-container-layout-4" style="padding-left:50px;">
					<div style="display: flex; align-items: flex-start;gap: 73px;">
					  
					  <!-- Titolo a sinistra -->
					  <h4 style="margin: 0;" class="u-align-left u-text u-text-default u-text-5">
						Tipi di<br>segnalazioni<br>ammesse
					  </h4>
					  
					  <!-- Paragrafo a destra -->
					  <p class="u-align-left u-text u-text-body-color u-text-4" style="margin: 0;">
						<?php foreach ($tipologia_segnalazione as $tipologia) { 
						  echo $tipologia['nome']." (ID: ".$tipologia['id_tipologia'].")<br>"; 
						} ?>
					  </p>
					  
					</div>
				  </div>
				</div>

				
				<div style="display: flex; justify-content: center; align-items: center;">
					<form action="<?= base_url('codeigniter/servizio/' . $servizio['id_servizio']) ?>" method="post">
						<?= csrf_field() ?>
						<button type="submit" name="submit" value="modifica_servizio" style="border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
						class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-2">
						Modifica proprietà
						</button>
					</form>				
				</div>		

<?php else: // FILE IN MODALITA' MODIFICA?>
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-3" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-3">
					<form action="<?= base_url('codeigniter/servizio_modifica/' . $servizio['id_servizio']) ?>" method="post">
						<?= csrf_field() ?>				  
                    <p class="u-align-left u-text u-text-body-color u-text-2">
						<input type="text" name="nome" value="<?= is_null(session()->getFlashdata('old_nome')) ? esc($servizio['nome']) : session()->getFlashdata('old_nome') ?>"/>
					</p>				
                    <h4 class="u-align-center u-text u-text-default u-text-3">Nome</h4>
					<?php if (session()->getFlashdata('errore_invio_modifica_servizio_nome')): ?>
					<p style="margin:0px;color: red;padding-left: 10px;font-size:0.9rem;margin-left:220px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
						<?= session()->getFlashdata('errore_invio_modifica_servizio_nome') ?>
						<?php session()->remove('errore_invio_modifica_servizio_nome'); ?>					
					</p>
					<?php endif; ?>						
                  </div>
                </div>
				
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-3" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-align-left u-text u-text-body-color u-text-2">
						<input type="input" name="id" value="<?= is_null(session()->getFlashdata('old_id')) ? esc($servizio['id_servizio']) : session()->getFlashdata('old_id') ?>" />
					</p>
                    <h4 class="u-align-center u-text u-text-default u-text-3">ID</h4>
					<?php if (session()->getFlashdata('errore_invio_modifica_servizio_id')): ?>
					<p style="margin:0px;color: red;padding-left: 10px;font-size:0.9rem;margin-left:220px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
						<?= session()->getFlashdata('errore_invio_modifica_servizio_id') ?>
						<?php session()->remove('errore_invio_modifica_servizio_id'); ?>					
					</p>
					<?php endif; ?>					
                  </div>
                </div>	

                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-4">
                    <p class="u-align-left u-text u-text-body-color u-text-4">
						<input type="input" name="url" value="<?= is_null(session()->getFlashdata('old_url')) ? esc($servizio['url']) : session()->getFlashdata('old_url') ?>" />
					</p>
                    <h4 class="u-align-center u-text u-text-default u-text-5">URL</h4>
					<?php if (session()->getFlashdata('errore_invio_modifica_servizio_url')): ?>
					<p style="margin:0px;color: red;padding-left: 10px;font-size:0.9rem;margin-left:220px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
						<?= session()->getFlashdata('errore_invio_modifica_servizio_url') ?>
						<?php session()->remove('errore_invio_modifica_servizio_url'); ?>					
					</p>
					<?php endif; ?>						
                  </div>
                </div>	

                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-4">
                    <p class="u-align-left u-text u-text-body-color u-text-4">
						<select name="responsabile" id="responsabile">
							<?php foreach ($responsabili_disponibili as $responsabile) {
								$id_responsabile_i = $responsabile['cf'];
								$nome_responsabile_i = $responsabile['nome'];
								$cognome_responsabile_i = $responsabile['cognome'];
								if(is_null(session()->getFlashdata('old_responsabile')))
								{
									$selected = ($servizio['cf_responsabile'] == $id_responsabile_i) ? 'selected' : ''; // se il responsabile del servizio è quello considerato attualmente : "selected"
								}else
								{
									$selected = (session()->getFlashdata('old_responsabile') == $id_responsabile_i) ? 'selected' : '';
								}
								
								echo "<option value=\"$id_responsabile_i\" $selected>$nome_responsabile_i $cognome_responsabile_i</option>";
							} ?>
						</select>					
					</p>
                    <h4 class="u-align-center u-text u-text-default u-text-5">Responsabile</h4>
                  </div>
                </div>

				<div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-4" style="margin-top:10px;">
				  <div class="u-container-layout u-container-layout-4" style="padding-left:50px;">
					<div style="display: flex; align-items: flex-start;gap: 73px;">
					  
					  <!-- Titolo a sinistra -->
					  <h4 style="margin: 0;" class="u-align-left u-text u-text-default u-text-5">
						Tipi di<br>segnalazioni<br>ammesse
					  </h4>
					  
					  <!-- Paragrafo a destra -->
                    <p class="u-align-left u-text u-text-body-color u-text-4" style="margin-left: 0px;">
						<?php
							foreach ($tipologie_disponibili as $tipologia){
							$id_tipologia_i = $tipologia['id_tipologia'];
							$nome_tipologia_i = $tipologia['nome'];
							$checked = false;
							if(is_null(session()->getFlashdata('old_tipologie')))
							{
								foreach ($tipologia_segnalazione as $tipologia)
								{
									$checked = $checked || $id_tipologia_i == $tipologia['id_tipologia']; // se checked falso, significa che la tipologia i-esima non è attualmente associata al servizio
								}							
							}
							else
							{
								foreach (session()->getFlashdata('old_tipologie') as $tipologia)
								{
									$checked = $checked || $id_tipologia_i == $tipologia; // se checked falso, significa che la tipologia i-esima non è attualmente associata al servizio
								}									
							}

							if($checked){$checked = 'checked';}
							else{$checked = '';}
								
							echo "<input type=\"checkbox\" name=\"tipologie[]\" value=\"$id_tipologia_i\" $checked>";
							echo "<label>$nome_tipologia_i</label><br>";
						}
						?>					
					</p>
					  
					</div>
				  </div>
				</div>	

				
				<div style="display: flex; justify-content: center; align-items: center; gap: 200px">
				  <button type="submit" name="submit" value="invia_modifica_responsabile"
					style="border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
						class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-2"/>
						Invia modifiche
				  </button>
				  
				  <button type="submit" name="submit" value="annulla"
					style="border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
						class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-2"/>
					Annulla
				  </button>
				</div>

				
				</form>					
<?php endif; ?> 
				
              </div>
            </div>
			
            	

			<div style="display: flex; justify-content: space-between; align-items: center;">
			  <!-- Spazio a sinistra per bilanciare -->
			  <div style="flex: 1;"></div>

			  <!-- Primo elemento centrato -->
			  <div style="flex: 1; display: flex; justify-content: center;">
				<p class="u-align-center u-hover-feature u-text u-text-14" style="margin-left:0px">
				  <a href="<?php echo base_url('codeigniter/'); ?>pagina_admin">
				  <button style="border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
				  class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-2">
				  Dashboard
				  </button>
				  </a>
				</p>
			  </div>

			  <!-- Secondo elemento a destra -->
			  <div style="flex: 1; display: flex; justify-content: flex-end;">
				<p class="u-align-center u-hover-feature u-text u-text-14" style="margin-left:0px">
				  <span class="u-file-icon u-icon u-text-palette-4-base u-icon-1" 
						data-href="<?php echo base_url('codeigniter/');?>" 
						data-page-id="12247714" title="Home">
					<img src="<?php echo base_url();?>assets/images/69524-a9ccadc1.png" alt="">
				  </span>				

				</p>
			  </div>
			</div>

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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contatti.html">Contatti</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Informazioni-su.html">Informazioni su</a>
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="./" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="Informazioni-su.html" style="padding: 10px 0px;">Informazioni su</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base" href="Contatti.html" style="padding: 10px 0px;">Contatti</a>
</li></ul>
          </div>
          <div id="562c" role="region" aria-label="Menu panel" class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close" aria-label="Close menu"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Informazioni-su.html">Informazioni su</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contatti.html">Contatti</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
  
</body></html>