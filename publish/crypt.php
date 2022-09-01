<?php

declare(strict_types=1);
/**
 * This file is part of FirecmsExt Crypt.
 *
 * @link     https://www.klmis.cn
 * @document https://www.klmis.cn
 * @contact  zhimengxingyun@klmis.cn
 * @license  https://github.com/firecms-ext/crypt/blob/master/LICENSE
 */
return [
    /*
     * 加密方式，支持以下四种：
     * AES-128-CBC
     * AES-256-CBC
     * AES-128-GCM
     * AES-256-GCM
     */
    'cipher' => env('APP_CIPHER', 'AES-256-CBC'),

    /*
     * 应用密码
     * 执行命令生成：php bin/hyperf.php gen:app-key
     */
    'key' => env('APP_KEY', ''),
];
