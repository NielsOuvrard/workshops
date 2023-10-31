# Python











## Introduction to Python for C Programmers

Python is a high-level, interpreted programming language known for its simplicity, readability, and versatility. If you're coming from a C programming background, you'll find many differences, but you'll also discover several similarities and benefits when working with Python.

### Key Differences

- **Interpreted vs. Compiled:** Unlike C, which is a compiled language, Python is an interpreted language. This means you write code in Python, and an interpreter runs the code directly, making development faster and more interactive.

- **Dynamic Typing:** Python uses dynamic typing, allowing you to change the type of a variable during runtime. This is in contrast to C, which requires explicit type declarations.

- **Whitespace Sensitivity:** Python uses indentation (whitespace) for code blocks instead of curly braces {}. C, on the other hand, uses curly braces and semicolons to define block structures.

- **Extensive Standard Library:** Python comes with a rich standard library that provides a wide range of modules for various tasks, from file I/O to web development, making it a powerful language for many applications.

### Key Similarities

- **Algorithms and Logic:** The fundamental programming concepts like loops, conditional statements, and functions are similar in both C and Python. If you can write a loop in C, you can write one in Python.

- **Variables and Data Types:** Python shares many data types with C, such as integers, floats, and strings. However, Python's dynamic typing allows for more flexibility.

- **Memory Management:** While Python manages memory automatically, understanding memory management concepts from C can help you write more memory-efficient Python code.

- **C as an Extension:** You can integrate C code with Python using CPython, allowing you to leverage existing C libraries in your Python projects.

### Why Learn Python?

Python is a popular choice for a wide range of applications, from web development to data analysis and artificial intelligence. Learning Python can broaden your programming horizons and open up new career opportunities. Its clean and readable syntax makes it an excellent language for both beginners and experienced programmers.

In this workshop, we'll explore the key features of Python and how they relate to your C programming knowledge. We'll delve into Python's data types, control structures, functions, and more, emphasizing the aspects that differ from C and those that remain similar. By the end of this workshop, you'll be well on your way to adding Python to your programming toolkit.

Let's get started!











## Chapter 2: Variables and Data Types

In this chapter, we will explore the fundamental concepts of variables and data types in Python and compare them to what you are familiar with in C programming.

### Variables in Python

#### Variable Assignment

In Python, you can create variables without explicitly specifying their data types. This is quite different from C, where you must declare variables and specify their types. For example, in C, you might write:

```c
// C variable declaration
int number = 42;
```
In Python, it's much simpler:

```python
# Python variable assignment
number = 42
```

Dynamic Typing
Python uses dynamic typing, meaning a variable can change its data type during runtime. In C, once a variable is declared with a specific type, it can't change. Python's dynamic typing allows for more flexibility, but it also requires you to be mindful of the types your variables hold.

Common Data Types in Python
Python provides a range of data types, including:

Integers (int): Equivalent to C's int data type, but Python's integers have arbitrary precision.

Floating-Point Numbers (float): Comparable to C's float type, but Python handles floating-point arithmetic differently, often resulting in fewer precision issues.

Strings (str): Python's strings are similar to C's character arrays but much more versatile.

Lists and Tuples: Python offers two sequence types that are similar to arrays in C, but they can hold mixed data types and are more dynamic.

Data Type Conversion
In Python, you can easily convert between different data types using typecasting functions such as int(), float(), and str(). This flexibility contrasts with C, where explicit casting is often required.

```python
# Typecasting in Python
x = 42
y = float(x)  # Convert integer to float

# Typecasting in C
int x = 42;
float y = (float)x;  // Explicit casting required
```

Variable Naming Conventions
Python follows a different naming convention compared to C. Python uses snake_case for variable names (e.g., my_variable_name), while C typically uses camelCase (e.g., myVariableName) or underscores (e.g., myVariableName).

In this chapter, we have introduced Python's variable system and common data types, highlighting the differences and similarities with C. In the next chapter, we will explore control flow in Python and how it differs from C's control structures.









## Chapter 3: Control Flow

Control flow is a fundamental aspect of programming that allows you to make decisions and control the execution of your code. In this chapter, we will explore the control flow structures in Python and compare them to what you are familiar with in C programming.

### Conditional Statements

In Python, conditional statements are used to make decisions based on the truth or falsehood of expressions. Python's conditional statements are often simpler and more intuitive than C's.

#### `if`, `elif`, and `else`

