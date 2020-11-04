<?php


namespace ThinkAi\HolaWorld;

/**
 * Class HolaWorld
 * @package ThinkAi\HolaWorld
 * @author Dhruv Patel <think.fullstack@gmail.com>
 */
class HolaWorld
{
    /**
     * @param string $name
     * @return string
     */
    public static function greet(string $name) : string
    {
        return sprintf("Hola %s", $name);
    }
}
