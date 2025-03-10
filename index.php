<?php
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.framework',true);
$app = JFactory::getApplication();
$menu_alias = $app->getMenu()->getActive()->alias;
?>
<!DOCTYPE html>
<html lang="de-DE">
 <head>
 <jdoc:include type="head" />
   <link rel="icon" href="/images/logo1.jpg" type="image/x-icon">
  <meta charset="UTF-8">
  <title>Klimaschutz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,500" rel="stylesheet">
  <script type="text/javascript" src="js/mobile.js"></script>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mobile.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/desktop.css" type="text/css" media="screen" />
 </head>
<body>

 <div id="logo_bereich">
   <jdoc:include type="modules" name="position-8" style="html5" />
   <a href="index.php"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo2-rmbg.png" style="height: 20px" width:"100px" ></a>
 </div>
   <header>
   </header>
   <nav id="nav-main" class="mobile">
       <jdoc:include type="modules" name="position-1" style="html5" />
   </nav>
   
   <main>
     <div id="text">
        <jdoc:include type="message" style="none" />
        <jdoc:include type="modules" name="position-2" style="html5" />
        <jdoc:include type="component" style="none" />
     </div>
    <div id="mittel-teil">
    <jdoc:include type="modules" name="position-3" style="html5" />
    </div>
    <div id="text-mitte">
    <jdoc:include type="modules" name="position-4" style="html5" />
    </div>
    <div id="video">
    <jdoc:include type="modules" name="position-5" style="html5" />
    </div>

    </main>
   <footer class="scrollUp">
     <nav id="nav-bottom">
        <jdoc:include type="modules" name="position-6" style="html5" />
      
     </nav>
   <div id="nav-bottom2">
    <jdoc:include type="modules" name="position-7" style="html5" />
   </div>
   </footer>
 </body>
</html>
