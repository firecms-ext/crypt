# firecms-ext/crypt

```shell
# 添加依赖
composer require firecms-ext/crypt

# 发布配置
php bin/hyperf.php vendor:publish firecms-ext/crypt

# 生成密钥
php bin/hyperf.php gen:app-key
```

# 函数列表

```php
# 加密
encrypt(mixed $value, bool $serialize = true): string

# 解密
decrypt(string $payload, bool $unserialize = true): mixed

# 加密字符串
encryptString(mixed $value): string

# 解密字符串
decryptString(string $payload): string
```