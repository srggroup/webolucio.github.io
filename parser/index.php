<?php
if(!empty($_COOKIE['SRGDEV'])){
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

header("Access-Control-Allow-Origin: *");
if(!empty($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){
	header("Access-Control-Allow-Headers: ".$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']."");
}

if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') die();


include "vendor/autoload.php";
include "Parser.php";

$rootPath = __DIR__.'/../';
$mdPath = $rootPath.'pages/';

function searchId($id = null){
	global $mdPath;
	
	$command = 'grep -r --include=*.md "%s" %s';
	
	exec(sprintf($command, $id, $mdPath), $output);
	
	$results = [];
	
	if(!empty($output)){
		$files = [];
		foreach($output as $line){
			$explodedLine = explode(':', $line);
			if(count($explodedLine) > 1){
				$files[] = $explodedLine[0];
			}
		}
		
		foreach($files as $key => $file){
			$result = [];
			
			$contents = file_get_contents($file);
			if(preg_match('/permalink:[\s]*([\S]+)/', $contents, $m)){
				$result['link'] = 'http://'.$_SERVER['SERVER_NAME'].'/'.$m[1].'#'.$id;
			}
			
			$parser = new Parser();
			
			if(preg_match('/hash:[\s]*'.$id.'/', $contents, $m)){
				//The id was found in the title section, so the whole page is matched
				
				//Find label
				if(preg_match('/title:[\s]*(.*)/', $contents, $m)){
					$result['label'] = $m[1];
				}
				
				//Find summary text
				$result['text'] = $parser->findIntroSummary($contents);
				
			} else {
				
				list($label, $str) = $parser->getIdBlock($contents, $id);
				
				$result['text'] = !empty($str) ? $str : '';
				$result['label'] = !empty($label) ? $label : '';
				
			}
			
			if(!empty($result['link']) && !empty($result['text'])){
				$results[] = $result;
			}
			
			
		}
	}
	
	return $results;
	
}

if(empty($_GET['id'])){
	header("HTTP/1.0 404 Not Found");
	exit;
}


$results = searchId($_GET['id']);

if(!empty($_GET['one']) && !empty($results)){
	$results = reset($results);
}

header("Content-type: application/json; charset=utf-8");
if(empty($results)){
	header("HTTP/1.0 404 Not Found");
}

echo json_encode($results);