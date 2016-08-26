<?php
namespace App\Providers\Regex;

class Regex {
	/**
	 * This function using to get youtube link  to create iframe from comment
	 * @param  String $comment [description]
	 * @return [String]          [description]
	 */
	public static function youtube($comment, $width = null, $height = null, $category = null){
		// use this pattern to find youtube link on comment
		$youtubePattern = "/(https:\/\/|http:\/\/)(.+?)(youtu)(.+?)(v=)(\S+)/";
		// if not matching
		if(preg_match($youtubePattern, $comment , $matches)==0){
			return null;
		};
		if($width == null){
			$width = 853;
		}
		if($height == null){
			$height = 450;
		}
		if($width == 853){
			$size = "maxresdefault";
		} else {
			$size = "mqdefault";
		}
		// use to find v variable on youtube link
		$vPattern = "/(v=)([^&]+)/";
		preg_match($vPattern, $matches[0], $match);

		// v variable 
		$v = substr($match[0], 2);
		if($category == 'iframepost'){
			return "<iframe width=\"940\" height=\"530\" src=\"https://www.youtube.com/embed/".$v."\" frameborder=\"0\" allowfullscreen></iframe>";
		}

		if($category == 'iframe'){
			return "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/".$v."\" frameborder=\"0\" allowfullscreen></iframe>";
		}
		// iframe youtube
		$iframe = "<img height=\"".$height."\" width=\"".$width."\" src=\"http://img.youtube.com/vi/".$v."/".$size.".jpg\" >";
		return $iframe;
	}

	/**
	 * [shortContent This function using to shorten content less than 100 characters to show to index]
	 * @param  [String] $content [content]
	 * @return [String]          [shorten content]
	 */
	public static function shortContent($content, $number = null){
		// delete bbcode, this function's not neccessory now
		// 
		if($number==null){
			$number = 100;
		}
		if(mb_strlen($content, 'utf-8')> $number){
			$shortContent = mb_substr($content, 0, $number, 'utf-8'); 
			$shortContent .=" ...";
		} else $shortContent = $content;
		return $shortContent;
	}

	/**
	 * [getSearch description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public static function getSearch($data){
		$searchPattern = "/(search=)(.+)/";
		if(preg_match($searchPattern, $data, $matches)==0){
			return null;
		};
		$searchValue = substr($matches[0], 7);
		return $searchValue;
	}

	/**
	 * [bbCode relace function]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public static function bbCode($data){
		$bbcodes = [
			['/(\[url=(.+?)\])(.+?)(\[\/url\])/', '<br/><a href=\'$2\' class="readmore">$3</a>'],
			['/(\[url\])(.+?)(\[\/url\])/'      , '<br/><a href=\'$2\' class="readmore">$2</a>'],
			['/(https:\/\/|http:\/\/)(.+?)(youtu)(.+?)(v=)(\S+)/',     '']
		];  
		foreach ($bbcodes as $bbcode) {
			# code...
			//echo $data, '</br>';
			$data = preg_replace($bbcode[0], $bbcode[1], $data);
		}
		
		return $data;
	}

	public static function altAttribute(){

	}


}