<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++ ){
  if($i%4 === 0 and $i%5 === 0){
  echo "\n";
      echo 'tic-tac';
      continue;
}
  if($i%4 === 0){
      echo "\n";
      echo 'tic';
      continue;
}
  if($i%5 === 0){
          echo "\n";
          echo 'tac';
          continue;
      
}
  if($i%4 === 0 and $i%5 === 0){
      echo "\n";
      echo 'tic-tac';
      continue;}
  echo "\n";
  echo $i;
}


// Q2 多次元連想配列
// q1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

// q2
foreach($personalInfos as $num  => $date){
  echo "\n";
  echo  $num + 1 .'番目の'.$date['name'].'さんのメールアドレスは'.$date['mail'].'で、電話番号は'.$date['tel'].'です。';
}

// q3
$ageList = [25, 30, 18];
foreach($personalInfos as $num  => $date){
    $personalInfos[$num]["age"] = $ageList[$num]; 
}

// Q3 オブジェクト-1
$student = new Student(120,'山田');
echo '学籍番号'.$student->studentId.'番の生徒は'.$student->studentName.'です。';

// Q4 オブジェクト-2
public function attend($kyoka)
    {
        echo $this->studentName.'は'.$kyoka.'の授業に参加しました。学籍番号：'.$this->studentId;
    }


// Q5 定義済みクラス
// q1
$monthago = new DateTime();
$monthago->modify('-1 month');
echo $monthago->format('Y-m-d');

// q2
echo "\n";
$day1 = new DateTime("1992-04-25");
$day2 = new DateTime();
$diff =  $day1->diff($day2);
echo 'あの日から'.$diff -> days. '日経過しました。';
echo "\n";




?>