# enum
php枚举

# 使用方法
> Test.php
```php
/**
 * Class StatusEnum
 * @method static self OK
 * @method static self LOCK
 */
class StatusEnum extends \Xianyu\Enum\Enum
{
    private const OK   = [1, '正常'];
    private const LOCK = [2, '锁定'];

    /** @var string */
    private $key;
    /** @var string */
    private $value;

    /**
     * StatusEnum constructor.
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}

echo StatusEnum::OK()->getKey();    // 1
echo StatusEnum::OK()->getValue();  // 正常
```