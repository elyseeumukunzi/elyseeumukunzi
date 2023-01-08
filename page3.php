<?php class HelloWorld {

       public $language;
	 	 
        public function set_language($lang)
        {
            $this->language=$lang;

        }
        function get_language()
        {
            return $this->language;
        }
        public function displayit()
        {
        
        
	 	 if($this->language=="Dutch")
         {
	       echo 'Hallo, wereld!';
         }
         elseif($this->language=="English")
         {
	       echo 'Hello there!';
           
         }
        }
 	 	 
	 } 

     $display= new HelloWorld();
     $display->set_language("Dutch");
     echo "seected language is" .$display->get_language()."<br>";
     echo $display->displayit();


     