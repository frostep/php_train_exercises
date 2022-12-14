<?php

declare(strict_types=1);

namespace App\src;

interface HTMLElementInterface
{
    public function addClass($className);

    public function removeClass($className);

    public function toggleClass($className);

    public function getAttribute($className);
}
