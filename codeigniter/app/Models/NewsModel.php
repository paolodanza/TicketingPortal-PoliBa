<?php
namespace App\Models;
use CodeIgniter\Model;
class NewsModel extends Model
{
    protected $table = 'news';
	protected $allowedFields = ['id', 'title', 'text', 'slug']; //usati per accedere in scrittura ai campi della tabella
	
/* 	public function getNews($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}
    return $this->where(['slug' => $slug])->first();
	} */
	
	public function getNews($slug = FALSE)
	{
      if ($slug === FALSE)
        {$sql = "SELECT * FROM news ORDER BY title;";
         $query =  $this->query($sql);
          return $query->getResultArray(); // così la formatto come un array associativo, in modo visibile dalla view 
         }
        $sql = "SELECT * FROM news WHERE slug='$slug';";
        $query = $this->query($sql);
        return $query->getRowArray(); // perchè so che avrò una riga sola, però usare getresultarray andava bene comunque
	}
	
	public function setNews($data)
{   $sql= "INSERT INTO news values($data[id], '$data[title]','$data[slug]', '$data[text]');"; // i campi testuali vanno passati tra apici!!
	$query =  $this->query($sql);
	return $query; // poteva anche non esserci, non serve
}
}
?>
