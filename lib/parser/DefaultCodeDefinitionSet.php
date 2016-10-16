<?php

namespace JBBCode;

require_once 'CodeDefinition.php';
require_once 'CodeDefinitionBuilder.php';
require_once 'CodeDefinitionSet.php';
require_once 'validators/CssColorValidator.php';
require_once 'validators/UrlValidator.php';
require_once 'validators/FontFace.php';
require_once 'validators/FontSize.php';

/**
 * Provides a default set of common bbcode definitions.
 *
 * @author jbowens
 */
class DefaultCodeDefinitionSet implements CodeDefinitionSet
{
    /* The default code definitions in this set. */
    protected $definitions = array();

    /**
     * Constructs the default code definitions.
     */
    public function __construct()
    {   
        /* [b] bold tag */
        $builder = new CodeDefinitionBuilder('b', '<strong>{param}</strong>');
        array_push($this->definitions, $builder->build());

        /* [i] italics tag */
        $builder = new CodeDefinitionBuilder('i', '<em>{param}</em>');
        array_push($this->definitions, $builder->build());

        /* [u] italics tag */
        $builder = new CodeDefinitionBuilder('u', '<u>{param}</u>');
        array_push($this->definitions, $builder->build());
        
        /* [sub] sub tag */
        $builder = new CodeDefinitionBuilder('sub', '<sub>{param}</sub>');
        array_push($this->definitions, $builder->build());

        /* [sup] sup tag */
        $builder = new CodeDefinitionBuilder('sup', '<sup>{param}</sup>');
        array_push($this->definitions, $builder->build());
        
        /* [center] center tag */
        $builder = new CodeDefinitionBuilder('center', '<center>{param}</center>');
        array_push($this->definitions, $builder->build());

        /* [left] left tag */
        $builder = new CodeDefinitionBuilder('left', '<p style="text-align:left">{param}</p>');
        array_push($this->definitions, $builder->build());

        /* [right] right tag */
        $builder = new CodeDefinitionBuilder('right', '<p style="text-align:right">{param}</p>');
        array_push($this->definitions, $builder->build());
        
        /* [justify] justify tag */
        $builder = new CodeDefinitionBuilder('justify', '<p style="text-align:justify">{param}</p>');
        array_push($this->definitions, $builder->build());
        
        /* [rtl] rtl tag */
        $builder = new CodeDefinitionBuilder('rtl', '<p dir="rtl">{param}</p>');
        array_push($this->definitions, $builder->build());

        /* [ltr] ltr tag */
        $builder = new CodeDefinitionBuilder('ltr', '<p dir="ltr">{param}</p>');
        array_push($this->definitions, $builder->build());

        /* [code] code tag */
        $builder = new CodeDefinitionBuilder('code', '<textarea id="code">{param}</textarea>');
        array_push($this->definitions, $builder->build());

        $cssColorValidator = new \JBBCode\validators\CssColorValidator();
        $fontFace = new \JBBCode\validators\FontFace();
        $fontSize = new \JBBCode\validators\FontSize();
        $urlValidator = new \JBBCode\validators\UrlValidator();

        /* [color] color tag */
        $builder = new CodeDefinitionBuilder('color', '<span style="color: {option}">{param}</span>');
        $builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\CssColorValidator());
        array_push($this->definitions, $builder->build());
        
        /* [font] face tag */
        $builder = new CodeDefinitionBuilder('font', '<font face="{option}">{param}</font>');
        $builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\FontFace());
        array_push($this->definitions, $builder->build());
        
        /* [size] size tag */
        $builder = new CodeDefinitionBuilder('size', '<font size="{option}">{param}</font>');
        $builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\FontSize());
        array_push($this->definitions, $builder->build());

        /* [url] link tag */
        $builder = new CodeDefinitionBuilder('url', '<a href="{param}">{param}</a>');
        $builder->setParseContent(false)->setBodyValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [url=http://example.com] link tag */
        $builder = new CodeDefinitionBuilder('url', '<a href="{option}">{param}</a>');
        $builder->setUseOption(true)->setParseContent(true)->setOptionValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [img] image tag */
        $builder = new CodeDefinitionBuilder('img', '<img src="{param}" />');
        $builder->setUseOption(false)->setParseContent(false)->setBodyValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [img=alt text] image tag */
        $builder = new CodeDefinitionBuilder('img', '<img src="{param}" alt="{option}" />');
        $builder->setUseOption(true);
        array_push($this->definitions, $builder->build());
    }

    /**
     * Returns an array of the default code definitions.
     */
    public function getCodeDefinitions()
    {
        return $this->definitions;
    }

}
