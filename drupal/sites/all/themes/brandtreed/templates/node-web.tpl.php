<?php 
//Web Content Type 
?>
<div id="node-<?php print $node->nid ?>" class="<?php print $classes ?>">
  <div class="content group">
  	<h1><?php print $title ?></h1>
	<div class="web-client">
		<strong>Client: </strong>
		<?php if ($node->field_web_client[0]['value']): ?>
			<?php print t($node->field_web_client[0]['view']); ?>
		<?php endif ?>
	</div><!--end.web-client-->
	

  
  
  	<div class="web-overview">
		<?php if ($node->content['body']['#value']): ?>
    		<?php print $node->content['body']['#value'] ?>
    	<?php endif ?>
	</div><!--end.web-overview-->
	
	<div class="web-specs">
		<div class="left">
	 <?php print $node->content ['taxonomy_node_content_2']['#value']?>
		 <?php print $node->content ['taxonomy_node_content_1']['#value']?>
	
	</div><!--end.left-->
	<div class="right">
	<?php if ($node->field_web_url[0]['view']): ?>
		<a href="<?php print t($node->field_web_url[0]['view']); ?>" class="btn">VIEW WEBSITE</a>	
	<?php endif ?>
		
	</div><!--end.right-->
	</div><!--end.web-specs-->
	
		
		
		
	<div class="web-gallery">
	<h2>Web Gallery</h2>
	<em>Click screenshots to see larger versions.</em>
	<?php if ($node->field_web_screenshot_1[0]['view']): ?>
		<?php print t($node->field_web_screenshot_1[0]['view']); ?>
	<?php endif ?>
	<?php if ($node->field_web_desc_1[0]['view']): ?>
		<?php print t($node->field_web_desc_1[0]['view']); ?>
	<?php endif ?>
	
	<?php if ($node->field_web_screenshot_2[0]['view']): ?>
		<?php print t($node->field_web_screenshot_2[0]['view']); ?>
	<?php endif ?>
	<?php if ($node->field_web_desc_2[0]['view']): ?>
		<?php print t($node->field_web_desc_2[0]['view']); ?>
	<?php endif ?>
	
	<?php if ($node->field_web_screenshot_3[0]['view']): ?>
		<?php print t($node->field_web_screenshot_3[0]['view']); ?>
	<?php endif ?>
	<?php if ($node->field_web_desc_3[0]['view']): ?>
		<?php print t($node->field_web_desc_3[0]['view']); ?>
	<?php endif ?>
	
	<?php if ($node->field_web_screenshot_4[0]['view']): ?>
		<?php print t($node->field_web_screenshot_4[0]['view']); ?>
	<?php endif ?>
	<?php if ($node->field_web_desc_4[0]['view']): ?>
		<?php print t($node->field_web_desc_4[0]['view']); ?>
	<?php endif ?>
	
	<?php if ($node->field_web_screenshot_5[0]['view']): ?>
		<?php print t($node->field_web_screenshot_5[0]['view']); ?>
	<?php endif ?>
	<?php if ($node->field_web_desc_5[0]['view']): ?>
		<?php print t($node->field_web_desc_5[0]['view']); ?>
	<?php endif ?>
	</div>
	
		
  </div><!--end.content-->


</div><!--end.node-->




