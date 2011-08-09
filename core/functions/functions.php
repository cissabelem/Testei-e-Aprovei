<?php

/**
 * Verifica se um endereço é uma URL
 * 
 * @param string $url
 * @return boolean
 */
function isUrl($url) {
	return is_string($url) && filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
}

/**
 * Retorna o endereço de um asset
 * 
 * @return string
 */
function assetUrl($file) {
	if (file_exists(TEMPLATE_PATH . 'assets' . DS . $file))
		$file .= '?' . filemtime(TEMPLATE_PATH . 'assets' . DS . $file);
	
	return !isUrl($file) ? TEMPLATE_URL . 'assets/' . $file : $file;
}

/**
 * Cria uma chamada à uma arquivo CSS
 * 
 * @param string $file Arquivo CSS
 * 
 * @return string
 */
function css($file) {
	if (is_array($file)) {
		foreach ($file AS $css)
			css($css);
		
		return;		
	}
	
	if (!isUrl($file))
		$file = 'css/' . $file;
	
	echo '<link rel="stylesheet" href="' . assetUrl($file) . '" />' . PHP_EOL;
}

/**
 * Cria uma chamada à uma arquivo JS
 *
 * @param string $file Arquivo JS
 *
 * @return string
 */
function js($file) {
	if (is_array($file)) {
		foreach ($file AS $js)
			js($js);
		
		return;		
	}
	
	if (!isUrl($file))
		$file = 'js/' . $file;
	
	echo '<script src="' . assetUrl($file) . '"></script>' . PHP_EOL;
}