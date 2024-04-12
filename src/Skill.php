<?php

declare(strict_types=1);

namespace Coalition\Exam;

class Skill
{
    private $attributes = [];


    public function __call($name, $arguments)
    {
        if (strpos($name, 'has_') === 0) {
            return 'exist';
        }
        return 'not exist';
    }


    public function __get($name)
    {
        if (substr($name, -3) === '_CT') {
            return md5($this->attributes[$name] ?? $name);
        }
        return $this->attributes[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __toString()
    {
        return 'CT';
    }


    public function __invoke(array $values)
    {
        return array_sum($values);
    }
}
