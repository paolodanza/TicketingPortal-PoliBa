<?php

namespace App\Controllers;
use App\Models\PersonaModel;
use App\Models\ServizioModel;
use App\Models\TipologiaSegnalazioneModel;

class AdminController extends BaseController
{
		
    public function login()
    {
		$session = session();
		$model_persona = new PersonaModel();
		$data['persona'] = $model_persona->getPersona();
		$CheckEmail = null; // null = get ;0 = not checked; 1 = checked
		$CheckPW = null;  // null = get ;0 = not checked; 1 = checked 
		
        if ($this->request->getMethod() === 'POST')
		{
			
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$hasError = false;

			if (empty($email)) {
				$session->setFlashdata('errore_login_email', 'Email mancante');
				$hasError = true;
			}
			if (empty($password)) {
				$session->setFlashdata('errore_login_password', 'Password mancante');
				$hasError = true;
			}			
			if(!$hasError)
			{
				$data_form= [
					'email' => $this->request->getPost('email'),
					'password' => $this->request->getPost('password')
				];
				foreach ($data['persona'] as $persona){
					if($persona['email'] === $data_form['email'])
						{
							$CheckEmail = 1;
							if($persona['passw'] === $data_form['password'])
							{
								$CheckPW = 1;
								$session->set('cf',$persona['cf']);
								$session->set('email',$persona['email']);
								$session->set('nome',$persona['nome']);
								$session->set('cognome',$persona['cognome']);
								$session->set('tipo',$persona['tipo']);

								return redirect()->to('codeigniter/pagina_admin');								
							}
							else{$session->setFlashdata('errore_login_password', 'Password errata');}
						}
				}
				if($CheckEmail === 0){ $session->setFlashdata('errore_login_email', 'Email errata'); }
				
			}				
		}
		return view('nicepage/Login');     					 
;
    }
	
	

