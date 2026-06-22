<?php

namespace App\Controllers;
use App\Models\ServizioModel;
use App\Models\PersonaModel;
use App\Models\ServizioTipologiaModel;
use App\Models\TipologiaSegnalazioneModel;
use App\Models\SegnalazioneModel;

class ServizioController extends BaseController
{
	public function Mostra($id_servizio = FALSE)
	{
		$session = session();
		$model_servizio = new ServizioModel();
		$model_persona = new PersonaModel();
		$model_serviziotipologia = new ServizioTipologiaModel();
		$model_tipologia = new TipologiaSegnalazioneModel();
		$model_segnalazione = new SegnalazioneModel();
		
		// se si accede a questa funzione con POST, rende il servizio modificabile; anche con GET se error non è vuoto (per gli errori), altrimenti no

		if($this->request->getMethod() === 'POST')
		{
			if($this->request->getPost('submit') === 'modifica_servizio'){
			$data['modifica_servizio']=true;
			}
		} 
		else
		{
			if(!empty($this->request->getGet('error')))
			{
				$data['modifica_servizio']=true;
			}
			else
			{
				$data['modifica_servizio']=false;
			}
		}
		
		
		if($session->get('tipo')==='responsabile')
		{  
			if($this->request->getPost('submit') === 'reset_segnalazioni')
			{
				$data['modifica_servizio']=false;
				$model_segnalazione->DeleteSegnalazioni($id_servizio);
			}		
			
	// mostra la pagina del servizio per il responsabile
			$data['servizio'] = $model_servizio->getServizioFromID($id_servizio);
			$data['count_segnalazioni'] = $model_segnalazione->CountSegnalazioniFromServizio($id_servizio);
			$id_tipologie_per_servizio = $model_serviziotipologia->getTipologiaFromServizio($id_servizio);
			$data['tipologie_per_servizio'] = [];
			foreach($id_tipologie_per_servizio as $id_tipologia)
			{
				array_push($data['tipologie_per_servizio'], $model_tipologia->getTipologiaFromID($id_tipologia['id_tipologia']));
			}
			
			// se si accede alla pagina avendo schiacciato il filtro, allora ricava i dati filtrati	
			if(!empty($this->request->getPost('filtro')))
			{
				$data['modifica_servizio']=false;
				switch($this->request->getPost('filtro'))
				{
					case 'id': 
						if(!empty($this->request->getPost('valore_id')) && !$this->validate(['valore_id'  => 'numeric']))
								{
									$session->setFlashdata('errore_id', "L'ID della segnalazione deve essere un numero");
									return redirect()->to('codeigniter/servizio/'.$id_servizio); // ERRORE, BISOGNA INSERIRE UN NUMERO
								}										
						$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio_Filtro($id_servizio,'id',$this->request->getPost('valore_id'));break;
					case 'data': 
						$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio_Filtro($id_servizio,'data_inizio',$this->request->getPost('valore_data'));break;
					case 'data_fine': 
						$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio_Filtro($id_servizio,'data_fine',$this->request->getPost('valore_data_fine'));break;						
					case 'utente': 
						$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio_Filtro($id_servizio,'utente',$this->request->getPost('valore_utente'));break;					
					case 'tipologia': 
						$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio_Filtro($id_servizio,'tipologia',$this->request->getPost('valore_tipologia'));break;					
				}
				$data['tipologia_segnalazione'] = [];
				foreach($data['segnalazione'] as $segnalazione)
				{
					array_push($data['tipologia_segnalazione'],$model_tipologia->getTipologiaFromID($segnalazione['id_tipologia']));				
				}				
				return view('nicepage/servizio_responsabile',$data);
			}
			
			// altrimenti tutti i dati
			$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromServizio($id_servizio);

			
			$data['tipologia_segnalazione'] = [];
			foreach($data['segnalazione'] as $segnalazione)
			{
				array_push($data['tipologia_segnalazione'],$model_tipologia->getTipologiaFromID($segnalazione['id_tipologia']));				
			}
			#return view('pages/servizio_responsabile',$data);	
			return view('nicepage/servizio_responsabile',$data);	
		
		}elseif($session->get('tipo')==='amministratore'){ // tipo === 'amministratore'
			// mostra la pagina del servizio per l'amministratore
			
			// Dati del servizio:
			$data['servizio'] = $model_servizio->getServizioFromID($id_servizio);
			$data['responsabile_servizio'] = $model_persona->getPersona($data['servizio']['cf_responsabile']);
			$id_tipologia = $model_serviziotipologia->getTipologiaFromServizio($id_servizio);
			$data['tipologia_segnalazione'] = [];
			foreach($id_tipologia as $id){
				array_push($data['tipologia_segnalazione'],$model_tipologia->getTipologiaFromID($id['id_tipologia']));
			}
			
			// Dati generici (usati per mostrare le possibili alternative nel form)
			$data['responsabili_disponibili'] = $model_persona->getPersonaOfTipo("responsabile");
			$data['tipologie_disponibili'] = $model_tipologia->getTipologiaFromID();
			
			#return view('pages/servizio_amministratore',$data);
			return view('nicepage/servizio_amministratore',$data);
		}
		
		// ERRORE: UTENTE NON LOGGATO
		return view('nicepage/Errore_area_riservata');		
	}
	
