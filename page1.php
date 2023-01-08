
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}
class Family
{
    const PROJECT_NAME= "This is how to display constant variables within the class";
    public $member;
    public $activities;
    public $locations;
    public $result;
    public $display;
    public function display()
    {
        echo self::PROJECT_NAME;
    }


    function __construct($member, $activities, $locations)
   {
    $this->member=$member;
    $this->activities=$activities;
    $this->locations=$locations;
   }   
   
    function get_member()
    {
        return $this->member;
    }
    function get_activities()
    {
        return $this->activities;
    }
    function get_locations()
    {
        return $this->locations;
    }
   
}
$abayo= new Family('Abayo ishimwe pauline','cooking','Muhanga');
echo $abayo->get_member()."<br>";
echo $abayo->get_activities()."<br>";
echo $abayo->get_locations()."<br>";
echo $abayo->display;

class Child extends Family
{
    function message()
    {
        echo "This is a child class that extend family";
    }
    function Add($a,$b)
    {
        $result=$a + $b;
        return $this->result;
    }
 

}
$strew=new Child('Abayo ishimwe pauline','cooking','Muhanga');
echo $strew->message()."<br>";

echo "the result is".$strew->Add(4,5);










?>