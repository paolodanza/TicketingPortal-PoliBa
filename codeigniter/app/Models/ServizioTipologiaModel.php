<?php
namespace App\Models;
use CodeIgniter\Model;
class ServizioTipologiaModel extends Model
{
    protected $table = 'servizio_tipologia';
	protected $allowedFields = ['id_servizio', 'id_tipologia'];


	// Input: $id_servizio
	// Output: id delle tipologie di segnalazioni associate al $id_servizio
	public function getTipologiaFromServizio($id_servizio = FALSE)
{
      if ($id_servizio === FALSE)
        {
			// ERRORE
         }
        $sql = "SELECT id_tipologia FROM servizio_tipologia WHERE id_servizio='$id_servizio';";
        $query = $this->query($sql);
        return $query->getResultArray();
		}
	
	// Input: $id_servizio, $tipologie[]
	// Output: associa l'$id_tipologie di segnalazioni all' $id_servizio
	public function setRelationship($id_servizio = FALSE,$tipologie)
{
		if ($id_servizio === FALSE)
			{
				// ERRORE
			}
		
		if(!empty($tipologie))
		{	
			$tipologie_associate = array_column($this->getTipologiaFromServizio($id_servizio), 'id_tipologia'); // tutti gli id di tipologie già associate al servizio	
			foreach($tipologie as $id_tipologia){
				if(!in_array($id_tipologia,$tipologie_associate)){ // se la tipologia non è già associata al servizio, inserisco nuova riga:
					$sql = "INSERT INTO servizio_tipologia (id_servizio, id_tipologia)
						VALUES (:id_servizio:, :id_tipologia:)";
					$query = $this->db->query($sql, [
						'id_servizio' => (int)$id_servizio,
						'id_tipologia'  => (int)$id_tipologia]);				
				}// se la tipologia è già associata al servizio, non faccio niente
			}
			foreach($tipologie_associate as $id_tipologia_associata){
				if(!in_array($id_tipologia_associata,$tipologie)){ // se c'è una tipologia associata che non è stata selezionata, la elimino
					$sql = "DELETE FROM servizio_tipologia 
							WHERE id_servizio='$id_servizio' AND id_tipologia='$id_tipologia_associata';"; 
					$query = $this->query($sql);				
				}
			}
			
		}else
		{
			$sql = "DELETE FROM servizio_tipologia WHERE id_servizio='$id_servizio';";
			$query = $this->query($sql);
			return "";			
		}
		return "";

		}	
}
?>



