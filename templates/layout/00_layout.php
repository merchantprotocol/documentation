<!DOCTYPE html>
<!--[if IE 8]>			<html lang="en-US" prefix="og: http://ogp.me/ns#" class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html lang="en-US" prefix="og: http://ogp.me/ns#" class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title><?= $page['title']; ?> <?php if ($page['title'] != $params['title']) { echo "- " . $params['title']; } ?></title>
    <meta name="description" content="<?= $params['tagline']; ?>" />
    <meta name="author" content="<?= $params['author']; ?>">
    
    <link rel="icon" href="<?= $params['theme']['favicon']; ?>" type="image/x-icon">
    <!-- Mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Font -->
    <?php foreach ($params['theme']['fonts'] as $font) {
        echo "<link href='$font' rel='stylesheet' type='text/css'>";
    } ?>

    <!-- CSS -->
    <?php foreach ($params['theme']['css'] as $css) {
        echo "<link href='$css' rel='stylesheet' type='text/css'>";
    } ?>

    <?php if ($params['html']['search']) { ?>
        <!-- Tipue Search -->
        <link href="<?= $base_url; ?>tipuesearch/tipuesearch.css" rel="stylesheet">
    <?php } ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php
    if ($params['html']['google_analytics']) {
        $this->insert('theme::partials/google_analytics', ['analytics' => $params['html']['google_analytics'], 'host' => array_key_exists('host', $params) ? $params['host'] : '']);
    }
    if ($params['html']['piwik_analytics']) {
        $this->insert('theme::partials/piwik_analytics', ['url' => $params['html']['piwik_analytics'], 'id' => $params['html']['piwik_analytics_id']]);
    }
    ?>
    
</head>
<body class="<?= $params['html']['float'] ? 'with-float' : ''; ?>home singular page page-id-84 page-template page-template-template-front-page page-template-template-front-page-php smoothscroll enable-animation group-blog smoothscroll enable-animation">
    <div id="wrapper">
    	<?php echo $this->section('content'); ?>
	</div>
	
    <!-- jQuery -->
    <script src="<?= $base_url; ?>themes/daux/js/jquery-1.11.3.min.js"></script>

    <!-- hightlight.js -->
    <script src="<?= $base_url; ?>themes/daux/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- JS -->
    <?php foreach ($params['theme']['js'] as $js) {
        echo '<script src="' . $js . '"></script>';
    } ?>

    <script src="<?= $base_url; ?>themes/daux/js/daux.js"></script>

    <?php if ($params['html']['search']) { ?>
        <!-- Tipue Search -->
        <script type="text/javascript" src="<?php echo $base_url; ?>tipuesearch/tipuesearch_set.js"></script>
        <script type="text/javascript" src="<?php echo $base_url; ?>tipuesearch/tipuesearch.min.js"></script>

        <script>
            window.onunload = function(){}; // force $(document).ready to be called on back/forward navigation in firefox
            $(document).ready(function() {
                $('#tipue_search_input').tipuesearch({
                    'show': 10,
                    'mode': 'json',
                    'base_url': '<?php echo $base_url?>'
                });
            });
        </script>
    <?php } ?>

</body>
</html>
