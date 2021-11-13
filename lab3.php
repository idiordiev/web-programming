<!DOCTYPE html>

<html lang="ua">
    <head>
        <meta charset="utf-8" lang="ua"/>
        <title>Звіт основи веб-програмування</title>
        <link
                href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Roboto:wght@300;400&display=swap"
                rel="stylesheet">
        <link rel="stylesheet" href="styles.css"/>
        <script src="scripts.js"></script>
    </head>

    <body>
        <header class="site-header">
            <!--Шапка сайта-->
            <h2>ЗВІТИ З ЛАБОРАТОРНИХ РОБІТ</h2>
            <h2>З ДИСЦИПЛІНИ «ІНТЕРНЕТ-ТЕХНОЛОГІЇ ТА ПРОЕКТУВАННЯ WEB-ЗАСТОСУВАНЬ»</h2>
            <h4>Бригада №7. Студенти групи ІС-03: Духовний Д., Діордєв І., Пархоменко О., Соловйова Ю.</h4>

            <!--Навигация по лабам-->
            <nav class="lab-navigation">
                <a class="top-button" href="lab1.php">Лабораторна робота №1</a>
                <a class="top-button" href="lab2.php">Лабораторна робота №2</a>
                <a class="top-button" href="lab3.php">Лабораторна робота №3</a>
                <a class="top-button" href="lab4.php">Лабораторна робота №4</a>
                <a class="top-button" href="lab5.php">Лабораторна робота №5</a>
                <a class="top-button" href="lab6.php">Лабораторна робота №6</a>
                <a class="top-button" href="lab7.php">Лабораторна робота №7</a>
                <a class="top-button" href="lab8.php">Лабораторна робота №8</a>
                <a class="top-button" href="lab9.php">Лабораторна робота №9</a>
            </nav>
        </header>

        <aside class="sidebar">
            <button class="side-button-large" onclick="loadText('lab3/task.html')">Тема, Мета, Розташування</button>
            <button class="side-button-large" onclick="loadText('lab3/maket-overview.html')">Зовнішний вигляд макету</button>

            <details>
                <summary>HTML - код макету</summary>
                <button class="side-button-small" onclick="loadText('lab3/markup-table.html')">Розмітка сторінки за допомогою таблиць</button>
                <button class="side-button-small side-button-small-tall" onclick="loadText('lab3/markup-float.html')">
                    Розмітка сторінки за допомогою плаваючих блоків</button>
                    <button class="side-button-small side-button-small-tall" onclick="loadText('lab3/personal-site.html')">
                        Розмітка сторінки за допомогою flexbox</button>
            </details>

            <button class="side-button-large" onclick="loadText('lab3/conclusion.html')">Висновки</button>
        </aside>

        <main>
            <div class="main-view" id="text-field"></div>
        </main>
    </body>
</html>