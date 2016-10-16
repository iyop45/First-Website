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
class InstantMessengerDefinitionSet implements CodeDefinitionSet
{
    /* The default code definitions in this set. */
    protected $definitions = array();

    /**
     * Constructs the default code definitions.
     */
    public function __construct()
    {
		$GLOBALS['isInFrame'] = 1;
		/* [subtitle] subtitle tag */
		$builder = new CodeDefinitionBuilder('subtitle', '<h1 class="f_subtitle">{param}</h1>');
		array_push($this->definitions, $builder->build());
		
		/* [p] paragraph tag */
		$builder = new CodeDefinitionBuilder('p', '<p>{param}</p>');
		array_push($this->definitions, $builder->build());

		/* [b] bold tag */
		$builder = new CodeDefinitionBuilder('b', '<b>{param}</b>');
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

		$cssColorValidator = new \JBBCode\validators\CssColorValidator();
		$fontFace = new \JBBCode\validators\FontFace();
		$fontSize = new \JBBCode\validators\FontSize();
		$urlValidator = new \JBBCode\validators\UrlValidator();

		/* [color] color tag */
		$builder = new CodeDefinitionBuilder('color', '<span style="color: {option}">{param}</span>');
		$builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\CssColorValidator());
		array_push($this->definitions, $builder->build());
		
		/* [quote] code tag */
		$builder = new CodeDefinitionBuilder('quote', '<blockquote>{param}</blockquote>');
		array_push($this->definitions, $builder->build());
		
		/* [url] link tag */
		$builder = new CodeDefinitionBuilder('url', '<a href="{param}" class="default" target="_parent" rel="nofollow">{param}</a>');
		$builder->isInFrame = 1;
		$builder->setParseContent(false)->setBodyValidator($urlValidator);
		array_push($this->definitions, $builder->build());

		/* [url=http://example.com] link tag */
		$builder = new CodeDefinitionBuilder('url', '<a href="{option}" class="default" target="_parent" rel="nofollow">{param}</a>');
		$builder->isInFrame = 1;
		$builder->setUseOption(true)->setParseContent(true)->setOptionValidator($urlValidator);
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
