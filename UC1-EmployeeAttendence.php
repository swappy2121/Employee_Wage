<?php
    class EmployeeWage{

        public $optionCheck; 
        public function welcomeWindow(){
            echo "Welcome to employee wage computation program \n";
        }

       
         public function randNum(){
            return $this->optionCheck = rand(0,1);
        }

        public function attendanceCheck(){
            if($this->optionCheck == 1){
                echo "Employee is present";
            }
            else{
                echo "Employee is absent";
            }
        }
    }
    $wages = new EmployeeWage();
    $wages->welcomeWindow();
    $wages->randNum();
    $wages->attendanceCheck();
?>