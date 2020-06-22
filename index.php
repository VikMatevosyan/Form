<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

//1. Շաբաթվա օրերը երկու լեզվով
//• Ստեղծել երկչափ զանգված, որի առաջին երկու տարրերի բանալիներն են 'am' և *'en'*։ Առաջին բանալու արժեքը զանգված է, որը պարունակում է շաբաթվա օրերի անունները հայերենով, երկրորդը՝ անգլերենով։
//• Ստեղծել $lang անունով փոփոխական, որի արժեքը կա՛մ 'am' է, կա՛մ 'en', և $day անունով փոփոխական, որի արժեքը 0-ից 6 միջակայքի ցանկացած թիվ է։ Արտածել այն շաբաթվա օրվա անունը, որը համապատասխանում է տրված թվին՝ տրված լեզվով։ Օրինակ՝
//$lang = 'am'; $day = 3 կարտածվի՝ չորեքշաբթի
//$lang = 'en'; $day = 0 կարտածվի՝ sunday

//$arr = [
//'am'=>[1=>'երկուշաբթի','երեքշաբթի','չորեքշաբթի','հինգշաբթի','ուրբաթ','շաբաթ','կիրակի'],
//'eng'=>[1=>'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
//];
//$lang = "am";
//$day = 3;
//echo $arr[$lang][$day];
//
//?>

<?php
//2․ Գույները երկու լեզվով
//• Տրված է $arr զանգվածը։ Օգտագործելով foreach ցիկլը՝ առանձնացրե՛ք անգլերեն բառերը $en զանգվածում, իսկ հայերեն բառերը՝ $am

//$arr = ['green'=>'կանաչ', 'red'=>'կարմիր', 'blue'=>'կապույտ'];
//$am = [];
//$en = [];
//foreach ($arr as $key => $val) {
//$en[] = $key;
//$am[] = $val;
//}
//var_dump($am,$en);
?>


<?php
////3․ Պատահական կարգով գեներացված տող
////• Գրել ֆունկցիա, որը կվերադարձնի լատինական տառերից կազմված 6 սիմվոլանոց տող այնպես, որ տառերը չկրկնվեն։
////Օգտվել՝ str_shuffle , range ֆունկցիաներից
//
//$letters = range('a','z');
//echo substr(str_shuffle(implode("",$letters)),0,6);
//?>

<?php
//5.
//• Տրված է ցանկացած թիվ՝ *$num=1000*։ Գրել ֆունկցիա, որը կբաժանի տրված թիվը 2-ի այնքան,
//մինչև բաժանման արդյունքը չդառնա 50-ից փոքր, և կվերադարձնի իտերացիայի քանակը
//(քանի անգամ է պետք բաժանել՝ տրված արդյունքին հասնելու համար)։ Խնդիրը լուծել սկզբում while-ով, հետո for-ով։


//function f($num) {
//    $count = 0;
//    while ($num/2 >= 50) {
//        $num /= 2;
//        $count++;
//    }
//    return $count;
//}
//echo f(1000);
//?>

<?php
//6.
//• Տրված է '1234567890' տողը։ Առանց ցիկլ օգտագործելու՝
//ստացե՛ք հետևյալ տողը՝ '12-34-56-78-90' (կարդում ենք str_split ֆունկցիայի մասին)

//$str = "1234567890";
//print_r(implode(str_split($str,2), "-"));

?>

<?php
//7.
//• Տրված է 'html, <b>php</b>, js'. Գրել կոդ, որը կտպի տողը այնպես, ինչպես կա․ այսինքն՝ բրաուզերը չի ցուցադրի <b>
//թեգում գրվածը հաստ տառերով
//(կարդում ենք htmlspecialchars, strip_tags ֆունկցիաների մասին)
//	echo htmlspecialchars('html, <b>php</b>, js');

//$str = ("lorem <b>ipsum</b> sit amet");
//$x = htmlspecialchars($str);
//echo $x;
?>
<?php
//8.
//• Տրված է անգլերենի այբուբենի ցանկացած տառ։ Գրել ֆունկցիա,
//որը կպարզի՝ մեծատա՞ռ է, թե՞ փոքրատառ (կարդում ենք chr, ord ֆունկցիաների մասին)

