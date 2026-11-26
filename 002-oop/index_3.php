<?php

class IntTypeException extends Exception {}
class FloatTypeException extends Exception {}
class StringTypeException extends Exception {}
class BoolTypeException extends Exception {}
class ArrayTypeException extends Exception {}
class NullObjectException extends Exception {}

function calculate($value)
{
    if (is_int($value)) {
        throw new IntTypeException("(int).");
    } elseif (is_float($value)) {
        throw new FloatTypeException("(float).");
    } elseif (is_string($value)) {
        throw new StringTypeException("(string).");
    } elseif (is_bool($value)) {
        throw new BoolTypeException("(bool).");
    } elseif (is_array($value)) {
        throw new ArrayTypeException("(array).");
    } elseif (is_null($value)) {
        throw new NullObjectException("(объект).");
    }
}

$test = [
    10,
    1.5,
    "Привет",
    true,
    [1, 2, 3, 4],
    null
];

foreach ($test as $value) {
    try {
        calculate($value);
    } catch (IntTypeException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    } catch (FloatTypeException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    } catch (StringTypeException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    } catch (BoolTypeException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    } catch (ArrayTypeException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    } catch (NullObjectException $e) {
        echo "исключение: " . $e->getMessage() . "\n";
    }
}
