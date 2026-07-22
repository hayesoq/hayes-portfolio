<?php
if (isset($_GET['page'])) {
    $current = $_GET['page'];
} else {
    $current = 'home';
}

echo '
    <li class="smooth-menu '.($current == 'home' ? 'active':'').'"><a href="index.php?page=home">home</a></li>
    <li class="smooth-menu '.($current == 'about' ? 'active':'').'"><a href="index.php?page=about">about</a></li>
    <li class="smooth-menu '.($current == 'education' ? 'active':'').'"><a href="index.php?page=education">education</a></li>
    <li class="smooth-menu '.($current == 'hobbies' ? 'active':'').'"><a href="index.php?page=hobbies">hobbies</a></li>
    <li class="smooth-menu '.($current == 'funsite' ? 'active':'').'"><a href="index.php?page=funsite">fun site</a></li>
    <li class="smooth-menu '.($current == 'contact' ? 'active':'').'"><a href="index.php?page=contact">contact</a></li>';
?>
