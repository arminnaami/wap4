<?php
	/**
	 * Juris Malinens, 2010
	 */
	 


$config['navigation']          =  array('converter',
					'news',
					'howto',
					'about');
	
		//for linux
		
		$config['ffmpeg_path']		   = "ffmpeg"; //ffmpeg linux path
		$config['ffmpeg_prefix']	   = "";
		$config['ffmpeg_suffix']	   = " &"; //to run process in background
		$config['ffmpeg_before_dir']       = "/home/juris/Dropbox/xampp/htdocs/files/uploaded/";
		$config['ffmpeg_after_dir']        = "/home/juris/Dropbox/xampp/htdocs/files/converted/";
                $config['ffmpeg_key_dir']          = "/home/juris/Dropbox/xampp/htdocs/files/keys/"; //directory for key files
		
	