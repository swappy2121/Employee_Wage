<?php
    class EmployeeWage{
        
        public $check;
        public $PerHourWage = 20;
        public $fullDayHour = 8;

    
        public function welcomeWindow(){
            echo "Welcome to employee wage computation program \n";
        }

        
         public function randNum(){
            $this->check = rand(0, 1);
        }

       
        public function calDailyEmpWage(){
            if($this->check == 1){
                echo "Employee is present \n";
                $DailyWage = $this->PerHourWage * $this->fullDayHour;
                echo "Daily Employee Wage :  $DailyWage";
            }
            else{
                echo "Employee is absent \n";
            }
        }

    }

    $wage = new EmployeeWage();
    $wage->welcomeWindow();
    $wage->randNum();
    $wage->calDailyEmpWage();
?>