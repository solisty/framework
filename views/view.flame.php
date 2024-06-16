<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <title>{% env('APP_NAME') %}</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            Solisty Framework
        </h1>

        <div>
            <a href="{% route('home') %}">refresh</a>
        </div>
    </header>

    <script>
        axios.post("{% route('api') %}")
    </script>
</body>

</html>