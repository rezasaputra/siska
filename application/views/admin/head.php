<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/colors.min.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url()?>/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?=base_url()?>assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url()?>assets/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/pickers/daterangepicker.js"></script>
<!-- datatables -->
	<script src="<?=base_url()?>assets/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<!-- /data -->
	<script src="<?=base_url()?>assets/admin/js/app.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/dashboard.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/form_layouts.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/datatables_data_sources.js"></script>
	<!-- /theme JS files -->

	<script src="<?=base_url()?>assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/jqueryui_navigation.js"></script>

	<!-- text editor -->
	<script src="<?=base_url()?>assets/global_assets/js/plugins/editors/summernote/summernote.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/editor_summernote.js"></script>

	<!-- download -->
	<script src="<?=base_url()?>assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/uploader_bootstrap.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/charts/echarts/columns_waterfalls.js"></script>
	<script src="<?php echo base_url()?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>

	<script>
	$(document).ready(function() {
			$('#summernote_1').summernote({
					height: 200,
					focus:false
			});
			$('#summernote_1').summernote('code','');
	});

	<?php echo isset($js) ? $js:'';?>
</script>

</head>

<body>
