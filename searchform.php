<form role="search" method="get" id="searchform" action="<?php bloginfo('url')?>">
	<div>
		<input type="text" value="<?php the_search_query()?>" name="s" id="s" />
		<input type="submit" value="Hledat" id="searchsubmit" />
	</div>
</form>