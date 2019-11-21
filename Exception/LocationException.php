<?php

namespace Xtra\KoPackage\Environment\Exception;
use Exception, Throwable;

final class LocationException extends Exception implements Throwable
{
    public function __construct(string $path, int $code = 0, \Throwable $previous = null)
    {
        parent::__construct(sprintf('Unable to read the "%s" environment file.', $path), $code, $previous);
    }
}
