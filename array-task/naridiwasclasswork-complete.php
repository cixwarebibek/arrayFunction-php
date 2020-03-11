<?php
$studentRecords = array(
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
function checkNariDiwas($array, $holiday, $noHoliday)
{
    $female = array_filter($array, function ($student) {
        return $student["gender"] == "female";
    });

    $totalFemale = count($female);
    if ($totalFemale == 0) {
        return $noHoliday($totalFemale);
    } else {
        return $holiday($female);
    }
}
checkNariDiwas($studentRecords, function ($female) {
    echo '<h3>' . 'there are ' . count($female) . ' female students and they are:' . '<br>' . '<h3>';
    foreach ($female as $name) {
        echo $name["name"] . '<br>';
    }
    echo "<h2>holiday granted</h2>";
}, function ($totalFemale) {
    echo "there are $totalFemale female students in our school this year. So school will remain open in this NariDiwash.";
});
