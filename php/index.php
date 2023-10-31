<?php
// Include necessary files

// Check if a to-do item was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todoItem = $_POST['todoItem'];
    if (!empty($todoItem)) {
        // Call a function to add the to-do item (you can define this in functions.php)
        addTodoItem($todoItem);
    }
}

$todoList = [];

function addTodoItem($item)
{
    global $todoList;
    $todoList[] = $item;
}

function displayTodoItems()
{
    global $todoList;
    foreach ($todoList as $item) {
        echo "<li>$item</li>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To-Do List</title>
</head>

<body>
    <h1>My To-Do List</h1>
    <form action="index.php" method="POST">
        <input type="text" name="todoItem" placeholder="Add a new to-do">
        <button type="submit">Add</button>
    </form>

    <h2>To-Do Items</h2>
    <ul>
        <?php
        // Call a function to fetch and display to-do items
        displayTodoItems();
        ?>
    </ul>
</body>

</html>