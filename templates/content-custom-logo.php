<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }else{ ?>
  <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
  <?php
  }
  ?>