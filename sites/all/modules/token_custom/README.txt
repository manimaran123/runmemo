Custom Tokens
----------------------

Authors 
---
Ariel Barreiro (hanoii) http://drupal.org/user/23157
abarrei@gmail.com

Rodolfo Ripado (gaspaio) http://drupal.org/user/545538
ggaspaio@gmail.com

Overview:
--------
It gives the user the ability to create custom tokens using PHP code for specific
replacements that can improve other modules using the core token API.

For additional options and help elements install the Token module.
<a href="http://drupal.org/project/token">Token</a>.

Advanced module, PHP code evaluation and execution:
--------
This module is designed for developers with a little PHP knowledge. Custom tokens
will evaluate and execute PHP snippets in order to provide the replacements for
the tokes you define.

Installation:
------------
1. Copy the token_custom directory to the Drupal sites/<...>/modules/ directory.
2. Go to "Administer" -> "Modules" and enable the module.
3. Go to "Administer" -> "Build" -> "Tokens" and start creating the tokens you
need.
4. You need to assign proper permissions to any role you would like to be able
to create additional PHP tokens.

