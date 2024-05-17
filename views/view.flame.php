<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% env('APP_NAME') %}</title>
</head>

<body>
    <h1>
        {% $message %}
    </h1>
    <div>
        <a href="{% route('yes') %}">refresh</a>
    </div>
</body>

</html>