<form id="lmc-browzine-search-form" name="browzineSearchForm" method="get" action="https://browzine.com/libraries/3605/subjects">

	<div class="card text-bg-primary rounded-2">
		<h2 class="card-header h5">
			<label for="browzineQuery"><?php echo esc_html( $attributes['headerText'] ?? "" ); ?></label>
		</h2>
		<div class="card-body text-bg-light rounded-bottom-2">
			<?php if ( ! empty( $attributes['helpText'] ) ) : ?>
			<p id="lmc-search-help-text"><?php echo esc_html( $attributes['helpText'] ?? "" ); ?></p>
			<?php endif; ?>
			<div class="input-group">
				<input type="text" id="browzineQuery" name="query" value="" class="form-control" maxlength="400" <?php if ( ! empty( $attributes['helpText'] ) ) : ?> aria-describedby="lmc-search-help-text"<?php endif; ?>>
				<input id="lmc-browzine-search-button" type="submit" value="<?php _e('Search', 'lmc-search-plugin'); ?>" class="btn btn-primary" type="button">
			</div>
		</div>
	</div>
</form>

