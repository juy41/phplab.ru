<?php include __DIR__ . '/../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>
    <form method="post" action="<?= e($_SERVER['REQUEST_URI']); ?>">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name    = e($_POST['name']);
        $email   = e($_POST['email']);
        $message = e($_POST['message']);
        echo "<p>Спасибо, {$name}! Мы получили ваше сообщение.</p>";
    }
    ?>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>