//$x = "j";
//function upOrLow ($x) {
//    $upA = ord("A");
//    $lowA = ord("a");
//    $upZ = ord("Z");
//    $lowZ = ord("z");
//    $xn = ord($x);
//
//    if ($xn > $upA && $xn < $upZ) {
//        return "uppercase";
//    }
//    else
//        if ($xn > $lowA && $xn < $lowZ) {
//            return "lowercase";
//    }
//        return "you gave a non-english symbol";
//}
//
//echo upOrLow("h");
?>

<?php
//9.
//• Տրված է զանգված՝ [' a ', ' b ', ' с '] : Գրել կոդ, որը կստանա նոր զանգված, որի տարրերտ կլինեն առանց առաջին և
//վերջին space-երի (կարդում ենք array_map, trim ֆունկցիաների մասին)

//$str = [' a ', ' b ', ' с '];
//$result = array_map("trim", $str);
//var_dump($result);

?>

<?php
//10.
//• Առանց ցիլկ օգտագործելու ստանալ հետևյալ զանգվածը՝ ['a'=>1, 'b'=2... 'z'=>26] (կարդում ենք array_combine ֆունկցիայի մասին)
//Show less

//$key = range("a","z");
//$val = range(1,26);
//$result = array_combine($key,$val);
//print_r($result);

?>

<?php
//11.
//Թվի ֆակտորիալի ռեկուրսիայով լուծումը

//function factorial ($x) {
//    if ($x == 1) {
//        return 1;
//    }
//    return factorial ($x-1) * $x;
//}
//echo factorial(5);
?>

<?php
//12.
//Թիվը ֆիբոնաչի է թե ոչ, ռեկուրսիայի միջոցով
//
//function fib ($x) {
//    if ($x == 0 ||$x == 1) {
//        return $x;
//    }
//    return fib ($x-1) + fib ($x-2);
//}
//echo fib(5);

?>

<?php
//13.
//Գրել ֆունկցիա, որը կգտնի տրված զանգվածի ամենամեծ տարրը, օգտագործելով ռեկուրսիա

//function arrMax ($arr) {
//    if (count($arr)==2) {
//        if ($arr[0] > $arr[1]) {
//            return $arr[0];
//        }
//        return $arr[1];
//    }
//    $lastElem = $arr[count($arr)-1];
//    $sliced = array_slice($arr,0,-1);
//
//       if ($lastElem > arrMax($sliced)) {
//           return $lastElem;
//       }
//       return arrMax($sliced);
//
//}
//echo arrMAx([100,5,2,6]);
//?>

<?php
//14.
//Տրված է ամսաթիվ հետևյալ ֆորմատով՝ '2025-12-31'։
// Օգտագործելով strtotime և date ֆունկցիաները, վերափոխեք այն հետևյալ ֆորմատի՝ '31-12-2025'
//echo date('d-m-Y', strtotime('2025-12-31'));
?>

<?php
//15.
//Գրել ֆունկցիա, որը կպարզի, թե շաբաթվա ո՞ր օրն է եղել 100 օր առաջ։
//echo date('w', strtotime("-100 days"));
?>

<!--16.Ստեղծել ֆորմա, որի միջոցով կստանաք user-ի անունը։ Ավելացրեք checkbox:-->
<!--Եթե այն նշված է, ապա արտածեք "Hello {USER-Ի ԱՆՈՒՆ}" , հակառակ դեպքում՝  "Bye {USER-Ի ԱՆՈՒՆ}"-->
<!--<form method="POST">-->
<!--   Name: <input type="text"><br><br>-->
<!--    <input type="checkbox" name="name" value="checkbox">-->
<!--    <input type="submit" value="войти" name="click">-->
<!--</form>-->

<?php
//if(!empty($_POST)) {
//    if(!empty($_POST['name'])) {
//        $name = $_POST['name'];
//    } else {
//        $name = "";
//    }
//
//    if (isset($_POST['click']) && $_POST['click'] == 'yes') {
//        echo "<h2>Hello $name </h2>";
//    }
//    {
//        echo "<h2>Bye $name </h2>";
//    }
//}
//
//?>

