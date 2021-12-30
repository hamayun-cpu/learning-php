<?php require 'views/partials/nav.php'; ?>
    
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

<?php require 'views/partials/footer.php'; ?>