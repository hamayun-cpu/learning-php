<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>
    <h1>My Tasks</h1>
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