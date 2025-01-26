```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      throw new InvalidArgumentException('Array elements must be numeric.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = ['a', 'b', 'c'];

try {
  echo calculateSum($numbers); 
} catch (InvalidArgumentException $e) {
  echo 'Error: ' . $e->getMessage(); // Output: Error: Array elements must be numeric.
}
```