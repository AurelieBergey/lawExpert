<?php

class Form{
    private $data; //donnée du formaulaire

    public function __construct ($data){
        $this->data = $data;
    }


        /**
         * Get the value of data
         */ 
        public function getData()
        {
                return $this->data;  // data est un dictionnaire, il comprends la clé et la valeur key ->valeur
        }
      
        private function getValue($key) {
            if(isset($this->data[$key])) {    
                return $this->data[$key];
            } else {
                return NULL;
            }
        }

        public function createImputText($key,$class){
            // echo '<label for="'. $key.'">'.$key.'</label>';
            echo '<input type="text" class="' .$class. '"    name="' .$key. '" value="' .$this->getValue($key) . '">'; 
        }
        public function createImputEmail($key,$class){
            // echo '<label for="'. $key.'">'.$key.'</label>';
            echo '<input type="email" class="' .$class. '"    name="' .$key. '" value="' .$this->getValue($key) . '">'; 
        }
        public function createImputNum($key,$class){
            // echo '<label for="'. $key.'">'.$key.'</label>';
            echo '<input type="numbers" class="' .$class. '"    name="' .$key. '" value="' .$this->getValue($key) . '">'; 
        }

            

        public function createSubmit($text,$class){
            echo '<button type="submit" class="' .$class. '" >'.$text.'</button>';
        }

       
}
?>