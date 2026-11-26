<?php
namespace App;

#[\AllowDynamicProperties]
class Notes
{
    // Implicitly nullable parameter types are deprecated in PHP 8.4; declared explicitly.
    public function title(?string $text = null)
    {
        return strtoupper(trim($text === null ? 'untitled' : $text));
    }

    // Dynamic property creation is deprecated in PHP 8.2; the class opts in via
    // #[\AllowDynamicProperties] so arbitrary tag names keep working.
    public function tag($name)
    {
        $this->{$name} = true;
        return $this;
    }

    // "${var}" string interpolation is deprecated in PHP 8.2; "{$var}" used.
    public function greet($user)
    {
        return "Hello {$user}";
    }
}
