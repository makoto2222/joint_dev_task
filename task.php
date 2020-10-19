<?php


print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

    # 以下に回答を記載

$name = [];

foreach ($names as $key => $value ) {
    $number = $key + 1;
    $names1= '会員No.' . $number . " " . $value;

    array_push($name, $names1);
}

print_r($name);
echo PHP_EOL;






print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

    # 以下に回答を記載

foreach ($foods as $food) {

    if (preg_match("/うに/", $food)) {
        echo '好物です';
        echo PHP_EOL;

    } else {
        echo 'まぁまぁ好きです';
    }
}
echo PHP_EOL;






print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載


  $sports1 = [];

  foreach($sports as $key => $sport){
      if(is_array($sport)){
          $sports1 = array_merge($sports1,$sport);
      }else{
          array_push($sports1,$sport);
      }
  }

  $sports2 = array_unique($sports1);
  $sports3 = array_values($sports2);

  $sports4 = [];

  foreach($sports3 as $key => $sport3){
      $number = $key + 1;
      $sport4 = "No" . $number ." " . $sport3;
      array_push($sports4, $sport4);
  }

  echo "ユーザーの趣味一覧";
  echo PHP_EOL;

  foreach($sports4 as $sport4){
      print_r($sport4);
      echo PHP_EOL;
  }





print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載

echo $data["user"]["name"];
echo PHP_EOL;






print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];


  # 以下に回答を記載


$user_data = array_replace( $user_data, $update_data ) ;
print_r($user_data);
echo PHP_EOL;






print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

print_r(array_values($data));
echo PHP_EOL;






print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載


if (array_key_exists('age', $data1) ) {
  echo "OK";
  echo PHP_EOL;
}else {
  echo "NG";
  echo PHP_EOL;
}

if (array_key_exists('age', $data2) ) {
  echo "OK";
  echo PHP_EOL;
}else {
  echo "NG";
}
echo PHP_EOL;






print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

  foreach($users as $user){
    print_r("私の名前は{$user['name']}です。年齢は{$user['age']}歳です。");
    echo PHP_EOL;
}


?>
