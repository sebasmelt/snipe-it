<?php

return [
    'bulk_delete'		=> 'Confirm Bulk Delete Assets',
    'bulk_restore'      => 'Confirm Bulk Restore Assets', 
  'bulk_delete_help'	=> 'Review the assets for bulk deletion below. Once deleted, these assets can be restored, but they will no longer be associated with any users they are currently assigned to.',
  'bulk_restore_help'	=> 'Review the assets for bulk restoration below. Once restored, these assets will not be associated with any users they were previously assigned to.',
  'bulk_delete_warn'	=> 'You are about to delete :asset_count assets.',
  'bulk_restore_warn'	=> 'You are about to restore :asset_count assets.',
    'bulk_update'		=> 'Bulk Update Assets',
    'bulk_update_help'	=> 'This form allows you to update multiple assets at once. Only fill in the fields you need to change. Any fields left blank will remain unchanged. ',
    'bulk_update_warn'	=> 'You are about to edit the properties of a single asset.|You are about to edit the properties of :asset_count assets.',
    'bulk_update_with_custom_field' => 'Note the assets are :asset_model_count different types of models.',
    'bulk_update_model_prefix' => 'On Models', 
    'bulk_update_custom_field_unique' => 'This is a unique field and can not be bulk edited.',
    'checkedout_to'		=> 'Checked Out To',
    'checkout_date'		=> 'Checkout Date',
    'checkin_date'		=> 'Checkin Date',
    'checkout_to'		=> 'Checkout to',
    'cost'				=> 'Purchase Cost',
    'create'			=> 'Create Asset',
    'date'				=> 'Purchase Date',
    'depreciation'	    => 'Depreciation',
    'depreciates_on'	=> 'Depreciates On',
    'default_location'	=> 'Default Location',
    'default_location_phone' => 'Default Location Phone',
    'eol_date'			=> 'EOL Date',
    'eol_rate'			=> 'EOL Rate',
    'expected_checkin'  => 'Expected Checkin Date',
    'expires'			=> 'Expires',
    'fully_depreciated'	=> 'Fully Depreciated',
    'help_checkout'		=> 'If you wish to assign this asset immediately, select "Ready to Deploy" from the status list above. ',
    'mac_address'		=> 'MAC Address',
    'manufacturer'		=> 'Manufacturer',
    'model'				=> 'Model',
    'months'			=> 'months',
    'name'				=> 'Asset Name',
    'notes'				=> 'Notes',
    'order'				=> 'Order Number',
    'qr'				=> 'QR Code',
    'requestable'		=> 'Users may request this asset',
    'redirect_to_all'   => 'Return to list',
    'redirect_to_type'   => 'Go to :type',
    'redirect_to_checked_out_to'   => 'Go to Checked Out to',
    'select_statustype'	=> 'Select Status Type',
    'serial'			=> 'Serial',
    'status'			=> 'Status',
    'tag'				=> 'Asset Tag',
    'update'			=> 'Asset Update',
    'warranty'			=> 'Warranty',
        'warranty_expires'		=> 'Warranty Expires',
    'years'				=> 'years',
    'asset_location' => 'Update Asset Location',
    'asset_location_update_default_current' => 'Update default location AND actual location',
    'asset_location_update_default' => 'Update only default location',
    'asset_location_update_actual' => 'Update only actual location',
    'asset_not_deployable' => 'That asset status is not deployable. This asset cannot be checked out.',
    'asset_not_deployable_checkin' => 'That asset status is not deployable. Using this status label will checkin the asset.',
    'asset_deployable' => 'That status is deployable. This asset can be checked out.',
    'processing_spinner' => 'Processing... (This might take a bit of time on large files)',
    'optional_infos'  => 'Optional Information',
    'order_details'   => 'Order Related Information',
    'calc_eol'    => 'If nulling the EOL date, use automatic EOL calculation based on the purchase date and EOL rate.',
];
