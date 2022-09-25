<?php

class Model
{
    protected static string $tableName = 'Model';

    public static function getTableName(): string
    {
        return static::$tableName;
    }
}