<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Gestion des employés</title>

    <!-- Style de base -->
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
            text-align: center;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #2c3e50;
            display: flex;
            justify-content: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table thead {
            background-color: #34495e;
            color: white;
        }

        table th,
        table td {
            padding: 12px 10px;
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e6f0fa;
            color: black;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #666;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h2>Gestion des employés</h2>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© {{ date('Y') }} - Application Laravel</p>
    </footer>

</body>
</html>
