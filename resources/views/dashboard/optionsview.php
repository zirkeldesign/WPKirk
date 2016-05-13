<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="kirk">
  <h1>Options View</h1>

  <p>The current options are:</p>
  <p><code> echo $plugin->options</code></p>

  <pre><?php echo $plugin->options ?></pre>

  <?php if ( isset( $feedback ) ) : ?>
    <h3><?php echo $feedback ?></h3>
  <?php endif; ?>

  <form action="" method="post">

    <?php wp_nonce_field( 'Options' ); ?>

    <div>
      <label>General.option_1</label>
      <input type="hidden" name="General/option_1" value="false"/>
      <input type="checkbox"
             name="General/option_1"
        <?php checked( 'true', $plugin->options->get( 'General.option_1' ) ) ?>
             value="true"/>
    </div>

    <div>
      <label>General.option_2</label>
      <input type="hidden" name="General/option_2" value="false"/>
      <input type="checkbox"
             name="General/option_2"
        <?php checked( 'true', $plugin->options->get( 'General.option_2' ) ) ?>
             value="true"/>
    </div>

    <div>
      <label>Special.Name</label>
      <input type="text"
             name="Special/Name"
             value="<?php echo $plugin->options->get( 'Special.Name' ) ?>"/>

    </div>

    <div>
      <label>General/option_3/sub_option_of_3</label>
      <input type="text"
             name="General/option_3/sub_option_of_3"
             value="<?php echo $plugin->options->get( 'General.option_3.sub_option_of_3' ) ?>"/>

    </div>

    <button class="button button-primary">Update</button>

  </form>

  <h2>Html</h2>

  <div>
    <p><code>echo Html::button( "Hello, world!" )</code></p>
    <?php echo Html::button( "Hello, world!" ) ?>
  </div>

  <div>
    <p><code>Html::button( "Hello, world!" )->html()</code></p>
    <?php Html::button( "Hello, world!" )->html() ?>
  </div>

  <div>
    <p><code>$button = Html::button( "Hello, world!" );</code></p>
    <p><code>echo $button;</code></p>
    <?php
    $button = Html::button( "Hello, world!" );
    echo $button; // or $button->html();
    ?>
  </div>

  <div>
    <p><code>echo Html::button( "Hello, world!" )->class( 'button')</code></p>
    <?php echo Html::button( "Hello, world!" )->class( 'button' ) ?>
  </div>

  <div>
    <p><code>echo Html::button( "Hello, world!" )->class( 'button button-primary')</code></p>
    <?php echo Html::button( "Hello, world!" )->class( 'button button-primary' ) ?>
  </div>

  <div>
    <p><code>echo Html::button( "Hello, world!" )->class( [ 'button', 'button-primary' ] )</code></p>
    <?php echo Html::button( "Hello, world!" )->class( [ 'button', 'button-primary' ] ) ?>
  </div>

  <div>
    <p><code>echo Html::button( [ 'content' => "Hello, world!", 'class' => 'button button-hero' ] )</code></p>
    <?php echo Html::button( [ 'content' => "Hello, world!", 'class' => 'button button-hero' ] ) ?>
  </div>


</div>