<?php 

$this->view('listings/default',
[
	"i18n_title" => 'big_dirs.listing.title',
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "big_dirs-tab",
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "big_dirs.item1",
			"i18n_header" => "big_dirs.listing.item1",
		],
		[
			"column" => "big_dirs.item2",
			"i18n_header" => "big_dirs.listing.item2",
		],
	]
]);
