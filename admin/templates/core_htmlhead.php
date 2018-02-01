<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<script type="text/javascript">
var baseurl="<?php echo SITE_URL;?>";
var airport_lookup = "<?php echo Config::Get('AIRPORT_LOOKUP_SERVER'); ?>";
var phpvms_api_server = "<?php echo Config::Get('PHPVMS_API_SERVER'); ?>";
</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/jqModal.js'); ?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.form.js'); ?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.bigiframe.js'); ?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.metadata.js'); ?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/ckeditor/ckeditor.js'); ?>"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ6dibPVNNhTk4gj2TQYJX2P3BgXBGQrI&callback=initMap"></script>
<script type="text/javascript" src="<?php echo SITE_URL?>/admin/lib/phpvmsadmin.js"></script>

<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo SITE_URL?>/lib/rss/latestpireps.rss">
<?php 
if(isset($MODULE_HEAD_INC))
	echo $MODULE_HEAD_INC;
?>