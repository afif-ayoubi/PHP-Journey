<?php

function evaluateOperation($operation) {
    $parts = explode(' ', $operation);
    $operand1 = (int)$parts[0];
    $operator = $parts[1];
    $operand2 = (int)$parts[2];

    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        case '/':
            if ($operand2 == 0) {
                return "Error: Division by zero";
            }
            return $operand1 / $operand2;
        default:
            return "Error: Invalid operator";
    }
}


?>