<!--17.Ստեղծել ֆորմա, և դրա միջոցով հարցրեք user-ին,-->
<!--թե նա նշված լեզուներից որո՞նց է տիրապետում՝ html, css, php, javascript։ Արտածեք այն լեզուները, որոնք ընտրել է user-ը։-->
<!---->
<!--<form method="POST">-->
<!--    <p>which of the following languages</p>-->
<!--    <label><input type="checkbox" name="lang[]" value="html">Html </label><br><br>-->
<!--    <label><input type="checkbox" name="lang[]" value="css">CSS</label> <br><br>-->
<!--    <label><input type="checkbox" name="lang[]" value="php">PHP</label> <br><br>-->
<!--    <label><input type="checkbox" name="lang[]" value="javascript">JS</label>  <br><br>-->
<!--    <input type="submit" value="submit">-->
<!--</form>-->
<?php
//if (isset($_REQUEST["lang"])) {
//    echo implode(' , ',$_REQUEST["lang"]);
//};
//?>

<!--18.Երկու radio-կոճակների միջոցով հարցրեք user-ին, արդյո՞ք նա գիտի PHP։ Արտածեք արդյունքը։ Նախօրոք տարբերակներից մեկը պետք է լինի ընտրված։-->
<!---->
<!---->
<!--<form method="POST">-->
<!--    <p>Do you know PHP?</p>-->
<!--    <label><input type="radio" name="know" checked>Yes</label> <br><br>-->
<!--    <label><input type="radio" name="know">No</label> <br><br>-->
<!--    <input type="submit" value="submit">-->
<!--</form>-->
<?php
//if (!empty($_REQUEST) && isset($_REQUEST['know'])) {
//    if ($_REQUEST['know'] == 'yes') {
//        echo "Yes";
//    } else {
//        echo "No";
//    }
//}
//?>

<!--19.Մի քանի radio-կոճակների միջոցով հարցրեք user-ի տարիքը։ Տարբերակները ստեղծեք հետևյալ կերպ՝ 20-ից փոքր, 20-25, 26-30, 30֊ից մեծ-->
<!---->
<!--<form method="POST">-->
<!--    <p>How old are you?</p>-->
<!--    <label><input type="radio" name="age" checked>1-20</label><br><br>-->
<!--    <label><input type="radio" name="age">20-25</label> <br><br>-->
<!--    <label><input type="radio" name="age">25-30 </label><br><br>-->
<!--    <label><input type="radio" name="age">30 > </label> <br><br>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//if (isset($_REQUEST['age'])) {
//echo $_REQUEST["age"];
//}
//?>

<!--20.Select-ի միջոցով հարցրեք user-ի տարիքը։ Տարբերակները ստեղծեք հետևյալ կերպ՝ 20-ից փոքր, 20-25, 26-30, 30֊ից մեծ-->

<!--<form method="post">-->
<!--    <label for="age">How old are you?</label>-->
<!--    <select name="ages" id="age">-->
<!--        <option value="1-20">1-20</option>-->
<!--        <option value="20-25">20-25</option>-->
<!--        <option value="25-30">25-30</option>-->
<!--        <option value="30 > ">30 > </option>-->
<!--    </select>-->
<!--</form>-->
<?php
//if (isset($_REQUEST['age'])) {
//echo $_REQUEST["age"];
//}
//?>

<!--21.Select-ի միջոցով հարցրեք user-ին, թե նա նշված լեզուներից որո՞նց է տիրապետում՝ html, css, php, javascript։-->
<!--Արտածեք այն լեզուները, որոնք ընտրել է user-ը։-->
<!---->
<!--<form action="index.php" method="GET">-->
<!--    <label for="lang">which of the following languages do you know?</label>-->
<!--    <select name="language[]" id="lang" multiple>-->
<!--    <option value="html">Html</option>-->
<!--    <option value="css">CSS</option>-->
<!--    <option value="php">PHP</option>-->
<!--    <option value="javascript"> JS</option>-->
<!--    </select>-->
<!--</form>-->
<?php
//if (isset($_REQUEST["language"])) {
//echo implode(" , ",$_REQUEST["language"]);
//}
//?>


