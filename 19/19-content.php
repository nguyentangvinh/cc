<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="archives-2" class="archives"><hr><h4>Archives</h4>		<ul>
				<li><a href="#">October 2016</a></li>
	<li><a href="#">September 2016</a></li>
		</ul>
			</div>