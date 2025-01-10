# PHP Foreach Loop and unset() Unexpected Behavior

This repository demonstrates a common, yet subtle, bug in PHP related to the use of `unset()` within a `foreach` loop iterating over an array.  When `unset()` is called on an array element during iteration, the loop's internal pointer advances, potentially skipping elements.

The `bug.php` file showcases the issue, while `bugSolution.php` provides a corrected approach.  Understanding this behavior is crucial for writing robust and error-free PHP code.
