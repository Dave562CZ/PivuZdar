<?php 
echo((count(get_the_category())>1) ? 'Rubriky: ' : 'Rubrika: ');
echo get_the_category_list(', '); 
?>