In Python, you use the `if`, `elif` (short for "else if"), and `else` statements to create conditional blocks. Here's a Python example:

```python
# Python's if, elif, and else
x = 10
if x > 10:
    print("x is greater than 10")
elif x == 10:
    print("x is equal to 10")
else:
    print("x is less than 10")
```

In C, you would use the familiar if, else if, and else:

```c
// C's if, else if, and else
int x = 10;
if (x > 10) {
    printf("x is greater than 10");
} else if (x == 10) {
    printf("x is equal to 10");
} else {
    printf("x is less than 10");
}
```
### Ternary Operator

Python also has a concise ternary operator for conditional expressions, which is similar to the conditional (ternary) operator in C.

```python
# Python's ternary operator
x = 5
result = "greater than 10" if x > 10 else "less than or equal to 10"
```
```c
// C's ternary operator
int x = 5;
char *result = x > 10 ? "greater than 10" : "less than or equal to 10";
```

## Loops
Python offers two main loop structures: for and while. These loops have similarities with C loops, but the syntax is more straightforward.

`for` Loop
In Python, the for loop is primarily used for iterating over sequences (like lists) or other iterable objects.

```python
# Python's for loop
fruits = ["apple", "banana", "cherry"]
for fruit in fruits:
    print(fruit)
````

In C, you might use a for loop like this:
```c
// C's for loop
char *fruits[] = {"apple", "banana", "cherry"};
for (int i = 0; i < 3; i++) {
    printf("%s\n", fruits[i]);
}
```

`while` Loop
The while loop in Python works similarly to the while loop in C, with a condition to control the loop.

```python
# Python's while loop
count = 0
while count < 5:
    print(count)
    count += 1
```
```c
// C's while loop
int count = 0;
while (count < 5) {
    printf("%d\n", count);
    count++;
}
```

## Iterating Through Sequences
Python's `for` loop can be used to iterate through sequences, but it's often more concise and readable than C's `for` loop when working with lists, tuples, and other iterable objects.

In this chapter, we've explored Python's control flow structures, including conditional statements and loops, and compared them to similar constructs in C. In the next chapter, we'll dive into functions, which play a crucial role in both languages.








## Chapter 4: Functions

In this chapter, we will delve into the world of functions in Python and draw comparisons to your experience with functions in C programming.

### Defining Functions

Python functions are defined using the `def` keyword, which is different from the `int` or `void` type declarations in C.

#### Function Declaration in C

In C, you might define a function as follows:

```c
void add(int a, int b)
{
    printf("%d", a + b);
}
```

### Function Definition in Python
In Python, it's more concise:

```python
def add(a, b):
    print(a + b)
```

### Calling Functions
Calling functions in Python is straightforward. You can call a function by using its name followed by parentheses.

#### Function Call in C
In C, you would call a function like this:

```c
int result = add(3, 5);
```
#### Function Call in Python
In Python, it's similar:
```python
result = add(3, 5)
```

### Return Values
Python functions, like C functions, can return values. However, Python doesn't require you to specify a return type.

Return in C
In C, you specify the return type in the function declaration:

```c
int add(int a, int b)
{
    return a + b;
}
```
Return in Python
In Python, you don't specify the return type:

```python
def add(a, b):
    return a + b
```

### Default Arguments
Python allows you to define functions with default argument values, which is not a feature in C. This makes Python functions more flexible.

```python
def greet(name="Guest"):
    print("Hello, " + name + "!")
```

### Lambda Functions
Python supports lambda functions, which are small, anonymous functions defined using the lambda keyword. They are similar in concept to function pointers in C.
```python
square = lambda x: x ** 2
```

### Function Overloading
Python does not support function overloading like C++. In Python, a function can only have one definition.

In this chapter, we've explored the basics of functions in Python, highlighting the differences and similarities with C. Functions play a critical role in both languages, and understanding how they work in Python will be valuable as we proceed in this workshop.









## Chapter 5: Lists and Iteration

Lists are essential data structures in Python, and they play a role similar to arrays in C. In this chapter, we will explore Python lists and various iteration techniques.

### Lists in Python

#### Creating Lists

In Python, you can create a list by enclosing a comma-separated sequence of values within square brackets. Lists can contain elements of different data types.

```python
my_list = [1, 2, 3, 4, 5]
```

### Accessing Elements
Accessing elements in a list is similar to C's array access. Lists are zero-indexed, so the first element is at index 0.
```python
element = my_list[2]  # Access the third element (3)
```

#### Iterating Through Lists
Python provides several ways to iterate through lists, making it more convenient and concise compared to C.

`for` Loop
You can use a `for` loop to iterate through the elements of a list.

```python
my_list = [1, 2, 3, 4, 5]
for item in my_list:
    print(item)
