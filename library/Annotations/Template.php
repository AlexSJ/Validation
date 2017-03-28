<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Annotations;

use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * @Target("ANNOTATION")
 */
final class Template
{
    /**
     * @Required
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $id = 'standard';

    /**
     * @var bool
     */
    public $isOmissible = true;
}
