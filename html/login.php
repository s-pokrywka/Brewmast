<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<title>BREWMAST-LOG</title>
<BODY>
<div class="conteiner">    
<div class="h_title">
    Create your first beer recipt
</div>
<div class="form_in">
<form action="login" method="POST">
    <?php
    
    <!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<title>BREWMAST-LOG</title>
<BODY>
<div class="conteiner">    
<div class="h_title">
    Create your first beer recipt
</div>
<div class="form_in">
<form action="login" method="POST">
    <?php
    
    if(isset($messages)){
        foreach($messages as $message) {
            echo $message;
        }
    }
?>
<div class="f_form">   
    <div class="font_form">Mail</div><input name="email" type="text" placeholder="email@email.com">
</div>
<div class="f_form">  
<div class="font_form">Password</div><input name="password" type="password" placeholder="password">
</div>
<div class="f_form">  
<button type="submit">login</button>
<button>join</button>
</div>
</form></div>

</div>



<div class="logo">
    <img src="../img/name.svg">
    <img src="../img/logo.svg">
</div>
</div>



</BODY>



</head>