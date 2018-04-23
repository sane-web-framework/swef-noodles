
-- SHORTCUTS FOR EXAMPLES --

INSERT IGNORE INTO `swef_shortcut` (`shortcut_Is_System`, `shortcut_Context_LIKE`, `shortcut_Shortcut_URI`, `shortcut_Endpoint_URI`) VALUES
(0, 'www-%',  '/api-test',  '/www.anon.api_test'),
(0, 'www-%',  '/example-members', '/www.example'),
(0, 'www-%',  '/example-open',  '/www.anon.example'),
(1, 'www-%',  '/login', '/www.members'),
(0, 'www-%',  '/members', '/www.members'),
(0, 'www-%',  '/password-hash', '/www.anon.hash');
