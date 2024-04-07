<head>
    <title>Nosotros</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .list-group-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f9f9f9;
            justify-content: space-between;
        }

        .btn2 {
            background-color: red;
            animation: rainbow 5s infinite;
            border-radius: 10px;
            border-color: transparent;
            padding: 15px 30px;
            font-size: 20px;
            width: 200px;
        }

        @keyframes rainbow {
            0% {background-color: red;}
            14% {background-color: orange;}
            28% {background-color: yellow;}
            42% {background-color: lime;}
            57% {background-color: blue;}
            71% {background-color: indigo;}
            85% {background-color: violet;}
            100% {background-color: red;}
    </style>
</head>
<body>
    <h1>Sobre Nosotros</h1>
    <ul class="list-group">
        <li class="list-group-item">Josue David Lopez Dubon SMSS117422</li>
        <li class="list-group-item">Alfredo Antonio Arana Castro SMSS094422</li>
        <li class="list-group-item">Jose Marvin Gonzalez Vigil SMSS070522</li>
        <li class="list-group-item">Daniela Abigail Mendez Rodriguez SMSS069122</li>
        <li class="list-group-item">Jonathan Alexander Carrillo Valencia SMSS006222</li>
    </ul>
    <button class=btn2 onclick="window.location='{{ url('/index') }}'">Regresar al inicio</button>
</body>
</html>