<?php
date_default_timezone_set('Asia/Dhaka');

function get_time_ago($time){
	$time = strtotime($time);
	$time_difference = time() - $time;
	$seconds =  $time_difference;	
	$minutes = round($seconds / 60);
	$hours = round($seconds / 3600);
	$day = round($seconds / 3600 * 24);
    $hour = $hours;
	if($seconds <= 60 ){
		echo "০ মিনিট আগে";
	}elseif($minutes <= 60 && $minutes > 0){
		$minutes = $minutes;
		$mEng = array('1','2','3','4','5','6','7','8','9','0');
		$mBn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$replace = str_replace($mEng, $mBn, $minutes);
		return $replace.' মিনিট আগে';
	}elseif($hours > 0 && $hours <= 24){
		$mx = $hours * 60;
		$mx = $minutes - $mx;
		$mx = str_replace('-',' ',$mx);
		$mEng = array('1','2','3','4','5','6','7','8','9','0');
		$mBn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$mx = str_replace($mEng, $mBn, $mx);
		$mEng = array('1','2','3','4','5','6','7','8','9','0');
		$mBn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$hours = str_replace($mEng,$mBn,$hours);
		return $hours.' ঘন্টা '. $mx . ' মিনিট আগে';
	}else{
		$currentDate = date('j F, Y', $time);
		$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
		'May','June','July','August','September','October','November','December');
		$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
		'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর'
		);
		$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
		return $convertedDATE;
	}
}

	function textShorten($text, $limit = 200){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text."...";
		return $text;
	}
	function stextShorten($text, $limit = 600){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text."...";
		return $text;
	}
	
	
	function seo_description($text, $limit = 150){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text."...";
		return $text;
	}
	
	function setTime($str) { 
		$en = array(1,2,3,4,5,6,7,8,9,0);
		$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$str = str_replace($en, $bn, $str);
		$en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
		$bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
		$str = str_replace( $en, $bn, $str );
		$en = array('Saturday','Sunday','Monday','TuesdayS','Wednesday','Thursday','Friday');
		$bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
		$str = str_replace( $en, $bn, $str );
		return $str;
	}
	function formatView($view){
		$num = ($view);
		$engDATE = array('1','2','3','4','5','6','7','8','9','0');
		$bnDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		
		$convertedDATE = str_replace($engDATE, $bnDATE, $num);
		return $convertedDATE;
	}
	function pagenum($page){
		$page = $page;
		$pageEng = array('1','2','3','4','5','6','7','8','9','0');
		$pageBn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$replace = str_replace($pageEng, $pageBn, $page);
		return $replace;
	}
	function slugTitle($title){
		$title = $title;
		$title = str_replace(" ", "-" , $title);
		return $title;
	}
	function category($category){
		$category = $category;
		$categoryEng = array('buddhistnews','buddhistmind','literature','economy','education','opinion','lifestyle','tripitak','culture','rangamati','kagrachari','bandarban','bangladesh','international','career','technology','entertainment','sports','foundation');
		$categoryBn = array('বৌদ্ধবার্তা','বৌদ্ধমনন','সাহিত্য','অর্থনীতি','শিক্ষা','মতামত','জীবনযাপন','ত্রিপিটক','সংস্কৃতি ','রাঙ্গামাটি','খাগরাছড়ি','বান্দরবান','সারাবাংলা','আন্তর্জাতিক','ক্যারিয়ার','প্রযুক্তি','বিনোদন','খেলাধুলা','ত্রিশরণ ফাউন্ডেশন');
		$replace = str_replace($categoryEng, $categoryBn, $category);
		return $replace;
	}
	function seosubcategory($subcategory){
		$sub = $subcategory;
		$engsub = array("bandarban1","bandarban2","bandarban3","bandarban4","bandarban5","bandarban6","bandarban7","bangladesh1","bangladesh2","bangladesh3","bangladesh4","bangladesh5","bangladesh6","bangladesh7","bangladesh8","buddhistmind1","buddhistmind2","buddhistmind3","buddhistmind4","buddhistmind5","buddhistmind6","buddhistmind7","buddhistmind8","buddhistmind9","buddhistmind10","buddhistnews1","buddhistnews2","buddhistnews3","buddhistnews4","buddhistnews5","buddhistnews6","buddhistnews7","buddhistnews8","buddhistnews9","career1","career2","career3","career4","culture1","culture2","culture3","culture4","culture5","culture6","culture7","culture8","culture9","culture10","economy1","economy2","economy3","economy4","economy5","economy6","economy7","economy8","education1","education2","education3","education4","education5","entertainment1","entertainment2","entertainment3","foundation1","foundation2","foundation3","foundation4","international1","international2","international3","international4","international5","international6","international7","international8","international9","kagrachari1","kagrachari2","kagrachari3","kagrachari4","kagrachari5","kagrachari6","kagrachari7","kagrachari8","literature1","literature2","literature3","literature4","literature5","literature6","literature7","literature8","literature9","opinion1","opinion2","opinion3","opinion4","opinion5","opinion6","opinion7","rangamati1","rangamati2","rangamati3","rangamati4","rangamati5","rangamati6","rangamati7","rangamati8","rangamati9","rangamati10","sports1","sports2","sports3","technology1","technology2","technology3","technology4","technology5","tripitak1","tripitak2","tripitak3","tripitak4","tripitak5");
		$bnsub = array("বান্দরবান সদর","লামা ","আলীকদম","নাইক্ষ্যংছড়ি","রোয়াংছড়ি","রুমা","থানচি","অপরাধ","সরকার","সংসদ","উন্নয়ন","আইন লঙ্ঘন","দুর্নীতি","সুখবর","ভ্রমণ","অহিংসা","নীতি ","ত্যাগ","নির্বাণ","ধ্যান","দান","শীল","দর্শন","বিবিধ","পূণ্য","পূণ্যলাভ","বিহার পরিচিতি ","ধর্মীয় অনুষ্ঠান","বৌদ্ধ ব্যক্তিত্ব","স্বধর্ম উন্নয়ন","ধর্ম প্রচার","প্রতিরূপ দেশ","কঠিন চীবর দান","বিবিধ","বাস্তব-গল্প","নানান-ক্যারিয়ার ","পরামর্শ","মোটিভেশন","চাকমা","মারমা","ত্রিপুরা","আদিবাসী","বৈসাবি","পুরনো দিন","পজ্জম","বানা","ভাষা","শিল্প","কৃষি-জুম চাষ","ব্যবসা-বাণিজ্য ","শিল্প-কারখানা","শেয়ারবাজার","বাজারধর","উদ্যোক্তা","পরামর্শ","বিবিধ ","পড়ালেখা","গাইডলাইন ","উপদেশ","ইংরেজি","বিবিধ","চাকমা টেলিফিল্ম","হলিউড ","বলিউড","পরিচয়","লক্ষ্য ","ইভেন্ট","সম্মাননা","থাইল্যান্ড","গণচীন ","আমেরিকা","ভারত","মায়ানমার","শ্রীলংকা","কম্বোডিয়া","তিব্বত ","জাপান ","খাগড়াছড়ি সদর","পানছড়ি ","দীঘিনালা","মহালছড়ি","লক্ষ্ণীছড়ি","মাটিরাঙ্গা","রামঘর","মানিকছড়ি","গল্প","উপন্যাস ","নাটক","প্রবন্ধ","ছড়া","কবিতা","ছোটগল্প","শিক্ষণীয় গল্প  ","বিবিধ ","রাজ্যসরকার","নীতিমালা ","আইন","অন্যরকম","হয়নি","ক্ষতি","দুর্নীতি","রাঙ্গামাটি সদর","কাপ্তাই ","কাউখালী","বরকল","নানিয়াচর","রাজস্থলী","বিলাইছড়ি","বাঘাইছড়ি","জুরাছড়ি","লংগদু","ফুটবল","ক্রিকেট ","অন্যান্য","মোবাইল","প্রোগ্রামিং ","ফ্রিল্যাস্নিং","কম্পিউটার","বিবিধ","বিনয় পিটক","সূত্র পিটক","অভিধর্ম পিটক","বনভন্তের দেশনা","অন্যান্য");
		return str_replace($engsub, $bnsub, $sub);
	}
	function comment($text, $limit = 2000){
		if(strlen($text) < 2000) {
			$text = $text. " ";
			$text = substr($text, 0, $limit);
			$text = substr($text, 0, strrpos($text, ' '));
			return $text;
		}else{
			$text = $text. " ";
			$text = substr($text, 0, $limit);
			$text = substr($text, 0, strrpos($text, ' '));
			$text = $text."...";
			return $text;
		}
	}
	#**********************************************************************
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# ( at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# ERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Online: http://www.gnu.org/licenses/gpl.txt
# *****************************************************************
class BanglaDate {
private $timestamp; //timestamp as input
private $morning; //when the date will change?
private $engHour; //Current hour of English Date
private $engDate; //Current date of English Date
private $engMonth; //Current month of English Date
private $engYear; //Current year of English Date
private $bangDate; //generated Bangla Date
private $bangMonth; //generated Bangla Month
private $bangYear; //generated Bangla Year
private $bn_months = array("পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র", "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ");
private $bn_month_dates = array(30,30,30,30,31,31,31,31,31,30,30,30);
private $bn_month_middate = array(13,12,14,13,14,14,15,15,15,15,14,14);
private $lipyearindex = 3;
/*
* Set the initial date and time
*
* @param int timestamp for any date
* @param int, set the time when you want to change the date. if 0, then date will change instantly.
* If it's 6, date will change at 6'0 clock at the morning. Default is 6'0 clock at the morning
*/
function __construct( $timestamp, $hour = 6 ) {
$this->BanglaDate( $timestamp, $hour );
}
/*
* PHP4 Legacy constructor
*/
/**
* @param int $timestamp
* @param type $hour
*/
function BanglaDate( $timestamp, $hour = 6 ) {
$this->engDate = date( 'd', $timestamp );
$this->engMonth = date( 'm', $timestamp );
$this->engYear = date( 'Y', $timestamp );
$this->morning = $hour;
$this->engHour = date( 'G', $timestamp );
//calculate the bangla date
$this->calculate_date();
//now call calculate_year for setting the bangla year
$this->calculate_year();
//convert english numbers to Bangla
$this->convert();
}
function set_time( $timestamp, $hour = 6 ) {
$this->BanglaDate( $timestamp, $hour );
}
/**
* Calculate the Bangla date and month
*
* @access private
*/
private function calculate_date() {
$this->bangDate = $this->engDate - $this->bn_month_middate[$this->engMonth - 1];
if ($this->engHour < $this->morning)
$this->bangDate -= 1;
if (($this->engDate <= $this->bn_month_middate[$this->engMonth - 1]) || ($this->engDate == $this->bn_month_middate[$this->engMonth - 1] + 1 && $this->engHour < $this->morning) ) {
$this->bangDate += $this->bn_month_dates[$this->engMonth - 1];
if ($this->is_leapyear() && $this->lipyearindex == $this->engMonth)
$this->bangDate += 1;
$this->bangMonth = $this->bn_months[$this->engMonth - 1];
}
else{
$this->bangMonth = $this->bn_months[($this->engMonth)%12];
}
}
/*
* Checks, if the date is leapyear or not
*
* @return boolen. True if it's leap year or returns false
*/
function is_leapyear() {
if ( $this->engYear % 400 == 0 || ($this->engYear % 100 != 0 && $this->engYear % 4 == 0) )
return true;
else
return false;
}
/*
* Calculate the Bangla Year
*/
function calculate_year() {
$this->bangYear = $this->engYear - 593;
if (($this->engMonth < 4) || (($this->engMonth == 4) && (($this->engDate < 14) || ($this->engDate == 14 && $this->engHour < $this->morning))))
$this->bangYear -= 1;
}
/*
* Convert the English character to Bangla
*
* @param int any integer number
* @return string as converted number to bangla
*/
function bangla_number( $int ) {
$engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
$converted = str_replace( $engNumber, $bangNumber, $int );
return $converted;
}
/*
* Calls the converter to convert numbers to equivalent Bangla number
*/
function convert() {
$this->bangDate = $this->bangla_number( $this->bangDate );
$this->bangYear = $this->bangla_number( $this->bangYear );
}
/*
* Returns the calculated Bangla Date
*
* @return array of converted Bangla Date
*/
function get_date() {
		return array($this->bangDate, $this->bangMonth, $this->bangYear);
	}
}
	
?>