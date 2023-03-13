<html>
<head>
    <title>This is the way</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Time</p>
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        $currentTime = date('h:i:s');
        $hour = date("h");
        if ($hour > 6 && $hour < 12){
            $dir = 'Assets/';
            $bg = glob($dir . '*.png');
            ?>
            <body style="background: url(Assets/morning.png); background-size: cover; background-attachment: fixed;" >
        <?php
        } elseif ($hour > 12 && $hour < 18){
        ?>
        <body style="background: url(Assets/afternoon.png); background-size: cover; background-attachment: fixed;">
        <?php
        } elseif ($hour > 12 && $hour < 18){
            ?>
            <body style="background: url(Assets/afternoon.png); background-size: cover; background-attachment: fixed;">
            <?php
            }
            echo date("h:i")
            ?>
            
        
</body>
</html>