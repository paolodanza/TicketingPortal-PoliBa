<?php
namespace App\Models;
use CodeIgniter\Model;
class ServizioModel extends Model
{
    protected $table = 'servizio';
	protected $allowedFields = ['id_servizio', 'nome', 'url', 'stato','cf_responsabile'];
	
    // Funzione booleana per verificare se un $id_servizio è già presente nel database
    public function checkIDExists($id_servizio)
    {
        $sql = "SELECT count(*) FROM servizio WHERE id_servizio='$id_servizio';";
		$query =  $this->query($sql);
		$result = $query->getRowArray();
        if($result['count']>0){ return true;}
		else{ return false;}
    }
	
	public function getServizioFromCF($cf_responsabile = FALSE)
{
      if ($cf_responsabile === FALSE)
        {$sql = "SELECT * FROM servizio ORDER BY id_servizio;";
         $query =  $this->query($sql);
          return $query->getResultArray();
         }
        $sql = "SELECT * FROM servizio WHERE cf_responsabile='$cf_responsabile' ORDER BY id_servizio;";
        $query = $this->query($sql);
        return $query->getResultArray();
		}

	// Input: $cf_responsabile
	// Output: conteggio segnalazioni per ciascun servizio (se input non dato) 
	//			oppure conteggio per i servizi corrispondenti ad un $cf_responsabile
	public function CountSegnalazioni($cf_responsabile = FALSE)
{
      if ($cf_responsabile === FALSE)
		{$sql = "SELECT coalesce(count(id_segnalazione),0) 
				FROM servizio left join segnalazione ON servizio.id_servizio=segnalazione.id_servizio 
				GROUP BY servizio.id_servizio 
				ORDER BY servizio.id_servizio;";
        $query =  $this->query($sql);
        return $query->getResultArray();
		}
        $sql = "SELECT coalesce(count(id_segnalazione),0) 
				FROM servizio left join segnalazione ON servizio.id_servizio=segnalazione.id_servizio 
				WHERE cf_responsabile='$cf_responsabile' 
				GROUP BY servizio.id_servizio ORDER BY servizio.id_servizio;";
        $query = $this->query($sql);
        return $query->getResultArray();
		} 
		
	// Input: $id_servizio
	// Output: riga del servizio corrispondente ad $id_servizio
	public function getServizioFromID($id_servizio = FALSE)
	{
      if ($id_servizio === FALSE)
        {
			// ERRORE
         }
        $sql = "SELECT * FROM servizio WHERE id_servizio='$id_servizio';";
        $query = $this->query($sql);
        return $query->getRowArray();
		}
		
		
	// Input: $id_servizio, $new_stato
	// Output: modifica la riga corrispondente a $id_servizio, con $new_stato
	public function setStato($id_servizio = FALSE,$new_stato)
	{
		if ($id_servizio === FALSE)
        {
			// ERRORE
         }
		$sql = "UPDATE servizio SET stato = '$new_stato' WHERE id_servizio='$id_servizio';";
		$query = $this->query($sql);
		return $query;
	}

	// Input: $id_servizio, $new_servizio (tutte le colonne tranne lo stato) = UPDATE
	//		  -$new_servizio = INSERT
	// Output: modifica la riga corrispondente a $id_servizio, con $new_servizio
	public function setServizio($new_servizio,$id_servizio = FALSE)
	{
		$new_nome = $new_servizio['nome'];
		$new_id = $new_servizio['id_servizio'];
		$new_url = $new_servizio['url'];
		$new_responsabile = $new_servizio['cf_responsabile'];
		
		if ($id_servizio === FALSE) // INSERT
        {
			$sql = "INSERT INTO servizio(id_servizio,nome,url,stato,cf_responsabile)
			VALUES (:id_servizio:, :nome:, :url:, :stato:, :cf_responsabile:);";

			$query = $this->query($sql, [
			'id_servizio' => (int)$new_id,
			'nome' => $new_nome,
			'url' => $new_url,
			'stato' => 'attivo',
			'cf_responsabile' => $new_responsabile
			]);			
			return $query;			
         }
		 // UPDATE

		$sql = "UPDATE servizio 
        SET id_servizio = :new_id_servizio:, nome = :nome:, url = :url:, cf_responsabile = :cf_responsabile:
        WHERE id_servizio = :id_servizio:;";

		$query = $this->query($sql, [
		'new_id_servizio' => (int)$new_id,
		'nome' => $new_nome,
		'url' => $new_url,
		'cf_responsabile' => $new_responsabile,
		'id_servizio' => (int)$id_servizio
		]);

		return $query;
	}

	// Input: $id_servizio
	// Output: elimina la riga corrispondente a $id_servizio
	public function deleteServizio($id_servizio = FALSE)
	{
		if($id_servizio === FALSE)
		{
			// ERRORE
		}
		$sql = "DELETE FROM servizio WHERE id_servizio='$id_servizio';";
		$query = $this->query($sql);
		return $query;
	}

		

	
	}
?>