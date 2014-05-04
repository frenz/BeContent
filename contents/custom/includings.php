<?php
$files = glob(  "contents/custom/entities". '/*.php' );
foreach ( $files as $file )
	require_once( $file );