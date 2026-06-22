<?php

namespace App\Controllers;
use App\Models\TipologiaSegnalazioneModel;
use App\Models\SegnalazioneModel;
use App\Models\ServizioModel;
use App\Models\ServizioTipologiaModel;

class SegnalazioneController extends BaseController
{
    public function invia($id_servizio)
    {
		$model_tipologia = new TipologiaSegnalazioneModel;
		$model_segnalazione = new SegnalazioneModel;
		$model_servizio = new ServizioModel;
		$model_serviziotipologia = new ServizioTipologiaModel;
		
		$session = session();
		$data['id_servizio'] = $id_servizio;
		$data['servizio'] = $model_servizio->getServizioFromID($id_servizio);
		$id_tipologie = $model_serviziotipologia->getTipologiaFromServizio($id_servizio);
		$data['tipologie'] = [];
		foreach($id_tipologie as $tipologia)
		{
			array_push($data['tipologie'],$model_tipologia->getTipologiaFromID($tipologia['id_tipologia']));
		}
		if ($this->request->getMethod() === 'POST')
		{	
			if($this->validate([
            'email'  => 'required',
			'id_tipologia' => 'required',
            'descrizione'  => 'max_length[1000]']))
			{
				$allegato = $this->request->getFile('allegato');
				if($allegato->isValid())
				{
					$nome_file = $allegato->getRandomName();
					$allegato->move(ROOTPATH . '../assets/allegati_segnalazioni', $nome_file);
				}else
				{
					$nome_file = '';
				}
				$dati_segnalazione= [
					'id_servizio' => $id_servizio,
					'email_utente' => $this->request->getPost('email'),
					'id_tipologia' => $this->request->getPost('id_tipologia'),
					'descrizione'  => $this->request->getPost('descrizione'),
					'allegato'  => $nome_file
				];
				
				$data['id_segnalazione'] = $model_segnalazione->setSegnalazione($dati_segnalazione);

				#return view('pages/segnalazione_successo',$data);
				return view('nicepage/segnalazione_inviata',$data);				
			}
			else	// ERRORE DI VALIDAZIONE
			{
				if(empty($this->request->getPost('email'))){$session->setFlashdata('errore_invio_segnalazione_email', 'Email utente obbligatoria');}
				if(empty($this->request->getPost('id_tipologia'))){$session->setFlashdata('errore_invio_segnalazione_tipologia', 'Tipologia disservizio obbligatoria');}
				if(strlen($this->request->getPost('descrizione'))>1000){
						$old_message = $this->request->getPost('descrizione');
						$error_message = strlen($old_message)."/1000 caratteri utilizzati";
						$session->setFlashdata('errore_invio_segnalazione_descrizione', $error_message);
						$session->setFlashdata('old_descrizione',$old_message);}
			}
		}
        #return view('pages/segnalazione_invio',$data);
        return view('nicepage/Segnalazione_invio',$data); // PAGINA CON ERRORE 
    }
	
	public function dettagli($id_segnalazione)
	{
		$model_segnalazione = new SegnalazioneModel;
		$model_servizio = new ServizioModel;
		$model_tipologia = new TipologiaSegnalazioneModel;
		
		$segnalazioni = $model_segnalazione->getSegnalazioneFromID();
		
		$session = session();
		$check_valid_id = false;
		foreach ($segnalazioni as $segnalazione){
			if($id_segnalazione === $segnalazione['id_segnalazione'])
			{
				$check_valid_id = true;
			}
		}
		if($check_valid_id === false)// se l'id di input non è valido, dare errore
		{
			$session->setFlashdata('errore_cerca_segnalazione', 'ID segnalazione non esistente');
			return redirect()->to('codeigniter/');  // PAGINA CON ERRORE
		}
		$data['segnalazione'] = $model_segnalazione->getSegnalazioneFromID($id_segnalazione); 
		$data['servizio'] = $model_servizio->getServizioFromID($data['segnalazione']['id_servizio']);
		$data['tipologia'] = $model_tipologia->getTipologiaFromID($data['segnalazione']['id_tipologia']);
		
		#return view('pages/segnalazione_dettagli',$data);
		return view('nicepage/segnalazione_dettagli',$data);
	}
}
