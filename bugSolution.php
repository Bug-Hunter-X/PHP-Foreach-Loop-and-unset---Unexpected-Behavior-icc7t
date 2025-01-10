function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

function fooSolution(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === null) {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = [1, 2, null, 4, null, 6];
$result = fooSolution($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

$arr = ['a' => 1, 'b' => 2, 'c' => null, 'd' => 4, 'e' => null, 'f' => 6];
$result = fooSolution($arr);
print_r($result); // Output: Array ( [a] => 1 [b] => 2 [d] => 4 [f] => 6 )