# Test Description:

The main objective of the test is to determine your understanding of magic functions and object-oriented programming concepts. Write a class that handles any function which starts with `has_` keyword return function `exist` and any other function that starts with any word that should return `not exist` and checking a property if it ends with `_CT` return md5 encryption for property otherwise return without encryption.

# Note:

1. I have updated Composer.json as per my system php version 8.3

2. The SkillTest.php is creating function with prefix `has` but it should create function with prefix `has_` as per the Test Description

3. The SkillTest.php was matching return true/false with `assertTrue` while it should matching return value `exist` with `assertSame` according to Test Description

4. I have added a command `composer unit-test` to run Unit Testing
