##### Homework 01 - Morse Code

We are being asked to create a translator that will convert english to morse code. This morse code will later be fed into a machine for transmission. 

The following is a 1-1 relationship between the english alphabet and morse code

English
```
a b c d e f g h i j k l m n o p q r s t u v w x y z
```

Morse code
```
.- / -... / -.-. / -.. / . / ..-. / --. / .... / .. / .--- / -.- / .-.. / -- / -. / --- / .--. / --.- / .-. / ... / - / ..- / ...- / .-- / -..- / -.-- / --..
```

Note that the separator in morse is ` / `


Your translator function should look and behave as advertised
```php
<?php
/**
 * Convert a block of text to morse code
 * @param string $englishText User input in english
 * @return string
 */
function englishToMorse($englishText)
{

}
```

Pay special attention to dots `.` and dashes `-` if they are in the original input string as these may interfere with the translation. 
Your code should be smart enough to translate just the possible set of characters. 

*Extra*
- Account for encoding these additional features
`
AA, New line
`
`
AR, End of message
`
`
SK, End of transmission
`
