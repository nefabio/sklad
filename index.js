//дополнительная проверка
var security = prompt('Введите ваш пароль');
if (security != "loh") {
    alert('Неверный пароль');
    window.location.href="index.php";
}