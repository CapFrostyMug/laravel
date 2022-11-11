<?php

declare(strict_types=1);

namespace App\Services\Contracts;

interface Parser
{
    /**
     * @param string $string
     * @return self
     */
    public function setLink(string $link): self;

    /**
     * @return array
     */
    public function saveParseData(): void;
}