	public function logout()
	{
	   $session = session();
	   $session->destroy();
	   return redirect()->to('codeigniter/');
	}
	
	
	public function pagina_admin()
	{
		$session = session();
		$model_servizio = new ServizioModel();
		$model_persona = new PersonaModel();
		$model_tipologia = new TipologiaSegnalazioneModel();
		if($session->get('tipo')==='responsabile') // tipo === 'responsabile'
		{
			$data['servizio'] = $model_servizio->getServizioFromCF($session->get('cf'));
			$data['count_segnalazioni'] = $model_servizio->CountSegnalazioni($session->get('cf'));
			#return view('pages/dashboard_responsabile',$data);
			return view('nicepage/dashboard_responsabile',$data);
			
		}elseif($session->get('tipo')==='amministratore'){ // tipo === 'amministratore'
			if($this->request->getMethod()==='GET'){$accesso_pagina = $this->request->getGet('submit');}
			else{$accesso_pagina = $this->request->getPost('submit');}
			if(is_null($accesso_pagina)){ // = nessun pulsante di modifica premuto
				$accesso_pagina = 'lettura';
			}
			
			$data['servizio'] = $model_servizio->getServizioFromCF();
			$data['count_segnalazioni'] = $model_servizio->CountSegnalazioni();
			$data['responsabili'] = $model_persona->getPersonaOfTipo('responsabile');
			$data['tipologie'] = $model_tipologia->getTipologiaFromID();
			
#			switch($accesso_pagina){
#				case 'lettura': return view('pages/dashboard_amministratore',$data); break;
#				case 'aggiungi_responsabile': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_aggiungiResponsabile',$data); break;
#				case 'modifica_responsabile': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_modificaResponsabile',$data); break;
#				case 'elimina_responsabile': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_eliminaResponsabile',$data); break;
#				case 'aggiungi_tipologia': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_aggiungiTipologia',$data); break;
#				case 'modifica_tipologia': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_modificaTipologia',$data); break;
#				case 'elimina_tipologia': return view('pages/dashboard_amministratore_versioni/dashboard_amministratore_eliminaTipologia',$data); break;
#				default: return view('pages/dashboard_amministratore',$data); break;
#			}
			session()->setFlashdata('scroll_to', 'formServizi'); // ID dell'elemento
			switch($accesso_pagina){
				case 'lettura': return view('nicepage/dashboard_amministratore',$data); break;
				case 'aggiungi_responsabile': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_aggiungiResponsabile',$data); break;
				case 'modifica_responsabile': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_modificaResponsabile',$data); break;
				case 'elimina_responsabile': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_eliminaResponsabile',$data); break;
				case 'aggiungi_tipologia': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_aggiungiTipologia',$data); break;
				case 'modifica_tipologia': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_modificaTipologia',$data); break;
				case 'elimina_tipologia': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_eliminaTipologia',$data); break;
				case 'aggiungi_servizio': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_aggiungiServizio',$data); break;
				case 'elimina_servizio': return view('nicepage/dashboard_amministratore_versioni/dashboard_amministratore_eliminaServizio',$data); break;
				default: return view('nicepage/dashboard_amministratore',$data); break;
			}
			
		}
		// ERRORE: UTENTE NON LOGGATO
		return view('nicepage/Errore_area_riservata');
		
	}
	public function Aggiungi()// aggiunge un responsabile oppure una tipologia di segnalazione
	{
		$session = session();
		$model_persona = new PersonaModel();
		$model_tipologia = new TipologiaSegnalazioneModel();
		$model_servizio = new ServizioModel();

		if($session->get('tipo')==='amministratore') // l'operazione deve essere richiesta da un amministratore		
		{
			if($this->request->getPost("submit")==="annulla"){ return redirect()->to('codeigniter/pagina_admin'); } // operazione annullata
			if($this->request->getPost("submit")==="invia_aggiungi_servizio") // se l'operazione riguarda un servizio
			{
				$validation_rules = 
					['id_servizio' => 'required|numeric',
					'nome' => 'required|max_length[100]',
					'url' => 'required|max_length[1000]',
					'cf_responsabile' => 'required'];	
				if($this->validate($validation_rules)) // se è valida
				{
						// conservo tutte le informazioni prese dal form
					$new_servizio = [
						'id_servizio' => $this->request->getPost('id_servizio'),  		// ID
						'nome' => $this->request->getPost('nome'),       				// Nome
						'url' => $this->request->getPost('url'), 						// URL
						'cf_responsabile' => $this->request->getPost('cf_responsabile') // CF responsabile
					];	
					if($model_servizio->checkIDExists($new_servizio['id_servizio']))
					{
						// ERRORE: CHIAVE PRIMARIA DUPLICATA AGGIUNGI SERVIZIO
						$session->setFlashdata('errore_invio_aggiungi_servizio_id', "ID: esiste già un servizio con l'ID inserito");
						$old_id = $this->request->getPost('id_servizio');
						$old_nome = $this->request->getPost('nome');
						$old_url = $this->request->getPost('url');	
						$old_cf = $this->request->getPost('cf_responsabile');
						$session->setFlashdata('old_id',$old_id);
						$session->setFlashdata('old_nome',$old_nome);
						$session->setFlashdata('old_url',$old_url);
						$session->setFlashdata('old_cf',$old_cf);					
						return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_servizio');
					} 
						// OK, NESSUN ERRORE
					$model_servizio->setServizio($new_servizio);
					return redirect()->to('codeigniter/pagina_admin');
				}
				else	// ERRORE DI VALIDAZIONE: AGGIUNGI SERVIZIO
				{
					$old_id = $this->request->getPost('id_servizio');
					$old_nome = $this->request->getPost('nome');
					$old_url = $this->request->getPost('url');	
					$old_cf = $this->request->getPost('cf_responsabile');	
					$missing = false;
					if(empty($old_id)){$old_id = '';$missing=true;}
					if(empty($old_nome)){$old_nome = '';$missing=true;}
					if(empty($old_url)){$old_url = '';$missing=true;}
					if($missing===true)
					{
						$session->setFlashdata('errore_invio_aggiungi_servizio_mancante', 'Tutti i campi sono obbligatori');
					}
					if(!empty($old_id) && !is_numeric($old_id))
					{
						$session->setFlashdata('errore_invio_aggiungi_servizio_id', "ID: deve essere un numero");
					}
					if(strlen($old_nome)>100)
					{
						$error_message = "Nome: ".strlen($old_nome)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_servizio_nome', $error_message);
					}	
					if(strlen($old_url)>1000)
					{
						$error_message = "URL: ".strlen($old_url)." su massimo 1000 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_servizio_url', $error_message);
					}					
					$session->setFlashdata('old_id',$old_id);
					$session->setFlashdata('old_nome',$old_nome);
					$session->setFlashdata('old_url',$old_url);
					$session->setFlashdata('old_cf',$old_cf);
					
					return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_servizio');
				}				
			}
			elseif($this->request->getPost("submit")==="invia_aggiungi_responsabile") // se l'operazione riguarda un responsabile
			{
				$validation_rules = 
					['cf' => 'required|min_length[16]|max_length[16]',
					'nome' => 'required|max_length[100]',
					'cognome' => 'required|max_length[100]',
					'email' => 'required|max_length[100]',
					'password' => 'required|max_length[100]'];	
				if($this->validate($validation_rules)) // se è valida
				{
						// conservo tutte le informazioni prese dal form
					$new_responsabile = [
						'cf' => $this->request->getPost('cf'),           // CF
						'nome' => $this->request->getPost('nome'),       // Nome
						'cognome' => $this->request->getPost('cognome'), // Cognome
						'email' => $this->request->getPost('email'),     // Email
						'passw' => $this->request->getPost('password')      // Password
					];	
					if($model_persona->checkCfExists($new_responsabile['cf']))
					{
						// ERRORE: CHIAVE PRIMARIA DUPLICATA AGGIUNGI RESPONSABILE
						$session->setFlashdata('errore_invio_aggiungi_responsabile_cf', "CF: esiste già un responsabile con il CF inserito");
						$old_cf = $this->request->getPost('cf');
						$old_nome = $this->request->getPost('nome');
						$old_cognome = $this->request->getPost('cognome');
						$old_email = $this->request->getPost('email');	
						$old_password = $this->request->getPost('password');	
						$session->setFlashdata('old_cf',$old_cf);
						$session->setFlashdata('old_nome',$old_nome);
						$session->setFlashdata('old_cognome',$old_cognome);					
						$session->setFlashdata('old_email',$old_email);					
						$session->setFlashdata('old_password',$old_password);							
						return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_responsabile');
					}
					// OK, NESSUN ERRORE
					$model_persona->setPersona($new_responsabile);
					return redirect()->to('codeigniter/pagina_admin');
				}
				else // ERRORE DI VALIDAZIONE: AGGIUNGI RESPONSABILE
				{
					$old_cf = $this->request->getPost('cf');
					$old_nome = $this->request->getPost('nome');
					$old_cognome = $this->request->getPost('cognome');
					$old_email = $this->request->getPost('email');	
					$old_password = $this->request->getPost('password');	
					$missing = false;
					if(empty($old_cf)){$old_cf = '';$missing=true;}
					if(empty($old_nome)){$old_nome = '';$missing=true;}
					if(empty($old_cognome)){$old_cognome = '';$missing=true;}
					if(empty($old_email)){$old_email = '';$missing=true;}
					if(empty($old_password)){$old_password = '';$missing=true;}
					if($missing===true)
					{
						$session->setFlashdata('errore_invio_aggiungi_responsabile_mancante', 'Tutti i campi sono obbligatori');
					}
					if(!empty($old_cf) && strlen($old_cf)!=16)
					{
						$error_message = "CF: ".strlen($old_cf)." su 16 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_responsabile_cf', $error_message);
					}
					if(strlen($old_nome)>100)
					{
						$error_message = "Nome: ".strlen($old_nome)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_responsabile_nome', $error_message);
					}	
					if(strlen($old_cognome)>100)
					{
						$error_message = "Cognome: ".strlen($old_cognome)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_responsabile_cognome', $error_message);
					}	
					if(strlen($old_email)>100)
					{
						$error_message = "Email: ".strlen($old_email)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_responsabile_email', $error_message);
					}	
					if(strlen($old_password)>100)
					{
						$error_message = "Password: ".strlen($old_password)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_responsabile_password', $error_message);
					}	
					$session->setFlashdata('old_cf',$old_cf);
					$session->setFlashdata('old_nome',$old_nome);
					$session->setFlashdata('old_cognome',$old_cognome);					
					$session->setFlashdata('old_email',$old_email);					
					$session->setFlashdata('old_password',$old_password);					
					
					return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_responsabile');					
				}
			}
			elseif($this->request->getPost("submit")==="invia_aggiungi_tipologia") // se l'operazione riguarda una tipologia
			{
					$validation_rules = 
					['id_tipologia' => 'required|numeric',
					'nome' => 'required|max_length[100]',
					'descrizione' => 'max_length[1000]'];		
				if($this->validate($validation_rules)) // se è valida
				{
						// conservo tutte le informazioni prese dal form
					$new_tipologia = [
						'id_tipologia' => $this->request->getPost('id_tipologia'),
						'nome' => $this->request->getPost('nome'),       
						'descrizione' => $this->request->getPost('descrizione')
					];	
					if($model_tipologia->checkIDExists($new_tipologia['id_tipologia']))
					{
						// ERRORE: CHIAVE PRIMARIA DUPLICATA AGGIUNGI TIPOLOGIA
						$session->setFlashdata('errore_invio_aggiungi_tipologia_id', "ID: esiste già una tipologia con l'ID inserito");
						$old_id = $this->request->getPost('id_tipologia');
						$old_nome = $this->request->getPost('nome');
						$old_descrizione = $this->request->getPost('descrizione');
						$session->setFlashdata('old_id',$old_id);
						$session->setFlashdata('old_nome',$old_nome);
						$session->setFlashdata('old_descrizione',$old_descrizione);						
						return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_tipologia');
					} 
					// OK, NESSUN ERRORE
					$model_tipologia->setTipologia($new_tipologia);
					return redirect()->to('codeigniter/pagina_admin');
				}
				else	// ERRORE DI VALIDAZIONE: AGGIUNGI TIPOLOGIA
				{
					$old_id = $this->request->getPost('id_tipologia');
					$old_nome = $this->request->getPost('nome');
					$old_descrizione = $this->request->getPost('descrizione');	
					$missing = false;
					if(empty($old_id)){$old_id = '';$missing=true;}
					if(empty($old_nome)){$old_nome = '';$missing=true;}
					if(empty($old_descrizione)){$old_descrizione = '';}
					if($missing===true)
					{
						$session->setFlashdata('errore_invio_aggiungi_tipologia_mancante', 'ID e Nome sono obbligatori');
					}
					if(!empty($old_id) && !is_numeric($old_id))
					{
						$session->setFlashdata('errore_invio_aggiungi_tipologia_id', "ID: deve essere un numero");
					}
					if(strlen($old_nome)>100)
					{
						$error_message = "Nome: ".strlen($old_nome)." su massimo 100 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_tipologia_nome', $error_message);
					}	
					if(strlen($old_descrizione)>1000)
					{
						$error_message = "Descrizione: ".strlen($old_url)." su massimo 1000 caratteri";
						$session->setFlashdata('errore_invio_aggiungi_tipologia_descrizione', $error_message);
					}					
					$session->setFlashdata('old_id',$old_id);
					$session->setFlashdata('old_nome',$old_nome);
					$session->setFlashdata('old_descrizione',$old_descrizione);
					
					return redirect()->to('codeigniter/pagina_admin?submit=aggiungi_tipologia');
				}			
			}
		}
		// ERRORE, CHIAMATA DA UN RESPONSABILE
		return redirect()->to('codeigniter/');		
	}

