<?php
update_option( 'otb_new_theme', false );
?>

<h2><?php echo __( 'Check out our themes!', 'you-can-quote-me-on-that' ); ?></h2>

<p>
	<?php
	echo __( 'If you like this plugin you might like our themes!', 'you-can-quote-me-on-that' );
	?>
<p>


<ul class="vanilla themes">

<?php 
foreach ($this->themes as $theme) {
	$theme = (object) $theme;
	$new   = true === $theme->new;

	if ($new && !get_option( 'otb_new_theme_' .$theme->slug. '_viewed' ) ) {
		update_option( 'otb_new_theme_' .$theme->slug. '_viewed', true );
	}
?>

	<li>
	
		<a href="https://www.outtheboxthemes.com/go/plugin-you-can-quote-me-on-that-<?php echo $theme->slug; ?>" target="_blank"><?php echo '<img src="'. $theme->thumbnail .'" title="' .$theme->title. ' WordPress theme" />'; ?></a>
	
		<div class="details">
			<h2>
			<?php 
				echo '<a href="https://www.outtheboxthemes.com/go/plugin-you-can-quote-me-on-that-' .$theme->slug. '" target="_blank" title="' .$theme->title. ' WordPress theme">' . $theme->title . '</a>';
				if ( $new ) {
					echo '<span class="new">NEW!</span>';
				}
			?>
			</h2>
			
<?php
	if ( $theme->coming_soon == false ) {
	} else {
?>
	<div class="coming-soon"><?php echo __( 'Coming soon!', 'you-can-quote-me-on-that' ); ?></div>
<?php 
	}
?>
		</div>

	</li>
	
<?php
}
?>

</ul>