<?php
namespace App;

// tag() writes properties whose names are only known at runtime, so the class
// opts in to dynamic properties explicitly (deprecated without it since PHP 8.2).
#[\AllowDynamicProperties]
class Notes
{
    // Explicitly nullable parameter type (implicit nullability deprecated in PHP 8.4).
    public function title(?string $text = null)
    {
        return strtoupper(trim($text === null ? 'untitled' : $text));
    }

    // Dynamic property creation; allowed by #[\AllowDynamicProperties] above.
    public function tag($name)
    {
        $this->{$name} = true;
        return $this;
    }

    // "{$var}" interpolation ("${var}" was deprecated in PHP 8.2).
    public function greet($user)
    {
        return "Hello {$user}";
    }
}
