<?php
// ❌ Захардкоженные учетные данные — небезопасно!
$valid_username = "admin";
$valid_password = "olololpass213!@#41QWE";

// Укажи здесь домен (включая протокол), куда должен отправляться/куда редиректим
// Например: "http://localhost:8080" или "https://example.com"
$domain = "https://db.kcell.kz";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        // Простой redirect на /dashboard.php на указанном домене
        header("Location: {$domain}/dashboard.php");
        exit;
    } else {
        $error = "❌ Неверный логин или пароль";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Небезопасный логин</title>
</head>
<body>
    <h3>Login (insecure)</h3>

    <!-- форма отправляется на конкретный домен -->
    <form method="POST" action="<?php echo htmlspecialchars($domain . '/insecure_login.php'); ?>">
        <label>Логин:</label><br>
        <input type="text" name="username" value=""><br><br>

        <label>Пароль:</label><br>
        <input type="password" name="password" value=""><br><br>

        <button type="submit">Войти</button>
    </form>

    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <p>Подключение к домену: <?php echo htmlspecialchars($domain); ?></p>
</body>
</html>
