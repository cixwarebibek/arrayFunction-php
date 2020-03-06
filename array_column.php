<?php

$name= array(
    array(
        'id'=>01,
        'fname'=>'bibek',
        'lname'=>'bhandari',
    ),
    array(
        'id'=>02,
        'fname'=>'Diken',
        'lname'=>'khadka',
    ),
    array(
        'id'=>03,
        'fname'=>'arun',
        'lname'=>'bastola',
    )

    );

$last_names=array_column($name,'lname');
print_r ($last_names);


?>