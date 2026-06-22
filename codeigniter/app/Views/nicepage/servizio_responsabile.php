<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Servizio_responsabile</title>
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
    <meta property="og:title" content="Servizio_responsabile">
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
        <div class="u-border-3 u-border-palette-4-base u-container-style u-group u-radius u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <div style="justify-content: flex-start;" class="u-container-layout u-valign-bottom u-container-layout-1">
            <h2 style="width:100%;text-align:center;margin-top:0px" class="u-align-left u-text u-text-default u-text-1"> <?= $servizio['nome'] ?><span style="text-decoration: underline !important;"></span>
				</h2>
            <h3 style="width:100%;text-align:center;margin-top:50px" class="u-align-left u-text u-text-default u-text-1">Proprietà<span style="text-decoration: underline !important;"></span>
				</h3>				
            <div style="min-height:unset;" class="u-border-2 u-border-palette-4-base u-container-style u-expanded-width u-group u-palette-5-base u-radius u-shape-round u-group-2">
              <div class="u-container-layout u-container-layout-2">
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
                
<?php if($modifica_servizio === false): // FILE IN MODALITA' LETTURA?>				
				<div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-5" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-5">
					<div style="display: flex; gap: 10px;">
					  <p class="u-align-left u-text u-text-body-color u-text-6"><?= ucfirst($servizio['stato']); ?></p>
					  <p>
						<form action="<?= base_url('codeigniter/servizio/' . $servizio['id_servizio']) ?>" method="post">
							<?= csrf_field() ?>
							<button type="submit" name="submit" value="modifica_servizio" style="margin-top: 10px;">Modifica</button>
						</form>					  
					</p>
					</div>
                    <h4 class="u-align-center u-text u-text-default u-text-7">Stato</h4>
                  </div>
                </div>
<?php else: // FILE IN MODALITA' MODIFICA?>
				<div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-5" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-5">
					<div style="display: flex; gap: 0px;">
					  <p class="u-align-left u-text u-text-body-color u-text-6">
						<form action="<?= base_url('codeigniter/servizio_modifica/' . $servizio['id_servizio']) ?>" method="post" style="margin-top: 10px;margin-left: -100px;">
							<?= csrf_field() ?>
							<select name="stato" id="stato">
								<option value="attivo" <?= $servizio['stato'] == 'attivo' ? 'selected' : '' ?>>Attivo</option>
								<option value="inattivo" <?= $servizio['stato'] == 'inattivo' ? 'selected' : '' ?>>Inattivo</option>
								<option value="in manutenzione" <?= $servizio['stato'] == 'in manutenzione' ? 'selected' : '' ?>>In manutenzione</option>
							</select>
							<input type="submit" name="submit" value="Invia"/>
						</form>				  
					</p>
					</div>
                    <h4 class="u-align-center u-text u-text-default u-text-7">Stato</h4>
                  </div>
                </div>

<?php endif; ?> 
				<div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-6" style="margin-top:0px;">
                  <div class="u-container-layout u-container-layout-6">
				  <div style="display: flex; gap: 10px;">
                    <p class="u-align-left u-text u-text-body-color u-text-8"><?php if(empty($segnalazione)){echo 0;}else{echo $count_segnalazioni['coalesce'];} ?></p>
					  <p>
						<form action="<?= base_url('codeigniter/servizio/' . $servizio['id_servizio']) ?>" method="post">
							<?= csrf_field() ?>
							<button type="submit" name="submit" value="reset_segnalazioni" style="margin-top: 10px;margin-left: 28px;">Reset</button>
						</form>					  
					</p>
					</div>                    
					<h4 class="u-align-left u-text u-text-default u-text-9">Segnalazioni</h4>
                  </div>
                </div>
				
              </div>
            </div>
			
            <h3 style="width:100%;text-align:center;margin-top:50px" class="u-align-left u-text u-text-default u-text-1">Segnalazioni<span style="text-decoration: underline !important;"></span>
				</h3>

