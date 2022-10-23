What is the difference between substr() and strstr()?
--->strstr :- it will return substring from the first matching occurrence to the end of the string.
        e.g. $str = 'abc.com';
        echo strstr($str,'c');
       output :: c.com

      substr :- it will return part of the string from the given index to its length parameters.
       e.g. $rest = substr("abcdef", -1);    // returns "f"
            $rest = substr("abcdef", -2);    // returns "ef"
            $rest = substr("abcdef", -3, 1); // returns "d"
