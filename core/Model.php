<?php
class Model {
	
	protected $db;

	public function __construct() {
		global $db;
		$this->db = $db;
	}

	public function get($table,$data,$value) {
        $sql = $this->db->query('SELECT * FROM '.$table." WHERE $data = '$value'");
        if ($sql->rowCount() < 1) {
            return false;
        }
        $r = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $r;

    }

}
?>