<form style="margin-top: 15px;margin-bottom: -10px" action="<?php echo base_url('codeigniter/');?>servizio/<?= $servizio['id_servizio'] ?>" method="post">
<?= csrf_field() ?>	
  <label for="filtroSelect">Filtra per:</label>

  <select id="filtroSelect" name="filtro" onchange="mostraInput()" style="width: 110px;">
    <option value="id">ID</option>
    <option value="data">Data di inizio</option>
    <option value="data_fine">Data di fine</option>
    <option value="utente">Utente</option>
    <option value="tipologia">Tipologia</option>
  </select>

  <input id="inputID" name="valore_id" type="text" placeholder="Inserisci ID" style="width: 210px;">
  <input id="inputData" name="valore_data" type="date" style="width: 210px; display: none;">
  <input id="inputData_fine" name="valore_data_fine" type="date" style="width: 210px; display: none;">
  <input id="inputUtente" name="valore_utente" type="text" placeholder="Inserisci email utente" style="width: 210px; display: none;">
	<select id="inputTipologia" name="valore_tipologia" style="width: 210px; display: none;">
		<option value="" disabled selected>Seleziona una tipologia...</option>
			<?php foreach ($tipologie_per_servizio as $tipologia) {
				$id_tipologia_i = $tipologia['id_tipologia'];
				$nome_tipologia_i = $tipologia['nome']; 
				echo "<option value=\"$id_tipologia_i\">$nome_tipologia_i</option>";
			} ?>
	</select>
 <button type="submit" name="submit_filtro" value="submit_filtro" title="Filtra" style="border: none ; border-radius: 5px; background: FF00FF; cursor: pointer; padding: 5px;">
  <img src="<?= base_url() ?>assets/images/filter.png" alt="Filtra" style="background: FF00FF;width: 24px; height: 24px;margin-bottom: -5px;">
</button>
 
</form>
<?php if (session()->getFlashdata('errore_id')): ?>
	<p style="margin:0px;color: red;padding-left: 10px;font-size:1.15rem;;margin-top: 5px;margin-left: -10px;margin-bottom: -5px;" class="u-align-left u-small-text u-text u-text-variant u-text-2">
	Errore: <?= session()->getFlashdata('errore_id') ?>
	<?php session()->remove('errore_id'); ?>					
	</p>
<?php endif; ?>	
<script>
  function mostraInput() {
    const filtro = document.getElementById('filtroSelect').value;
    document.getElementById('inputID').style.display = filtro === 'id' ? 'inline' : 'none';
    document.getElementById('inputData').style.display = filtro === 'data' ? 'inline' : 'none';
    document.getElementById('inputData_fine').style.display = filtro === 'data_fine' ? 'inline' : 'none';
    document.getElementById('inputUtente').style.display = filtro === 'utente' ? 'inline' : 'none';
    document.getElementById('inputTipologia').style.display = filtro === 'tipologia' ? 'inline' : 'none';
  }
</script>			
				
            <div style="min-height:unset;margin-bottom: 50px;"  class="u-border-2 u-border-palette-4-base u-container-style u-expanded-width u-group u-palette-5-base  u-group-2">			
			<div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="60px"> 
                </colgroup>
                <thead class="u-align-center u-custom-font u-heading-font u-palette-4-base u-table-header u-table-header-1 ">
                  <tr style="height: 46px;">
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">ID</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Timestamp</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Utente</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Tipologia</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Descrizione</th>
                    <th class="u-border-2 u-border-palette-4-base u-table-cell">Allegato</th>
                  </tr>
                </thead>				
                <tbody class="u-table-body u-table-body-1">
				  <?php for($i=0;$i<sizeof($segnalazione);$i++)
					{		?>
					  <tr style="height: 50px;">
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><a title="Dettagli segnalazione" target="_blank" href="<?php echo base_url('codeigniter/')."dettagli_segnalazione/".$segnalazione[$i]['id_segnalazione'] ?>">
																						<?= $segnalazione[$i]['id_segnalazione'] ?>
																					</a>
							</td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $segnalazione[$i]['timestamp'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $segnalazione[$i]['email_utente'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $tipologia_segnalazione[$i]['nome'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell"><?= $segnalazione[$i]['descrizione'] ?></td>
						<td class="u-border-2 u-border-palette-4-base u-table-cell">
							<?php if($segnalazione[$i]['allegato']=='')
							{
								echo "";
							}else 
							{?><a target="_blank" href="<?= base_url(); ?>assets/allegati_segnalazioni/<?= $segnalazione[$i]['allegato']; ?>"/>Visualizza allegato</a>
							<?php }?>					
						</td>
					  </tr>
				  <?php } ?>
                </tbody>
              </table>
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