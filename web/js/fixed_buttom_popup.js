// JavaScript Document
// Script cause to Unnext article //
//alert("asdfas");
var cls = 1;
var showHide = 0;
jQuery(function() {
		$.ajax({
            url: '\/api\/',
            type: "GET",
            data: "sectionid="+sectionid+"&id="+id+"&sectionName="+sectionName+"&subSectionId="+subSectionId,
            dataType: "json",	
            success: function(response) {
				if(response!= false)
				{
					//alert(response.headline1);
					$('#upNextSecName').html(response.secName);
					var lnkMain = '<a style="color:#1E4767; text-decoration:none;" href="'+response.guid+'">'+response.headline1+'</a>';
					$('#upNextHeading').html(lnkMain);
					$('#upNextStrap').html(response.summary);
					var lnk = '<br><a class="bl_11" href="'+response.guid+'">Read more &raquo;</a>';
					$('#upNextReadMore').html(lnk);
					
				}else{
					//$('#UserTitle').val('');
					//$('#UserFname').val('');
					//$('#UserLname').val('');
				}
			}
        });
        //return false;

    $(window).scroll(function() { 
		//alert("asd");
		var p = $("#upfrontinit");
		var scrollTop = $(this).scrollTop();
		var winHeight =    $(document).height();
		$("#upfrontitxt").val(scrollTop);
		$("#gethgt").val(winHeight);
		
		//$("#a").val(scrollTop);
		//$("#b").val(winHeight);
		//$("#c").val(winHeight - scrollTop);
		
		if(winHeight - scrollTop<=3150){
			if(showHide==0 && cls == 1){
				$('#callout').animate({width: 'show', height: 'show'}, 500);
				showHide = 1;
			}
		}else{
			$('#callout').animate({width: 'hide', height: 'hide'}, 500);
			showHide = 0;
		}
	});
	$("#mkhide").click(function() {
		$('#callout').animate({width: 'hide', height: 'hide'}, 500);
		cls = 0;
	});
});
