<?php

declare(strict_types=1);
/**
 * This file is part of FirecmsExt Crypt.
 *
 * @link     https://www.klmis.cn
 * @document https://www.klmis.cn
 * @contact  zhimengxingyun@klmis.cn
 * @license  https://gitee.com/firecms-ext/crypt/blob/master/LICENSE
 */
use FirecmsExt\Crypt\Contracts\EncrypterServiceInterface;

if (! function_exists('encrypt')) {
    /**
     * 加密.
     */
    function encrypt(mixed $value, bool $serialize = true): string
    {
        return make(EncrypterServiceInterface::class)
            ->encrypt($value, $serialize);
    }
}

if (! function_exists('decrypt')) {
    /**
     * 解密.
     */
    function decrypt(string $payload, bool $unserialize = true): mixed
    {
        return make(EncrypterServiceInterface::class)
            ->decrypt($payload, $unserialize);
    }
}

if (! function_exists('encryptString')) {
    /**
     * 加密字符串.
     */
    function encryptString(mixed $value): string
    {
        return make(EncrypterServiceInterface::class)
            ->encryptString($value);
    }
}

if (! function_exists('decryptString')) {
    /**
     * 解密字符串.
     */
    function decryptString(string $payload): string
    {
        return make(EncrypterServiceInterface::class)
            ->decryptString($payload);
    }
}
