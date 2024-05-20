<?php
function operation($sign, $a, $b)
{
    switch ($sign) {
        case '*':
            return (int)$a * (int)$b;
        case '/':
            if ((int)$b === 0)
                return 0;
            else
                return (int)$a / (int)$b;
        case '+':
            return (int)$a + (int)$b;
        case '-':
            return (int)$a - (int)$b;
        case '%':
            if ((int)$b === 0)
                return 0;
            else
                return (int)$a % (int)$b;
    }
    return 0;
}