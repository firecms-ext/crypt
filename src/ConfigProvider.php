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
namespace FirecmsExt\Crypt;

use FirecmsExt\Crypt\Commands\GenAppKeyCommand;
use FirecmsExt\Crypt\Contracts\EncrypterServiceInterface;
use FirecmsExt\Crypt\Services\EncrypterService;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                EncrypterServiceInterface::class => EncrypterService::class,
            ],
            'commands' => [
                GenAppKeyCommand::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
