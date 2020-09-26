<!DOCTYPE html>
<?php
     $lessonname = "Introduction";
     $Name = "Sara Ibrahim Saad";
     $Age = 29;
     $Faculty = "Science";
     $Yearofgraduation = 2014;
     $course = "<ul>";
     $Course .= "<li>Html</li>";
     $course .= "<li>css</li>";
     $Course .= "<li>php</li>";
     $Course .= "</ul>";
     $Supervisor = "Eng.Amr";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $Supervisor; ?>/>
    </head>
    <body> 
        <h1><?php echo $lessonname; ?></h1>
        <p><?php echo $Supervisor ; ?></p>
        <h2>Courses</h2>
        <?php echo $course; ?>
    </body>
</html>