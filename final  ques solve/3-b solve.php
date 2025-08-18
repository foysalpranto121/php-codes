<?php
function findUniqueElement($nums) {
    $counts = array_count_values($nums); // count occurrences
    foreach ($counts as $num => $count) {
        if ($count == 1) {
            return $num; // return element that appears once
        }
    }
    return null; // in case no unique element found
}

// Example usage
$nums1 = [4, 1, 2, 1, 2];
$nums2 = [2, 2, 3, 3, 5];

echo findUniqueElement($nums1); // Output: 4
echo "\n";
echo findUniqueElement($nums2); // Output: 5
?>
