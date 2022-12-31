# Regular-Expression-Matching
Given an input string s and a pattern p, implement regular expression matching with support for '.' and '*'

### Leetcode `Hard` problem https://leetcode.com/problems/regular-expression-matching/description/

Given an input string s and a pattern p, implement regular expression matching with support for '.' and '*' where:

- '.' Matches any single character.​​​​
- '*' Matches zero or more of the preceding element.

The matching should cover the entire input string (not partial).

# Solution Approach

The `isMatch` method of the `Solution` class will return true if the pattern matches the entire input string, and false if it does not.

You can also use the `preg_match_all` function to find all occurrences of a pattern in a string, or the `preg_replace` function to replace all occurrences of a pattern with a replacement string.

For more information and examples of using regular expressions in PHP, you can refer to the documentation for the preg functions at:

http://php.net/manual/en/ref.pcre.php

 
