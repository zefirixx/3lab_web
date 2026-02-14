<?php session_start(); ?>

<?php if(isset($_SESSION['formData'])): ?>
    <p>Данные из сессии:</p>
    <ul>
        <li>Имя: <?= $_SESSION['formData']['name'] ?></li>
        <li>Год рождения: <?= $_SESSION['formData']['birthyear'] ?></li>
        <li>Секция: <?= $_SESSION['formData']['section'] ?></li>
        <li>Сертификат: <?= $_SESSION['formData']['certificate'] ?></li>
        <li>Форма участия: <?= $_SESSION['formData']['participation'] ?></li>
    </ul>
<?php else: ?>
    <p>Данных пока нет.</p>
<?php endif; ?>

<a href="form.html">Заполнить форму</a> |
<a href="view.php">Посмотреть все данные</a>
