<?php

class TableSchema
{

    const DEFAULT_LEGNTH_STRINGS = -1;
    
    public $requiredColumnList = [];
    public $booleanColumnList = [];
    public $integerColumnList = [];
    public $numericColumnList = [];
    public $uniqueColumnList = [];
    public $stringColumnList = [];
    public $otherColumnList = [];
    
    // additional validation that are not generated by Gii
    public $rangeColumnList = [];
    public $positiveColumnList = [];
        
    public $dateColumnList = [
        'datetime' => [
            'min'=>'1000-01-01 00:00:00', 
            'max'=>'9999-12-31 23:59:59', 
            'format' => 'yyyy-MM-dd HH:mm:ss'
        ],
        'timestamp'=> [
            'min'=>'1970-01-01 00:00:01',
            'max'=>'2038-01-19 03:14:07',
            'format' => 'yyyy-MM-dd HH:mm:ss'
        ],
        'date' => ['min'=>'1000-01-01', 'max'=>'9999-12-31', 'format'=>'yyyy-MM-dd']
    ];

    public $timeColumnList;
    const TIME_PATTERN = '/(^[0-9]{1,3}:[0-9]{1,2}:[0-9]{1,2}$)|^$/';
    
    public $integerWithRangeColumnList = [
        'tinyint unsigned' => ['min'=>0, 'max'=>255],
        'tinyint' => ['min'=>-128, 'max'=>127],
        'smallint unsigned' => ['min'=>0, 'max'=>65535],
        'smallint' => ['min'=>-32768, 'max'=>32767],
        'mediumint unsigned' => ['min'=>0, 'max'=>16777215],
        'mediumint' => ['min'=>-8388608, 'max'=>8388607],
        'mediumint' => ['min'=>-8388608, 'max'=>8388607],
        'int unsigned' => ['min'=>0, 'max'=>4294967295],
        'int' => ['min'=>-2147483648 , 'max'=>2147483647],
        'bigint unsigned' => ['min'=>0, 'max'=>18446744073709551615],
        'bigint' => ['min'=>-9223372036854775808, 'max'=>9223372036854775807]
    ];

    public $numberWithRangeColumnList = [
        'float unsigned' => ['min'=>0, 'max'=>3.402823466E+38],
        'float' => ['min'=>-3.402823466E+38, 'max'=> 3.402823466E+38],
        'double unsigned' => ['min'=>0, 'max'=>1.7976931348623157E+308],
        'double' => ['min'=>-1.7976931348623157E+308, 'max'=>1.7976931348623157E+308]
    ];
    

    public function __construct()
    {
        
    }
    
    
    
}