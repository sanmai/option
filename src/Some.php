<?php

declare(strict_types=1);

namespace Ghostwriter\Option;

use Ghostwriter\Option\Contract\SomeInterface;
use Ghostwriter\Option\Exception\NullPointerException;
use Ghostwriter\Option\Traits\OptionTrait;

/**
 * @immutable
 *
 * @implements SomeInterface<TValue>
 *
 * @template TValue
 */
final class Some implements SomeInterface
{
    use OptionTrait;

    /**
     * @template TSomeValue
     *
     * @param TSomeValue $value
     */
    public static function create(mixed $value): SomeInterface
    {
        if (null === $value) {
            throw new NullPointerException();
        }

        return new self($value);
    }
}
