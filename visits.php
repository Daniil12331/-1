<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
    <form>
    <?php
    $cookieName = "pageVisits";
    if (isset($_COOKIE[$cookieName])) {
     $visits = $_COOKIE [$cookieName] +1; 
    }
    else {
    $visits = 1;
    setcookie($cookieName, $visits, time() +(7 * 24 * 60));
    echo "Вы посетили эту страницу $visits";
    }
    ?>
</form>
</body>
</html>