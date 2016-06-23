<?php
namespace App\Providers\Regex;

class Regex {
	/**
	 * This function using to get youtube link  to create iframe from comment
	 * @param  String $comment [description]
	 * @return [String]          [description]
	 */
	public static function frameYoutube($comment){
		// use this pattern to find youtube link on comment
		$youtubePattern = "/(https:\/\/|http:\/\/)(.+)(youtu)(.+)(v=)(\S+)/";
		// if not matching
		if(preg_match($youtubePattern, $comment , $matches)==0){
			return "";
		};
		// use to find v variable on youtube link
		$vPattern = "/(v=)([^&]+)/";
		preg_match($vPattern, $matches[0], $match);

		// v variable 
		$v = substr($match[0], 2);
		// iframe youtube
		$iframe = "<div class=\"featured-image\"><iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/".$v."\" frameborder=\"0\" allowfullscreen></iframe><div class=\"post-icon\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-circle fa-stack-2x\"></i>
                      <i class=\"fa fa-pencil fa-stack-1x fa-inverse\"></i>
                    </span>
                    </div>
                    </div>";
		return $iframe;
	}


}