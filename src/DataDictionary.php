<?php
/**
 * @author xianyu
 * @date 2020/6/20
 * @version 1.0.0
 */

namespace Xianyu\Enum;


class DataDictionary extends Enum
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $desc;
    /** @var string */
    private $key;
    /** @var string */
    private $value;

    /**
     * DataDictionary constructor.
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
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