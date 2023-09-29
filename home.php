
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|PHP Motors</title>
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <link rel="stylesheet" href="css/medium.css" media="screen">
    <link rel="stylesheet" href="css/large.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">

    </div>
    <header>
    
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?> 
      
    </header>
    <nav>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; ?> 
 
    </nav>
    
    
    <main>
            <h1>Welcome to PHP Motors!</h1>
            <div class="pramaryMain">

                <div id="wan">
                    <p class="DMC">
                        <strong>DMC Deloean</strong><br>
                        Cup holders<br>
                        Superman doors<br>
                        Fuzzy dice!
                    </p>
                </div>
                <div id="thu" class="delorean-img">
                    <img id="delorean" src="./images/delorean.jpg" alt="car">
                </div>

                <div id="dre" class="own-img">
                <img id="own-today" src="./images/site/own_today.png" alt="own">
                </div>

        </div>
        <div class="secondayMain">
            
                <div class="reviews">
                    <h2>DMC Delorean Reviews</h2>
                    <ul id="reviews">
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride in the road." (4/5)</li>
                        <li>"I'm feelig Marty Mcfly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (4.5/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </ul>
                </div>

                
                <div class="upgrades">
                <h2>DMC Delorean Reviews</h2>
                    <div class="upgrade-img">
                        <div class="img-container">
                        <div class="img-wrapper">
                                <img class="img4" src="./images/upgrades/flux-cap.png" alt="">
                                </div>
                                <div class="img-label lbl1"><a href="#">Flux Capacitor</a></div>
                        
                        </div>
                        <div class="img-container">
                        <div class="img-wrapper">
                                <img class="img4" src="./images/upgrades/flame.jpg" alt="">
                                </div>
                                <div class="img-label"><a href="#">Flame Decals</a></div>
                        
                        </div>
                        <div class="img-container">
                        <div class="img-wrapper">
                                <img class="img4" src="./images/upgrades/bumper_sticker.jpg" alt="">
                                </div>
                                <div class="img-label lbl3"><a href="#">Bumper Sticker</a></div>
                        
                        </div>

                        <div class="img-container">
                            <div class="img-wrapper">
                                <img class="img4" src="./images/upgrades/hub-cap.jpg" alt="">
                                </div>
                                <div class="img-label lbl4"><a href="#">Hub Cap</a></div>
                        </div>
                    </div>
                </div>
            </div>
    

     </main>
    <hr>
    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?> 
    </footer>
</body>
</html>
