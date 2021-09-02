<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Options View</h1>
  <p>Here you can try the ability to handle a form for the options.</p>

  <p>The current options are:</p>
  <p><code> echo $plugin->options</code></p>

  <pre><?php echo $plugin->options ?></pre>

  <?php if (isset($feedback)) : ?>
  <div id="message" class="updated notice is-dismissible">
    <p>
      <?php echo $feedback ?>
    </p>
  </div>
  <?php endif; ?>

  <p>Here we're using a very useful HTML markup to display and handle the form fields.</p>
  <p>First of all we may use the nonce in this way</p>

  <pre>wp_nonce_field('Options');</pre>

  <p>The we may use special form fields</p>

  <pre>
<?php $code =
<<<OPS
<div>
  <label for="General/option_1">General.option_1</label>
  <input type="hidden" name="General/option_1" value="false" />
  <input type="checkbox" name="General/option_1" id="General/option_1" <?php checked('true', \$plugin->options->get('General.option_1')) ?>
  value="true"/>
</div>
OPS;

echo htmlentities($code);
?>
  </pre>

  <form action="" method="post">

    <?php wp_nonce_field('Options'); ?>

    <div>
      <label for="General/option_1">General.option_1</label>
      <input type="hidden" name="General/option_1" value="false" />
      <input type="checkbox" name="General/option_1" id="General/option_1" <?php checked('true', $plugin->options->get('General.option_1')) ?>
      value="true"/>
    </div>

    <div>
      <label for="General/option_2">General.option_2</label>
      <input type="hidden" name="General/option_2" value="false" />
      <input type="checkbox" name="General/option_2" id="General/option_2" <?php checked('true', $plugin->options->get('General.option_2')) ?>
      value="true"/>
    </div>

    <div>
      <label for="Special/Name">Special.Name</label>
      <input type="text" name="Special/Name" id="Special/Name"
        value="<?php echo $plugin->options->get('Special.Name') ?>" />

    </div>

    <div>
      <label for="General/option_3/sub_option_of_3">General/option_3/sub_option_of_3</label>
      <input type="text" name="General/option_3/sub_option_of_3" id="General/option_3/sub_option_of_3"
        value="<?php echo $plugin->options->get('General.option_3.sub_option_of_3') ?>" />

    </div>

    <button class="button button-primary">Update</button>

  </form>

</div>