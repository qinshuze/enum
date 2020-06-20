<?php
/**
 * @author xianyu
 * @date 2020/6/20
 * @version 1.0.0
 */

require_once __DIR__ . '/../vendor/autoload.php';

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