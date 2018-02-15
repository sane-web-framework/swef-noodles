<?php $this->titleSet ('Members Only'); ?>
<h2>This is a script only accessible by logged in public users.</h2>

<p><?php echo htmlentities (__FILE__); ?></p>

<p>Welcome <?php echo htmlentities ($this->swef->user->userName); ?></p>

