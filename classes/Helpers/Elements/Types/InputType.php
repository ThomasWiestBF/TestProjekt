<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 13:46
 */

namespace classes\Helpers\Elements\Types;


class InputType {
    const HIDDEN = 0;
    const TEXT = 1;
    const PASSWORD = 2;
    const NUMBER = 3;
    const BUTTON = 4;
    const FILE = 5;
    const RADIO = 6;
    const SUBMIT = 6;
    const IMAGE = 7;

    /**
     * The InputType matching.
     * Accessed  via inputTypeExists and getInputType
     *
     * @var array
     */
    protected static $aryTypes = [
        self::HIDDEN => 'hidden',
        self::TEXT => 'text',
        self::PASSWORD => 'password',
        self::NUMBER => 'number',
        self::BUTTON => 'button',
        self::FILE => 'file',
        self::RADIO => 'radio',
        self::SUBMIT => 'submit',
        self::IMAGE => 'image',
    ];

    /**
     * Check if the specified InpuType is fully available
     * (available as constant and registered an the InputType matching)
     *
     * @param int $intInputType
     *
     * @return bool
     */
    public static function inputTypeExists($intInputType){
        return array_key_exists($intInputType, self::$aryTypes);
    }

    /**
     * Returns the stringified InputType.
     * When the InputType does not exist, TEXT is used as fallback
     *
     * @param $intInputType
     *
     * @return mixed
     */
    public static function getInputType($intInputType){
        if(self::inputTypeExists($intInputType)){
            return self::$aryTypes[$intInputType];
        } else {
            return self::$aryTypes[self::TEXT];
        }
    }
}