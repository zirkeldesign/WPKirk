<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="kirk">
  <h1>Options</h1>

  <ul>
    <li><a href="#current-options">Current Option</a></li>
    <li><a href="#update">Update Options</a></li>
    <li><a href="#delete">Delete Options</a></li>
    <li><a href="#reset">Reset Options</a></li>
  </ul>


  <a name="current-options"></a>
  <hr/>
  <h2>Current option</h2>
  <p>The current options are:</p>
  <p><code> echo $plugin->options</code></p>

  <pre><?php echo $plugin->options ?></pre>

  <p>Get option <code>echo $plugin->options->get( 'General.option_2')
      = <?php echo $plugin->options->get( 'General.option_2' ) ?></code>
  </p>

  <p>Get branch option <code>echo $plugin->options->get( 'General.option_3')
      = <?php echo var_export( $plugin->options->get( 'General.option_3' ) ) ?></code>
  </p>

  <p>Get option <code>echo $plugin->options->get( 'General.option_3.sub_option_of_3')
      = <?php echo $plugin->options->get( 'General.option_3.sub_option_of_3' ) ?></code>
  </p>

  <p>Get default option <code>echo $plugin->options->get( 'General.doNotExists', 'default' )
      = <?php echo $plugin->options->get( 'General.doNotExists', 'default' ) ?></code>
  </p>


  <a name="update"></a>
  <hr/>
  <h2>Update</h2>

  <p>Change <code>$plugin->options->set( 'Special.Name', 'John' );</code></p>
  <?php $plugin->options->set( 'Special.Name', 'John' ) ?>
  <pre><?php echo $plugin->options ?></pre>

  <p>Change with mixed value <code>$plugin->options->set( 'Special.Name', [ 'John', 'Good' ] );</code></p>
  <?php $plugin->options->set( 'Special.Name', [ 'John', 'Good' ] ) ?>
  <pre><?php echo $plugin->options ?></pre>

  <p>Add <code>$plugin->options->set( 'Special.time', time() );</code></p>
  <?php $plugin->options->set( 'Special.time', time() ) ?>
  <pre><?php echo $plugin->options ?></pre>

  <p>Mass update <code>$plugin->options->update( [ 'General' => [ 'option_4' => [ 'color' => 'red', 'background' =>
      'transparent' ] ] ] );</code></p>
  <?php $plugin->options->update(
    [
      'General' => [
        'option_4' => [
          'color'      => 'red',
          'background' => 'transparent'
        ]
      ]
    ]
  )
  ?>
  <pre><?php echo $plugin->options ?></pre>

  <p>Mass insert <code>$plugin->options->update( [ 'General' => [ 'option_5' => [ 'color' => 'red', 'background' =>
      'transparent' ] ] ] );</code></p>
  <?php $plugin->options->update(
    [
      'General' => [
        'option_5' => [
          'color'      => 'red',
          'background' => 'transparent'
        ]
      ]
    ]
  )
  ?>
  <pre><?php echo $plugin->options ?></pre>



  <a name="delete"></a>
  <hr/>
  <h2>Delete</h2>

  <p>Delete option by set <code>$plugin->options->set( 'General.option_1', null )</code></p>
  <?php $plugin->options->set( 'General.option_1', null ) ?>
  <pre><?php echo $plugin->options ?></pre>

  <p>Delete option <code>$plugin->options->delete( 'General.option_4' )</code></p>
  <?php $plugin->options->delete( 'General.option_4' ) ?>
  <pre><?php echo $plugin->options ?></pre>

  <h2>Delete all</h2>
  <p>Delete option <code>$plugin->options->delete()</code></p>
  <?php $plugin->options->delete() ?>
  <pre><?php echo $plugin->options ?></pre>


  <a name="reset"></a>
  <hr/>
  <h2>Reset to default</h2>
  <p><code>$plugin->options->reset()</code></p>
  <?php $plugin->options->reset() ?>
  <pre><?php echo $plugin->options ?></pre>

</div>