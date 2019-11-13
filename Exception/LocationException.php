<?php

namespace Xtra\KoPackage\Environment\Exception;

final class LocationException extends Exception implements Throwable
{
    public function __construct(string $path, int $code = 0, \Exception $previous = null)
    {
        parent::__construct(sprintf('Unable to read the "%s" environment file.', $path), $code, $previous);
    }
}
