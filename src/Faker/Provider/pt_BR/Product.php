<?php

namespace Faker\Provider\pt_BR;

/**
 * Product Provider
 *
 * @author dextervip
 */
class Product extends \Faker\Provider\Base {
    
    protected static $brandName = array('LG', 'Samsung', 'Microsoft', 'CCE', 'Motorola');
    protected static $productName = array('Mouse', 'Monitor', 'Celular', 'Tablet');
    protected static $categoryName = array('Celulares e Telefones', 'Eletrônicos, Áudio e Vídeo',
        'Informática','Câmeras e Acessórios');
    protected static $colorName = array('Vermelho','Preto','Branco','Verde');
    
    protected static $productFormats = array('{{ brandName }} {{ productName }} {{ modelName }}');
    protected static $modelFormats = array('#?','##?','?#','?##','??#','????');
    protected static $barcodeFormats = array('###########');
    protected static $dimensionFormats = array('##x##x##');
    
    /**
     * @example 'Microsoft Mouse XL'
     */
    public function product()
    {
        $format = static::randomElement(static::$productFormats);

        return $this->generator->parse($format);
    }
    
    /**
     * @example 'Mouse'
     */
    public static function productName()
    {
        return static::randomElement(static::$productName);
    }
    
    /**
     * @example 'Microsoft'
     */
    public static function brandName()
    {
        return static::randomElement(static::$brandName);
    }
    
    /**
     * @example 'U5'
     */
    public static function modelName()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$modelFormats)));
    }
    
    /**
     * @example '2321312312'
     */
    public static function barcode()
    {
        return static::numerify(static::randomElement(static::$barcodeFormats));
    }
    
    /**
     * @example 'Preta'
     */
    public static function color()
    {
        return static::randomElement(static::$colorName);
    }
    
    /**
     * @example 'Informática'
     */
    public static function category()
    {
        return static::randomElement(static::$categoryName);
    }
    
    /**
     * @example '1.68'
     */
    public static function weight()
    {
        return static::randomFloat(2, 0.1, 20);
    }
    
    /**
     * @example '10x10x10'
     */
    public static function dimension()
    {
        return static::numerify(static::randomElement(static::$dimensionFormats));
    }
    

}


