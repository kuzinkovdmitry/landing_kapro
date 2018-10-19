<? 
echo "<link rel='stylesheet' href='style.css'>";

$adminemail="hxh@ukr.net";  // e-mail админа 

$backurl="index.html";  // На какую страничку переходит после отправки письма 
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$email=$_POST['email'];

$phone=$_POST['phone']; 
 
$msg=$_POST['comment']; 
 
 
$msg=" 
Имя: $name

E-mail: $email

Телефон: $phone

Комментарий: $msg
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "Сообщение от $name", "$msg"); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
 
<body style='
    background-color:#C0C0C0;
    text-align: center;
    font-family: Exo_Thin;
    src: url(fonts/exo-thin.ttf);
'>
    
        <span style='
            position: fixed;
            width: 60px;
            height: 60px;
            background: url(images/oval.svg) center center no-repeat;
            background-size:60px;    
            margin: -83px 0 0 -16px;
        '>
        </span>

            <p style='
                height: 2px;
                color:#000;
                font-size:43pt;
                text-align:center;
                line-height:35px;
                font-family: Exo_Thin;
                margin-top: 179px;
            '>
                Sending a message...
            </p>
            <p style='
                height: 100px;
                color:#000;
                font-size:25pt;
                text-align:center;
                line-height:35px;
                font-family: Exo_Thin;
            '>
                Please wait
            </p>
    
</body>
";



exit; 
 
?>




