	public function Modifica($id_servizio = FALSE)
	{
		$session = session();
		$model_servizio = new ServizioModel();		
		$model_serviziotipologia = new ServizioTipologiaModel();
		
		if($this->request->getPost("submit")==="annulla"){ return redirect()->to('codeigniter/servizio/'.$id_servizio); } // operazione annullata
		if($session->get('tipo')==='responsabile') // se la modifica è richiesta da un responsabile, è solo per modificare lo stato del servizio
		{	
			$new_stato = $this->request->getPost('stato');
			$model_servizio->setStato($id_servizio,$new_stato);
			return redirect()->to('codeigniter/servizio/'.$id_servizio);	
		
		}elseif($session->get('tipo')==='amministratore'){ // se la modifica è richiesta da un amministratore:
				// abbiamo in generale un form con più campi
				
			$validation_rules = 
				['nome' => 'required|max_length[100]',
				'id' => 'required|numeric',
				'url' => 'required|max_length[1024]'];				
			if ($this->validate($validation_rules)) 
			{
				$new_servizio= [ // conservo tutte le informazioni prese dal form
					'nome' => $this->request->getPost('nome'),
					'id_servizio' => $this->request->getPost('id'),
					'url' => $this->request->getPost('url'),
					'cf_responsabile'  => $this->request->getPost('responsabile'),
					'tipologie_selezionate'  => $this->request->getPost('tipologie'),
				];
				$model_servizio->setServizio($new_servizio,$id_servizio);
				$model_serviziotipologia->setRelationship($id_servizio,$new_servizio['tipologie_selezionate']);				

				return redirect()->to('codeigniter/servizio/'.$id_servizio);
			}
			else	// ERRORE DI VALIDAZIONE: MODIFICA SERVIZIO
			{
				$old_id = $this->request->getPost('id');				
				$old_nome = $this->request->getPost('nome');					
				$old_url = $this->request->getPost('url');	
				$old_responsabile = $this->request->getPost('responsabile');	
				$old_tipologie = $this->request->getPost('tipologie');			// array
					
				if(empty($old_id))
				{
					$old_id = '';
					$session->setFlashdata('errore_invio_modifica_servizio_id', 'ID obbligatorio');
				}elseif(!is_numeric($old_id))
				{
					$session->setFlashdata('errore_invio_modifica_servizio_id', "L'ID deve essere un numero");
				}
				
				if(empty($old_nome))
				{
					$old_nome = '';
					$session->setFlashdata('errore_invio_modifica_servizio_nome', 'Nome obbligatorio');
				}elseif(strlen($old_nome)>100)
				{
					$error_message = strlen($old_nome)." su massimo 100 caratteri";
					$session->setFlashdata('errore_invio_modifica_servizio_nome', $error_message);
				}
				
				if(empty($old_url))
				{
					$old_url = '';
					$session->setFlashdata('errore_invio_modifica_servizio_url', 'URL obbligatorio');
					
				}elseif(strlen($old_url)>1000)
				{
					$error_message = strlen($old_url)." su massimo 1000 caratteri";
					$session->setFlashdata('errore_invio_modifica_servizio_url', $error_message);
				}

				if(empty($old_tipologie))
				{
					$old_tipologie = '';					
				}		
				
				$session->setFlashdata('old_id',$old_id);
				$session->setFlashdata('old_nome',$old_nome);
				$session->setFlashdata('old_url',$old_url);
				$session->setFlashdata('old_responsabile',$old_responsabile);
				$session->setFlashdata('old_tipologie',$old_tipologie);
				
					
			}				
			return redirect()->to('codeigniter/servizio/'.$id_servizio.'?error=modifica_servizio'); // CON ERRORE
		}
		// ERRORE: UTENTE NON LOGGATO
		return view('nicepage/Errore_area_riservata');		
	}	


}
