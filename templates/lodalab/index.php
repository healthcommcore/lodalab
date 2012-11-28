<?php
/**
 * @version		$Id: index.php 21140 2011-04-11 17:10:29Z dextercowley $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32659081-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body>
		<div class="wrapper">
        	<?php if($this->countModules("menu")) : ?>
            	<div id="menu">
                    <jdoc:include type="modules" name="menu" style="container" />
                </div> 
                <div class="clr"></div>   
            <?php endif; ?>
            <div class="top_edges">
            </div>
            <?php if($this->countModules("institutions")) : ?>
            	<div id="institutions">
                    <jdoc:include type="modules" name="institutions" style="container" />
                </div>    
            <?php endif; ?>
            <?php if($this->countModules("homepage_graphic")) : ?>
            	<div id="homepage_graphic">
                    <jdoc:include type="modules" name="homepage_graphic" style="container" />
                </div>    
            <?php endif; ?>
            <?php if($this->countModules("small_header")) : ?>
            	<div id="small_header">
                    <jdoc:include type="modules" name="small_header" style="container" />
                </div>    
            <?php endif; ?>
            <?php if($this->countModules("subnav")) : ?>
            	<div id="subnav">
                    <jdoc:include type="modules" name="subnav" style="container" />
                </div>    
            <?php endif; ?>
            <div class="main_content">
            	<jdoc:include type="component" />
            </div>
            <div class="footer">
            	<?php if($this->countModules("boilerplate")) : ?>
                    <div id="boilerplate">
                        <jdoc:include type="modules" name="boilerplate" style="container" />
                    </div>    
                <?php endif; ?>
            </div>
            <div class="bottom_edges"></div>
		</div>
	</body>
</html>
