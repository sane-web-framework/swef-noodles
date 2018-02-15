<?php $this->titleSet ('Example for anonymous user'); ?>

<h1>Open Example</h1>

<?php $this->notify ('This is a notification'); ?>

<pre>
    COMPONENT SCRIPTS
    =================

     * Scripts normally contain back-end processes and front-end output for buffering and insertion into a template
     * The name of an endpoint is the identifier for framework access control
     * Access control applies regular expressions and wildcards to endpoint names
     * A script is the key part of an endpoint
     * Script file is [the endpoint name].php
     * Scripts for page endpoints will often use the default template for the context (table swef_context)
     * Scripts for nested endpoints will typically use their own bespoke template
     * Endpoints are created and assigned templates in the database (table swef_endpoint)
     * HTTP access to an endpoint is dependent upon:
        * The context having access to the endpoint (table swef_endpoint)
     * Usergroup access to an endpoint is dependent upon:
        * The usergroup having access to the context (table swef_access)
     * Therefore if a usergroup has access to the context, it has access to the endpoint
     * Consequently the script is responsible for its own additional access control

    THIS EXAMPLE
    ------------

     * The template for this endpoint is html/www.default.html (table swef_endpoint)
     * This endpoint only exists in the context 'www' - the public website (table swef_endpoint)
     * This context 'www' is the public website (table swef_context)
     * The usergroups that may access this endpoint are 'public' and 'anon' (table swef_access)
     * [ As it is allowed for usergroup 'anon', public users need not be logged in ]

</pre>

<h3>Test for user login:</h3>
<?php if ($this->swef->userLoggedIn()): ?>
<p>You are logged in</p>
<?php else: ?>
<p>You are not logged in</p>
<?php endif; ?>


