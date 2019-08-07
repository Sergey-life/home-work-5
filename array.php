<?php
$tree = [
    "test 1" => ["test 1.1", "test 1.2"],
    "test 2",
    "test 3" => ["test 3.1", "test 3.2" => ["test 3.2.1", "test 3.2.2"],
        "test 3.3"],
    "test 4" => ["test 4.1", "test 4.2", "test 4.3", "test 4.4"],
    [
        'test' => 'test',
        'test20' => 'test',
        'test21' ,'test'
    ], [
        'test' => 'test',
        'test12' => 'test',
        'test' ,'test'
    ], [
        'test6' => 'test',
        'test5' => 'test',
        'test' => 'test',
        123 => 'test',
        'test7' => '123'
    ],
];
echo tree($tree);

function tree($array, $tab = '', $result = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result .= "{$tab}[$key] <i style='color:red;'>(array)</i><br>";
            $result .= tree($value, $tab . str_repeat('&nbsp;', 4));
        } else {
            $result .= "{$tab}[$key] => <b>$value</b><br>";
        }
    }
    return $result;
}