
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

$cakeDescription = __d('cake_dev', 'APTracker');
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
    <div id="mainRow" class="row">
        <div id="sidebar-navigation-wrapper" class="large-1 medium-1 small-1 columns">
            <div id="sidebar-navigation" class="show-for-large-up">
            <ul class="side-nav">
                <li><h5>MENU</h5></li>
                <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'overview', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Packages'), array('controller' => 'packages', 'action' => 'index')); ?></li>
                <li><a href="#">Extras</a></li>
            </ul>
            </div>
            <div class="show-for-medium-down">
                <ul class="side-nav">
                    <li><?php echo $this->Html->link(__('O'), array('controller' => 'overview', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('D'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('V'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('J'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('P'), array('controller' => 'packages', 'action' => 'index')); ?></li>
                    <li><a href="#">E</a></li>
                </ul>
            </div>
        </div>




        <div id="main-content" class="large-11 medium-11 small-11 columns">

            <section>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
            </section>
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

</body>
</html>
