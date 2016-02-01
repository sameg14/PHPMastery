##### Homework 01 - Morse Code

We are being asked to create a translator that will convert english to morse code. This morse code will later be fed into a machine for transmission. 

The following is a 1-1 relationship between the english alphabet and morse code

JSON
```javascript
{
  "0": "-----",
  "1": ".----",
  "2": "..---",
  "3": "...--",
  "4": "....-",
  "5": ".....",
  "6": "-....",
  "7": "--...",
  "8": "---..",
  "9": "----.",
  "a": ".-",
  "b": "-...",
  "c": "-.-.",
  "d": "-..",
  "e": ".",
  "f": "..-.",
  "g": "--.",
  "h": "....",
  "i": "..",
  "j": ".---",
  "k": "-.-",
  "l": ".-..",
  "m": "--",
  "n": "-.",
  "o": "---",
  "p": ".--.",
  "q": "--.-",
  "r": ".-.",
  "s": "...",
  "t": "-",
  "u": "..-",
  "v": "...-",
  "w": ".--",
  "x": "-..-",
  "y": "-.--",
  "z": "--..",
  ".": ".-.-.-",
  ",": "--..--",
  "?": "..--..",
  "!": "-.-.--",
  "-": "-....-",
  "/": "-..-.",
  "@": ".--.-.",
  "(": "-.--.",
  ")": "-.--.-"
}

```

Note that the separator in morse is ` / `


Your translator function should look and behave as advertised and should be smart enough to translate just the possible set of characters.
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
