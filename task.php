# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。





<?php



print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答（Q1）を記載

$names[] = "斎藤";

print_r($names);
echo PHP_EOL;









print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答（Q2）を記載

print_r(array_merge($array1, $array2));
echo PHP_EOL;









print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答（Q3）を記載

$numbers_count = array_count_values($numbers);
print_r($numbers_count);
echo PHP_EOL;









print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答（Q4）を記載

unset($sports[2][5]);

print_r($sports);
echo PHP_EOL;








print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答（Q5）を記載

$array1 = [];

  if(empty($array1)) {
      print_r("true") ;
  }

      echo PHP_EOL;

$array2 = [1, 5, 8, 10];

  if(empty($array2)) {
      print_r("true");
  } else {

      print_r("false");
      echo PHP_EOL;
  }

  echo PHP_EOL;









  print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];


# 以下に回答（Q6）を記載

function multiple_number($numbers1){
  return $numbers1*10;
}

$multiple_numbers = array_map('multiple_number', $numbers1);

print_r($multiple_numbers);

echo PHP_EOL;








print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答（Q7）を記載

$num = (int) $array;

print_r($array);
echo PHP_EOL;









print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答（Q8）を記載

$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;



?>
