<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
class SegnalazioneModel extends Model

{
    protected $table = 'segnalazione';
	protected $allowedFields = ['id_segnalazione', 'timestamp', 'email_utente', 'descrizione', 'allegato', 'id_servizio', 'id_tipologia'];


	// Input: $id_segnalazione
	// Output: tutte le segnalazioni se nessun input, oppure
	//			informazioni della segnalazione associata a $id_segnalazione
	public function getSegnalazioneFromID($id_segnalazione = FALSE)
{
      if ($id_segnalazione === FALSE)
        {
			$sql = "SELECT * FROM segnalazione;";
			$query = $this->query($sql);
			return $query->getResultArray();
         }
        $sql = "SELECT * FROM segnalazione WHERE id_segnalazione='$id_segnalazione';";
        $query = $this->query($sql);
        return $query->getRowArray();
		}

	

		
	// Input: $id_servizio
	// Output: informazioni delle segnalazioni associate al $id_servizio
	public function getSegnalazioneFromServizio($id_servizio = FALSE)
{
      if ($id_servizio === FALSE)
        {
			// ERRORE
         }
        $sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' ORDER BY timestamp DESC;";
        $query = $this->query($sql);
        return $query->getResultArray();
		}

	// Input: $id_servizio
	// Output: informazioni delle segnalazioni associate al $id_servizio, con filtro
	public function getSegnalazioneFromServizio_Filtro($id_servizio,$tipo_filtro,$filtro)
{
		if(!empty($filtro))
		{
			switch($tipo_filtro)
			{
				case 'id': $sql = "SELECT * FROM segnalazione WHERE id_segnalazione='$filtro' ORDER BY timestamp DESC;"; break;
				case 'data_inizio': $sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' AND timestamp>'$filtro' ORDER BY timestamp DESC;"; break;
				case 'data_fine': $sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' AND timestamp<'$filtro' ORDER BY timestamp DESC;"; break;
				case 'utente': $sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' AND email_utente='$filtro' ORDER BY timestamp DESC;"; break;
				case 'tipologia': $sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' AND id_tipologia='$filtro' ORDER BY timestamp DESC;"; break;
			}
		}else
		{
			$sql = "SELECT * FROM segnalazione WHERE id_servizio='$id_servizio' ORDER BY timestamp DESC;";			
		}
  
        $query = $this->query($sql);
        return $query->getResultArray();
		}			


	public function setSegnalazione($data)  
{   //$sql= "INSERT INTO news values($data[id], '$data[title]','$data[slug]', '$data[text]');";
	//$query =  $this->query($sql);
	
	$sql = "INSERT INTO segnalazione (email_utente, descrizione, allegato, id_servizio, id_tipologia)
        VALUES (:email_utente:, :descrizione:, :allegato:, :id_servizio:, :id_tipologia:)";

	$query = $this->db->query($sql, [
		'email_utente' => $data['email_utente'],
		'descrizione'  => $data['descrizione'],
		'allegato'     => $data['allegato'],
		'id_servizio'  => (int)$data['id_servizio'],
		'id_tipologia' => (int)$data['id_tipologia']
	]);
	$insertedID = $this->db->insertID();
	return $insertedID;
	} 

	// Input: $id_servizio
	// Output: conteggio per i servizi corrispondenti ad un $id_servizio		
	public function CountSegnalazioniFromServizio($id_servizio = FALSE)
	{
      if ($id_servizio === FALSE)
		{
			// ERRORE
		}
        $sql = "SELECT coalesce(count(id_segnalazione),0) 
				FROM segnalazione 
				GROUP BY id_servizio
				HAVING id_servizio='$id_servizio';";
        $query = $this->query($sql);
        return $query->getRowArray();
		} 
		
	public function DeleteSegnalazioni($id_servizio = FALSE)
	{
      if ($id_servizio === FALSE)
		{
			// ERRORE
		}
	else
	{		
        $sql = "DELETE FROM segnalazione 
				WHERE id_servizio='$id_servizio';";
        $query = $this->query($sql);
        return true;
	}
	} 		

}
?>