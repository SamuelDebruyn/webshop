<article>
	<header>
		<h1><?php echo __("Sign in"); ?></h1>
	</header>
	<section>
		<fieldset>
			<legend><?php echo __("Sign in with your username and password"); ?></legend>
			<?php
				echo $this->Form->create();
				echo $this->Form->input("username", array('label' => 'Username: '));
				echo $this->Form->input("password", array('label' => 'Password: '));
				echo $this->Form->end("Sign in");
			?>
		</fieldset>
	</section>
	<footer>
		<p><?php echo $this->Html->link($this->Html->image('glyphicons/glyphicons_203_lock.png', array('alt' => 'Lock', 'class' => 'glyphicon')).'Forgot your password?', array('controller' => 'users', 'action' => 'password_reset'), array('escape' => false)); ?></p>
		<p><?php echo __("No account yet? Sign up now to enjoy all the benefits! You will be able to keep track of past orders, order the same products again, never have to fill in all your personal details again, receive our newsletter with discounts..."); ?></p>
		<p><?php echo $this->Html->link($this->Html->image('glyphicons/glyphicons_006_user_add.png', array('alt' => 'Sign up', 'class' => 'glyphicon')).'Sign up for a new account', array('controller' => 'users', 'action' => 'register'), array('escape' => false)); ?></p>
	</footer>
</article>