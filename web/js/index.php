<?php
//error_reporting(E_ALL ^ E_NOTICE);
//ini_set("display_errors", "on");
$GLOBALS['exeStart'] = microtime(1);
require_once "buffer-start.php";
define ("INCLUDE_PATH", "./");

require_once INCLUDE_PATH."lib/inc.php";
require_once INCLUDE_PATH."classes/class.userfrontend.php";
require_once INCLUDE_PATH."classes/class.contest.php";
require_once INCLUDE_PATH."classes/class.news.php";
require_once INCLUDE_PATH."classes/class.common.php";
require_once INCLUDE_PATH."classes/class.video.php";
require_once INCLUDE_PATH."classes/class.article_category.php";
require_once INCLUDE_PATH."classes/class.article.php";


unset($_SESSION['parameters']); // to reset the serarch parameters


if(isset($_REQUEST['category_id']))
{
	$_SESSION['categoryId'] = $_REQUEST['category_id'];
	
}

// ----------------------------------------------------------------------------------------------------
if($_REQUEST["order_by"]!="") 
{
	$GLOBALS["order_by"] = $_REQUEST["order_by"];
}
else 
{
	$GLOBALS["order_by"] = "at.".POST_DATE;
}


$latest_or_popular	=	'latest';
// ----------------------------------------------------------------------------------------------------


/* ----------------------  Mode && latest_or_popular parameter treatment ---------------------------------*/


if(isset($_REQUEST['lp']))
{
	$_SESSION['mode']				=	isset($_REQUEST['mode'])?$_REQUEST['mode']:(isset($_SESSION['mode'])?$_SESSION['mode']:'all');
	$_SESSION['latest_or_popular']	=	$_REQUEST['lp']	;
}
else
{
	$_SESSION['mode']				=	isset($_REQUEST['mode'])?$_REQUEST['mode']:'all';
	$_SESSION['latest_or_popular']	=	'latest';			
}



/* ----------------------  Mode && latest_or_popular parameter treatment ---------------------------------*/





if($_REQUEST['mode'] == "category_listing")
{
	select_categoryList();
}
elseif($_REQUEST['mode'] == "all_category_list")
{
	all_category_list();
}
elseif($_REQUEST['mode'] == "populer_tow_month")
{
	populer_tow_month();
}
elseif($_REQUEST['mode'] == "populer_six_month")
{
	populer_tow_month();
}
elseif($_REQUEST['mode'] == "reviews")
{
	dispmiddle('reviews',$_SESSION['latest_or_popular']);
}
elseif($_REQUEST['mode'] == "features")
{
	dispmiddle('features',$_SESSION['latest_or_popular']);
}
elseif($_REQUEST['mode'] == "news")
{
	dispmiddle('news',$_SESSION['latest_or_popular']);
}
else
{
	
	if ( strstr($_SERVER['REQUEST_URI'], "?article_id=") ) 
	{
		if($_REQUEST['article_id']*1>0)
		{
			$obj = new Common;
			$url = $obj->urlContent($_REQUEST['article_id']*1);
			header( "HTTP/1.1 301 Moved Permanently" ); 
			header( "Location: $url" );
			exit;
		}	 
	}  
	elseif (strstr($_SERVER['REQUEST_URI'], "?video_id==") ) 
	{
		if($_REQUEST['video_id=']*1>0)
		{
			$url = 'video_details.php?video_id='.$_REQUEST['video_id='];
			header( "HTTP/1.1 301 Moved Permanently" ); 
			header( "Location: $url" );
			exit;
		}	 
	}
	elseif (strstr($_SERVER['REQUEST_URI'], "?page==") ) 
	{
		if($_REQUEST['video_id=']*1>0)
		{
			$url = 'video_details.php?video_id='.$_REQUEST['video_id='];
			header( "HTTP/1.1 301 Moved Permanently" ); 
			header( "Location: $url" );
			exit;
		}	 
	}
	/*elseif(strstr($_SERVER['REQUEST_URI'], "?"))
	{
			$url = 'sitemap.php';
			header( "HTTP/1.1 301 Moved Permanently" ); 
			header( "Location: $url" );
			exit;
	} */ 
	
	dispmiddle('all',$_SESSION['latest_or_popular']);
}

ob_end_flush();

