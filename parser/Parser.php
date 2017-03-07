<?php

class Parser extends \cebe\markdown\Markdown {
	
	public function getIdBlock($text, $id){
		
		$this->prepare();
		
		if (ltrim($text) === '') {
			return '';
		}
		
		$text = str_replace(["\r\n", "\n\r", "\r"], "\n", $text);
		
		$this->prepareMarkers($text);
		
		$absy = $this->parseBlocks(explode("\n", $text));
		
		$blockContents = [];
		$contentStart = false;
		$label = '';
		foreach($absy as $elem){
			if(
				!empty($elem[0]) &&
				$elem[0] == 'headline' &&
				!empty($elem['content']) &&
				!empty($elem['content'][0][1])
			){
				//It's a heading
				if($contentStart){
					//Storing lines is started, it's the next irrelevant heading, stop the cycle
					break;
				}
				
				if(preg_match('/(.*)\{#'.$id.'\}/', $elem['content'][0][1], $m)){
					//It's the relevant heading, we start the storing
					if(empty($label)) $label = trim($m[1]); //First label will be de default
					$contentStart = true;
					continue;
				}
			}
			
			if($contentStart && !empty($elem['content'][0][1])){
				//Store line
				$blockContents[] = $elem;
			}
		}
		
		$str = '';
		foreach($blockContents as $blockContent){
			$str .= $this->{'render' . $blockContent[0]}($blockContent);
		}
		
		return array($label, $str); //Return label and string
	}
	
}