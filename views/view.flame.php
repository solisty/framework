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
            <a href="{% route('home', 1) %}">{% $user->name %}</a>
        </div>
    </header>

    <script>
        axios.get("{% route('api') %}").then(res => {
            console.log(res.data)
        })
    </script>
</body>

</html>