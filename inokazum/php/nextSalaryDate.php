<?php
    function nextSalaryDateCalculation(){
        $month   =   date('m');
        $date    =   date('d');

        if($month == 12 && $date > 25){
            $hoge = date('Y/m/25',strtotime("+1 year +1 month"));
        }else if($date < 26){
            $hoge = date('Y/m/25');
        }else{
            $hoge = date('Y/m/25',strtotime("+1 month"));
        }
        
        //指定日の曜日を取得する
        $day = date('w', strtotime($hoge));

        if($day != 6 && $day != 0){
            return $salaryDate = $hoge;
        }elseif($day = 6){
            return date('Y/m/d',strtotime("$hoge -2 day"));
        }else{
            return date('Y/m/d',strtotime("$hoge -1 day"));
        }
    }
    echo nextSalaryDateCalculation();
?>