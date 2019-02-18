<?php

$num=empty($_POST['num1'])?"":$_POST['num1'];
$sum=empty($_POST['num2'])?"":$_POST['num2'];
for($num=$num;$num<=$sum;$num++){
    $i=floor($num/100);
    $j=floor($num/10)%10;
    $k=floor($num%10);
    $sum=$i*$i*$i+$j*$j*$j+$k*$k*$k;
    if($num==$sum){
        echo $num."是水仙花";
    }
}

//台阶
/*$n=5;
for ($i=1;$i<=$n;$i++){
    if($i*$i==$n){
        return "有2中走法";
    }
}
return "只有一种走法";*/


//斐波那契数列
/*$n=20;
$a=1;
$b=1;
echo $a." ".$b." ";
for ($i=1;$i<=$n;$i++){
    $c=$a+$b;
    $a=$b;
    $b=$c;
    echo $c." ";
}*/

//最先出现3次的字符
/*$str="abcdefg";
$aa=substr($str,0,3);
echo $aa;*/

//回文字符串
/*$str="abba";
$a=strrev($str);
if($str==$a){
    echo "是回文字符串";
}else{
    echo "不是";
}*/

//对饮字母
/*$i=4;
if($i==1){echo "a";}
if($i==2){echo "b";}
if($i==3){echo "c";}
if($i==4){echo "d";}
if($i==5){echo "e";}
if($i==6){echo "f";}
if($i==7){echo "g";}*/

?>