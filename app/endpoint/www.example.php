<?php $this->titleSet ('Example'); ?>

<?php echo htmlspecialchars ('This is file '.__FILE__.SWEF_STR__CRLF); ?>

<pre>
    THIS EXAMPLE
    ------------

     * The template for this endpoint is html/www.default.html (table swef_endpoint)
     * This endpoint only exists in the context 'www' - the public website (table swef_endpoint)
     * This context 'www' is the public website (table swef_context)
     * The only usergroup that may access this endpoint is 'public' (table swef_access)
     * [ As it is not allowed for usergroup 'anon', public users must be logged in ]

</pre>

<h3>Test for a specific usergroup:</h3>
<?php if ($this->swef->user->inUsergroup('public')): ?>
<p>You are in usergroup = public</p>
<?php elseif ($this->swef->user->inUsergroup('anon')): ?>
<p>You are in usergroup = anon</p>
<?php endif; ?>