function dispmiddle($p,$latest_or_popular)
{
  	global $con_cmate;
	
	
	
	$find_site_name	=	'';
	$xx	=	explode(".",$_SERVER['SERVER_NAME']);
	
	if(count($xx))
	{
		$find_site_name	=	$xx[0]; 
		/* 
			this is micro site i.e, either dev.thinkdigit or smart.thinkdigit site. 
			$find_site_name will contain either "dev" or "smart".  ----> [ Athar ]
		*/
	}
	else
	{
		$find_site_name	=	"";   // this is regular site i.e, thinkdigit site
	}	
	
	require_once INCLUDE_PATH."lib/common.php";
	require_once INCLUDE_PATH."classes/class.common.php";
	//exit($_POST[cat_list_cmate]);
	//require_once INCLUDE_PATH."classes/class.consumermate.php";
	// todo : chkbox treatment
	$smarty->assign("find_site_name", $find_site_name);
	
	// Top Story section	
	if ( !$smarty->is_cached("index_left.tpl", "", "")) 
	{	
		$obj 	= 	new userFrontEnd;
		$newobj	=	new Common;
		
		$table_name 	= ARTICLE_TABLE;
		$field_list[0] 	= ARTICLE_ID;
		$field_list[1] 	= ARTICLE_TITLE;
		$field_list[2] 	= ARTICLE_BODY;
		
		$condition 		= "featured_status = '1'";
		
		$order = 'rand()';
		$limit = 2;
		
		$pageNum = 1;
		
		// if $_GET['page'] defined, use it as page number
		if(isset($_REQUEST['page']))
		{
		$pageNum = (int)$_REQUEST['page'];
		}
		
		
		// counting the offset
		$offset = ($pageNum - 1) * 10; 
		/* ----------------------------------- [Starts]  latest headlines ------------------------------------------------------*/
		$result1 = findHomePageNews(10,$p,$latest_or_popular,$offset,$find_site_name);
		/*
		echo '<pre>';
		print_r($result1);
		echo '</pre>';
		*/
		$final_tags	=	array();
		for($n=0; $n<count($result1); $n++)
		{
			$articleId1[] 		= 	$result1[$n][ARTICLE_ID];
			$articleTitle1[] 	= 	showArticleTitle($result1[$n]['article_title'],DOUBLE_BODY_LINE);
			$articlePostDate1[]	= 	strftime("%b %d, %Y %T %Z", strtotime($result1[$n][POST_DATE]));
			/* $articlePostDate1[] = 	date('d-m-Y H:I:S',strtotime($result1[$n][POST_DATE]));		 */
			$articleupDate1[] 	= 	date('d-m-Y H:I:S',strtotime($result1[$n]['up_date']));		
			$articleBody1[] 	= 	shortText($result1[$n]['article_body'],800);
			$newsurl[]			=	$newobj->urlContent($result1[$n][ARTICLE_ID]);
			$readmorelink[]		=	"n";
			if(strlen($result1[$n]['article_body']) > 800)
			{
				$readmorelink[]	=	"y";		
			}
			
			$articlethumbimage[]= 	$result1[$n]['artImg75x64']	;
			$articlerating[]	= 	$result1[$n]['rating']		;
			$articlereview[]	= 	number_format($result1[$n]['overall'],2)		;
			
			$basenum[]			=	floor($result1[$n]['overall']);
			$fractionnum[]		=	strstr($result1[$n]['overall'],".");
			
			$autherimage[]		=	$result1[$n]['author_image'];
			$authername[]		=	$result1[$n]['author_name'];
			$autheremail[]		=	$result1[$n][AUTHOR_EMAIL];
			
			/* --------------------------  Find Total Comments on an article [Starts : Athar ] --------------------------------- */
			$obj->articleId		=	$result1[$n][ARTICLE_ID]		;
			$totalcomments[]	=	count($obj->selectComments())	;   // Defined in userfrontend class
			/* --------------------------  Find Total Comments on an article [End    : Athar ] --------------------------------- */
			
			/* ---------------------------- Finding Tags for the article strats-------------------------------------------------*/
			$objkey1 	= 	new articleManager();
			$row_keys	=	'';
			$row_keys	= 	$objkey1->fetch_editKey_new($result1[$n][ARTICLE_ID]);
			$articleMetaKeyWord =	'';
			if(count($row_keys))
			{
				foreach($row_keys as $tagkey)
				{
					
					$link	=	PAGE_LINK."/latest/".$tagkey->KEYWORD.".html";
					$link	=	str_replace("devworks","www",$link);
					$articleMetaKeyWord    	.=	"<a href='".$link."' class='tag-links'>".$tagkey->KEYWORD."</a> , ";
				}
				
				$x	=	substr($articleMetaKeyWord,0,strlen($articleMetaKeyWord)-2);
				$final_tags[]	=	$x 	;
			}
			else
			{
				$final_tags[]	=	""	;
			}	
			/* ---------------------------- Finding Tags for the article Ends-------------------------------------------------*/
		}
		
		
		
		$smarty->assign("newsArticleId", $articleId1);
		$smarty->assign("newsArticleTitle", $articleTitle1);
		$smarty->assign("newsPostDate", $articlePostDate1);
		$smarty->assign("articleupDate", $articleupDate1);
		$smarty->assign("newsArticleBody1", $articleBody1);
		$smarty->assign("newsurl", $newsurl);
		$smarty->assign("readmorelink", $readmorelink);
		$smarty->assign("articlethumbimage", $articlethumbimage);
		$smarty->assign("articlerating", $articlerating);
		$smarty->assign("articlereview", $articlereview);
		$smarty->assign("basenum", $basenum);
		$smarty->assign("fractionnum", $fractionnum);
		$smarty->assign("totalcomments", $totalcomments);
		
		$smarty->assign("autherimage", $autherimage);
		$smarty->assign("authername", $authername);
		$smarty->assign("autheremail", $autheremail);
		
		$smarty->assign("final_tags", $final_tags);
		$smarty->assign("articleMetaKeyWord", $default_metakeyword!=''?$default_metakeyword:$articleMetaKeyWord);
		$smarty->assign("articleMetaDesctiption",$default_metadescription!=''?$default_metadescription:$metaDesctiption);
		
		
		
		
	$smarty->assign('pageCounterTXT', pageCounterForSearchEngine(count_article_in_home($p,$latest_or_popular,$offset,$find_site_name), $GLOBALS['offset'], 15, "breadcrumb-links-active", $groupby=10, $showcounter=1, $linkStyle='view_link', $redText='breadcrumb-links-active',"","&nbsp;/&nbsp;"));
		
		$smarty->assign("paginatestr", $paginatestr);
		/* ----------------------------------- [Ends]  latest headlines ------------------------------------------------------*/
		
		/* ----------------------------  Latest Article For News Slider Starts ----------------------------------------------*/
		$result = 	array();
		$result	=	$obj->getLatestStoriesForSlider();
		
		foreach ($result as $val) 
		{
			$latest_art_id_slides[]		=	$val['article_id'];
			$latest_art_title_slides[]	=	$val['article_title'];
			$latest_art_thumb_slides[]	=	$val['artImg75x64'];
			$latest_art_channel_slides[]=	$val['channel_name'];
		}
		$smarty->assign("latest_art_id_slides",$latest_art_id_slides);
		$smarty->assign("latest_art_title_slides",$latest_art_title_slides);
		$smarty->assign("latest_art_thumb_slides",$latest_art_thumb_slides);
		$smarty->assign("latest_art_channel_slides",$latest_art_channel_slides);
		/* ---------------------------- Latest Article For News Slider Starts ----------------------------------------------*/
		
		
		
		
		/* ----------------------------------- [Strats] Select Featured Video  --------------------------------------------------------*/
		$objv			=	new videoManager();
		$resultvideo 	= 	$objv->featuredVideo();
		$videoId 		= 	$resultvideo[VIDEO_ID];
		$status			=	$resultvideo[VIDEO_STATUS];
		$video_title 	= 	$resultvideo[VIDEO_TITLE];
		$video_body 	= 	shortText($resultvideo[VIDEO_DESCRIPTION],DOUBLE_LARGE_LINE);
		if($resultvideo[VIDEO_STATUS]==0)
		{
			$video=$resultvideo[FILE_NAME];
		}
		else
		{
			$video=$resultvideo[YOUTUBE_KEY];
		}
		
		$path = FULL_PATH."/videos/";
		/* --------------------------------------------------- [Starts] screenshots -----------------------------------------------------------*/
		if($resultvideo[VIDEO_STATUS] !=1 )
		{
			if(file_exists("videos/".$resultvideo[SCREENSHOT]) && !is_dir("videos/".$resultvideo[SCREENSHOT]) )
			{
				$video_screenshot=$path.$resultvideo[SCREENSHOT];//////sh also contains screenshots///////			  
			}
			elseif(trim($resultvideo[SCREENSHOT])!="")
			{
				if($resultvideo[SCREENSHOT] != "")			// ------------------------------------------------- a valid image url
				{
					$video_screenshot=$resultvideo[SCREENSHOT];// ---------------- sh also contains screenshots for path spec. not uploaded 			
				}
				else
				{
					$video_screenshot="";// ------------------------------------------------- sh for invalid image url     		
				}
			}
			else
			{
				$video_screenshot	=	FULL_PATH."/images/videoimg.gif";	// ---------------sh default image 
				$video_screenshot	=	"";									// ---------------sh default image
			}
		}
		else 
		{
			$video_screenshot = "http://img.youtube.com/vi/".$resultvideo[YOUTUBE_KEY]."/2.jpg";	
		}
		/* --------------------------------------------------- [Ends] screenshots -----------------------------------------------------------*/
		$smarty->assign("videoId", $videoId);
		$smarty->assign("video_screenshot", $video_screenshot);
		$smarty->assign("status", $status);
		$smarty->assign("video", $video);
		$smarty->assign('path', $path);
		$smarty->assign('video_title', $video_title);
		$smarty->assign('video_body', $video_body);
		
		
		////////sh fetching some video links ////////////
		$home_videos=$obj->homeVideos();
		for($n = 0;$n<count($home_videos);$n++)
		{
			$home_videoId[] = $home_videos[$n][VIDEO_ID];
			$tmp_vName= strip_tags($home_videos[$n][VIDEO_TITLE]);
			$home_video_title[] = shortText($tmp_vName,DOUBLE_SMALL_LINE);
			if($home_videos[$n][VIDEO_STATUS]==0)
			{
				$home_video[]=$home_videos[$n][FILE_NAME];
			}
			else
			{
				$home_video[]=$home_videos[$n][YOUTUBE_KEY];
			}
		}
		$smarty->assign("home_videoId", $home_videoId);
		$smarty->assign("home_video", $home_video);
		$smarty->assign('path', $path);
		$smarty->assign('home_video_title', $home_video_title);
		// ------------------------------------------------- Select Slide show image -------------------------------------------//
		$settingshome= $obj->fetchImageSettings();
		$smarty->assign("imagetitlebar",$settingshome['bar_title']);
		$delay = $settingshome['rotation_speed'];
		$smarty->assign("delay",$settingshome['rotation_speed']);
		
		$position=explode(",",$settingshome['display_section']);
		
		foreach($position as $key=>$val)
		{
			if($val=="H")
			{
				$smarty->assign("home",'selected');
			}
			if($val=="L")
			{
				$smarty->assign("left",'selected');
			}
			if($val=="R")
			{
				$smarty->assign("right",'selected');
			}
		}
		 
		$GLOBALS["neworder"]	=	$settingshome['display_option'];
		//====================Default selected category ================ //
		$defaultb1=19;
		$defaultb2=18;
		$defaultb3=27;
		$defaultb4=19;
		/*  ---------------------------------- [Starts]  for logged in users -------------------------------------------------------- */
		if($_SESSION['userId']!="")  //
		{
			
			//================== Selecting Category Name for Dropdown==================== //
			$rowcat = $obj->selectAllCategories();
		   
			for($p=0; $p<count($rowcat);$p++)
			{
				$catid[] = $rowcat[$p]['category_id'];
				$catname[] = htmlentities($rowcat[$p]['category_name']);
			}	
			
			$resrow=$obj->selectUserSettings($_SESSION['userId']);
			
			for($n=0; $n<count($resrow);$n++)
			{
				$cid[] = $resrow[$n]['category_id'];
				$posname[] =$resrow[$n]['position_id'];
			}	
			
			for($i=0;$i<=count($cid);$i++)
			{
				if($posname[$i]=="b1")
				{
				  $defaultb1=$cid[$i];
				}
				if($posname[$i]=="b2")
				{
				  $defaultb2=$cid[$i];
				}
				if($posname[$i]=="b3")
				{
				  $defaultb3=$cid[$i];
				}
				if($posname[$i]=="b4")
				{
				  $defaultb4=$cid[$i];
				}
			}
			
			include INCLUDE_PATH."user_home_article.php";
		
			$smarty->assign("block1", createBlock($defaultb1,"b1",$catid,$catname));
			$smarty->assign("block2", createBlock($defaultb2,"b2",$catid,$catname));
			$smarty->assign("block3", createBlock($defaultb3,"b3",$catid,$catname));
			$smarty->assign("block4", createBlock($defaultb4,"b4",$catid,$catname));
		}  
		/*  ---------------------------------- [Ends]  for logged in users -------------------------------------------------------- */
		
		
		/* -------------------------- [Start] fetching today's top story ------------------------------------------------ */		
		$home_TS	=	$obj->homeTopStory();
		for($n = 0;$n<count($home_TS);$n++)
		{
			$home_TSId[] 	= 	$home_TS[$n][ARTICLE_ID];
			$tmp_TSName		= 	($home_TS[$n][ARTICLE_TITLE]);
			$home_TSName[] 	= 	showArticleTitle($tmp_TSName,DOUBLE_LARGE_LINE);  //------- Function defined in function.php file -----
				
			$rs_artImg		=	$obj->homeArticle_ImgTypes($home_TS[$n][ARTICLE_ID]);
			
			$artImg75x64	=	$rs_artImg[ARTICLE_IMAGE_75x64];
			$artImg198x166	=	$rs_artImg[ARTICLE_IMAGE_198x166];
			$tmp			= 	escape($artImg75x64);
			$tmp			=	str_replace("../","",$tmp);
			if(file_exists($tmp) && !is_dir($tmp))
			{
				$home_TSImage75x64[]=escape($artImg75x64);
			}
			else
			{
				$home_TSImage75x64[]	=	"";		// ------------------ default no image
			}
			
			$tmp			= 	escape($artImg198x166);
			$tmp			=	str_replace("../","",$tmp);
			if(file_exists($tmp) && !is_dir($tmp))
			{
				$home_TSImage198x166[]	=	escape($artImg198x166);
			}
			else
			{
				$home_TSImage198x166[]	=	"";		// -----------------------default no image
			}
			// ---------------------- sh end new article image 3 types  :: artImg75x64,artImg198x166,artImg298x131   -----------
			
			$tmp_TSBody			= 	strip_tags($home_TS[$n][ARTICLE_BODY]);
			$home_TSBody[] 		= 	shortText($tmp_TSBody,DOUBLE_LARGE_LINE);
			$home_TSBodyLong[] 	= 	shortText($tmp_TSBody,150);
			
		
			$TSCat				= 	$obj->fetchThisArticleCategory($home_TS[$n][ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
			$tmp_TSCat 			= 	htmlentities(strip_tags($TSCat[0][ARTICLE_CATEGORY_NAME]));
			$home_TSCat[] 		= 	addslashes($tmp_TSCat);
			
		}		
		$smarty->assign("home_TSId", $home_TSId);
		$smarty->assign("home_TSName", $home_TSName);
		$smarty->assign('home_TSImage75x64', $home_TSImage75x64);
		$smarty->assign('home_TSImage198x166', $home_TSImage198x166);
		$smarty->assign('home_TSBodyLong', $home_TSBodyLong);
		$smarty->assign('home_TSBody', $home_TSBody);
		$smarty->assign('home_TSCat', $home_TSCat);
		/* -------------------------- [End] fetching today's top story ------------------------------------------------ */		
		
		
		/* -------------------------- [Start] Fetching featured story ------------------------------------------------- */
		$featured_results 		=	$obj->homeFeaturedStoryForMicroSite($find_site_name);
		
		foreach($featured_results as $featured_result)
		{
			$home_FAId[] 		= 	$featured_result[ARTICLE_ID];
			$tmp_FAName			= 	strip_tags($featured_result[ARTICLE_TITLE]);
			$home_FAName[] 		= 	shortText($tmp_FAName,DOUBLE_LARGE_LINE); 
			//$ArtImg=new userFrontEnd();
			
			$tmp_FABody			= 	strip_tags($featured_result[ARTICLE_BODY]);
			$home_FABody[] 		= 	shortText($tmp_FABody,DOUBLE_LARGE_LINE);
			$home_FABodyLong[] 	= 	shortText($tmp_FABody,350);
			
		
			$FACat				= 	$obj->fetchThisArticleCategory($featured_result[ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
			$tmp_FACat 			= 	htmlentities(strip_tags($FACat[0][ARTICLE_CATEGORY_NAME]));
			//$home_TSCat[] 	= 	strlen($tmp_TSCat) >10 ? substr(addslashes($tmp_TSCat),0,10).".." : substr(addslashes($tmp_TSCat),0,15);
			$home_FACat[] 		= 	addslashes($tmp_FACat);
			$home_FAPostdate[] 	= 	$featured_result[post_date];
		}
		
		$smarty->assign("home_FAId", $home_FAId);
		$smarty->assign("home_FAName", $home_FAName);
		$smarty->assign('home_FABodyLong', $home_FABodyLong);
		$smarty->assign('home_FABody', $home_FABody);
		$smarty->assign('home_FACat', $home_FACat);
		$smarty->assign('$home_FAPostdate', $home_FAPostdate);
		/* -------------------------- [End] Fetching featured story ------------------------------------------------- */
		
		/* -------------------------- [Start] Fetching howto ---------------------------------------------------------------- */
		$howto_results =	$obj->homeHowToForMicroSite($find_site_name);
		
		if(count($howto_results)>0)
		{
			foreach($howto_results as $howto_result)
			{
				$home_HTId[] 		= 	$howto_result['article_id'];
				$tmp_HTName			= 	strip_tags($howto_result['article_title']);
				$home_HTName[] 		= 	shortText($tmp_HTName,DOUBLE_LARGE_LINE); 
				
				$tmp_HTBody			= 	strip_tags($howto_result['article_body']);
				$home_HTBody[] 		= 	shortText($tmp_HTBody,DOUBLE_LARGE_LINE);
				$home_HTBodyLong[] 	= 	shortText($tmp_HTBody,150);
			
		
				$HTCat			= 	$obj->fetchThisArticleCategory($howto_result[ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_HTCat 		= 	htmlentities(strip_tags($HTCat[0][ARTICLE_CATEGORY_NAME]));
			
				$home_HTCat[] 	= 	addslashes($tmp_HTCat);
			}
			$smarty->assign("home_HTId", $home_HTId);
			$smarty->assign("home_HTName", $home_HTName);
			$smarty->assign('home_HTBodyLong', $home_HTBodyLong);
			$smarty->assign('home_HTBody', $home_HTBody);
			$smarty->assign('home_HTCat', $home_HTCat);
			$smarty->assign('count_HT', count($howto_results));
		}
		/* -------------------------- [End] Fetching howto ---------------------------------------------------------------- */
		
		/* -------------------------- [Starts] Fetching Events  ---------------------------------------------------------------- */
		$event_results	=	array();
		$event_results  =	$obj->homeEventsForMicroSite($find_site_name);

		if(count($event_results) > 0)
		{
			foreach($event_results as $event_result)
			{
				$home_EId[] 		= 	$event_result[ARTICLE_ID];
				$tmp_EName			= 	strip_tags($event_result[ARTICLE_TITLE]); 
				$home_EName[] 		= 	shortText($tmp_EName,DOUBLE_LARGE_LINE); 
				$tmp_EBody			= 	strip_tags($event_result[ARTICLE_BODY]);
				$home_EBody[] 		= 	shortText($tmp_EBody,DOUBLE_LARGE_LINE);
				$home_EBodyLong[] 	= 	shortText($tmp_EBody,150);
				$home_Eimg[]		=	$event_result[artImg198x166];
		
				$ECat			= 	$obj->fetchThisArticleCategory($event_result[ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_ECat 		= 	htmlentities(strip_tags($ECat[0][ARTICLE_CATEGORY_NAME]));
			
				$home_ECat[] 	= 	addslashes($tmp_ECat);
			}
			$smarty->assign("home_EId", $home_EId);
			$smarty->assign("home_EName", $home_EName);
			$smarty->assign('home_EBodyLong', $home_EBodyLong);
			$smarty->assign('home_EBody', $home_EBody);
			$smarty->assign('home_ECat', $home_ECat);
			$smarty->assign('count_E', count($howto_results));
			$smarty->assign('home_Eimg', $home_Eimg);
		}
		/* -------------------------- [Ends] Fetching Events  ---------------------------------------------------------------- */
		
		/* -------------------------- [Starts] Fetching Special Offers  ---------------------------------------------------------------- */
		$spl_results =	$obj->homeSpecialOfferForMicroSite($find_site_name);
		
		if(count($spl_results)>0)
		{
			foreach($spl_results as $spl_result)
			{
				$home_splId[] 		= 	$spl_result[ARTICLE_ID];
				$tmp_splName		= 	strip_tags($spl_result[ARTICLE_TITLE]);
				$home_splName[] 	= 	shortText($tmp_splName,DOUBLE_LARGE_LINE); 
				$home_splImg[] 		= 	$spl_result[artImg198x166];
				$tmp_splBody		= 	strip_tags($spl_result[ARTICLE_BODY]);
				$home_splBody[] 	= 	shortText($tmp_splBody,DOUBLE_LARGE_LINE);
				$home_splBodyLong[] = 	shortText($tmp_splBody,150);
				$splCat				= 	$obj->fetchThisArticleCategory($spl_result[ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_splCat 		= 	htmlentities(strip_tags($splCat[0][ARTICLE_CATEGORY_NAME]));
				$home_splCat[] 		= 	addslashes($tmp_splCat);
			}
			$smarty->assign("home_splId", $home_splId);
			$smarty->assign("home_splName", $home_splName);
			$smarty->assign('home_splBodyLong', $home_splBodyLong);
			$smarty->assign('home_splBody', $home_splBody);
			$smarty->assign('home_splCat', $home_splCat);
			$smarty->assign('count_spl', count($spl_results)); 
			$smarty->assign('home_splImg', $home_splImg); 
		}		
		/* -------------------------- [Ends] Fetching Special Offers  ---------------------------------------------------------------- */
		
		/* -------------------------- [Starts] FFetching Sponsored Resources  ---------------------------------------------------------------- */
		$sponsor_results =	$obj->homeSponsoredResourcesForMicroSite($find_site_name);
		
		if(count($sponsor_results)>0)
		{
			foreach($sponsor_results as $sponsor_result)
			{
				$home_spnId[] 			= 	$sponsor_result[ARTICLE_ID];
				$tmp_spnName			= 	strip_tags($sponsor_result[ARTICLE_TITLE]);
				$home_spnName[] 		= 	shortText($tmp_spnName,DOUBLE_LARGE_LINE); 
				$tmp_spnBody			= 	strip_tags($sponsor_result[ARTICLE_BODY]);
				$home_spnBody[] 		= 	shortText($tmp_spnBody,DOUBLE_LARGE_LINE);
				$home_spnBodyLong[] 	= 	shortText($tmp_spnBody,150);
				$home_spnartImg198x166[]=	$sponsor_result[artImg198x166];
				$spnCat					= 	$obj->fetchThisArticleCategory($sponsor_result[ARTICLE_ID]," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_spnCat 			= 	htmlentities(strip_tags($spnCat[0][ARTICLE_CATEGORY_NAME]));
				$home_spnCat[] 			= 	addslashes($tmp_spnCat);
			}
			$smarty->assign("home_spnId", $home_spnId);
			$smarty->assign("home_spnName", $home_spnName);
			$smarty->assign('home_spnBodyLong', $home_spnBodyLong);
			$smarty->assign('home_spnBody', $home_spnBody);
			$smarty->assign('home_spnCat', $home_spnCat);
			$smarty->assign('count_spn', count($sponsor_results)); 
			$smarty->assign('home_spnartImg198x166', $home_spnartImg198x166); 
		}
		/* -------------------------- [Ends] FFetching Sponsored Resources  ---------------------------------------------------------------- */
		
		/* -------------------------- [Starts] Skoar Data Fetching ------------------------------------------------------------------------- */
		$home_TS_skore	=	$obj->homeStoryTitleForMicroSite('skore');
		if(count($home_TS_skore))
		{
			for($n = 0;$n<count($home_TS_skore);$n++)
			{
				$home_TS_skoreId[] 		= 	$home_TS_skore[$n]['article_id'];
				$tmp_TS_skoreName		= 	($home_TS_skore[$n]['article_title']);
				$home_TS_skoreName[] 	= 	showArticleTitle($tmp_TS_skoreName,DOUBLE_LARGE_LINE);  //-- Function defined in function.php file --
				$TS_skoreCat			= 	$obj->fetchThisArticleCategory($home_TS_skore[$n]['article_id']," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_TS_skoreCat 		= 	htmlentities(strip_tags($TS_skoreCat[0][ARTICLE_CATEGORY_NAME]));
				$home_TS_skoreCat[] 	= 	addslashes($tmp_TS_skoreCat);
				$home_TS_primary_skore[]= 	$home_TS_skore[$n]['primary_site'];
			}		
		}
		
		$smarty->assign("home_TS_skoreId", $home_TS_skoreId)						;
		$smarty->assign("home_TS_skoreName", $home_TS_skoreName)					;
		$smarty->assign('home_TS_skoreCat', $home_TS_skoreCat)						;
		$smarty->assign('total_skore_story', count($home_TS_skore))					;
		$smarty->assign('home_TS_primary_skore', $home_TS_primary_skore)			;
		/* -------------------------- [Ends] Skoar Data Fetching ------------------------------------------------------------------------- */
		
		/* -------------------------- [Starts] Dev Works Data Fetching ------------------------------------------------------------------------- */
		$home_TS_dev	=	$obj->homeStoryTitleForMicroSite('devworks');
		if(count($home_TS_dev))
		{
			for($n = 0;$n<count($home_TS_dev);$n++)
			{
				$home_TS_devId[] 	= 	$home_TS_dev[$n]['article_id'];
				$tmp_TSName			= 	($home_TS_dev[$n]['article_title']);
				$home_TS_devName[] 	= 	showArticleTitle($tmp_TSName,DOUBLE_LARGE_LINE);  //------- Function defined in function.php file -----
				$TSCat				= 	$obj->fetchThisArticleCategory($home_TS_dev[$n]['article_id']," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_TSCat 			= 	htmlentities(strip_tags($TSCat[0][ARTICLE_CATEGORY_NAME]));
				$home_TSCat[] 		= 	addslashes($tmp_TSCat);
				$home_TS_primary_dev[] 	= 	$home_TS_dev[$n]['primary_site'];
			}		
		}
		
		
		$smarty->assign("home_TS_devId", $home_TS_devId)				;
		$smarty->assign("home_TS_devName", $home_TS_devName)			;
		$smarty->assign('home_TS_devCat', $home_TSCat)					;
		$smarty->assign('total_dev_story', count($home_TS_dev))			;
		$smarty->assign('home_TS_primary_dev', $home_TS_primary_dev)			;
		/* -------------------------- [Ends] Dev Works Data Fetching ------------------------------------------------------------------------- */		
		
		/* -------------------------- [Starts] Smart Works Data Fetching ------------------------------------------------------------------------- */
		$home_TS_smart	=	$obj->homeStoryTitleForMicroSite('smartwork');
		
		if(count($home_TS_smart))
		{
			for($n = 0;$n<count($home_TS_smart);$n++)
			{
				$home_TS_smartId[] 		= 	$home_TS_smart[$n]['article_id'];
				$tmp_TS_smartName		= 	($home_TS_smart[$n]['article_title']);
				$home_TS_smartName[] 	= 	showArticleTitle($tmp_TS_smartName,DOUBLE_LARGE_LINE);  //--- Function defined in function.php file ---
				$TS_smartCat			= 	$obj->fetchThisArticleCategory($home_TS_smart[$n]['article_id']," ORDER BY RAND() LIMIT 0,1 ");
				$tmp_TS_smartCat 		= 	htmlentities(strip_tags($TS_smartCat[0][ARTICLE_CATEGORY_NAME]));
				$home_TS_smartCat[] 	= 	addslashes($tmp_TS_smartCat);
				$home_TS_primary_smart[]= 	$home_TS_smart[$n]['primary_site'];
			}	
		}
		
		$smarty->assign("home_TS_smartId", $home_TS_smartId)						;
		$smarty->assign("home_TS_smartName", $home_TS_smartName)					;
		$smarty->assign('home_TS_devCat', $home_TS_smartCat)						;
		$smarty->assign('total_smart_story', count($home_TS_smart))					;
		$smarty->assign('home_TS_primary_smart', $home_TS_primary_smart)			;
		/* -------------------------- [Ends] Smart Works Data Fetching ------------------------------------------------------------------------- */				
	}	
	
	
	if ( !$smarty->is_cached("inner_right.tpl", "", "")) 
	{	
		/////////////////sh fetching multiple current issues/////////////
		$srch=" WHERE status='1' ";
		$result = findCurrentIssue($srch);
		
		
		
		for($i=0;$i<count($result);$i++)
		{
			  if(file_exists($result[$i]['image']) && !is_dir($result[$i]['image']) )
			  {
				$current_issue_image[] = $result[$i]['image'];			  
			  }
			  else
			  {
				$current_issue_image[] =  "/images/issuseimg.jpg";		  
			  }
			
			$current_issue_pdf[] = $result[$i]['pdf'];
			$current_issue_date[] = $result[$i]['issue_date'];
			
			///////////sh titles for each content////////////////////////
			$current_issue_title[$i][] = trim($result[$i]['issue_title']);
			$current_issue_title[$i][] = trim($result[$i]['issue_dvd_title']);
			$current_issue_title[$i][] = trim($result[$i]['issue_ft_title']);
			$current_issue_title[$i][] = trim($result[$i]['issue_test_title']);
			///////////sh end titles for each content////////////////////////
			
			$current_issue_description[$i][] = trim($result[$i]['issue_description']);
			$current_issue_description[$i][] = trim($result[$i]['issue_dvd_description']);
			$current_issue_description[$i][] = trim($result[$i]['issue_ft_description']);
			$current_issue_description[$i][] = trim($result[$i]['issue_test_description']);
			
			$current_issue_product_id[] = $result[$i]['product_id'];
		}	
		
		////////if no records found then display the default images//////////
		if(count($result)<=0)
		{
			$current_issue_image[] = "/images/issuseimg.jpg";
			$current_issue_pdf[] = "";
			$current_issue_date[] = date('MM - Y');
			$current_issue_description[] = "";
			$current_issue_title[] = "";
			$current_issue_product_id[] = 0;
		}
		////////end if no records found then display the default images//////////
		/////////////////sh end fetching multiple current issues/////////////
		$smarty->assign("current_issue_image", $current_issue_image);
		$smarty->assign("current_issue_pdf", $current_issue_pdf);
		$smarty->assign("current_issue_date", $current_issue_date);	
		$smarty->assign("current_issue_title", $current_issue_title);
		$smarty->assign("current_issue_description", $current_issue_description);
		$smarty->assign("current_issue_product_id", $current_issue_product_id);
	
	}
	
	///////////  download ///////////////////////
	
	$cat_obj=new Category();
	$obj=new userFrontEnd();
	$home_feed=0; /////hot or news category
	////////sh fetching downloads for hot category////////////
	$where = HOME_FEED."='".$home_feed."' ";
	$home_Download	=	$obj->homeDownloadsForMicroSite($where,$find_site_name);
	for($n = 0;$n<count($home_Download);$n++)
	{
		$home_DownloadId[] 		= 	$home_Download[$n][FEED_ID];
		$temp_title 			= 	shortText($home_Download[$n][FEED_TITLE],60);
		$home_DownloadTitle[] 	=	$temp_title ;
		
		$category_id =  $home_Download[$n][ARTICLE_CATEGORY_ID];
		$cat_obj->categoryID = $category_id; 
		$results = $cat_obj->fetchCategoryDetails(); 
		$home_Download_catName[]= $results[ARTICLE_CATEGORY_NAME];
		$home_Download_catImage[]= $results[CATEGORY_IMAGE_PATH];
		//$home_DownloadTypeId[] = $home_Download[$n][FEED_TYPE_ID];
		$home_CatDownloadLink[]=FULL_PATH."/download.php?category_id=".$category_id;
		$home_DownloadLink[] = $home_Download[$n][LINK];
	}
	$smarty->assign("home_Download_catName", $home_Download_catName);
	$smarty->assign("home_Download_catImage", $home_Download_catImage);
	$smarty->assign("home_DownloadId", $home_DownloadId);
	$smarty->assign("home_DownloadTitle", $home_DownloadTitle);
	//$smarty->assign("home_DownloadTypeId", $home_DownloadTypeId);
	$smarty->assign("home_DownloadLink", $home_DownloadLink);
	$smarty->assign("home_CatDownloadLink", $home_CatDownloadLink);
	$smarty->assign("mode", $_SESSION['mode']);
	$smarty->display("home.tpl");
}




function findHomePageNews($limit,$mode,$latest_or_popular,$offset,$listed_on)
{
//echo $offset;
	if(isset($_GET['p'])) {
		if(strstr($_GET['p'],'page')) {
			$pagestr = explode("/",$_GET['page']);
			$p = $pagestr[1];
		} else {
	      $p = $_GET['p'];
		}
	} else {
	$p = '0';
	}
	$xtra_condition	=	'';
	$p = $p * 15;
	if($mode=='all')
	{
		//$xtra_condition	.=	"AND TO_DAYS(NOW())- TO_DAYS(art.`".POST_DATE."`) <= 2 ";
		$channel_id	=	"3,13,30"	;
	}
	elseif($mode=='reviews')
	{
		$channel_id	=	"13"	;	
	}
	elseif($mode=='features')
	{
		$xtra_condition	.=	" AND art.f_status='1'";	
		$channel_id		=	"30"	;	
	}
	elseif($mode=='news')
	{
		$channel_id	=	"3"	;	
	}
	
	if($latest_or_popular=='popular')
	{
		$xtra_condition	.=	" AND art.hot_topic='1'";	
	}
	
	if($listed_on=='www')
	{
		$xtra_condition	.=	" AND ( art.primary_site='1' OR  art.listed_on_digit='1' )";	
	}
	elseif($listed_on=='devworks')
	{
		$xtra_condition	.=	" AND ( art.primary_site='2' OR  art.listed_on_dev='1' )";	
	}
	elseif($listed_on=='smartwork')
	{
		$xtra_condition	.=	" AND ( art.primary_site='3' OR  art.listed_on_smart='1' )";	
	}
	elseif($listed_on=='skoar')
	{
		$xtra_condition	.=	" AND ( art.primary_site='4' OR  art.listed_on_skore='1' )";	
	}
	
	$result = 	array();
	
	$sql 	=	" SELECT art.*,PRT.overall,AUT.author_image,AUT.author_name,AUT.".AUTHOR_EMAIL.
				" FROM ".ARTICLE_TABLE." AS art ".
				" LEFT JOIN product_review_table PRT ON art.article_id =PRT.article_id ".
				" LEFT JOIN article_author_table AAT ON AAT.article_id=art.article_id ".
				" LEFT JOIN author_table AUT ON AUT.author_id=AAT.author_id ".
				" WHERE 1 AND art.`".STATUS."` = '1' AND ".
				" art.`".CHANNEL_ID."` IN(".$channel_id.") ".$xtra_condition.
				" ORDER BY art.".POST_DATE." DESC LIMIT $p,15";
		
	$res 		= 	mysql_query($sql) or die(mysql_error());
	while($row 	= 	mysql_fetch_array($res))
	{
		$time 			= 	strtotime($row[POST_DATE]);
		$result[$time] 	= 	$row;
	}
	
	/*
	$limit_news	=	$limit - count($result);
	
	$sql =	" SELECT art.* ".
			" FROM ".ARTICLE_TABLE." AS art ".
			" WHERE 1 AND art.`".STATUS."` = '1' AND art.`".CHANNEL_ID."` = '3' ".
			" ORDER BY art.".POST_DATE." DESC LIMIT 0,".$limit_news;
			
	$res = mysql_query($sql);
	while($row = mysql_fetch_array($res))
	{
		$time = strtotime($row[POST_DATE]);
		$result[$time] = $row;
	}
	*/
	
	krsort($result);
	$results1 = array();
	foreach ($result as $val) 
	{
		$results1[]=$val;
	}
	
	return $results1;  
}
function count_article_in_home($mode,$latest_or_popular,$offset,$listed_on) {
$xtra_condition	=	'';
	if($mode=='all')
	{
		//$xtra_condition	.=	"AND TO_DAYS(NOW())- TO_DAYS(art.`".POST_DATE."`) <= 2 ";
		$channel_id	=	"3,13,30"	;
	}
	elseif($mode=='reviews')
	{
		$channel_id	=	"13"	;	
	}
	elseif($mode=='features')
	{
		$xtra_condition	.=	" AND art.f_status='1'";	
		$channel_id		=	"30"	;	
	}
	elseif($mode=='news')
	{
		$channel_id	=	"3"	;	
	}
	
	if($latest_or_popular=='popular')
	{
		$xtra_condition	.=	" AND art.hot_topic='1'";	
	}
	
	if($listed_on=='www')
	{
		$xtra_condition	.=	" AND ( art.primary_site='1' OR  art.listed_on_digit='1' )";	
	}
	elseif($listed_on=='devworks')
	{
		$xtra_condition	.=	" AND ( art.primary_site='2' OR  art.listed_on_dev='1' )";	
	}
	elseif($listed_on=='smartwork')
	{
		$xtra_condition	.=	" AND ( art.primary_site='3' OR  art.listed_on_smart='1' )";	
	}
	elseif($listed_on=='skoar')
	{
		$xtra_condition	.=	" AND ( art.primary_site='4' OR  art.listed_on_skore='1' )";	
	}
$sql 	=	" SELECT art.article_id
				 FROM ".ARTICLE_TABLE." AS art ".
				" LEFT JOIN product_review_table PRT ON art.article_id =PRT.article_id ".
				" LEFT JOIN article_author_table AAT ON AAT.article_id=art.article_id ".
				" LEFT JOIN author_table AUT ON AUT.author_id=AAT.author_id ".
				" WHERE 1 AND art.`".STATUS."` = '1' AND ".
				" art.`".CHANNEL_ID."` IN(".$channel_id.") ".$xtra_condition.
				" ORDER BY art.".POST_DATE." DESC";
$query = mysql_query($sql);

return mysql_num_rows($query);
}

//==================== CATEGORY LIST SELECTION ========================= //

function select_categoryList()
{
	require_once INCLUDE_PATH."lib/common.php";
	$obj = new userFrontEnd;
		
	//========================== ARTICLE SEARCH SECTION ======================== //
	$row = $obj->selectAllChannel();
	
	for($n = 0; $n<count($row); $n++){
		$channelDD[$row[$n][CHANNEL_ID]] = $row[$n][CHANNEL_NAME];
	}
	$smarty->assign("channelDD", $channelDD);
	
	//========================= SELECT ALL CATEGORY ============================== //
	
	$row = $obj->selectAllCategories();
	for($n = 0; $n<count($row); $n++){
		$categorylDD[$row[$n][ARTICLE_CATEGORY_ID]] = $row[$n][ARTICLE_CATEGORY_NAME];
	}
	$smarty->assign("categorylDD", $categorylDD);
	
	//========================= SELECT ALL AUTHORS =============================== //
	$row = $obj->selectAll_Authors();
	for($n = 0; $n<count($row); $n++){
		$authorlDD[$row[$n][AUTHOR_ID]] 	= 	$row[$n][AUTHOR_NAME];
		$autherimage[] 	= 	($row[$n]['author_image'] !='')?$row[$n]['author_image']:'image/author_not_found.gif';
	}
	
	
	$smarty->assign("authorlDD", $authorlDD);
	$smarty->assign("autherimage", $autherimage);
	
	
	//============== Current Issue ================== //
	$result2 = findContent('CURRENT ISSUE',1);
	
	for($n=0; $n<count($result2); $n++){
		$articleId2[] = $result2[$n][ARTICLE_ID];
		$articleTitle2[] = shortText($result2[$n]['article_title'],DOUBLE_LINE);
		$articleBody2[] = shortText($result2[$n][ARTICLE_BODY],DOUBLE_LARGE_LINE);
		$postDate[] = $result2[$n][POST_DATE];
		
	}
	
	$date = explode(" ",$postDate[0]);
	$date_dif = explode("-",$date[0]);
	$date_format = (date("F Y" ,mktime(0, 0, 0, $date_dif[1],$date_dif[2], $date_dif[0])));
	$smarty->assign("currentArticleId", $articleId2);
	$smarty->assign("currentArticleTitle", $articleTitle2);
	$smarty->assign("currentArticleBody", $articleBody2);
	$smarty->assign("currentPostDate", $date_format);
	
	
	
	//==================== Select Channel Name ================ //
	$result = $obj->selectChannel();
	
	for($n = 0;$n<count($result);$n++)
	{
		$channelId[] = $result[$n][CHANNEL_ID];
		$channelName[] = $result[$n][CHANNEL_NAME];
	}
	
	$smarty->assign("channel_id", $channelId);
	$smarty->assign("Channel_name", $channelName);
	
	$obj->category_id = $_REQUEST['category_id'];
	$result = $obj->selectategoryList();
	$total = $obj->countCategoryListing();
	$smarty->assign("total", $total);
	
	for($n=0;$n<count($result);$n++)
	{
		$art_id = $result[$n][ARTICLE_ID];
		$articleId[] = $result[$n][ARTICLE_ID];
		$articleTitle[] = showArticleTitle($result[$n][ARTICLE_TITLE],DOUBLE_LINE);
		$articleBody[] =  shortText($result[$n][ARTICLE_BODY],DOUBLE_LARGE_BODY_LINE);
		
		
		$postDate[] = date("dS M, y", strtotime($result[$n][POST_DATE]));
		$rate[] = $obj->ratingCalculate($art_id);
	}
	
	$smarty->assign("articleId", $articleId);
	$smarty->assign("articleTitle", $articleTitle);
	$smarty->assign("articleBody", $articleBody);
	$smarty->assign("postDate", $postDate);
	$smarty->assign("rate", $rate);
	$smarty->assign('displayCounterTXT', displayCounter($total, $GLOBALS['offset'], $GLOBALS['toshow'], "headertext", $message="", $start=5, $end=100, $step=5, $use=1));
	$smarty->assign('pageCounterTXT', pageCounter($total, $GLOBALS['offset'], $GLOBALS['toshow'], "headertext", $groupby=10, $showcounter=1, $linkStyle='view_link', $redText='headertext'));
	
	$smarty->display("article_for_category.tpl");
	 }

function all_category_list()
{ 
	require_once INCLUDE_PATH."lib/common.php";
	$obj = new userFrontEnd;
	
	
	
	//============== Current Issue ================== //
	$result2 = findContent('CURRENT ISSUE',1);
	
	for($n=0; $n<count($result2); $n++){
		$art_id = $result2[$n][ARTICLE_ID];
		$articleId2[] = $result2[$n][ARTICLE_ID];
		$articleTitle2[] = shortText($result2[$n]['article_title'],DOUBLE_LINE);
		$articleBody2[] = shortText($result2[$n][ARTICLE_BODY],DOUBLE_LARGE_LINE);
		$postDate[] = $result2[$n][POST_DATE];
		$rate[] = $obj->ratingCalculate($art_id); //==================================================================
	}
	
	
	$date = explode(" ",$postDate[0]);
	$date_dif = explode("-",$date[0]);
	$date_format = (date("F Y" ,mktime(0, 0, 0, $date_dif[1],$date_dif[2], $date_dif[0])));
	$smarty->assign("currentArticleId", $articleId2);
	$smarty->assign("currentArticleTitle", $articleTitle2);
	$smarty->assign("currentArticleBody", $articleBody2);
	$smarty->assign("currentPostDate", $date_format);
	$smarty->assign("rate", $rate);
	
	
	
	//==================== Select Channel Name ================ //
	$result = $obj->selectChannel();
	
	for($n = 0;$n<count($result);$n++)
	{
		$channelId[] = $result[$n][CHANNEL_ID];
		$channelName[] = $result[$n][CHANNEL_NAME];
	}
	
	$smarty->assign("channel_id", $channelId);
	$smarty->assign("Channel_name", $channelName);
	
	$obj->category_id = $_REQUEST['category_id'];
	$result = $obj->allCategory_list();
	
	$total = $obj->categoryCount();
	
	$smarty->assign("total", $total);
	
	for($n=0;$n<count($result);$n++)
	{
		$categoryId1[] = $result[$n][ARTICLE_CATEGORY_ID];
		$categoryName1[] = htmlentities($result[$n][ARTICLE_CATEGORY_NAME]);
	}
	
	$smarty->assign("categoryId1", $categoryId1);
	$smarty->assign("categoryName1", $categoryName1);
	
	$smarty->display("category_list.tpl"); }

function populer_tow_month()
{  
	require_once INCLUDE_PATH."lib/common.php";
	$obj = new userFrontEnd;
	
	//========================== ARTICLE SEARCH SECTION ======================== //
	$row = $obj->selectAllChannel();
	
	for($n = 0; $n<count($row); $n++)
	{
		$channelDD[$row[$n][CHANNEL_ID]] = $row[$n][CHANNEL_NAME];
	}
	$smarty->assign("channelDD", $channelDD);
	
	//========================= SELECT ALL CATEGORY ============================== //
	
	$row = $obj->selectAllCategories();
	for($n = 0; $n<count($row); $n++)
	{
		$categorylDD[$row[$n][ARTICLE_CATEGORY_ID]] = $row[$n][ARTICLE_CATEGORY_NAME];
	}
	$smarty->assign("categorylDD", $categorylDD);
	
	//========================= SELECT ALL AUTHORS =============================== //
	$row = $obj->selectAll_Authors();
	for($n = 0; $n<count($row); $n++)
	{
		$authorlDD[$row[$n][AUTHOR_ID]] = $row[$n][AUTHOR_NAME];
	}
	$smarty->assign("authorlDD", $authorlDD);
	
	
	
	$obj->category_id = $_REQUEST['category_id'];
	
	if($_REQUEST['mode'] == "populer_tow_month")
	{
		$obj->most_tow_month = "most_tow_month";
	}
	if($_REQUEST['mode'] == "populer_six_month")
	{
		$obj->most_tow_month = "most_six_month";
	}
	if($_REQUEST['mode'] == "most_disc")
	{
		$obj->most_tow_month = "most_disc";
	}
	
	$result 	= 	$obj->selectategoryList();
	$total 		= 	$obj->countCategoryListing();
	$smarty->assign("total", $total);
	
	for($n=0;$n<count($result);$n++)
	{
		$articleId[] 		= 	$result[$n][ARTICLE_ID];
		$articleTitle[] 	= 	showArticleTitle($result[$n][ARTICLE_TITLE],DOUBLE_LINE);
		$articleBody[] 		= 	shortText($result[$n][ARTICLE_BODY],DOUBLE_LINE);
		$postDate[] 		= 	date("dS M, y", strtotime($result[$n][POST_DATE]));
	}
	$smarty->assign("articleId", $articleId);
	$smarty->assign("articleTitle", $articleTitle);
	$smarty->assign("articleBody", $articleBody);
	$smarty->assign("postDate", $postDate);
	
	$smarty->assign('displayCounterTXT', displayCounter($total, $GLOBALS['offset'], $GLOBALS['toshow'], "headertext", $message="", $start=5, $end=100, $step=5, $use=1));
	$smarty->assign('pageCounterTXT', pageCounter($total, $GLOBALS['offset'], $GLOBALS['toshow'], "headertext", $groupby=10, $showcounter=1, $linkStyle='view_link', $redText='headertext'));
	
	$smarty->display("article_for_category.tpl");  }

?>
