<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Webpage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Simple PHP Webpage</h1>
    </header>

    <section>
        <h2>Welcome to my simple PHP webpage!</h2>
        <p>This is a basic example of an HTML and PHP webpage.</p>
        <p>Current date: <?php echo date('Y-m-d'); ?></p>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Simple PHP Webpage</p>
    </footer>
</body>
</html>
