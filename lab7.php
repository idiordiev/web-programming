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
            <button class="side-button-large" onclick="loadText('lab7/description.html')">Постановка задачі</button>
            <button class="side-button-large" onclick="loadText('lab7/obj-description.html')">Опис обєктів предметної області</button>
            <button class="side-button-large" onclick="loadText('lab7/info-model.html')">Інфологічна модель. Опис моделі</button>
            <button class="side-button-large" onclick="loadText('lab7/data-model.html')">Даталогічна модель. Звязки між таблицями</button>
            <button class="side-button-large" onclick="loadText('lab7/db-realise.html')">Реалізація БД</button>
            <button class="side-button-large" onclick="loadText('lab7/db-add-remove.html')">Введення, виведення даних в БД</button>
            <button class="side-button-large" onclick="loadText('lab7/conclusion.html')">Висновки</button>
        </aside>

        <main>
            <div class="main-view" id="text-field"></div>
        </main>
    </body>
</html>