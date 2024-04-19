<?php
// Q1 変数と文字列
$name = '奥西';
echo  '私の名前は「' . $name . '」です。' . "\n";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
$num /= 2;
echo $num . "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo date('現在時刻は、Y年m月d日 H時i分s秒です。') . "\n";

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'mac' || $device === 'windows') {
  echo '使用OSは、' . $device . 'です。' . "\n";
} else {
  echo 'どちらでもありません。' . "\n";
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age >= 18) ? '成人です。' . "\n" : '未成年です。' . "\n";
echo $message;

// Q6 配列
$prefectures = 
['東京都',
'神奈川県',
'千葉県',
'埼玉県',
'群馬県',
'栃木県',
'茨城県'];
echo ($prefectures[2] . 'と' . $prefectures[3] . 'は関東地方の都道府県です。') . "\n";

// Q7 連想配列-1
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach($kanto as $pref => $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
foreach ($kanto as $pref => $city) {
  if ($pref === '埼玉県') {
      echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
  }
}

// Q9 連想配列-3
$no_kanto = [
  '山梨県' => '甲府市',
  '沖縄県' => '那覇市'
];

$japan = array_merge($kanto, $no_kanto);

foreach ($japan as $pref => $city) {
  if ($pref === '山梨県' || $pref === '沖縄県') {
    echo $pref . 'は関東地方ではありません。' . "\n";
  } else {
    echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
  }
}

// Q10 関数-1
function sayhello($name) {
  return $name . 'さん、こんにちは。' . "\n";
}

echo sayhello('金谷');
echo sayhello('安藤');

// Q11 関数-2
$price = 1000;
function calcTaxInPrice($taxOutPrice) {
  $result = $taxOutPrice * 1.1;
  return $result;
}

$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n";

// Q12 関数とif文
function distinguishNum($dis_num) 
{
  if($dis_num % 2 === 0){
    echo $dis_num . 'は偶数です。' . "\n";
  } else {
    echo $dis_num . 'は奇数です。' . "\n";
  }
}

distinguishNum(15) . "\n";
distinguishNum(28) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {

switch($grade) {
  case 'A':
  case 'B':
    echo '合格です。' . "\n";
    break;

  case 'C':
    echo '合格ですが追加課題があります。' . "\n";
    break;
  
  case 'D':
    echo '不合格です。' . "\n";
    break;
  
  default:
    echo '判定不明です。講師に問い合わせてください。' . "\n";
    break;
}
}

evaluateGrade('B');
evaluateGrade('Z');

?>
