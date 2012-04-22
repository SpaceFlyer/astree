<script>
	jQuery(document).ready(function(){
		jQuery('#astree_tabs').tabs();
	});
</script>

<div id="astree_tabs">
	<ul>
		<li><a href="#tabs-1">Children</a></li>
		<li><a href="#tabs-2">Related</a></li>
		<li><a href="#tabs-3">Comments</a></li>
	</ul>
	
	<div id="tabs-1">
		<?php hide($children['new_child_form']); echo render($children); ?>
		<h2 class="title child-form"><?php echo t('Add new child'); ?></h2>
		<?php echo render($children['new_child_form']); ?>
	</div>
	
	<div id="tabs-2">
		<?php hide($related['new_related_form']); echo render($related); ?>
		<h2 class="title related-form"><?php echo t('Add new related'); ?></h2>
		<?php echo render($related['new_related_form']); ?>
		</div>
	
	<div id="tabs-3">
		<?php echo render($comments); ?>
	</div>
	
</div>
