<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>My Rich Media Tag</title>
	<link rel="stylesheet" type="text/css" href="//www.thinglink.com/css/themes/common.css" />
	<script type="text/javascript" src="//www.thinglink.com/jse/thinglink.js"></script>
</head>
<body>
    <h2>Item name: <?php echo $itemName; ?></h2>
    <h3>Other accessible variables:</h3>
    <ul>
        <li>$this-&gt;originalUrl: <?php echo $this->originalUrl; ?></li>
        <li>$this-&gt;sceneId: <?php echo $this->sceneId; ?></li>
        <li>$this-&gt;thingId: <?php echo $this->sceneId; ?></li>
        <li>$this-&gt;params: <pre><?php var_dump($this->params); ?></pre></li>
    </ul>
    <div id="source_footer"><a href="<?php echo $this->originalUrl; ?>" target="_blank" title="Go to linked address">mydomain.com</a></div>
</body>
</html>