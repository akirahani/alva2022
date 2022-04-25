<?php
class Database{
	protected $con;
	public function __construct()
    {
    	try 
    	{
		    // $this->con=new PDO("mysql:host=localhost;dbname=nhdaxl3s_alva;charset=utf8", "nhdaxl3s_ngaile", "S?S=+^)U~uA!");
		    $this->con=new PDO("mysql:host=localhost;dbname=nhdaxl3s_alva;charset=utf8", "root", "");
		}
		catch (Exception $e) 
		{
		    echo '<h1 style="text-align:center">Connect fail!</h1>';
		}
    }
}
?>