<?php

namespace Xtra\KoPackage\Environment\Exception
/**
 * Thrown when a file does not exist or is not readable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class PathException 
{
    public function __construct(string $path, int $code = 0, \Exception $previous = null)
    {
        parent::__construct(sprintf('Unable to read the "%s" environment file.', $path), $code, $previous);
    }
}
