<?php
    $student = array (
        array(
            'id' => 105,
             'name' => 'bibek',
             'class' => '16',
             'gender' => 'male'
        ),

        array(
            'id' => 105,
             'name' => 'anita',
             'class' => '16',
             'gender' => 'female'
        ),

        array(
            'id' => 105,
             'name' => 'alisha',
             'class' => '16',
             'gender' => 'female'
        ),

        array(
            'id' => 105,
             'name' => 'ashma',
             'class' => '16',
             'gender' => 'female'
        ),

        array(
            'id' => 105,
             'name' => 'sibu',
             'class' => '16',
             'gender' => 'male'
        ),

        array(
            'id' => 105,
             'name' => 'arun',
             'class' => '16',
             'gender' => 'male'
        ),

        array(
            'id' => 105,
             'name' => 'dilip',
             'class' => '16',
             'gender' => 'male'
        )
        );

        // $genderfilter = array_filter ($student, function ($genderStd){
        //     return array_keys($genderStd, "female");
        // });

        
        // print_r ($genderfilter);
        // echo "<br>";
        // echo "<br>";

        // if($genderfilter!=null)
        // {
        //     echo 'the school is closed.';
        // }
        // else{
        //     echo 'the school is open.';
        // }

        
        function checkfemale($array,$holiday,$noHoliday){
            $genderfilter = array_filter ($array, function ($genderStd){
                return array_keys($genderStd, "female");
            });

            $totalFemale = count ($genderfilter);
            if($totalFemale!=null)
            {
                return $holiday($totalFemale);
            }
            else{
                return $noHoliday($genderfilter);
            // echo 'the school is open.';
            }
        }

        checkfemale($student,function($totalFemale){
            echo "$totalFemale female students in our class. So class will remain open in NariDiwash.";
        },function($genderfilter){
            // print_r($female);
            echo 'as we see there are female students present in our school. Hence our school will remain close in this NariDiwash.'."<br>";
            echo 'there are '. count($female) .' female students and they are:'.'<br>';
            foreach($genderfilter as $nameStd){
                echo $nameStd["name"].'<br>';
            }
            
        });

?>


