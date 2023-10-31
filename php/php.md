# Introduction to PHP for C Programmers

PHP (Hypertext Preprocessor) is a server-side scripting language widely used for web development. If you're a C programmer, you'll find PHP to be both familiar and different. This quick guide will help you bridge the gap and get started with PHP.

## PHP Syntax: A Kinship

At its core, PHP shares similarities with C in terms of syntax and control structures. You'll encounter familiar elements like loops, conditionals, and variables. For instance:

```php
// PHP
$variable = 42;
if ($variable > 10) {
    echo "Variable is greater than 10";
} else {
    echo "Variable is not greater than 10";
}
```
This PHP code resembles C code, demonstrating the use of variables and conditionals.

### foreach Loops

```php
foreach ($array as $value) {
    echo $value;
}
```


## Script Execution
In C, you compile your code before execution. PHP, on the other hand, is an interpreted language. PHP scripts are processed on the server, generating dynamic HTML content that's sent to the client's browser.

## Variable Declarations
PHP variables start with a dollar sign ($) and don't require explicit data type declarations. For example:

```php
$integerVar = 42;
$stringVar = "Hello, PHP!";
```
PHP infers data types based on context.


## Data Types
PHP supports various data types, including integers, strings, arrays, and more. This is similar to C, but PHP's type system is more flexible.

## Functions
Functions in PHP are defined and used much like C functions. Here's a simple example:

```php
function add($a, $b) {
    return $a + $b;
}
$result = add(2, 3); // Result is 5
```
## Arrays
PHP arrays are versatile and resemble C arrays in some ways. However, PHP arrays can hold mixed data types and have dynamic sizing.

## Script Embedding
PHP scripts are often embedded within HTML, allowing you to mix logic and presentation seamlessly. This is a significant difference from C, where you typically keep code and presentation separate.

## Key Differences
While PHP shares similarities with C, there are crucial differences to keep in mind:

- PHP is a scripting language primarily used for web development.
- PHP is loosely typed, allowing flexibility but requiring careful variable handling.
- PHP emphasizes web-related tasks like handling HTTP requests, databases, and HTML generation.









# MySQL

Open a terminal and run the following commands to install Apache, MySQL, and PHP on your Ubuntu system:






































# Building a Dynamic To-Do List Website

Create a new directory for your project and name it, e.g., "ToDoList."

Inside the project directory, create the following files:

- index.php: The main PHP file to display the to-do list.
- functions.php: A PHP file to define functions for adding and displaying to-do items.
- style.css: A CSS file for basic styling.
- config.php: A PHP file to configure your database connection (optional if you want to save to-do items in a database).

create `function addTodoItem($item) ` in `functions.php` to add a to-do item to the database.

create `function displayTodoItems()` in `functions.php` to fetch and display to-do items from the database.

`index.php`
```php
<?php
// Include necessary files
require_once 'functions.php';
require_once 'config.php'; // If you're using a database

// Check if a to-do item was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todoItem = $_POST['todoItem'];
    if (!empty($todoItem)) {
        // Call a function to add the to-do item (you can define this in functions.php)
        addTodoItem($todoItem);
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

```

In `style.css`, add basic styling to make your to-do list visually appealing.

```css
body {
    font-family: Arial, sans-serif;
    text-align: center;
}

form {
    margin: 20px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    background-color: #f2f2f2;
    margin: 5px 0;
    padding: 5px;
}
```

Run it with `php -S localhost:8000` and open `http://localhost:8000` in your browser.

You can use the flag `-d error_reporting=E_ALL` to display all errors and warnings.



