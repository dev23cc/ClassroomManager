<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Classrooms</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }
    </style>
</head>
<body>
List of Classrooms
<?php

    $obj = new Classroom();
    echo $obj->getClassroomName();
?>
</body>
</html>