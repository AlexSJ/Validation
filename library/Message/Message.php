<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Message;

use Doctrine\Common\Annotations\Reader;
use Respect\Validation\Result;

final class Message
{
    /**
     * @var Result
     */
    private $result;

    /**
     * @var Reader
     */
    private $annotationReader;

    public function __construct(Result $result, Reader $annotationReader)
    {
        $this->result = $result;
        $this->annotationReader = $annotationReader;
    }

    public function getMain(): string
    {
    }

    public function getFull(): string
    {
    }

    public function getList(): string
    {
    }

    public function getAll(): array
    {
    }

    public function __toString(): string
    {
        return $this->getMain();
    }
}