```
#### List Comprehensions
Python offers a concise way to create lists and apply operations to their elements using list comprehensions.

```python
squared = [x ** 2 for x in my_list]
```

In C, you would typically use a loop to achieve the same result.

#### Other Iteration Techniques
Python provides various functions and methods for iterating through lists, such as `map()`, `filter()`, and `reduce()`, which can simplify common tasks.

### Comparing Lists with C Arrays
While Python lists and C arrays serve similar purposes, there are important differences:

Lists in Python are dynamic and can hold mixed data types, while C arrays have fixed sizes and require a uniform data type.

Lists can be easily resized in Python, whereas C arrays have a fixed size.

Python's list methods, such as `append()` and `extend()`, make list manipulation simpler compared to manually managing memory in C.

In this chapter, we've explored Python lists and various ways to iterate through them, highlighting the differences and advantages over C arrays. Understanding these concepts will help you work more effectively with Python's data structures.










## Chapter 6: Python vs. C Performance Considerations

Performance is a critical aspect to consider when choosing between Python and C for your programming tasks. In this chapter, we'll explore the performance differences between Python and C and when to use each language.

### Python's Strengths

Python is known for its simplicity, readability, and ease of use. It's a high-level language that excels in various areas:

- **Rapid Development:** Python's concise syntax and extensive standard library allow for quick development and prototyping.

- **Scripting and Automation:** Python is a go-to choice for writing scripts and automating tasks, as it simplifies complex operations.

- **Web Development:** Python is popular for web development, with frameworks like Django and Flask simplifying the process.

- **Data Science and Machine Learning:** Python boasts a rich ecosystem of libraries, including NumPy, Pandas, and TensorFlow, making it a dominant player in data science and machine learning.

### C's Strengths

C is a low-level, compiled language that excels in certain performance-critical scenarios:

- **System-Level Programming:** C is essential for operating system development, drivers, and other system-level programming tasks.

- **Embedded Systems:** C is the preferred language for programming embedded systems due to its fine-grained control over hardware.

- **High Performance:** C's compiled nature and manual memory management provide superior performance for CPU-intensive tasks.

### When to Use Python

Consider using Python when:

- You need to rapidly develop and prototype software.
- Your project is focused on data analysis, machine learning, or scientific computing.
- Web development, scripting, or automation is required.
- Readability and maintainability are a priority.
- You don't need to optimize for extreme performance.

### When to Use C

Consider using C when:

- You're working on system-level programming or developing an operating system.
- Performance is critical, and you need to fine-tune memory and CPU usage.
- Your project involves embedded systems or real-time applications.
- You're developing libraries and APIs for other programming languages.
- You need low-level access to hardware resources.

### Python and C Integration

One advantage is that you can combine Python and C in a single project. Python's C API (CPython) allows you to write C extensions and call C functions from Python, making it possible to optimize specific parts of your code while leveraging Python's high-level features.

In this chapter, we've discussed the performance considerations when choosing between Python and C. Understanding the strengths and weaknesses of each language is essential for making informed decisions about your programming projects.




## Exercices

### Exercise 1: Swap Two Variables

Write a Python program that swaps the values of two variables without using a temporary variable. For example, if `x` is 5 and `y` is 10, after swapping, `x` should be 10 and `y` should be 5.

### Exercise 2: Palindrome Checker

Create a Python function that checks whether a given string is a palindrome. A palindrome is a word, phrase, number, or other sequence that reads the same forward and backward (ignoring spaces, punctuation, and capitalization).

### Exercise 3: Factorial Calculation

Write a Python program to calculate the factorial of a non-negative integer entered by the user. Ensure that the program handles input validation and provides the result.

### Exercise 4: Fibonacci Sequence

Create a Python function that generates the Fibonacci sequence up to a specified number of terms. The Fibonacci sequence starts with 0 and 1, and each subsequent number is the sum of the two previous numbers.

### Exercise 5: Prime Number Checker

Develop a Python program that checks if a given positive integer is a prime number. A prime number is a positive integer greater than 1 that is divisible only by 1 and itself.

Feel free to use these exercises in your workshop to challenge your C programmer audience and help them practice their Python skills.
