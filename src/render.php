<form id="lmc-search-form" name="searchForm" method="get" target="_self" action="https://sbctc-bellevuecollege.primo.exlibrisgroup.com/discovery/search?" enctype="application/x-www-form-urlencoded; charset=utf-8">
	<!-- // New URL https://sbctc-bellevuecollege.primo.exlibrisgroup.com/discovery/search?vid=01STATEWA_BELCC:BELLEVUE&sortby=rank -->
	<!-- Customizable Parameters -->
	<input type="hidden" name="vid" value="01STATEWA_BELCC:BELLEVUE">
	<input type="hidden" name="institution" value="01STATEWA_BELCC"> 
	<input type="hidden" name="search_scope" value="MyInst_and_CI" id="primo_peram_search_scope">

	<input type="hidden" name="tab" value="Everything" id="primo_peram_tab">
	<input type="hidden" name="mode" value="basic" id="primo_peram_mode">
	
	<!-- Fixed parameters -->
	<input type="hidden" name="query" id="primoQuery">

	<div class="card text-bg-primary rounded-2">
		<h2 class="card-header h5">
			<label for="primoQueryTemp"><?php _e('Search for Bellevue College Library Resources', 'lmc-search-plugin'); ?></label>
		</h2>
		<div class="card-body text-bg-light rounded-bottom-2">
			<div class="input-group">
				<input type="text" id="primoQueryTemp" value="" class="form-control" maxlength="400">
				<input id="lmc-search-button" type="submit" value="<?php _e('Search', 'lmc-search-plugin'); ?>" class="btn btn-primary" type="button">
			</div>
		</div>
	</div>
</form>

