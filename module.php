<?php

/**
 * An custom module to force the primary language
 * indepent from the browser language tag..
 */

declare(strict_types=1);

namespace DefaultLanguageMiddlewareNamespace;

require __DIR__ . '/DefaultLanguageMiddleware.php';

return new DefaultLanguageMiddleware();
