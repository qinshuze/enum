<?php
/**
 * 枚举类
 * @author xianyu 2020/6/20
 */

namespace Xianyu\Enum;


abstract class Enum
{
    /**
     *
     * @param $name
     * @param $arguments
     *
     * @return object
     *
     * @author qsz 2020/6/20
     */
    public static function __callStatic($name, $arguments)
    {
        $reflection = new \ReflectionClass(static::class);
        return $reflection->newInstanceArgs($reflection->getConstant($name));
    }

    /**
     * 转换成数组
     *
     * @return array
     */
    public static function toArray()
    {
        $reflection = new \ReflectionClass(static::class);
        return $reflection->getConstants();
    }

    /**
     * 获取所有键
     *
     * @return array
     */
    public static function getKeys()
    {
        $keys = [];
        foreach (self::toArray() as $key => $item) {
            $keys[] = $key;
        }

        return $keys;
    }

    /**
     * 获取所有值
     *
     * @return array
     */
    public static function getValues()
    {
        $values = [];
        foreach (self::toArray() as $key => $item) {
            $values[] = $item;
        }

        return $values;
    }

    /**
     * 检测键是否存在
     *
     * @param string $key 键
     *
     * @return bool
     */
    public static function isExist(string $key)
    {
        return in_array($key, self::getKeys());
    }
}