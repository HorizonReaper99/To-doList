<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css"/>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

</head>
<body>
    <div class="list">
        <h1 class="header">To Do List</h1>

        <ul>
            <li>
                <span class="item">Do Lyndon's Work</span>
        </li>
            <a href="#" class="done-button">Mark as done</a>
            <li>
                <span class="item-done">Now</span>
            </li>
        </ul>

        <form class="items-add" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
            <input type="text" name="nameItem" placeholder="Type a new item" class="input" autocomplete="off" require>
            <input type="submit" value="Add" class="submit">
        </form>

    </div>

</body>
</html>