	public function Modifica() // modifica un responsabile oppure una tipologia di segnalazione
	{
		$session = session();
		$model_persona = new PersonaModel();
		$model_tipologia = new TipologiaSegnalazioneModel();		
		
		if($session->get('tipo')==='amministratore') // l'operazione deve essere richiesta da un amministratore
		{	
			if($this->request->getPost("submit")==="annulla"){ return redirect()->to('codeigniter/pagina_admin'); } // operazione annullata		
			if($this->request->getPost("submit")==="invia_modifica_responsabile") // se l'operazione riguarda un responsabile
			{
				$validation_rules = 
					['cf.*' => 'required|min_length[16]|max_length[16]',
					'nome.*' => 'required|max_length[100]',
					'cognome.*' => 'required|max_length[100]',
					'email.*' => 'required|max_length[100]',
					'password.*' => 'required|max_length[100]'];					
				if($this->validate($validation_rules)) // se la modifica è valida
				{
						// conservo tutte le informazioni prese dal form
					$cf = $this->request->getPost('cf');           // array di CF
					$nomi = $this->request->getPost('nome');       // array di nomi
					$cognomi = $this->request->getPost('cognome'); // ...
					$email = $this->request->getPost('email');
					$passw = $this->request->getPost('password');
						// conservo i dati vecchi
					$cf_old = $this->request->getPost('cf_originale');        
					$nomi_old = $this->request->getPost('nome_originale');     
					$cognomi_old = $this->request->getPost('cognome_originale');
					$email_old = $this->request->getPost('email_originale');
					$passw_old = $this->request->getPost('password_originale');	
					
					$persone_new = []; // array con tutti i dati inseriti
					$persone_old = []; 
					for ($i = 0; $i < count($cf); $i++) 
					{
						$new_persona = [
							'cf' => $cf[$i],
							'nome' => $nomi[$i],
							'cognome' => $cognomi[$i],
							'email' => $email[$i],
							'passw' => $passw[$i]
						];
						$persone_new[] = $new_persona; // push di new_persona nell'array: modo compatto
						
						$old_persona = [
							'cf' => $cf_old[$i],
							'nome' => $nomi_old[$i],
							'cognome' => $cognomi_old[$i],
							'email' => $email_old[$i],
							'passw' => $passw_old[$i]
						];
						$persone_old[] = $old_persona;					
					}
					for ($i = 0; $i < count($persone_new); $i++) 
					{
						if($persone_new[$i]!==$persone_old[$i]) // se la persona i-esima è cambiata	
						{
							if($persone_new[$i]['cf']!==$persone_old[$i]['cf']) // se il suo CF è cambiato
							{
								if($model_persona->checkCfExists($persone_new[$i]['cf'])) // controllo chiave duplicata
								{
									// ERRORE: CHIAVE PRIMARIA DUPLICATA MODIFICA RESPONSABILE
									$session->setFlashdata('errore_invio_modifica_responsabile_cf_'.$i, "CF: esiste già un responsabile con il CF inserito");
									$old_cf = $persone_new[$i]['cf'];
									$old_nome = $persone_new[$i]['nome'];
									$old_cognome = $persone_new[$i]['cognome'];
									$old_email = $persone_new[$i]['email'];	
									$old_password = $persone_new[$i]['passw'];	
									$session->setFlashdata('old_cf_'.$i,$old_cf);
									$session->setFlashdata('old_nome_'.$i,$old_nome);
									$session->setFlashdata('old_cognome_'.$i,$old_cognome);					
									$session->setFlashdata('old_email_'.$i,$old_email);					
									$session->setFlashdata('old_password_'.$i,$old_password);					
									var_dump($persone_new[$i]);
									
									return redirect()->to('codeigniter/pagina_admin?submit=modifica_responsabile');
								}
							}
							// OK, NESSUN ERRORE
							$model_persona->setPersona($persone_new[$i],$persone_old[$i]['cf']); 						
						}

					}
					return redirect()->to('codeigniter/pagina_admin');
				}
				else	// ERRORE DI VALIDAZIONE: MODIFICA RESPONSABILE
				{
					$old_cf = $this->request->getPost('cf');				// array
					$old_nome = $this->request->getPost('nome');			// array
					$old_cognome = $this->request->getPost('cognome');		// array
					$old_email = $this->request->getPost('email');			// array
					$old_password = $this->request->getPost('password');	// array
					$missing = [];
					
					for($i=0; $i<count($old_cf); $i++) // per ogni riga del form inviato, controllo
					{
						$missing[$i] = false;
						if(empty($old_cf[$i])){$old_cf[$i] = '';$missing[$i]=true;}
						if(empty($old_nome[$i])){$old_nome[$i] = '';$missing[$i]=true;}
						if(empty($old_cognome[$i])){$old_cognome[$i] = '';$missing[$i]=true;}
						if(empty($old_email[$i])){$old_email[$i] = '';$missing[$i]=true;}
						if(empty($old_password[$i])){$old_password[$i] = '';}						
						if($missing[$i] === true)
						{
							$session->setFlashdata('errore_invio_modifica_responsabile_mancante_'.$i, 'Tutti i campi sono obbligatori');
						}
						if(!empty($old_cf[$i]) && strlen($old_cf[$i])!=16)
						{
							$error_message = "CF: ".strlen($old_cf[$i])." su 16 caratteri";
							$session->setFlashdata('errore_invio_modifica_responsabile_cf_'.$i, $error_message);
						}
						if(strlen($old_nome[$i])>100)
						{
							$error_message = "Nome: ".strlen($old_nome[$i])." su massimo 100 caratteri";
							$session->setFlashdata('errore_invio_modifica_responsabile_nome_'.$i, $error_message);
						}	
						if(strlen($old_cognome[$i])>100)
						{
							$error_message = "Cognome: ".strlen($old_cognome[$i])." su massimo 100 caratteri";
							$session->setFlashdata('errore_invio_modifica_responsabile_cognome_'.$i, $error_message);
						}	
						if(strlen($old_email[$i])>100)
						{
							$error_message = "Email: ".strlen($old_email[$i])." su massimo 100 caratteri";
							$session->setFlashdata('errore_invio_modifica_responsabile_email_'.$i, $error_message);
						}	
						if(strlen($old_password[$i])>100)
						{
							$error_message = "Password: ".strlen($old_password[$i])." su massimo 100 caratteri";
							$session->setFlashdata('errore_invio_modifica_responsabile_password_'.$i, $error_message);
						}	
						$session->setFlashdata('old_cf_'.$i,$old_cf[$i]);
						$session->setFlashdata('old_nome_'.$i,$old_nome[$i]);
						$session->setFlashdata('old_cognome_'.$i,$old_cognome[$i]);					
						$session->setFlashdata('old_email_'.$i,$old_email[$i]);					
						$session->setFlashdata('old_password_'.$i,$old_password[$i]);					
					}
					
					return redirect()->to('codeigniter/pagina_admin?submit=modifica_responsabile');
				}
			}
			elseif($this->request->getPost("submit")==="invia_modifica_tipologia") // se l'operazione riguarda una tipologia
			{
				$validation_rules = 
					['id_tipologia.*' => 'required|numeric',
					'nome.*' => 'required|max_length[100]',
					'descrizione.*' => 'max_length[1000]'];					
				if($this->validate($validation_rules)) // se la modifica è valida
				{
						// conservo tutte le informazioni prese dal form
					$id_tipologie = $this->request->getPost('id_tipologia');         
					$nomi = $this->request->getPost('nome');       
					$descrizioni = $this->request->getPost('descrizione'); 
						// conservo i dati vecchi
					$id_tipologie_old = $this->request->getPost('id_tipologia_originale');         
					$nomi_old = $this->request->getPost('nome_originale');       
					$descrizioni_old = $this->request->getPost('descrizione_originale'); 	
					
					$tipologie_new = []; // array con tutti i dati inseriti
					$tipologie_old = []; 
					for ($i = 0; $i < count($id_tipologie); $i++) 
					{
						$new_tipologia = [
							'id_tipologia' => $id_tipologie[$i],
							'nome' => $nomi[$i],
							'descrizione' => $descrizioni[$i]
						];
						$tipologie_new[] = $new_tipologia;
						
						$old_tipologia = [
							'id_tipologia' => $id_tipologie_old[$i],
							'nome' => $nomi_old[$i],
							'descrizione' => $descrizioni_old[$i]
						];
						$tipologie_old[] = $old_tipologia;					
					}
					for ($i = 0; $i < count($tipologie_new); $i++) 
					{
						if($tipologie_new[$i]!==$tipologie_old[$i]) // se la tipologia i-esima è cambiata
						{
							if($tipologie_new[$i]['id_tipologia']!==$tipologie_old[$i]['id_tipologia']) // se il suo ID è cambiato
							{							
								if($model_tipologia->checkIDExists($tipologie_new[$i]['id_tipologia'])) // controllo chiave duplicata
								{
									// ERRORE: CHIAVE PRIMARIA DUPLICATA MODIFICA TIPOLOGIA
									$session->setFlashdata('errore_invio_modifica_tipologia_id_'.$i, "ID: esiste già una tipologia con l'ID inserito");
									$old_id = $tipologie_new[$i]['id_tipologia'];
									$old_nome = $tipologie_new[$i]['nome'];
									$old_descrizione = $tipologie_new[$i]['descrizione'];
									$session->setFlashdata('old_id_'.$i,$old_id);
									$session->setFlashdata('old_nome_'.$i,$old_nome);
									$session->setFlashdata('old_descrizione_'.$i,$old_descrizione);							
									return redirect()->to('codeigniter/pagina_admin?submit=modifica_tipologia');
								}
							}
							// OK, NESSUN ERRORE							
							$model_tipologia->setTipologia($tipologie_new[$i],$tipologie_old[$i]['id_tipologia']); 						
						}

					}
					return redirect()->to('codeigniter/pagina_admin');
				}
				else	// ERRORE DI VALIDAZIONE: MODIFICA TIPOLOGIA
				{
					$old_id = $this->request->getPost('id_tipologia');				// array
					$old_nome = $this->request->getPost('nome');					// array
					$old_descrizione = $this->request->getPost('descrizione');		// array
					$missing = [];
					
					for($i=0; $i<count($old_id); $i++) // per ogni riga del form inviato, controllo
					{
						$missing[$i] = false;
						if(empty($old_id[$i])){$old_id[$i] = '';$missing[$i]=true;}
						if(empty($old_nome[$i])){$old_nome[$i] = '';$missing[$i]=true;}
						if(empty($old_descrizione[$i])){$old_descrizione[$i] = '';}						
						if($missing[$i] === true)
						{
							$session->setFlashdata('errore_invio_modifica_tipologia_mancante_'.$i, 'ID e Nome sono obbligatori');
						}
						
						if(!empty($old_id[$i]) && !is_numeric($old_id[$i]))
						{
							$session->setFlashdata('errore_invio_modifica_tipologia_id_'.$i, "ID: deve essere un numero");
						}
						if(strlen($old_nome[$i])>100)
						{
							$error_message = "Nome: ".strlen($old_nome[$i])." su massimo 100 caratteri";
							$session->setFlashdata('errore_invio_modifica_tipologia_nome_'.$i, $error_message);
						}	
						if(strlen($old_descrizione[$i])>1000)
						{
							$error_message = "Descrizione: ".strlen($old_url[$i])." su massimo 1000 caratteri";
							$session->setFlashdata('errore_invio_modifica_tipologia_descrizione_'.$i, $error_message);
						}					
						$session->setFlashdata('old_id_'.$i,$old_id[$i]);
						$session->setFlashdata('old_nome_'.$i,$old_nome[$i]);
						$session->setFlashdata('old_descrizione_'.$i,$old_descrizione[$i]);						
					}
					
					return redirect()->to('codeigniter/pagina_admin?submit=modifica_tipologia');
				}
			}
		}
		// ERRORE, CHIAMATA DA UN RESPONSABILE
		return redirect()->to('codeigniter/');		
	}	

