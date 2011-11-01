<?php
class ThingLinkTag {

    public $originalUrl, $sceneId, $thingId, $params;

    function __construct() {
        // URL that tag was linked to
        $this->originalUrl = $_GET['tlOrigUrl'];

        // Scene id. Unique id identifying an image with tags.
        $this->sceneId = $_GET['tlScene'];

        // Thing id. Unique id identifying a tag inside a scene.
        $this->thingId = $_GET['tlThing'];

        $this->params = self::getParams();
    }

    public static function getParams() {
        $stdParams = array('tlOrigUrl', 'tlScene', 'tlThing');
        $params = array();
        foreach ($_GET as $key => $value) {
            if (!in_array($key, $stdParams)) {
                $params[$key] = $value;
            }
        }
        return $params;
    }

    public function renderTemplate($vars = array(), $template = 'myTagTemplate.php') {
        extract($vars);
        require $template;
    }
}
?>