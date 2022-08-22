<?php

class HtmlString
{
    private $string;



    function __construct($string)
    {
        $this->setString($string);
    }

    function getString()
    {
        return $this->string;
    }

    function setString($newString)
    {
        if (is_string($newString)) {
            $this->string = $newString;
        }
    }

    public function getBoldString()
    {
        return '<b>' . $this->string . '</b>';
    }

    public function getItalicString()
    {
        return '<i>' . $this->string . '</i>';
    }

    public function getItalicBoldString()
    {
        return '<b><i>' . $this->string . '</i></b>';
    }
}
/*
  Part 1 : 

  Design an HtmlString class.

  It is intended to display bold and / or italic text.

  This class have only one property : $string

  It will have the following methods:

  - setString ($string)
  Sets the string

  - getString ()
  Get the string

  - getBoldString()
  Get a bold version of the string

  - getItalicString ()
  Get an italic version of the string

  - getItalicBoldString ()
  Get a bold italic version of the string

  Be careful, put the class declaration in a separate file!

  Use Example :
 */

//require_once 'Solutions/HtmlString.php';

//$markup = new HtmlString();
//$markup->setString('My strinnnng');
///$bold = $markup->getBoldString();

//echo $bold; /* Display <b>My strinnnng</b> */

/*
  Part 2 :

  Make it possible to directly create a HtmlString object
  with string in parentheses :

 */
