<?php
namespace App\Models;
use CodeIgniter\Model;
class TipologiaSegnalazioneModel extends Model
{
    protected $table = 'tipologia_segnalazione';
	protected $allowedFields = ['id_tipologia', 'nome', 'descrizione'];


    // Funzione booleana per verificare se un $id_tipologia è già presente nel database
    public function checkIDExists($id_tipologia)
    {
        $sql = "SELECT count(*) FROM tipologia_segnalazione WHERE id_tipologia='$id_tipologia';";
		$query =  $this->query($sql);
		$result = $query->getRowArray();
        if($result['count']>0){ return true;}
		else{ return false;}
    }
	
	public function getTipologiaFromID($id_tipologia = FALSE)
{
      if ($id_tipologia === FALSE)
        {
			$sql = "SELECT * FROM tipologia_segnalazione ORDER BY id_tipologia;";
			$query = $this->query($sql);
			return $query->getResultArray();
         }
        $sql = "SELECT * FROM tipologia_segnalazione WHERE id_tipologia = $id_tipologia ORDER BY id_tipologia;";
        $query = $this->query($sql);
        return $query->getRowArray();
		}
	
	public function getIDFromNome($nome_tipologia = FALSE)
{
      if ($nome_tipologia === FALSE)
        {
			// ERRORE
         }
        $sql = "SELECT id_tipologia FROM tipologia_segnalazione WHERE nome = '$nome_tipologia';";
        $query = $this->query($sql);
        return $query->getRowArray();
		}

	// Input: $id_tipologia, $new_tipologia
	// Output: modifica la riga corrispondente a $id_tipologia, con $new_tipologia
	public function setTipologia($new_tipologia,$id_tipologia = FALSE)
	{
		$new_id = $new_tipologia['id_tipologia'];
		$new_nome = $new_tipologia['nome'];
		$new_descrizione = $new_tipologia['descrizione'];
		
		if ($id_tipologia === FALSE) //INSERT
        {
			$sql = "INSERT INTO tipologia_segnalazione(id_tipologia,nome,descrizione)
			VALUES (:id_tipologia:, :nome:, :descrizione:);";

			$query = $this->query($sql, [
			'id_tipologia' => $new_id,
			'nome' => $new_nome,
			'descrizione' => $new_descrizione
			]);			
			return $query;
         }
		 //UPDATE

		
		$sql = "UPDATE tipologia_segnalazione
        SET id_tipologia = :new_id_tipologia:, nome = :nome:, descrizione = :descrizione:
        WHERE id_tipologia = :old_id_tipologia:;";

		$query = $this->query($sql, [
		'new_id_tipologia' => $new_id,
		'nome' => $new_nome,
		'descrizione' => $new_descrizione,
		'old_id_tipologia' => $id_tipologia
		]);

		return $query;
	}		
	
	
	// Input: $id_tipologia
	// Output: elimina la riga corrispondente a $id_tipologia
	public function deleteTipologia($id_tipologia = FALSE)
	{
		if($id_tipologia === FALSE)
		{
			// ERRORE
		}
		$sql = "DELETE FROM tipologia_segnalazione WHERE id_tipologia='$id_tipologia';";
		$query = $this->query($sql);
		return $query;
	}	
}
?>