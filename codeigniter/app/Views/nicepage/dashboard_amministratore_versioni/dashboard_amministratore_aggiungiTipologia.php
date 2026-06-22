<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>dashboard_amministratore_aggiungiTipologia</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard_amministratore.css" media="screen">
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
    <meta property="og:title" content="dashboard_amministratore_aggiungiTipologia">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="it"><header class="u-clearfix u-header u-header" id="header" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a title="Home page" href="<?php echo base_url('codeigniter/');?>" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img style="width:170%" class="u-logo-image u-logo-image-1" src="<?php echo base_url();?>assets/images/logo-1.png">
        </a>
        <a href="<?php echo base_url('codeigniter/');?>logout" data-page-id="406803977" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius u-text-active-palette-5-base u-text-body-alt-color u-text-hover-palette-5-base u-btn-1" title="Logout"><span class="u-file-icon u-icon u-text-palette-5-base u-icon-1"><img src="<?php echo base_url();?>assets/images/603069-f3322464.png" alt=""></span>&nbsp;Logout
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="block-2">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h2 class="u-align-center u-text u-text-1">Benvenuto <?= session()->get('nome') . " " . session()->get('cognome') ?></h2>
        <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-left u-text u-text-2">Gestisci servizi</h2>
            <div class="u-border-3 u-border-palette-4-base u-expanded-width u-line u-line-horizontal u-line-1"></div>
            
			<?php $N = sizeof($servizio);
				for ($i = 0; $i < $N; $i++) 
				{
					$id_servizio_i = $servizio[$i]['id_servizio']; ?>
					<div class="u-border-4 u-border-palette-5-light-1 u-container-style u-custom-color-6 u-group u-hover-feature u-preserve-proportions u-radius u-shading u-shape-round u-group-2" style="margin-bottom: 20px;" data-href="<?php echo base_url('codeigniter/');?>servizio/<?= $id_servizio_i ?>" data-page-id="2792814567" title="Gestisci servizio" data-animation-out="0">
					  <div class="u-container-layout u-container-layout-2">
						<h3 style="width:auto" class="u-align-center u-text u-text-body-color u-text-3"><?= $servizio[$i]['nome']." (ID: ".$id_servizio_i.")" ?></h3>
						<p class="u-align-center u-large-text u-text u-text-body-color u-text-variant u-text-4">Segnalazioni attive: <?= $count_segnalazioni[$i]['coalesce'] ?></p>
					  </div>
					</div>
			<?php } ?>
			
			<form action="" method="post" style="margin-top: 20px;">
			  <?= csrf_field() ?>
			<div style="display: flex; justify-content: center; gap: 50px; margin-top: 0px;margin-bottom: 5px;">
			  <button type="submit" name="submit" value="aggiungi_servizio" style="margin-left: 182px;margin-right: auto; border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">
				Aggiungi
			  </button>
			  <button type="submit" name="submit" value="elimina_servizio"
				style="margin-left: auto;margin-right: 194px; border-style: solid; font-weight: 700; font-size: 1.25rem; --radius: 20px;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">
				Elimina
			  </button>
			</div>
			</form>	
					
          </div>
        </div>
      </div>
      

    </section>
    <section class="u-clearfix u-section-2" id="block-3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
            <h2 class="u-align-left u-text u-text-1">Gestisci responsabili</h2>
            <div class="u-border-3 u-border-palette-4-base u-expanded-width u-line u-line-horizontal u-line-1"></div>
            
			
			<div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="19.92%">
                  <col width="19.92%">
                  <col width="19.92%">
                  <col width="21.04%">
                  <col width="19.21%">
                </colgroup>
                <thead class="u-align-center u-custom-font u-heading-font u-palette-4-base u-table-header u-table-header-1">
                  <tr style="height: 46px;">
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Codice fiscale</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Nome</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Cognome</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Email</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Password</th>
                  </tr>
                </thead>
                <tbody class="u-table-body u-table-body-1">
				  <?php foreach($responsabili as $responsabile)
					{		?>
					  <tr style="height: 50px;">
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $responsabile['cf'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $responsabile['nome'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $responsabile['cognome'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $responsabile['email'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $responsabile['passw'] ?></td>
					  </tr>
				  <?php } ?>
                </tbody>
              </table>
            </div>
            
			<form action="" method="post" style="display: flex; justify-content: center; gap: 40px;">
			  <?= csrf_field() ?>
			  
			  <button type="submit" name="submit" value="aggiungi_responsabile"	style="flex: 0; margin-top:35px;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-2">
				Aggiungi
			  </button>
			  <button type="submit" name="submit" value="modifica_responsabile"	style="flex: 0; margin-top:35px;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">
				Modifica
			  </button>
			  <button type="submit" name="submit" value="elimina_responsabile"	style="flex: 0; margin-top:35px;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-3">
				Elimina
			  </button>
			</form>

		
          </div>
        </div>
      </div>
    </section>
<div id="formServizi"></div> <!-- PORTA LA PAGINA QUI --!>		
    <section class="u-clearfix u-section-3" id="block-4">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-left u-text u-text-1">Gestisci tipologie di disservizi</h2>
            <div class="u-border-3 u-border-palette-4-base u-expanded-width u-line u-line-horizontal u-line-1"></div>
            
			
			<div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="13.42%">
                  <col width="34.03%">
                  <col width="52.55%">
                </colgroup>
                <thead class="u-align-center u-custom-font u-heading-font u-palette-4-base u-table-header u-table-header-1">
                  <tr style="height: 54px;">
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">ID Tipologia</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Nome</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Descrizione</th>
                  </tr>
                </thead>
                <tbody class="u-table-body u-table-body-1">
				  <?php foreach($tipologie as $tipologia)
					{ 	?>
                  <tr style="height: 50px;">
                    <td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $tipologia['id_tipologia'] ?></td>
                    <td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $tipologia['nome'] ?></td>
                    <td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $tipologia['descrizione'] ?></td>
                  </tr>
				  <?php } ?>
					<tr style="height: 50px;">
						<td class="u-border-2 u-border-palette-4-base u-table-cell">							
							<form action="<?php echo base_url('codeigniter/')?>pagina_admin/aggiungi" method="post" style="display: flex; justify-content: center;">
							<?= csrf_field() ?>			
							<input type="input" value="<?= session()->getFlashdata('old_id');?>" style="width: 100%;" name="id_tipologia"/><br/>		
						</td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell">
							<input type="input" value="<?= session()->getFlashdata('old_nome');?>" placeholder="Max 100 caratteri" style="width: 100%;" name="nome"/><br/>		
						</td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell">
							<input type="input" value="<?= session()->getFlashdata('old_descrizione');?>" placeholder="Max 1000 caratteri" style="width: 100%;" name="descrizione"/><br/>		
						</td>		
					</tr>						
                </tbody>
              </table>	
				<p style="width:150%;margin:0px;color: red;font-size:0.9rem;margin-top: 0px;margin-bottom: 0px;">			  
					<?php if (session()->getFlashdata('errore_invio_aggiungi_tipologia_mancante')): ?>
						<?= session()->getFlashdata('errore_invio_aggiungi_tipologia_mancante')."<br>" ?>
						<?php session()->remove('errore_invio_aggiungi_tipologia_mancante'); ?>					
					<?php endif; ?>					
					<?php if (session()->getFlashdata('errore_invio_aggiungi_tipologia_id')): ?>
						<?= session()->getFlashdata('errore_invio_aggiungi_tipologia_id')."<br>" ?>
						<?php session()->remove('errore_invio_aggiungi_tipologia_id'); ?>					
						<?php session()->remove('old_id'); ?>	
					<?php endif; ?>	
					<?php if (session()->getFlashdata('errore_invio_aggiungi_tipologia_nome')): ?>
						<?= session()->getFlashdata('errore_invio_aggiungi_tipologia_nome')."<br>" ?>
						<?php session()->remove('errore_invio_aggiungi_tipologia_nome'); ?>
						<?php session()->remove('old_nome'); ?>
					<?php endif; ?>					

					<?php if (session()->getFlashdata('errore_invio_aggiungi_tipologia_descrizione')): ?>
						<?= session()->getFlashdata('errore_invio_aggiungi_tipologia_descrizione')."<br>" ?>
						<?php session()->remove('errore_invio_aggiungi_tipologia_descrizione'); ?>
						<?php session()->remove('old_descrizione'); ?>								
					<?php endif; ?>
				</p>							  
            </div>
			<div style="display: flex; justify-content: center; gap: 10px; margin-top: 0px;">
			  <button type="submit" name="submit" value="invia_aggiungi_tipologia" style="margin-left: auto;margin-right: auto;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">
				Invia modifiche
			  </button>
			  <button type="submit" name="submit" value="annulla"
				style="margin-left: auto;margin-right: auto;"
				class="u-active-custom-color-6 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-palette-4-base u-radius u-text-active-palette-4-base u-text-palette-5-base u-btn-1">
				Annulla
			  </button>
			</div>
			</form>
			
          </div>
        </div>
        <p class="u-align-center u-hover-feature u-text u-text-2"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1" data-href="<?php echo base_url('codeigniter/');?>" data-page-id="12247714" title="Home"><img src="<?php echo base_url();?>assets/images/69524-a9ccadc1.png" alt=""></span>&nbsp;
        </p>
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
 
		  <?php if(session()->getFlashdata('scroll_to')): ?>
		<script>
		  window.addEventListener('DOMContentLoaded', function() {
			const el = document.getElementById("<?= session()->getFlashdata('scroll_to') ?>");
			if (el) {
			  el.scrollIntoView({ behavior: "smooth", block: "start" });
			}
		  });
		</script>
		<?php endif; ?> 
</body></html>