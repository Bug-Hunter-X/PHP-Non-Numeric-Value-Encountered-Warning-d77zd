```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = []; // Empty array
echo calculateSum($numbers); // Output: 0

$numbers = ['a', 'b', 'c']; // Array with strings
echo calculateSum($numbers); // Warning: A non-numeric value encountered
```