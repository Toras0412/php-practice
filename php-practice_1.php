<?php
// Q1 変数と文字列

$name = '「浅井」';
echo '私の名前は'.$name.'です。';

// Q2 四則演算

$num = 5*4;
echo $num;
echo '<br>';
echo $num / 2;


// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
$time = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、'.$time.'です。';


// Q4 条件分岐-1 if文

$device = 'mac';

if ($device == 'windows' || $device == 'mac') {
    echo '使用OSは、'.$device.'です。';
} else {
      echo'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 18;

$message = ($age >= 18) ? '成人':'未成年';

echo ($message.'です。');


// Q6 配列
$kantos = ['群馬県','茨城県','栃木県','千葉県','埼玉県','東京都','神奈川県'];

echo $kantos[2].'と'.$kantos[3].'は関東地方の都道府県です。';


// Q7 連想配列-1

$syozaiti = ['東京都' => '新宿区', '神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市',
             '栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];

foreach ($syozaiti as $ken => $KentyouSyozaiti){
    echo $KentyouSyozaiti."\n";
}

// Q8 連想配列-2
foreach ($syozaiti as $ken => $KentyouSyozaiti){
    if($ken == '埼玉県'){
        echo $ken.'の県庁所在地は、'.$KentyouSyozaiti.'です。';
    }
 }

 
// Q9 連想配列-3

foreach ($syozaiti as $ken => $KentyouSyozaiti){
    if( in_array($ken, $kantos)){
        echo "\n".$ken.'の県庁所在地は、'.$KentyouSyozaiti.'です。';
        
    }else {
        echo  "\n".$ken.'は関東地方ではありません。';
        }
}


// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。';
}

echo "\n";
hello('金谷');
echo "\n";
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
  
}

echo "\n".calcTaxInPrice(1000);
echo "\n".calcTaxInPrice(2000);

// Q12 関数とif文
function distinguishNum($number)
{
  if($number % 2 == 1 ){
      return $number.'は奇数です。';
  }else {
     return $number.'は偶数です。';
   }
}

echo "\n".distinguishNum(11);
echo "\n".distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($seiseki)
{
    switch ($seiseki) {
        case 'A':
        case 'B':
            return '合格です。';
            break;
            
        case 'C':
            return '合格ですが追加課題があります';
            break;
            
        case 'D':
            return '不合格です。';
            break;
            
        default:
            return '判定不明です。講師に問い合わせてください。';
            break;
    }
}
echo "\n".evaluateGrade('A');
echo "\n".evaluateGrade('E');

?>