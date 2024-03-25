<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>
   

<div id="content">
    <h2>Arrays</h2>
    <?php
    function computeAverage($arr) {
        return round(array_sum($arr) / count($arr));
    }

    function findMax($arr) {
        $max_value = max($arr);
        $index = array_search($max_value, $arr);
        return array($max_value, $index);
    }

    function findMode($arr) {
        $values = array_count_values($arr);
        $mode = array_search(max($values), $values);
        return $mode;
    }

    function findMatchingIndices($arr1, $arr2) {
        $matching_indices = array();
        foreach ($arr1 as $key => $value) {
            if ($value === $arr2[$key]) {
                $matching_indices[] = $key;
            }
        }
        return $matching_indices;
    }

    $arr1 = array(9, 3, 1, 0, 99, 2, 5, 6, 1, 1, 55);
    $arr2 = array(9, 4, 1, 0, 23, 22, 4, 6, 4, 32, 55);

    echo "The average is: " . computeAverage($arr1) . "<br>";

    $max = findMax($arr1);
    echo "The value at index " . $max[1] . " is maximum which is: " . $max[0] . "<br>";

    echo "The mode of the array is " . findMode($arr1) . "<br>";

    echo "Here are the matching indices: <br>";

    $matching_indices = findMatchingIndices($arr1, $arr2);
    
    
    foreach ($matching_indices as $index) {
        echo "The value at index " . $index . " is " . $arr1[$index] . "<br>";
    }

    
    ?>
</div>
<?php include 'Footer.php'; ?>
