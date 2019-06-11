<?php

class Cv_model {

	private $pendidikan =  array(
		array('logo' => 'logosd.png' ,'sekolah' => 'SDN 3 Maripari (2007) - SDN 3 Sukawening (2010)' ),
		array('logo' => 'logosmp.png' ,'sekolah' => 'SMPN 1 Pangatikan (2013)' ),
		array('logo' => 'logosmk.png' ,'sekolah' => 'SMKN 2 Garut - Multimedia (2016)' ),
		array('logo' => 'logosttg.png' ,'sekolah' => 'STTGarut - Informatika (2016 - Sekarang)' )
	);

	public function getPendidikan(){
		return $this->pendidikan;
	}
}