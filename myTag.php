<?php
require_once 'ThingLinkTag.class.php';

$tag = new ThingLinkTag();

$tmplVars = array();

/*
   START doing your magic here.
   Just make sure you place the variables used in your template into $tmplVars!
*/
if (isset($tag->params['item'])) {
    $tmplVars['itemName'] = $tag->params['item'];
}
/*
   END your magic here.
*/

$tag->renderTemplate($tmplVars, 'myTagTemplate.php');
?>