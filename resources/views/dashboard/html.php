<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="kirk">
  <h1>Html Tags Support</h1>

  <p>Here you'll find some example about Html support.</p>

  <h2>Html facade</h2>
  <div>
    <p><code>echo Html::button( "Hello, world!" )</code></p>
    <?php echo Html::button( "Hello, world!" ) ?>
  </div>

  <h2>Fluent Example</h2>
  <div>
    <p><code>Html::button( "Hello, world!" )->html()</code></p>
    <?php Html::button( "Hello, world!" )->html() ?>
  </div>

  <h2>Auto Html output</h2>
  <div>
    <p><code>$button = Html::button( "Hello, world!" );</code></p>
    <p><code>echo $button;</code></p>
    <?php
    $button = Html::button( "Hello, world!" );
    echo $button; // or $button->html();
    ?>
  </div>

  <h2>You can use the attributes in several way</h2>
  <div>
    <p><code>$button = Html::button( "Hello, world!" );</code></p>
    <p><code>$button->class = 'button button-primary';</code></p>
    <p><code>echo $button;</code></p>
    <?php
    $button = Html::button( "Hello, world!" );
    $button->class = 'button button-primary';
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

  <hr/>
  <h2>Style</h2>
  <div>
    <p><code>Html::button( "Hello, world!" )->style( 'color', 'red' )</code></p>
    <?php echo Html::button( "Hello, world!" )->style( 'color', 'red' ) ?>
  </div>

  <div>
    <p><code>Html::button( "Hello, world!" )->style( 'color', 'red', 'font-weight', 'bold' )</code></p>
    <?php echo Html::button( "Hello, world!" )->style( 'color', 'red', 'font-weight', 'bold' ) ?>
  </div>

  <div>
    <p><code>Html::button( "Hello, world!" )->style( [ 'background-color' => 'red', 'color' => 'white' ] )</code></p>
    <?php echo Html::button( "Hello, world!" )->style( [ 'background-color' => 'red', 'color' => 'white' ] ) ?>
  </div>

  <hr/>
  <h2>Currently Html tags</h2>

  <h3>A</h3>
  <div>
    <p><code>echo Html::a( "Click me" )->href( 'http://undolog.com' )</code></p>
    <?php echo Html::a( "Click me" )->href( 'http://undolog.com' ) ?>
  </div>

  <hr/>
  <h3>FORM</h3>
  <div>
    <p><code>echo Html::form()->acceptcharset( 'ISO-8859-1' )</code></p>
    <?php echo Html::form()->acceptcharset( 'ISO-8859-1' ) ?>
  </div>

  <hr/>
  <h3>INPUT</h3>
  <div>
    <p><code>echo Html::input()->type( 'text' )->value( 'Hello' )</code></p>
    <?php echo Html::input()->type( 'text' )->value( 'Hello' ) ?>
  </div>

  <div>
    <p><code>echo Html::input()->type( 'checkbox' )->value( 'Hello' )</code></p>
    <?php echo Html::input()->type( 'checkbox' )->value( 'Hello' ) ?>
  </div>

  <hr/>
  <h3>SELECT</h3>
  <div>
    <p><code>echo Html::select( Html::option( 'Item' )->render() )</code></p>
    <?php echo Html::select( Html::option( 'Item' )->render() ) ?>
  </div>

  <div>
    <p><code>echo Html::select()->options( [ 'Item 1', 'Item 2'] )</code></p>
    <?php echo Html::select()->options( [ 'Item 1', 'Item 2' ] ) ?>
    <p>
      <code>
        <?php echo htmlspecialchars( "<select>" ) ?><br/>
        <?php echo htmlspecialchars( "  <option>Item 1</option>" ) ?><br/>
        <?php echo htmlspecialchars( "  <option>Item 2</option>" ) ?><br/>
        <?php echo htmlspecialchars( "</select>" ) ?>
      </code>
    </p>
  </div>

  <div>
    <p><code>echo Html::select()->options( [ 'item-1' => 'Item 1', 'item-2' => 'Item 2'] )</code></p>
    <?php echo Html::select()->options( [ 'item-1' => 'Item 1', 'item-2' => 'Item 2' ] ) ?>
    <p>
      <code>
        <?php echo htmlspecialchars( '<select>' ) ?><br/>
        <?php echo htmlspecialchars( '  <option value="item-1">Item 1</option>' ) ?><br/>
        <?php echo htmlspecialchars( '  <option value="item-2">Item 2</option>' ) ?><br/>
        <?php echo htmlspecialchars( '</select>' ) ?>
      </code>
    </p>
  </div>

  <hr/>
  <h3>TEXTAREA</h3>
  <div>
    <p><code>echo Html::input()->type( 'text' )->value( 'Hello' )</code></p>
    <?php echo Html::textarea( 'Hi there, How are you?' )?>
  </div>

  <hr/>

  <h2>Custom attributes</h2>
  <div>
    <p><code>echo Html::button( 'Click me!' )->attribtes( 'hello', 'world' )</code></p>
    <?php echo Html::button( 'Click me!' )->attributes( 'hello', 'world' ) ?>
    <p>You'll see looks like </p>
    <p><code><?php echo htmlspecialchars( '<button hello="world">Click me!</button>' ) ?></code></p>
  </div>

</div>