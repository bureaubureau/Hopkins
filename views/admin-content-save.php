<?php $this->helper('formgen'); ?>
<form name="content-save" method="post" action="">
  <input type="submit" name="Submit" value="Submit" />
  <?php if(isset($content['_id'])): ?>
  <fieldset><legend>id</legend><input type="text" value="<?php print $content['_id']; ?>" name="content[_id]" id="content[_id]" readonly="readonly" /></fieldset>
  <?php endif; ?>
  <?php print (isset($content)) ? formgen_format($content, 'content') : ''; ?>
  <input type="submit" name="Submit" value="Submit" />
</form>
<?php if(isset($content['_id'])): ?>
<a href="<?php print $_SERVER["SCRIPT_NAME"] . '/admin/content/' . $type . '/remove/' . $content['_id']; ?>">remove</a>
<?php endif; ?>