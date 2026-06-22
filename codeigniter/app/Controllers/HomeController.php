<?php

namespace App\Controllers;
use App\Models\ServizioModel;

class HomeController extends BaseController
{
    public function index()
    {
		$model = new ServizioModel();
		$data['servizio'] = $model->getServizioFromCF();
		$data['count_segnalazioni'] = $model->CountSegnalazioni();
        #return view('pages/home',$data);
		return view('nicepage/index',$data);
    }
	
	public function contatti()
	{
		#return view('pages/contatti');
		return view('nicepage/Contatti');
	}
	public function about()
	{
		#return view('pages/about');
		return view('nicepage/Informazioni-su');
	}
	
	public function viewSegnalazioneFromID()
	{
		$session = session();
		if (!$this->validate(['id_segnalazione'  => 'required|numeric']))
		{
			$session->setFlashdata('errore_cerca_segnalazione', "L'ID della segnalazione deve essere un numero");
			return redirect()->to('codeigniter/'); // ERRORE, BISOGNA INSERIRE UN NUMERO
		}
		$id_segnalazione = $this->request->getPost('id_segnalazione');
		return redirect()->to('codeigniter/dettagli_segnalazione/'.$id_segnalazione);			
		
	}
}
