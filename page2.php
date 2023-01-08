<?php 
class Connection
{
   
    public $projectname;
    public $name;
    public $message;
    function connect()
    {
        $connect = $conn = new mysqli("localhost", "root", "", "testapi");
        if($connect->connect_error)
        {
            die("databse Connection error");
            
        }
        else
        {
            echo "Connection succeed";
        }

    }
    
}
$conn=new Connection();
echo $object->connect();
class SelectUsers
{
public function mufate()
{
    
}
}



?>

