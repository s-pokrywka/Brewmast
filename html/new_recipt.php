<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main_page.css">
    <script src="https://kit.fontawesome.com/593c86938a.js" crossorigin="anonymous"></script>
    <title>BREWMAST-MY_Recipt</title>
<BODY>
<div class="nav_part">
    <nav>
        <img src="../img/name.svg">
        <ul>
            <li><i class="fas fa-file"></i>
                My recipts</li>
            <li> <i class="fas fa-folder-plus"></i>
                New recipt</li>
            <li> <i class="fas fa-database"></i>
                Warehouse</li>
            <li><i class="fas fa-shopping-cart"></i>
                Market</li>

            <div class="logo_nav">
                <img src="../img/logo2.svg">
            </div>
            <li><i class="fas fa-sign-out-alt"></i>
                Logout</li>


        </ul>
    </nav>
</div>
<div class="space_work">
    <div class="top_bar">
        <header>
            <a>wiki beer</a>
            <a>style beer</a>
            <img src="../img/user.jpg">
            Hi,Johe
            <img src="../img/seting.svg">
        </header>
    </div>
   
    <div class="space_main">
        <section class="space_main">
        <?php  ?>
        <form action="add_recipts" method="post" ENCTYPE="multipart/form-data">
            <label>Name</label>
            <input name="name" type="text" placeholder="name"><br>
     <!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main_page.css">
    <script src="https://kit.fontawesome.com/593c86938a.js" crossorigin="anonymous"></script>
    <title>BREWMAST-MY_Recipt</title>
<BODY>
<div class="nav_part">
    <nav>
        <img src="../img/name.svg">
        <ul>
            <li><i class="fas fa-file"></i>
                My recipts</li>
            <li> <i class="fas fa-folder-plus"></i>
                New recipt</li>
            <li> <i class="fas fa-database"></i>
                Warehouse</li>
            <li><i class="fas fa-shopping-cart"></i>
                Market</li>

            <div class="logo_nav">
                <img src="../img/logo2.svg">
            </div>
            <li><i class="fas fa-sign-out-alt"></i>
                Logout</li>


        </ul>
    </nav>
</div>
<div class="space_work">
    <div class="top_bar">
        <header>
            <a>wiki beer</a>
            <a>style beer</a>
            <img src="../img/user.jpg">
            Hi,Johe
            <img src="../img/seting.svg">
        </header>
    </div>
   
    <div class="space_main">
        <section class="space_main">
        <?php  ?>
        <form action="add_recipts" method="post" ENCTYPE="multipart/form-data">
            <label>Name</label>
            <input name="name" type="text" placeholder="name"><br>
            <label>Style beer</label>
            <input list="style" name="style">
            <datalist id="style">
               <option>1</option>
                <option>2</option>



            </datalist><br>
            <label>Volume[L]</label>
            <input name="volume" type="text" placeholder="volume"><br>
            <label>Malt</label>
            <input list="malt" name="malt">
            <datalist id="malt">
                <option value="1">
                <option value="2">
                <option value="3">
            </datalist>
            <label>kg</label>
            <input name="kg" type="text" placeholder="kg"><br>
            <label>Yeats</label>
            <input list="yeats" name="yeats">
            <datalist id="yeats">
                <option value="US-05">
                <option value="WB-06">
                <option value="FM56">
                <option value="Wyeats 1056">
            </datalist><br>
            <label>Hop</label>
            <input list="hop" name="hop">
            <datalist id="hop">
                <option value="1">
                <option value="2">
                <option value="3">
            </datalist>
            <label>g</label>
            <input name="g" type="text" placeholder="g">
            <label>min</label>
            <input name="min" type="text" placeholder="min">
            <button type="submit">wyślij</button>
            <button type="reset">reset</button>
        </form>
        </section>

    </div>
</div>
</BODY>
