<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
 <div class="container">
 	<div class="row">
	<!-- Blog Entries Column -->
		<div class="col-md-12">
			<h1 class="page-header">
			Welcome to my Blog
			<small>Secondary Text</small>
			</h1>
			<div class="row">
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
<?php endforeach; ?>
</div>
		</div>
	</div>	
</div>
