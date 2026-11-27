<?php
namespace App;

#[\AllowDynamicProperties]
class Notes
{
    // Explicitly nullable parameter type (implicit nullability deprecated in PHP 8.4).
    public function title(?string $text = null)
    {
        return strtoupper(trim($text === null ? 'untitled' : $text));
    }

    // Dynamic property creation is deprecated since PHP 8.2; tag() accepts
    // arbitrary names, so the class opts in via #[\AllowDynamicProperties].
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