	public function Elimina()// elimina un responsabile oppure una tipologia di segnalazione
	{
		$session = session();
		$model_persona = new PersonaModel();
		$model_tipologia = new TipologiaSegnalazioneModel();
		$model_servizio = new ServizioModel();

		if($session->get('tipo')==='amministratore') // l'operazione deve essere richiesta da un amministratore		
		{	
			if($this->request->getPost("submit")==="annulla"){ return redirect()->to('codeigniter/pagina_admin'); } // operazione annullata		
			if($this->request->getPost("submit")==="invia_elimina_servizio") // se l'operazione riguarda un servizio
			{
				// conservo la scelta fatta dal form
				$id_servizio = $this->request->getPost('id_servizio');
				// elimino la riga corrispondente 
				$model_servizio->deleteServizio($id_servizio);
				return redirect()->to('codeigniter/pagina_admin');				
			}
			elseif($this->request->getPost("submit")==="invia_elimina_responsabile") // se l'operazione riguarda un responsabile
			{
				// conservo la scelta fatta dal form
				$cf = $this->request->getPost('cf_responsabile');
				// elimino la riga corrispondente 
				$model_persona->deletePersona($cf);
				return redirect()->to('codeigniter/pagina_admin');
			}
			elseif($this->request->getPost("submit")==="invia_elimina_tipologia") // se l'operazione riguarda una tipologia
			{
				// conservo la scelta fatta dal form
				$id_tipologia = $this->request->getPost('id_tipologia');
				// elimino la riga corrispondente 
				$model_tipologia->deleteTipologia($id_tipologia);
				return redirect()->to('codeigniter/pagina_admin');			
			}
		}
		// ERRORE, CHIAMATA DA UN RESPONSABILE
		return redirect()->to('codeigniter/');		
	}
	

}
