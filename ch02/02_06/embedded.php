<?php
$book = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Embedded PHP</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Dynamic Text In Action</h1>
        <p>There's no need for everything in a PHP file to be stored in variables and displayed using echo. PHP code is designed to be embedded in HTML.</p>
        <p><mark><?= $book; ?></mark> is a comedy sci-fi series originally written for radio by <mark><?php echo $author; ?></mark>, and subsequently turned into a book, TV series, movie, and numerous stage shows. It reveals that the Answer to the Ultimate Question of Life, the Universe, and Everything is <mark><?php echo $answer; ?></mark>.</p>
        <p> The &lt;&quest;= works only for single strings and is a shorthand for &lt;&quest;php echo.</p>
        <p>No, get out of town, my mom thinks I'm going camping with the guys. Well, Jennifer, my mother would freak out if she knew I was going up there with you. And I get this standard lecture about how she never did that kind of stuff when she was a kid. Now look, I think she was born a nun. She's just trying to keep you respectable. Well, she's not doing a very good job. (They go to kiss but a woman shoves a flyer in their faces.) Save the clock tower, save the clock tower. Mayor Wilson is sponsoring an initiative to replace that clock. Thirty years ago, lightning struck that clock tower and the clock hasn't run since. We at the Hill Valley Preservation Society think it should be preserved exactly the way it is as part of our history and heritage.</p>

    </body>
</html>
<!-- <? = works only for single strings and is a shorthand for echo + php -->
