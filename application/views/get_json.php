<?php
$data=[];
foreach ($list as $key => $value) {
	$data[]=[
		"judul" => $value['judul'],
		"deskripsi" => $value['deskripsi']
	];
}

echo json_encode($data);