<section>
    <div class="signin">

        <form action="">
            <div class="img">
                <img src="Computer-Icons-User-Profile-Clip-Art-Web-User-Icon-720x720.jpg" alt="">
            </div>
            <div>
                <label for="login" class="log">Login</label><br>
                <input type="text" id="login" name="login" placeholder="Email or login"><br>
            </div>
            <div>
                <p>You can use Email or login</p>
            </div>
            <div>
                <label for="password" class="log">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="sign-login">
                <input type="submit" value="Sign in" class="sign-log">
            </div>
        </form>
    </div>
    <div class="signup">
        <form action="" method="post">
            <div class="reg">
               <div>
                   <h2>Registration</h2>
               </div>
                <div class="reg-btn">
                    <div>
                        <a href="" class="rus">Russian</a>
                    </div>
                    <div>
                        <a href="" class="eng">English</a>
                    </div>
                </div>
            </div>
            <div class="names">
               <div class="first-name">
                   <h4>First name</h4>
                   <label class="<?= (empty($_REQUEST['first-name']) ||
                       (strlen($_REQUEST['first-name']) < 2 || strlen($_REQUEST['first-name']) > 30))? "warning" : "" ?>">
                       <input type="text" name="first-name" placeholder="Jane"
                              class="input <?= empty($_REQUEST['first-name']) ? "warning" : ""?>"
                              value="<?= !empty($_REQUEST['first-name']) ? $_REQUEST['first-name'] : "" ?>">
                       <?php
                       if (!empty($_REQUEST)) {
                           if(empty($_REQUEST['first-name'])) {
                               echo "<span>'First Name' required.</span>";
                           } else {
                               $fnlength = strlen($_REQUEST['first-name']);
                               if ($fnlength < 2 || $fnlength > 30) {
                                   echo "<span>'First Name' can not be less than 2 and more than 30 characters.</span>";
                               }
                           }
                       }
                       ?>
                   </label>
               </div>
                <div class="last-name">
                    <h4>Last name</h4>
                    <label for="">
                        <input type="text" name="last-name" placeholder="Doe"
                               class="input <?= empty($_REQUEST['last-name']) ? "warning" : ""?>"
                               value="<?= !empty($_REQUEST['last-name']) ? $_REQUEST['last-name'] : ""; ?>">
                        <?php
                        if (!empty($_REQUEST)) {
                            if(empty($_REQUEST['last-name'])) {
                                echo "<span>'Last Name' required.</span>";
                            } else {
                                $fnlength = strlen($_REQUEST['last-name']);
                                if ($fnlength < 2 || $fnlength > 30) {
                                    echo "<span>'Last Name' can not be less than 2 and more than 30 characters.</span>";
                                }
                            }
                        }
                        ?>
                    </label>
                </div>
            </div>
            <div class="gender">
                <h4>Gender</h4>
                <label class="gender-inp"><input type="radio" name="gender">Male</label>
                <label class="gender-inp"><input type="radio" name="gender">Female</label>
            </div>
            <div class="nick-name">
                    <h4>Your nickname</h4>
                    <label for="">
                        <input type="text" name="nick-name" placeholder="JaneDoe"
                               class="nick-input <?= empty($_REQUEST['nick-name']) ? "warning" : ""?>"
                               value="<?= !empty($_REQUEST['nick-name']) ? $_REQUEST['nick-name'] : ""; ?>">
                        <?php
                        if (!empty($_REQUEST)) {
                            if(empty($_REQUEST['nick-name'])) {
                                echo "<span>'Username' required.</span>";
                            } else {
                                $fnlength = strlen($_REQUEST['nick-name']);
                                if ($fnlength < 3 || $fnlength > 50) {
                                    echo "<span>'Username' can not be less than 2 and more than 30 characters.</span>";
                                }
                            }
                        }
                        ?>
                    </label>
                <span>Can be used for authorization, it will be your main identity on the site, should consist only letters, numbers,
                    underscores and hyphens if this is not the first or last character.</span>
            </div>
            <div class="profile">
                <h4>Profile picture</h4>
                <input type="file"  name="filename">
                <p>It will be displayed near the nickname and on your profile page. Allowed jpg, png and if formats.</p>
            </div>
            <div class="inform">
                <h4>Information</h4>
                <textarea rows="3" name="text"></textarea>
                <span>Tell other users a bit about yourself</span>
            </div>
            <div class="email">
                <h4>Email</h4>
                <input type="email" name="email">
                <span>Use only your own Email address, in case the password is lost it will be sent an email with instructions to reset.</span>
            </div>
            <div class="pass">
                <h4>Password</h4>
                <input type="password" name="pass">
                <span>At least 4 characters. We recommend to choose a strong password to protect your account from cracking.</span>
            </div>
            <div class="sign-up">
                <input type="submit" value="Sign Up!" class="sign">
            </div>

        </form>
    </div>
</section>

<script src="script.js"></script>
</body>
</html>