<?php $this->titleSet ('Members Only'); ?>
<h2>This is a script only accessible by logged in public users.</h2>

<p><?php echo htmlspecialchars (__FILE__); ?></p>

<p>Welcome <?php echo htmlspecialchars ($this->swef->user->userName); ?></p>

