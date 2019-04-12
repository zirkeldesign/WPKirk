<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php

use WPKirk\Http\Controllers\Product;
use WPKirk\Http\Controllers\User;

?>

<div class="wp-kirk wrap">

  <h1>Eloquent ORM</h1>

  <h2>Query WordPress users table</h2>

  <pre>
User::all();
<details>
<?php
var_dump(User::all());
?>
</details>
</pre>

  <h2>Find</h2>

  <pre>
User::find(1)->user_email;
<?php
var_dump(User::find(1)->user_email);
?>
</pre>

  <h2>Custom Table</h2>

  <pre>
Product::find([11,12]);
<details>
<?php
var_dump(Product::find([11,12]));
?>
</details>
</pre>

  <pre>
Product::find(11)->activity;
<?php
var_dump(Product::find(11)->activity);
?>
</pre>

  <h2>Loop into</h2>

  <pre>
Product::all()->each(function ($e) {
    var_dump($e->log_id);
});

<?php
Product::all()->each(function ($e) {
    var_dump($e->log_id);
});
?>
</pre>

  <p>You'll find more details <a target="_blank" href="https://laravel.com/docs/5.8/eloquent">Here</a></p>
</div>