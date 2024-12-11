```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      $data[$key] = explode(',', $value);
    }
  }
  return $data;
}

$data = ['a' => '1,2,3', 'b' => ['c' => '4,5,6', 'd' => '7']];
$result = processData($data);
print_r($result);
```