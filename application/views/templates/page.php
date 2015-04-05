&lt;div class="container"&gt;
	<!--title-->
	&lt;h2&gt;&lt;?php echo $title ?&gt;&lt;/h2&gt;

	<!--navigation bar-->
	&lt;div id="datagrid_wrapper" class="dataTables_wrapper dt-jqueryui no-footer"&gt;
		&lt;div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr"&gt;
			&lt;div id="datagrid_filter" class="dataTables_filter"&gt;
			&lt;label&gt;Search:&lt;input type="search" class="" placeholder="" aria-controls="datagrid"&gt;&lt;/label&gt;&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	<!--table-->
	&lt;table class="table table-bordered" cellspacing="0" width="100%"&gt;

	<!--table head-->
	&lt;thead&gt;&lt;tr&gt;
	&lt;th class="sorting ui-state-default sorting_asc" &gt;&lt;div class="DataTables_sort_wrapper"&gt;User ID&lt;/div&gt;&lt;/th&gt;
	&lt;th class="sorting ui-state-default sorting_asc" &gt;&lt;div class="DataTables_sort_wrapper"&gt;Full Name&lt;/div&gt;&lt;/th&gt;
	&lt;th class="sorting ui-state-default sorting_asc" &gt;&lt;div class="DataTables_sort_wrapper"&gt;Action&lt;/div&gt;&lt;/th&gt;
	&lt;/tr&gt;&lt;/thead&gt;
	<!--table body-->
	&lt;tbody&gt;
	&lt;?php foreach ($<?php echo $o_name?>_list as $<?php echo $o_name?>_item): ?&gt;
		<!--table row-->
		&lt;tr&gt;
        <!--row item example for user table -->
        &lt;td&gt;&lt;?php echo $<?php echo $o_name?>_item['username'] ?&gt;&lt;/td&gt;
        &lt;td&gt;&lt;?php echo $<?php echo $o_name?>_item['fullname'] ?&gt;&lt;/td&gt;
        
        <!--anchor to editform-->
        &lt;td&gt;&lt;?php echo anchor('<?php echo $c_name?>/edit/' . $<?php echo $o_name?>_item['<?php echo $o_name?>_id'], $<?php echo $o_name?>_item['username'], $<?php echo $o_name?>_item['fullname']) ?&gt;&lt;/td&gt;
		&lt;/tr&gt;
	&lt;?php endforeach ?&gt;
	&lt;/tbody&gt;
	&lt;/table&gt;

	&lt;div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-bl ui-corner-br"&gt;
			&lt;ul class="pagination"&gt;&lt;?php echo $links?&gt;&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
