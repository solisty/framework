<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars(env('APP_NAME')); ?></title>
</head>

<body>
    <h1>
        <?php echo htmlspecialchars($message); ?>
    </h1>
    <div>
        <a href="<?php echo htmlspecialchars(route('yes')); ?>">refresh</a>
    </div>
</body>

</html>