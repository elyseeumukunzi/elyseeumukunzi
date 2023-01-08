<?php 
$servername='localhost';
$dbname='testapi';
$dbuser='root';
$password='';
$connect=new mysqli($servername,$dbuser, $password, $dbname);
if(mysqli_connect_error($connect))
{
    die("connection error".$connect-connect_error);
}
else
{
    //echo "connected";
}
class Data{
    public $userid;
    public $fullname;
    public $birthdate;
    public $username;
    public $password;
    public function set_user($userid,$fullname,$birthdate,$username,$password)
    {
        $this->userid=$userid;
        $this->fullname=$fullname;
        $this->birthdate=$birthdate;
        $this->username=$username;
        $this->password=$password;
    }
    function get_user()
    {
           return $this->userid;   

    }
   
}

$data=new Data();
$sql="SELECT * FROM users";
$result=$connect->query($sql);
if($result->num_rows > 0)

{
    echo "<table><thead><th>Number</th><th>Names</th><th>Ages</th><th>Username</th></thead>";
    while($row=$result -> fetch_assoc())
    {
        $names=$row['FullName'];       
        echo "<tbody><tr><td>".$row['UserId']."</td><td>" .$row['FullName']."</td><td>" .$row['BirthDate']."</td><td>" .$row['Username']."</td></tr>";
        
    }
}

 $data->set_user($names, 'UMUKUNZI elysee', '2000', 'elysee', '123');
 echo $data->get_user();

?>
