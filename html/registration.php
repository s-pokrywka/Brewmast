<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/script.js" defer></script>
    <title>BREWMAST-LOG</title>
<BODY>
<div class="conteiner">
    <div class="h_title">
        Create your first beer recipt
    </div>
    <div class="form_in">
        <form action="registration" method="POST">
            <?php

            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>

                <div class="font_form">User name</div>< <input name="name" type="text" placeholder="name">


                <div class="font_form">User surname</div><input name="surname" type="text" placeholder="surname">

                <div class="font_form">Mail</div><input name="email" type="text" placeholder="mail">

                <div class="font_form">Password</div><input name="password" type="password" placeholder="password">

                <div class="font_form"> Repeat Password</div><input name="r_password" type="password" placeholder="r_password">




            <div class="f_form">
                <button type="submit">login</button>
                <button>join</button>

        </form></div>

</div>



<div class="logo">
    <img src="../img/name.svg">
    <img src="../img/logo.svg">
</div>
</div>



</BODY>



</head>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/script.js" defer></script>
    <title>BREWMAST-LOG</title>
<BODY>
<div class="conteiner">
    <div class="h_title">
        Create your first beer recipt
    </div>
    <div class="form_in">
        <form action="registration" method="POST">
            <?php

            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>

                <div class="font_form">User name</div>< <input name="name" type="text" placeholder="name">


                <div class="font_form">User surname</div><input name="surname" type="text" placeholder="surname">

                <div class="font_form">Mail</div><input name="email" type="text" placeholder="mail">

                <div class="font_form">Password</div><input name="password" type="password" placeholder="password">

                <div class="font_form"> Repeat Password</div><input name="r_password" type="password" placeholder="r_password">




            <div class="f_form">
                <button type="submit">login</button>
                <button>join</button>

        </form></div>

</div>



<div class="logo">
    <img src="../img/name.svg">
    <img src="../img/logo.svg">
</div>
</div>



</BODY>



</head>