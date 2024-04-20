
<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++) { 
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 === 0) {
    echo 'tic' . "\n";
  } elseif ($i % 5 === 0) {
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
// Q2-1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

// Q2-2
foreach ($personalInfos as $index => $infos) {
  echo $index + 1 . '番目の' . $infos['name'] . 'のメールアドレスは' . $infos['mail'] . 'で、電話番号は' . $infos['tel'] . 'です。' . "\n";
}

//Q2-3
$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
  $personalInfos[$index]['age'] = $age;
}

// foreach ($personalInfos as $index => $infos) {
//   $personalInfos[$index]['age'] = $ageList[$index];
// }
// var_dump($personalInfos);
// 別解です

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に参加しました。 学籍番号：' . $this->studentId . "\n";
    }

    public function studentInfo()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。' . "\n";
    }
}

$student = new Student(120, '山田');
$student->studentInfo();

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
date_default_timezone_set('Asia/Tokyo');
$today = new DateTime('now');
$day = new DateTime('1992-04-25');
$diff = $day->diff($today);
$diffDays = $diff->days;
echo 'あの日から' . $diffDays . '日経過しました。';

?>
