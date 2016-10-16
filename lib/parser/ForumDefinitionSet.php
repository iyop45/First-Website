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
class ForumDefinitionSet implements CodeDefinitionSet
{
    /* The default code definitions in this set. */
    protected $definitions = array();

    /**
     * Constructs the default code definitions.
     */
    public function __construct()
    {
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
		
		/* [rtl] rtl tag */
		$builder = new CodeDefinitionBuilder('rtl', '<p dir="rtl">{param}</p>');
		array_push($this->definitions, $builder->build());

		/* [ltr] ltr tag */
		$builder = new CodeDefinitionBuilder('ltr', '<p dir="ltr">{param}</p>');
		array_push($this->definitions, $builder->build());

		/* [code] code tag */
		$builder = new CodeDefinitionBuilder('code', '<pre class="prettyprint">{param}</pre>');
		array_push($this->definitions, $builder->build());	

		/* [quote] code tag */
		$builder = new CodeDefinitionBuilder('quote', '<blockquote>{param}</blockquote>');
		array_push($this->definitions, $builder->build());

		$cssColorValidator = new \JBBCode\validators\CssColorValidator();
		$fontFace = new \JBBCode\validators\FontFace();
		$fontSize = new \JBBCode\validators\FontSize();
		$urlValidator = new \JBBCode\validators\UrlValidator();

		/* [color] color tag */
		$builder = new CodeDefinitionBuilder('color', '<span style="color: {option}">{param}</span>');
		$builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\CssColorValidator());
		array_push($this->definitions, $builder->build());
		
		/* [url] link tag */
		$builder = new CodeDefinitionBuilder('url', '<a href="{param}" class="default" target="_blank" rel="nofollow">{param}</a>');
		$builder->setParseContent(false)->setBodyValidator($urlValidator);
		array_push($this->definitions, $builder->build());

		/* [url=http://example.com] link tag */
		$builder = new CodeDefinitionBuilder('url', '<a href="{option}" class="default" target="_blank" rel="nofollow">{param}</a>');
		$builder->setUseOption(true)->setParseContent(true)->setOptionValidator($urlValidator);
		array_push($this->definitions, $builder->build());

		/* [img] image tag */
		$builder = new CodeDefinitionBuilder('img', '<img src="{param}" height="100" width="100" />');
		$builder->setUseOption(false)->setParseContent(false)->setBodyValidator($urlValidator);
		array_push($this->definitions, $builder->build());

		/* [img=alt text] image tag */
		$builder = new CodeDefinitionBuilder('img', '<img src="{param}" alt="{option}" height="100" width="100" />');
		$builder->setUseOption(true);
		array_push($this->definitions, $builder->build());
		
		/* [table] code tag */
		$builder = new CodeDefinitionBuilder('table', '<table class="reference">{param}</table>');
		array_push($this->definitions, $builder->build());

		/* [tbody] code tag */
		$builder = new CodeDefinitionBuilder('tbody', '<tbody>{param}</tbody>');
		array_push($this->definitions, $builder->build());
		
		/* [tr] code tag */
		$builder = new CodeDefinitionBuilder('tr', '<tr>{param}</tr>');
		array_push($this->definitions, $builder->build());
		
		/* [th] code tag */
		$builder = new CodeDefinitionBuilder('th', '<th>{param}</th>');
		array_push($this->definitions, $builder->build());

		/* [td] code tag */
		$builder = new CodeDefinitionBuilder('td', '<td>{param}</td>');
		array_push($this->definitions, $builder->build());
		
		/* [youtube] youtube embed tag */
		$builder = new CodeDefinitionBuilder('youtube', '<iframe width="640" height="390" src="http://www.youtube.com/embed/{param}" frameborder="0"></iframe>');
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
