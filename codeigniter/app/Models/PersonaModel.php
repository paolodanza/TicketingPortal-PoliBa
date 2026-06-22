<?php
namespace App\Models;
use CodeIgniter\Model;
class PersonaModel extends Model
{
    protected $table = 'persona';
	protected $allowedFields = ['cf', 'nome', 'cognome', 'email','passw','tipo'];

    // Funzione booleana per verificare se un $cf è già presente nel database
    public function checkCfExists($cf)
    {
        $sql = "SELECT count(*) FROM persona WHERE cf='$cf';";
		$query =  $this->query($sql);
		$result = $query->getRowArray();
        if($result['count']>0){ return true;}
		else{ return false;}
    }


	public function getPersona($cf = FALSE)
	{
      if ($cf === FALSE)
        {$sql = "SELECT * FROM persona ORDER BY tipo,nome;";
         $query =  $this->query($sql);
          return $query->getResultArray();
         }
        $sql = "SELECT * FROM persona WHERE cf='$cf';";
        $query = $this->query($sql);
        return $query->getRowArray();
		}
		
	public function getPersonaOfTipo($tipo = FALSE)
{
      if ($tipo === FALSE)
        {$sql = "SELECT * FROM persona ORDER BY tipo,nome;";
         $query =  $this->query($sql);
          return $query->getResultArray();
         }
        $sql = "SELECT * FROM persona WHERE tipo='$tipo' ORDER BY nome;";
        $query = $this->query($sql);
        return $query->getResultArray();
		}	

	
	// Input: -$cf, $new_responsabile (tutte le colonne tranne il tipo, che è responsabile) = UPDATE
	//			-$new_responsabile = INSERT
	// Output: modifica la riga corrispondente a $cf, con $new_responsabile
	public function setPersona($new_responsabile,$cf = FALSE)
	{
		$new_cf = $new_responsabile['cf'];
		$new_nome = $new_responsabile['nome'];
		$new_cognome = $new_responsabile['cognome'];
		$new_email = $new_responsabile['email'];
		$new_passw = $new_responsabile['passw'];
		
		if ($cf === FALSE) //INSERT
        {
			$sql = "INSERT INTO persona(cf,nome,cognome,email,passw,tipo)
			VALUES (:cf:, :nome:, :cognome:, :email:, :passw:, 'responsabile');";

			$query = $this->query($sql, [
			'cf' => $new_cf,
			'nome' => $new_nome,
			'cognome' => $new_cognome,
			'email' => $new_email,
			'passw' => $new_passw
			]);			
			return $query;
         }
		// UPDATE
		$sql = "UPDATE persona
        SET cf = :new_cf:, nome = :nome:, cognome = :cognome:, email = :email:, passw = :passw:
        WHERE cf = :old_cf:;";

		$query = $this->query($sql, [
		'new_cf' => $new_cf,
		'nome' => $new_nome,
		'cognome' => $new_cognome,
		'email' => $new_email,
		'passw' => $new_passw,
		'old_cf' => $cf
		]);

		return $query;
	}
	
	
	// Input: $cf
	// Output: elimina la riga corrispondente a $cf
	public function deletePersona($cf = FALSE)
	{
		if($cf === FALSE)
		{
			// ERRORE
		}
		$sql = "DELETE FROM persona WHERE cf='$cf';";
		$query = $this->query($sql);
		return $query;
	}		
}
?>