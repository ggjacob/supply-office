<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>smlib/js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<div id="body_section">
<!-- Errors -->
<?php if ($message) { echo "<div class=\"yellow_bar\">".$message."</div>"; } ?>
<div id="body_section_inner">
<div class="contentPageWrapper">

<div class='mainInfo'>
<div id="form">
	<h1><?php echo $page_title; ?></h1>
	<p><?php echo $this->lang->line("update_info"); ?></p>
	
    <?php echo form_open("module=settings&view=edit_invoice_type&id=".$id);?>
      <p><label><?php echo $this->lang->line("title"); ?>:</label>
      <?php echo form_input('name', $invoice_type->name, 'class="text"');?>
      <span class="input_tips"><?php echo $this->lang->line("invoice_title_tip"); ?></span>
      </p>
          
      <p><label><?php echo $this->lang->line("type"); ?>:</label>
      <?php
	  $type = $invoice_type->type;
			switch ($type) {
					case "real":
						$type =  1;
						break;
					case "draft":
						$type =  2;
						break;
			}
      $s_type = array ('' => '', '1' => 'Real', '2' => 'Draft');
		echo form_dropdown('type', $s_type, $type, 'class="chzn-select" data-placeholder="Select Invoice type" style="width:352px;"'); ?>
      <span class="input_tips"><?php echo $this->lang->line("invoice_type_tip"); ?></span>

      </p>
      
      
      <p><?php echo form_submit('submit', $this->lang->line("update_invoice_type"), 'class="submitInput" style="margin-left: 110px;"');?></p>

      
    <?php echo form_close();?>

</div>
</div>
<div class="clr"></div>
</div>
<div class="clear"></div>
</div>
</div>