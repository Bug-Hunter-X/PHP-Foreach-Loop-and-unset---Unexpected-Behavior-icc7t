function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

$arr = ['a' => 1, 'b' => 2, 'c' => null, 'd' => 4, 'e' => null, 'f' => 6];
$result = foo($arr);
print_r($result); // Output: Array ( [a] => 1 [b] => 2 [d] => 4 [f] => 6 )

//The bug is that when we use unset() inside a foreach loop iterating over an array, it does not modify the array itself. It just removes the element from the internal array pointer of the loop. So, after removing an element, the loop will skip the next element. To solve the problem we use the following solution