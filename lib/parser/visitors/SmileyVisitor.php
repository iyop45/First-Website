<?php

namespace JBBCode\visitors;

/**
 * This visitor is an example of how to implement smiley parsing on the JBBCode
 * parse graph. It converts :) into image tags pointing to /smiley.png.
 *
 * @author jbowens
 * @since April 2013
 */
class SmileyVisitor implements \JBBCode\NodeVisitor
{

    function visitDocumentElement(\JBBCode\DocumentElement $documentElement)
    {
        foreach($documentElement->getChildren() as $child) {
            $child->accept($this);
        }
    }

    function visitTextNode(\JBBCode\TextNode $textNode)
    {
        /* Convert :) into an image tag. */
        $textNode->setValue(str_replace(':)', 
                                        '<img src="http://techberry.org/forum/emoticons/smile.png" data-sceditor-emoticon=":)" alt=":)" title=":)"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace(':angel:', 
                                        '<img src="http://techberry.org/forum/emoticons/angel.png" data-sceditor-emoticon=":angel:" alt=":angel:" title=":angel:"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace(':angry:', 
                                        '<img src="http://techberry.org/forum/emoticons/angry.png" data-sceditor-emoticon=":angry:" alt=":angry:" title=":angry:"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace('8-)', 
                                        '<img src="http://techberry.org/forum/emoticons/cool.png" data-sceditor-emoticon="8-)" alt="8-)" title="8-)"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace(':\'(', 
                                        '<img src="http://techberry.org/forum/emoticons/cwy.png" data-sceditor-emoticon=":\'(" alt=":\'(" title=":\'("/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace(':ermm:', 
                                        '<img src="http://techberry.org/forum/emoticons/ermm.png" data-sceditor-emoticon=":ermm:" alt=":ermm:" title=":ermm:"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace(':D', 
                                        '<img src="http://techberry.org/forum/emoticons/grin.png" data-sceditor-emoticon=":D" alt=":D" title=":D"/>', 
                                        $textNode->getValue()));
        $textNode->setValue(str_replace('<3', 
                                        '<img src="http://techberry.org/forum/emoticons/heart.png" data-sceditor-emoticon="<3" alt="<3" title="<3"/>', 
                                        $textNode->getValue()));
    }

    function visitElementNode(\JBBCode\ElementNode $elementNode)
    {
        /* We only want to visit text nodes within elements if the element's
         * code definition allows for its content to be parsed.
         */
        if ($elementNode->getCodeDefinition()->parseContent()) {
            foreach ($elementNode->getChildren() as $child) {
                $child->accept($this);
            }
        }
    }

}
