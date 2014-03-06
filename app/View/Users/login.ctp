
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
		Login - APFleetTracker	
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

<div id="loginBackground">

<section role="main" id="main">
    <div id="mainRow" class="row">
            <div id="main-content" class="large-12 medium-12 small-12 columns">
<h1>AP Fleet Tracker - Login</h1>

<?php
echo $this->Form->create('User', array(
    'url' => array(
        'controller' => 'users',
        'action' => 'login'
    )
));
echo $this->Form->input('User.username',
	array(
	'required' => true, 
	'placeholder' => 'Username',

	'label' => false
	)
);

echo $this->Form->input('User.password',
	array(
	'required' => true, 
	'placeholder' => 'Password',
	'label' => false
	)
);

echo $this->Form->submit(
		'Login', 
    	array('class' => 'button expand'));

echo $this->Form->end();
?>
</div>
</div>
</section>

</div>

</body>

</html>