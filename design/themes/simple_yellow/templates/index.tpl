<!DOCTYPE html>
<html>
<head>
    <title>Тема Сакура</title>
    <style>
        body {
            background-image: url('Images/sakura.jpg'); /* Фоновое изображение */
            background-size: cover; /* Заполнение фона */
            font-family: Arial, sans-serif;
            color: #FFFFFF; /* Белый текст по умолчанию */
        }
        header {
            background-color: rgba(255, 182, 193, 0.8); /* Нежно-розовый с прозрачностью */
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            color: #FFFFFF; /* Белый текст */
        }
        nav {
            margin-top: 10px;
        }
        .nav-button {
            background-color: #FF69B4; /* Ярко-розовая кнопка */
            color: white;
            border: none;
            padding: 10px 15px;
            margin: 0 5px;
            cursor: pointer;
            text-decoration: none; /* Убираем подчеркивание */
            font-weight: bold;
            border-radius: 5px; /* Закругленные углы */
        }
        .nav-button:hover {
            background-color: #FFB6C1; /* Нежно-розовая при наведении */
        }
        .product-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            width: 200px;
            background-color: rgba(255, 255, 255, 0.9); /* Полупрозрачный белый фон для карточек */
            text-align: center;
        }
        .product-card img {
            max-width: 100%; /* Ограничение ширины изображения */
            height: auto; /* Автоматическая высота */
            border-radius: 5px; /* Закругленные углы для изображений */
        }
        .product-card h2 {
            color: #FF69B4; /* Ярко-розовый заголовок товара */
        }
        .ty-btn {
            background-color: #FFB6C1; /* Нежно-розовая кнопка */
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Мини-магазин Сакура</h1>
        <nav>
            <a href="#" class="nav-button">Главная</a>
            <a href="#" class="nav-button">Кроссовки</a>
            <a href="#" class="nav-button">Куртки</a>
            <a href="#" class="nav-button">Худи</a>
        </nav>
    </header>
    <div style="text-align: center;">
        <h2>Привет, Гит!</h2>
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="product-card">
                <img src="design/themes/sakura/Images/nike1.jpg" alt="Nike 1">
                <h2>Nike 1</h2>
                <p>Описание товара Nike 1.</p>
                <p>Цена: 1,000 руб.</p>
                <button class="ty-btn">Купить</button>
            </div>
            <div class="product-card">
                <img src="Images/nike2.jpg" alt="Nike 2"> <!-- Изображение для Nike 2 -->
                <h2>Nike 2</h2>
                <p>Описание товара Nike 2.</p>
                <p>Цена: 1,500 руб.</p>
                <button class="ty-btn">Купить</button>
            </div>
            <div class="product-card">
                <img src="Images/nike3.jpg" alt="Nike 3"> <!-- Изображение для Nike 3 -->
                <h2>Nike 3</h2>
                <p>Описание товара Nike 3.</p>
                <p>Цена: 2,000 руб.</p>
                <button class="ty-btn">Купить</button>
            </div>
        </div>
    </div>
</body>
</html>
