<?php
$menuItems = [
    'Главная'   => '/index.php',
    'О нас'     => '/pages/about.php',
    'Контакты'  => '/pages/contact.php'
];
$current = $_SERVER['REQUEST_URI'];
?>
<header>
    <nav>
        <ul>
            <?php foreach ($menuItems as $title => $url): ?>
                <li>
                    <a href="<?= $url ?>" <?= $current === $url ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
