<?php

namespace App\EnvVarLoader;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;

class JsonEnvVarLoader implements EnvVarLoaderInterface
{
    private const ENV_VARS_FILE = 'env.json';

    public function loadEnvVars(): array
    {
        $fileName = __DIR__ . \DIRECTORY_SEPARATOR . self::ENV_VARS_FILE;
        if (!is_file($fileName)) {
            // throw an exception or just ignore this loader, depending on your needs
        }

        $content = json_decode(file_get_contents($fileName), true);

        return $content['vars'];
    }
}