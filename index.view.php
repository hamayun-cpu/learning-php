<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            
            <li>
                <?= $task->description; ?>
                <?php 
                    if($task->completed) {
                        echo "Completed";
                    }
                ?>
            </li>
            
        <?php endforeach; ?>
    </ul>
</body>
</html>