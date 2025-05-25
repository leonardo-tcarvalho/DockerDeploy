<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Deploy</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
        }

        .title {
            color: #2c3e50;
            margin: 0 0 15px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>Docker Deploy</h1>
            <p>Deploy no Servidor de Teste</p>
        </div>
    </header>

    <main>
        <div class="card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="1" y="3" width="22" height="18" rx="2" ry="2"></rect>
                    <line x1="10" y1="3" x2="10" y2="21"></line>
                </svg>
            </div>
            <h2 class="title">Servidor Ativo</h2>
            <p>O ambiente Docker está funcionando corretamente.</p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Docker Deploy. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>