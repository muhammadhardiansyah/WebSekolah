<?php
	function get_contactGuru(){
		$query = "SELECT * FROM contact INNER JOIN guru ON guru.id_contact=contact.id_contact INNER JOIN jabatan ON guru.id_jabatan=jabatan.id_jabatan;";
		return $query;
	}
	function get_contacKerja(){
		$query = "SELECT * FROM contact INNER JOIN tenaga_kerja ON tenaga_kerja.id_contact=contact.id_contact INNER JOIN jabatan_tenaga ON tenaga_kerja.id_tenaga=jabatan_tenaga.id_tenaga;";
		return $query;
	}