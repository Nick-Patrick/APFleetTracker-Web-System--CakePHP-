
<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'APTrackers');
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?> -
        <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon') . "\n";

        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0' />" . "\n";

		//echo $this->Html->css('cake.generic');
        echo $this->Html->css('foundation') . "\n";
        echo $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCtSaop9b6LahtLt1F2kb2VMCDo1g8LIrk&sensor=false') . "\n";
        echo $this->Html->script('jquery');
        echo $this->Html->script('modernizr');
        echo $this->Html->script('jquery-timepicker');
        echo $this->Html->script('javascript');
        //echo $this->Html->script('foundation/foundation.abide');
		echo $this->fetch('meta') . "\n";
		echo $this->fetch('css') . "\n";
		echo $this->fetch('script') . "\n";
	?>

  <script> // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49063718-1', 'aphaulage.co.uk');
  ga('send', 'pageview');
  </script>
</head>
<body>

<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1>
                <?php echo $this->Html->link(
                        $this->Html->image('webHeaderPNGnoLogoInverted.png', array('alt' => $cakeDescription, 'border' => '0')),
                    'http://aphaulage.co.uk/apTracker', array('escape' => false)); ?>
            </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active">
                <a href="#">Management</a>
            </li>
            <li class="has-dropdown">
                <a href="#">Help</a>
                <ul class="dropdown">
                    <li><a href="#">Assigning Jobs</a></li>
                    <li><a href="#">Tracking Drivers</a></li>
                    <li><a href="#">Job Management</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                 <?php echo $this->Html->link('Log Out', array
                    ('controller' => 'users',
                     'action' => 'logout'),
                     array(), "Logging out will quit the application. Are you sure?"
                 ); ?>
            </li>
        </ul>
    </section>
</nav>

<section role="main">

 <div class="off-canvas-wrap">
             <div class="inner-wrap">
                <nav class="tab-bar">
                    <section class="left-small">
                      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
                    </section>
                
                    <section class="middle tab-bar-section">
                      <h1 class="title"></h1>
                    </section>
                
                   
                 </nav>
                
                <aside class="left-off-canvas-menu">
                    <ul class="off-canvas-list">
                      <li><label>Home</label></li>
                      <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'overview', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Activity'), array('controller' => 'overview', 'action' => 'viewActivityMap')); ?></li>
                      <li><label>Drivers</label></li>
                      <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'drivers', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'drivers', 'action' => 'manage')); ?></li>
                      <li><label>Jobs</label></li>
                      <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'jobs', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?></li>
                      <li><label>Vehicles</label><li>
                      <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'vehicles', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'vehicles', 'action' => 'manage')); ?></li>
                      <li><label>Extras</label></li>
                    </ul>
                </aside>
                
                
                
                <section class="main-section">
                    <section>
                         <?php echo $this->fetch('content'); ?>
                     </section>              
                </section>
             
            <a class="exit-off-canvas"></a>

         </div>
        </div>

</section>


	<?php echo $this->element('sql_dump'); ?>

<?php
echo $this->Html->script('jquery') . "\n";
echo $this->Html->script('vendor/fastclick') . "\n";
echo $this->Html->script('foundation.min') . "\n";
echo $this->Js->writeBuffer();
?>
<script>
    $(document).foundation();
</script>

<script type="text/javascript" src="http://aphaulage.co.uk/clickheat/js/clickheat.js"></script><noscript><p><a href="http://www.dugwood.com/index.html">CMS</a></p></noscript><script type="text/javascript"><!--
clickHeatSite = 'APTracker';clickHeatGroup = encodeURIComponent(window.location.pathname+window.location.search);clickHeatServer = 'http://aphaulage.co.uk/clickheat/click.php';initClickHeat(); //-->
</script>
</body>
</html>
