<!-- using HTML outside of PHP -->
<h1>Hi</h1>

<?php

echo "Hello";

echo "<hr>";

$text = 'Go To Google';

// using HTML inside PHP
echo '<a href="https://google.com">' . $text . '</a>';

?>

<h2>Welcome</h2>

<!-- using PHP inside HTML -->
<h3><?php echo 5 + 5; ?></h3>