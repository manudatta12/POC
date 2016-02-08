// page init
jQuery(function() {
	//initCustomForms();
	initTabs();
	//hideFormText();
	initVerticalScroller();
	initSlideshow();
	initNavFix();
})

// scroll gallery init
function initVerticalScroller() {
	jQuery('div.switcher').scrollGallery({
		sliderHolder:'.vslider',
		btnNext:'.link-next',
		btnPrev:'.link-prev',
		vertical:true,
		step: 1,
		duration : 500
	});
	jQuery('div.aside div.prime-block').scrollGallery({
		sliderHolder:'.slide',
		btnNext:'.arrow-next',
		btnPrev:'.arrow-prev',
		vertical:true,
		duration : 500,
		circleSlide: false
	});
}

// slideshow init
function initSlideshow() {
	jQuery('div.gallery2').fadeGallery({
		slideElements:'.frame li',
		pagerLinks:'.switcher li',
		duration:500,
		startSlide: 1
	});
	jQuery('div.gallery1').each(function() {
		var gal = jQuery(this);
		gal.fadeGallery({
			slideElements:'.frame .slider > li',
			btnNext:'.switcher .next',
			btnPrev:'.switcher .prev',
			btnPause:'.switcher .pause',
			btnPlay:'.switcher .play',
			duration:500,
			autoRotation:true,
			onChange: function(gal, items, prev, cur) {
				gal.find('.cur').html(cur + 1);
				gal.find('.all').html(items.length);
			}
		});
	})
}

//clear inputs
function hideFormText() {
	var _inputs = document.getElementsByTagName('input');
	var _txt = document.getElementsByTagName('textarea');
	var _value = [];
	
	if (_inputs) {
		for(var i=0; i<_inputs.length; i++) {
			if (_inputs[i].type == 'text' || _inputs[i].type == 'password') {
				
				_inputs[i].index = i;
				_value[i] = _inputs[i].value;
				
				_inputs[i].onfocus = function(){
					if (this.value == _value[this.index])
						this.value = '';
				}
				_inputs[i].onblur = function(){
					if (this.value == '')
						this.value = _value[this.index];
				}
			}
		}
	}
	if (_txt) {
		for(var i=0; i<_txt.length; i++) {
			_txt[i].index = i;
			_value['txt'+i] = _txt[i].value;
			
			_txt[i].onfocus = function(){
				if (this.value == _value['txt'+this.index])
					this.value = '';
			}
			_txt[i].onblur = function(){
				if (this.value == '')
					this.value = _value['txt'+this.index];
			}
		}
	}
}

// slideshow plugin
jQuery.fn.fadeGallery = function(_options){
	var _options = jQuery.extend({
		slideElements:'div.slideset > div',
		pagerLinks:'div.pager a',
		btnNext:'a.next',
		btnPrev:'a.prev',
		btnPlayPause:'a.play-pause',
		btnPlay:'a.play',
		btnPause:'a.pause',
		pausedClass:'paused',
		disabledClass: 'disabled',
		playClass:'playing',
		activeClass:'active',
		loadingClass:'ajax-loading',
		loadedClass:'slide-loaded',
		dynamicImageLoad:false,
		dynamicImageLoadAttr:'alt',
		currentNum:false,
		allNum:false,
		startSlide:null,
		noCircle:false,
		pauseOnHover:true,
		autoRotation:false,
		autoHeight:false,
		onBeforeFade:false,
		onAfterFade:false,
		onChange:false,
		disableWhileAnimating:false,
		switchTime:3000,
		duration:650,
		event:'click'
	},_options);

	return this.each(function(){
		// gallery options
		if(this.slideshowInit) return; else this.slideshowInit;
		var _this = jQuery(this);
		var _slides = jQuery(_options.slideElements, _this);
		var _pagerLinks = jQuery(_options.pagerLinks, _this);
		var _btnPrev = jQuery(_options.btnPrev, _this);
		var _btnNext = jQuery(_options.btnNext, _this);
		var _btnPlayPause = jQuery(_options.btnPlayPause, _this);
		var _btnPause = jQuery(_options.btnPause, _this);
		var _btnPlay = jQuery(_options.btnPlay, _this);
		var _pauseOnHover = _options.pauseOnHover;
		var _dynamicImageLoad = _options.dynamicImageLoad;
		var _dynamicImageLoadAttr = _options.dynamicImageLoadAttr;
		var _autoRotation = _options.autoRotation;
		var _activeClass = _options.activeClass;
		var _loadingClass = _options.loadingClass;
		var _loadedClass = _options.loadedClass;
		var _disabledClass = _options.disabledClass;
		var _pausedClass = _options.pausedClass;
		var _playClass = _options.playClass;
		var _autoHeight = _options.autoHeight;
		var _duration = _options.duration;
		var _switchTime = _options.switchTime;
		var _controlEvent = _options.event;
		var _currentNum = (_options.currentNum ? jQuery(_options.currentNum, _this) : false);
		var _allNum = (_options.allNum ? jQuery(_options.allNum, _this) : false);
		var _startSlide = _options.startSlide;
		var _noCycle = _options.noCircle;
		var _onChange = _options.onChange;
		var _onBeforeFade = _options.onBeforeFade;
		var _onAfterFade = _options.onAfterFade;
		var _disableWhileAnimating = _options.disableWhileAnimating;

		// gallery init
		var _anim = false;
		var _hover = false;
		var _prevIndex = 0;
		var _currentIndex = 0;
		var _slideCount = _slides.length;
		var _timer;
		if(_slideCount < 2) return;

		_prevIndex = _slides.index(_slides.filter('.'+_activeClass));
		if(_prevIndex < 0) _prevIndex = _currentIndex = 0;
		else _currentIndex = _prevIndex;
		if(_startSlide != null) {
			if(_startSlide == 'random') _prevIndex = _currentIndex = Math.floor(Math.random()*_slideCount);
			else _prevIndex = _currentIndex = parseInt(_startSlide);
		}
		_slides.hide().eq(_currentIndex).show();
		if(_autoRotation) _this.removeClass(_pausedClass).addClass(_playClass);
		else _this.removeClass(_playClass).addClass(_pausedClass);

		// gallery control
		if(_btnPrev.length) {
			_btnPrev.bind(_controlEvent,function(){
				prevSlide();
				return false;
			});
		}
		if(_btnNext.length) {
			_btnNext.bind(_controlEvent,function(){
				nextSlide();
				return false;
			});
		}
		if(_pagerLinks.length) {
			_pagerLinks.each(function(_ind){
				jQuery(this).bind(_controlEvent,function(){
					if(_currentIndex != _ind) {
						if(_disableWhileAnimating && _anim) return;
						_prevIndex = _currentIndex;
						_currentIndex = _ind;
						switchSlide();
					}
					return false;
				});
			});
		}

		// play pause section
		if(_btnPlayPause.length) {
			_btnPlayPause.bind(_controlEvent,function(){
				if(_this.hasClass(_pausedClass)) {
					_this.removeClass(_pausedClass).addClass(_playClass);
					_autoRotation = true;
					autoSlide();
				} else {
					_autoRotation = false;
					if(_timer) clearTimeout(_timer);
					_this.removeClass(_playClass).addClass(_pausedClass);
				}
				return false;
			});
		}
		if(_btnPlay.length) {
			_btnPlay.bind(_controlEvent,function(){
				_this.removeClass(_pausedClass).addClass(_playClass);
				_autoRotation = true;
				autoSlide();
				return false;
			});
		}
		if(_btnPause.length) {
			_btnPause.bind(_controlEvent,function(){
				_autoRotation = false;
				if(_timer) clearTimeout(_timer);
				_this.removeClass(_playClass).addClass(_pausedClass);
				return false;
			});
		}

		// dynamic image loading (swap from ATTRIBUTE)
		function loadSlide(slide) {
			if(!slide.hasClass(_loadingClass) && !slide.hasClass(_loadedClass)) {
				var images = slide.find(_dynamicImageLoad) // pass selector here
				var imagesCount = images.length;
				if(imagesCount) {
					slide.addClass(_loadingClass);
					images.each(function(){
						var img = this;
						img.onload = function(){
							img.loaded = true;
							img.onload = null;
							setTimeout(reCalc,_duration);
						}
						img.setAttribute('src', img.getAttribute(_dynamicImageLoadAttr));
						img.setAttribute(_dynamicImageLoadAttr,'');
					}).css({opacity:0});

					function reCalc() {
						var cnt = 0;
						images.each(function(){
							if(this.loaded) cnt++;
						});
						if(cnt == imagesCount) {
							slide.removeClass(_loadingClass);
							images.animate({opacity:1},{duration:_duration,complete:function(){
								if(jQuery.browser.msie && jQuery.browser.version < 9) jQuery(this).css({opacity:'auto'})
							}});
							slide.addClass(_loadedClass)
						}
					}
				}
			}
		}

		// gallery animation
		function prevSlide() {
			if(_disableWhileAnimating && _anim) return;
			_prevIndex = _currentIndex;
			if(_currentIndex > 0) _currentIndex--;
			else {
				if(_noCycle) return;
				else _currentIndex = _slideCount-1;
			}
			switchSlide();
		}
		function nextSlide() {
			if(_disableWhileAnimating && _anim) return;
			_prevIndex = _currentIndex;
			if(_currentIndex < _slideCount-1) _currentIndex++;
			else {
				if(_noCycle) return;
				else _currentIndex = 0;
			}
			switchSlide();
		}
		function refreshStatus() {
			if(_dynamicImageLoad) loadSlide(_slides.eq(_currentIndex));
			if(_pagerLinks.length) _pagerLinks.removeClass(_activeClass).eq(_currentIndex).addClass(_activeClass);
			if(_currentNum) _currentNum.text(_currentIndex+1);
			if(_allNum) _allNum.text(_slideCount);
			_slides.eq(_prevIndex).removeClass(_activeClass);
			_slides.eq(_currentIndex).addClass(_activeClass);
			if(_noCycle) {
				if(_btnPrev.length) {
					if(_currentIndex == 0) _btnPrev.addClass(_disabledClass);
					else _btnPrev.removeClass(_disabledClass);
				}
				if(_btnNext.length) {
					if(_currentIndex == _slideCount-1) _btnNext.addClass(_disabledClass);
					else _btnNext.removeClass(_disabledClass);
				}
			}
			if(typeof _onChange === 'function') {
				_onChange(_this, _slides, _prevIndex, _currentIndex);
			}
		}
		if(_autoHeight) _slides.eq(_currentIndex).parent().css({height:_slides.eq(_currentIndex).height(true)});
		function switchSlide() {
			_anim = true;
			if(typeof _onBeforeFade === 'function') _onBeforeFade(_this, _slides, _prevIndex, _currentIndex);
			_slides.eq(_prevIndex).stop(false, true).fadeOut(_duration,function(){
				_anim = false;
			});
			_slides.eq(_currentIndex).stop(false, true).fadeIn(_duration,function(){
				if(typeof _onAfterFade === 'function') _onAfterFade(_this, _slides, _prevIndex, _currentIndex);
			});
			if(_autoHeight) _slides.eq(_currentIndex).parent().stop().animate({height:_slides.eq(_currentIndex).height()},{duration:_duration,queue:false});
			refreshStatus();
			autoSlide();
		}

		// autoslide function
		function autoSlide() {
			if(!_autoRotation || _hover) return;
			if(_timer) clearTimeout(_timer);
			_timer = setTimeout(nextSlide,_switchTime+_duration);
		}
		if(_pauseOnHover) {
			_this.hover(function(){
				_hover = true;
				if(_timer) clearTimeout(_timer);
			},function(){
				_hover = false;
				autoSlide();
			});
		}
		refreshStatus();
		autoSlide();
	});
}

// scrolling gallery plugin
jQuery.fn.scrollGallery = function(_options){
	var _options = jQuery.extend({
		sliderHolder: '>div',
		slider:'>ul',
		slides: '>li',
		pagerLinks:'div.pager a',
		btnPrev:'a.link-prev',
		btnNext:'a.link-next',
		activeClass:'active',
		disabledClass:'disabled',
		generatePagination:'div.pg-holder',
		curNum:'em.scur-num',
		allNum:'em.sall-num',
		circleSlide:true,
		pauseClass:'gallery-paused',
		pauseButton:'none',
		pauseOnHover:true,
		autoRotation:false,
		stopAfterClick:false,
		switchTime:5000,
		duration:650,
		easing:'swing',
		event:'click',
		splitCount:false,
		afterInit:false,
		vertical:false,
		step:false
	},_options);

	return this.each(function(){
		// gallery options
		var _this = jQuery(this);
		var _sliderHolder = jQuery(_options.sliderHolder, _this);
		var _slider = jQuery(_options.slider, _sliderHolder);
		var _slides = jQuery(_options.slides, _slider);
		var _btnPrev = jQuery(_options.btnPrev, _this);
		var _btnNext = jQuery(_options.btnNext, _this);
		var _pagerLinks = jQuery(_options.pagerLinks, _this);
		var _generatePagination = jQuery(_options.generatePagination, _this);
		var _curNum = jQuery(_options.curNum, _this);
		var _allNum = jQuery(_options.allNum, _this);
		var _pauseButton = jQuery(_options.pauseButton, _this);
		var _pauseOnHover = _options.pauseOnHover;
		var _pauseClass = _options.pauseClass;
		var _autoRotation = _options.autoRotation;
		var _activeClass = _options.activeClass;
		var _disabledClass = _options.disabledClass;
		var _easing = _options.easing;
		var _duration = _options.duration;
		var _switchTime = _options.switchTime;
		var _controlEvent = _options.event;
		var _step = _options.step;
		var _vertical = _options.vertical;
		var _circleSlide = _options.circleSlide;
		var _stopAfterClick = _options.stopAfterClick;
		var _afterInit = _options.afterInit;
		var _splitCount = _options.splitCount;

		// gallery init
		if(!_slides.length) return;

		if(_splitCount) {
			var curStep = 0;
			var newSlide = $('<slide>').addClass('split-slide');
			_slides.each(function(){
				newSlide.append(this);
				curStep++;
				if(curStep > _splitCount-1) {
					curStep = 0;
					_slider.append(newSlide);
					newSlide = $('<slide>').addClass('split-slide');
				}
			});
			if(curStep) _slider.append(newSlide);
			_slides = _slider.children();
		}

		var _currentStep = 0;
		var _sumWidth = 0;
		var _sumHeight = 0;
		var _hover = false;
		var _stepWidth;
		var _stepHeight;
		var _stepCount;
		var _offset;
		var _timer;

		_slides.each(function(){
			_sumWidth+=jQuery(this).width();
			_sumHeight+=jQuery(this).height();
		});

		// calculate gallery offset
		function recalcOffsets() {
			if(_vertical) {
				if(_step) {
					_stepHeight = _slides.eq(_currentStep).height();
					_stepCount = Math.ceil((_sumHeight-_sliderHolder.height())/_stepHeight)+1;
					_offset = -_stepHeight*_currentStep;
				} else {
					_stepHeight = _sliderHolder.height();
					_stepCount = Math.ceil(_sumHeight/_stepHeight);
					_offset = -_stepHeight*_currentStep;
					if(_offset < _stepHeight-_sumHeight) _offset = _stepHeight-_sumHeight;
				}
			} else {
				if(_step) {
					_stepWidth = _slides.eq(_currentStep).width()*_step;
					_stepCount = Math.ceil((_sumWidth-_sliderHolder.width())/_stepWidth)+1;
					_offset = -_stepWidth*_currentStep;
					if(_offset < _sliderHolder.width()-_sumWidth) _offset = _sliderHolder.width()-_sumWidth;
				} else {
					_stepWidth = _sliderHolder.width();
					_stepCount = Math.ceil(_sumWidth/_stepWidth);
					_offset = -_stepWidth*_currentStep;
					if(_offset < _stepWidth-_sumWidth) _offset = _stepWidth-_sumWidth;
				}
			}
		}

		// gallery control
		if(_btnPrev.length) {
			_btnPrev.bind(_controlEvent,function(){
				if(_stopAfterClick) stopAutoSlide();
				prevSlide();
				return false;
			});
		}
		if(_btnNext.length) {
			_btnNext.bind(_controlEvent,function(){
				if(_stopAfterClick) stopAutoSlide();
				nextSlide();
				return false;
			});
		}
		if(_generatePagination.length) {
			_generatePagination.empty();
			recalcOffsets();
			var _list = $('<ul />');
			for(var i=0; i<_stepCount; i++) $('<li><a href="#">'+(i+1)+'</a></li>').appendTo(_list);
			_list.appendTo(_generatePagination);
			_pagerLinks = _list.children();
		}
		if(_pagerLinks.length) {
			_pagerLinks.each(function(_ind){
				jQuery(this).bind(_controlEvent,function(){
					if(_currentStep != _ind) {
						if(_stopAfterClick) stopAutoSlide();
						_currentStep = _ind;
						switchSlide();
					}
					return false;
				});
			});
		}

		// gallery animation
		function prevSlide() {
			recalcOffsets();
			if(_currentStep > 0) _currentStep--;
			else if(_circleSlide) _currentStep = _stepCount-1;
			switchSlide();
		}
		function nextSlide() {
			recalcOffsets();
			if(_currentStep < _stepCount-1) _currentStep++;
			else if(_circleSlide) _currentStep = 0;
			switchSlide();
		}
		function refreshStatus() {
			if(_pagerLinks.length) _pagerLinks.removeClass(_activeClass).eq(_currentStep).addClass(_activeClass);
			if(!_circleSlide) {
				_btnPrev.removeClass(_disabledClass);
				_btnNext.removeClass(_disabledClass);
				if(_currentStep == 0) _btnPrev.addClass(_disabledClass);
				if(_currentStep == _stepCount-1) _btnNext.addClass(_disabledClass);
			}
			if(_curNum.length) _curNum.text(_currentStep+1);
			if(_allNum.length) _allNum.text(_stepCount);
		}
		function switchSlide() {
			recalcOffsets();
			if(_vertical) _slider.animate({marginTop:_offset},{duration:_duration,queue:false,easing:_easing});
			else _slider.animate({marginLeft:_offset},{duration:_duration,queue:false,easing:_easing});
			refreshStatus();
			autoSlide();
		}

		// autoslide function
		function stopAutoSlide() {
			if(_timer) clearTimeout(_timer);
			_autoRotation = false;
		}
		function autoSlide() {
			if(!_autoRotation || _hover) return;
			if(_timer) clearTimeout(_timer);
			_timer = setTimeout(nextSlide,_switchTime+_duration);
		}
		if(_pauseOnHover) {
			_this.hover(function(){
				_hover = true;
				if(_timer) clearTimeout(_timer);
			},function(){
				_hover = false;
				autoSlide();
			});
		}
		recalcOffsets();
		refreshStatus();
		autoSlide();

		// pause buttton
		if(_pauseButton.length) {
			_pauseButton.click(function(){
				if(_this.hasClass(_pauseClass)) {
					_this.removeClass(_pauseClass);
					_autoRotation = true;
					autoSlide();
				} else {
					_this.addClass(_pauseClass);
					stopAutoSlide();
				}
				return false;
			});
		}

		if(_afterInit && typeof _afterInit === 'function') _afterInit(_this, _slides);
	});
}

// tabs
function initTabs() {
	var sets = document.getElementsByTagName("ul");
	for (var i = 0; i < sets.length; i++)
	{
		if (sets[i].className.indexOf("tabset") != -1)
		{
			var tabs = [];
			var links = sets[i].getElementsByTagName("a");
			for (var j = 0; j < links.length; j++)
			{
				if (links[j].className.indexOf("tab") != -1)
				{
					tabs.push(links[j]);
					links[j].tabs = tabs;
					var c = document.getElementById(links[j].href.substr(links[j].href.indexOf("#") + 1));

					if (c) if (links[j].className.indexOf("active") != -1) c.style.display = "block";
					else c.style.display = "none";

					links[j].onclick = function ()
					{
						var c = document.getElementById(this.href.substr(this.href.indexOf("#") + 1));
						if (c)
						{
							for (var i = 0; i < this.tabs.length; i++)
							{
								var tab = document.getElementById(this.tabs[i].href.substr(this.tabs[i].href.indexOf("#") + 1));
								if (tab)
								{
									tab.style.display = "none";
								}
								this.tabs[i].className = this.tabs[i].className.replace("active", "");
							}
							this.className += " active";
							c.style.display = "block";
							return false;
						}
					}
				}
			}
		}
	}
}

// mobile browsers detect
browserPlatform = {
	platforms: [
		{ uaString:['BlackBerry','midp'], cssFile:'blackberry.css' }, // Blackberry <5
		{ uaString:['symbian','midp'], cssFile:'symbian.css' }, // Symbian phones
		{ uaString:['opera','mobi'], cssFile:'opera.css' }, // Opera Mobile
		{ uaString:['msie','ppc'], cssFile:'ieppc.css' }, // IE Mobile <6
		{ uaString:'iemobile', cssFile:'iemobile.css' }, // IE Mobile 6+
		{ uaString:'webos', cssFile:'webos.css' }, // Palm WebOS
		{ uaString:'Android', cssFile:'android.css' }, // Android
		{ uaString:['BlackBerry','6.0','mobi'], cssFile:'blackberry6.0.css' },	// Blackberry 6+
		{ uaString:'ipad', cssFile:'ipad.css', miscHead:'<meta name="viewport" content="width=device-width" />' }, // iPad
		{ uaString:['safari','mobi'], cssFile:'safari.css', miscHead:'<meta name="viewport" content="width=device-width" />' } // iPhone and other webkit browsers
	],
	options: {
		cssPath:'css/',
		mobileCSS:'allmobile.css'
	},
	init:function(){
		this.checkMobile();
		this.parsePlatforms();
		return this;
	},
	checkMobile: function() {
		if(this.uaMatch('mobi') || this.uaMatch('midp') || this.uaMatch('ppc') || this.uaMatch('webos')) {
			this.attachStyles({cssFile:this.options.mobileCSS});
		}
	},
	parsePlatforms: function() {
		for(var i = 0; i < this.platforms.length; i++) {
			if(typeof this.platforms[i].uaString === 'string') {
				if(this.uaMatch(this.platforms[i].uaString)) {
					this.attachStyles(this.platforms[i]);
					break;
				}
			} else {
				for(var j = 0, allMatch = true; j < this.platforms[i].uaString.length; j++) {
					if(!this.uaMatch(this.platforms[i].uaString[j])) {
						allMatch = false;
					}
				}
				if(allMatch) {
					this.attachStyles(this.platforms[i]);
					break;
				}
			}
		}
	},
	attachStyles: function(platform) {
		var head = document.getElementsByTagName('head')[0], fragment;
		var cssText = '<link rel="stylesheet" href="' + this.options.cssPath + platform.cssFile + '" type="text/css"/>';
		var miscText = platform.miscHead;
		if(platform.cssFile) {
			if(document.body) {
				fragment = document.createElement('div');
				fragment.innerHTML = cssText;
				head.appendChild(fragment.childNodes[0]);
			} else {
				document.write(cssText);
			}
		}
		if(platform.miscHead) {
			if(document.body) {
				fragment = document.createElement('div');
				fragment.innerHTML = miscText;
				head.appendChild(fragment.childNodes[0]);
			} else {
				document.write(miscText);
			}
		}
	},
	uaMatch:function(str) {
		if(!this.ua) {
			this.ua = navigator.userAgent.toLowerCase();
		}
		return this.ua.indexOf(str.toLowerCase()) != -1;
	}
}.init();

//ie png fix
var transparentImage = "images/none.gif";

function fixTrans() {
	if (typeof document.body.style.maxHeight == 'undefined') {
	var imgs = document.getElementsByTagName("img");
	for (i = 0; i < imgs.length; i++) {
		if (imgs[i].src.indexOf(transparentImage) != -1) {
			return;
		}
		if (imgs[i].src.indexOf(".png") != -1) {
				var src = imgs[i].src;
				imgs[i].src = transparentImage;
				imgs[i].runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "',sizingMethod='scale')";
				imgs[i].style.display = "inline-block";
			}
		}
	}
}

if (document.all && !window.opera)
	attachEvent("onload", fixTrans);

// custom forms
var _selectHeight = 23;

var inputs = new Array();
var selects = new Array();
var labels = new Array();
var radios = new Array();
var radioLabels = new Array();
var checkboxes = new Array();
var checkboxLabels = new Array();
var buttons = new Array();
var selects = new Array();
var all_selects = false;
var active_select = null;
var selectText = "please select";

function is_mac() {
	if (navigator.appVersion.indexOf("Safari") != -1)
	{
		if(!window.getComputedStyle)
		{
			return true;
		}
	}
	
	return false;
}

function initCustomForms() {
	if(!document.getElementById) {return false;}
	getElements();
	separateElements();
	replaceRadios();
	replaceCheckboxes();
	replaceSelects();

	var _selects = document.getElementsByTagName('select');
	var _SelctClassName = [];
	if (_selects) {
		for (var i = 0; i < _selects.length; i++) {
			if (_selects[i].className != '' && _selects[i].className != 'outtaHere')
				_SelctClassName[i] = ' drop-'+_selects[i].className;
		}
		for (var i = 0; i < _SelctClassName.length; i++) {
			var _selectDrop = document.getElementById('optionsDiv'+i);
			if (_selectDrop) {
				if (_SelctClassName[i]) 
					_selectDrop.className += _SelctClassName[i];
			}
		}
	}
}


// getting all the required elements
function getElements() {
	var _frms = document.getElementsByTagName("form");
	for (var nf = 0; nf < _frms.length; nf++) {
		if(_frms[nf].className.indexOf("default") == -1) {
			var a = document.forms[nf].getElementsByTagName("input");
			for(var nfi = 0; nfi < a.length; nfi++) {
				inputs.push(a[nfi]);
			}
			var b = document.forms[nf].getElementsByTagName("label");
			for(var nfl = 0; nfl < b.length; nfl++) {
				labels.push(b[nfl]);
			}
			var c = document.forms[nf].getElementsByTagName("select");
			for(var nfs = 0; nfs < c.length; nfs++) {
				selects.push(c[nfs]);
			}
		}
	}
}

// separating all the elements in their respective arrays
function separateElements() {
	var r = 0; var c = 0; var t = 0; var rl = 0; var cl = 0; var tl = 0; var b = 0;
	for (var q = 0; q < inputs.length; q++) {
		if(inputs[q].type == "radio") {
			radios[r] = inputs[q]; ++r;
			for(var w = 0; w < labels.length; w++) {
				if((inputs[q].id) && labels[w].htmlFor == inputs[q].id)
				{
					radioLabels[rl] = labels[w];
				}
			}
			++rl;
		}
		if(inputs[q].type == "checkbox") {
			checkboxes[c] = inputs[q]; ++c;
			for(var w = 0; w < labels.length; w++) {
				if((inputs[q].id) && (labels[w].htmlFor == inputs[q].id))
				{
					checkboxLabels[cl] = labels[w];
				}
			}
			++cl;
		}
		if((inputs[q].type == "submit") || (inputs[q].type == "button")) {
			buttons[b] = inputs[q]; ++b;
		}
	}
}

//replacing radio buttons
function replaceRadios() {
	for (var q = 0; q < radios.length; q++) {
		radios[q].className += " outtaHere";
		var radioArea = document.createElement("div");
		if(radios[q].checked) {
			radioArea.className = "radioAreaChecked";
			if (radioLabels[q])
			{
				radioLabels[q].className += "radioAreaCheckedLabel"
			}
			
		}
		else
		{
			radioArea.className = "radioArea";
		}
		radioArea.id = "myRadio" + q;
		radios[q].parentNode.insertBefore(radioArea, radios[q]);
		radios[q]._ra = radioArea;

		radioArea.onclick = new Function('rechangeRadios('+q+')');
		if (radioLabels[q])
		{
			radioLabels[q].onclick = new Function('rechangeRadios('+q+')');
		}
	}
	return true;
}

//checking radios
function checkRadios(who) {
	var what = radios[who]._ra;
	for(var q = 0; q < radios.length; q++) {
		if((radios[q]._ra.className == "radioAreaChecked")&&(radios[q]._ra.nextSibling.name == radios[who].name))
		{
			radios[q]._ra.className = "radioArea";
			if (radioLabels[q])
			{
				radioLabels[q].className = radioLabels[q].className.replace("radioAreaCheckedLabel", "");
			}
		}
	}
	what.className = "radioAreaChecked";
	if(radioLabels[who])
		radioLabels[who].className += " radioAreaCheckedLabel";
}

//changing radios
function changeRadios(who) {
	if(radios[who].checked) {
		for(var q = 0; q < radios.length; q++) {
			if(radios[q].name == radios[who].name) {
				radios[q].checked = false;
			} 
			radios[who].checked = true; 
			checkRadios(who);
		}
	}
}

//rechanging radios
function rechangeRadios(who) {
	if(!radios[who].checked) {
		for(var q = 0; q < radios.length; q++) {
			if(radios[q].name == radios[who].name)	{
				radios[q].checked = false; 
			}
			radios[who].checked = true; 
			checkRadios(who);
		}
	}
}

//replacing checkboxes
function replaceCheckboxes() {
	for (var q = 0; q < checkboxes.length; q++) {
		checkboxes[q].className += " outtaHere";
		var checkboxArea = document.createElement("div");
		if(checkboxes[q].checked) {
			checkboxArea.className = "checkboxAreaChecked";
			if(checkboxLabels[q])
				checkboxLabels[q].className += "checkboxAreaCheckedLabel"
		}
		else {
			checkboxArea.className = "checkboxArea";
		}
		checkboxArea.id = "myCheckbox" + q;
		checkboxes[q].parentNode.insertBefore(checkboxArea, checkboxes[q]);
		checkboxes[q]._ca = checkboxArea;
		checkboxArea.onclick = checkboxArea.onclick2 = new Function('rechangeCheckboxes('+q+')');
		if (checkboxLabels[q])
		{
			checkboxLabels[q].onclick = new Function('changeCheckboxes('+q+')');
		}
		
		checkboxes[q].onkeydown = checkEvent;
	}
	return true;
}

//checking checkboxes
function checkCheckboxes(who, action) {
	var what = checkboxes[who]._ca;
	if(action == true) {
		what.className = "checkboxAreaChecked";
		what.checked = true;
		if(checkboxLabels[who])
			checkboxLabels[who].className += " checkboxAreaCheckedLabel";
	}
	if(action == false) {
		what.className = "checkboxArea";
		what.checked = false;
		if(checkboxLabels[who])
			checkboxLabels[who].className = checkboxLabels[who].className.replace("checkboxAreaCheckedLabel", "");
	}
}

//changing checkboxes
function changeCheckboxes(who) {
	if(checkboxes[who].checked) {
		checkCheckboxes(who, false);
	}
	else {
		checkCheckboxes(who, true);
	} 
}

//rechanging checkboxes
function rechangeCheckboxes(who) {
	var tester = false;
	if(checkboxes[who].checked == true) {
		tester = false;
	}
	else {
		tester = true;
	}
	checkboxes[who].checked = tester;
	checkCheckboxes(who, tester);
}

//check event
function checkEvent(e) {
	if (!e) var e = window.event;
	if(e.keyCode == 32) {for (var q = 0; q < checkboxes.length; q++) {if(this == checkboxes[q]) {changeCheckboxes(q);}}} //check if space is pressed
}


function replaceSelects() {
	for(var q = 0; q < selects.length; q++) {
	if (!selects[q].replaced && selects[q].offsetWidth && selects[q].className.indexOf("default") == -1)
	{
		selects[q]._number = q;
		//create and build div structure
		var selectArea = document.createElement("div");
		var left = document.createElement("span");
		left.className = "left";
		selectArea.appendChild(left);
		
		var disabled = document.createElement("span");
		disabled.className = "disabled";
		selectArea.appendChild(disabled);
		
		selects[q]._disabled = disabled;
		var center = document.createElement("span");
		var button = document.createElement("a");
		var text = document.createTextNode(selectText);
		center.id = "mySelectText"+q;
		
		var stWidth = selects[q].offsetWidth;
		selectArea.style.width = stWidth + "px";
		if (selects[q].parentNode.className.indexOf("type2") != -1){
			button.href = "javascript:showOptions("+q+",true)";
		} else {
			button.href = "javascript:showOptions("+q+",false)";
		}
		button.className = "selectButton";
		selectArea.className = "selectArea";

		selectArea.className += " " + selects[q].className;
		selectArea.id = "sarea"+q;
		center.className = "center";
		center.appendChild(text);
		selectArea.appendChild(center);
		selectArea.appendChild(button);
		
		//hide the select field
		selects[q].className += " outtaHere";
		//insert select div
		selects[q].parentNode.insertBefore(selectArea, selects[q]);
		//build & place options div

		var optionsDiv = document.createElement("div");
		var optionsListParent = document.createElement("div");
		optionsListParent.className = "select-center";
		var optionsListParent2 = document.createElement("div");
		optionsListParent2.className = "select-center-right";
		var optionsList = document.createElement("ul");
		optionsDiv.innerHTML += "<div class='select-top'><div class='select-top-left'></div><div class='select-top-right'></div></div>";
		optionsListParent.appendChild(optionsListParent2);
		optionsListParent.appendChild(optionsList);
		optionsDiv.appendChild(optionsListParent);
		
		selects[q]._options = optionsList;
		
		optionsDiv.style.width = stWidth + "px";
		optionsDiv._parent = selectArea;
		
		optionsDiv.className = "optionsDivInvisible";
		optionsDiv.id = "optionsDiv"+q;
		
	
		populateSelectOptions(selects[q]);
		optionsDiv.innerHTML += "<div class='select-bottom'><div class='select-bottom-left'></div><div class='select-bottom-right'></div></div>";
		document.getElementsByTagName("body")[0].appendChild(optionsDiv);
		selects[q].replaced = true;
		}
	all_selects = true;
	}
}

//collecting select options
function populateSelectOptions(me) {
	me._options.innerHTML = "";
	
	for(var w = 0; w < me.options.length; w++) {
		if(me.options[w].title.indexOf("title") == -1) {
			var optionHolder = document.createElement('li');
			var optionLink = document.createElement('a');
			var optionTxt;
			if (me.options[w].title.indexOf('image') != -1) {
				optionTxt = document.createElement('img');
				optionSpan = document.createElement('span');
				optionTxt.src = me.options[w].title;
				optionSpan = document.createTextNode(me.options[w].text);
			} else {
				optionTxt = document.createTextNode(me.options[w].text);
			}
			
			optionLink.href = "javascript:showOptions("+me._number+"); selectMe('"+me.id+"',"+w+","+me._number+");";
			if (me.options[w].title.indexOf('image') != -1) {
				optionLink.appendChild(optionTxt);
				optionLink.appendChild(optionSpan);
			} else {
				optionLink.appendChild(optionTxt);
			}
			optionHolder.appendChild(optionLink);
			me._options.appendChild(optionHolder);
			//check for pre-selected items
			if(me.options[w].selected) {
				selectMe(me.id,w,me._number);
			}
		}
		else if(me.options[w].selected)
			selectMe(me.id,w,me._number);
	}
	if (me.disabled) {
		me._disabled.style.display = "block";
	}
	else {
		me._disabled.style.display = "none";
	}
}

//selecting me
function selectMe(selectFieldId,linkNo,selectNo) {
	selectField = selects[selectNo];
	for(var k = 0; k < selectField.options.length; k++) {
		if(k==linkNo) {
			selectField.options[k].selected = true;
		}
		else {
			selectField.options[k].selected = false;
		}
	}
	
	//show selected option
	textVar = document.getElementById("mySelectText"+selectNo);
	var newText;
	var optionSpan;
	if (selectField.options[linkNo].title.indexOf('image') != -1) {
		newText = document.createElement('img');
		newText.src = selectField.options[linkNo].title;
		optionSpan = document.createElement('span');
		optionSpan = document.createTextNode(selectField.options[linkNo].text);
	} else {
		newText = document.createTextNode(selectField.options[linkNo].text);
	}
	if (selectField.options[linkNo].title.indexOf('image') != -1) {
		if (textVar.childNodes.length > 1) textVar.removeChild(textVar.childNodes[0]);
		textVar.replaceChild(newText, textVar.childNodes[0]);	
		textVar.appendChild(optionSpan);	
	} else {
		if (textVar.childNodes.length > 1) textVar.removeChild(textVar.childNodes[0]);
		textVar.replaceChild(newText, textVar.childNodes[0]);	
	}
	if (selectField.onchange && all_selects)
		{
			eval(selectField.onchange());
		}
}
//showing options
function showOptions(g) {
		_elem = document.getElementById("optionsDiv"+g);
		var divArea = document.getElementById("sarea"+g);
		if (active_select && active_select != _elem) {
			active_select.className = active_select.className.replace('optionsDivVisible','optionsDivInvisible');
			active_select.style.height = "auto";
			_active.className = _active.className.replace('selectAreaActive','');
		}
		if(_elem.className.indexOf("optionsDivInvisible") != -1) {
			_elem.style.left = "-9999px";
			_elem.style.top = findPosY(divArea) + _selectHeight + 'px';
			_elem.className = _elem.className.replace('optionsDivInvisible','');
			_elem.className += " optionsDivVisible";
			/*if (_elem.offsetHeight > 200)
			{
				_elem.style.height = "200px";
			}*/
			_elem.style.left = findPosX(divArea) + 'px';
			divArea.className += ' selectAreaActive';
			_active = divArea;
			
			active_select = _elem;
			if(document.documentElement)
			{
				document.documentElement.onclick = hideSelectOptions;
			}
			else
			{
				window.onclick = hideSelectOptions;
			}
		}
		else if(_elem.className.indexOf("optionsDivVisible") != -1) {
			_elem.style.height = "auto";
			_elem.className = _elem.className.replace('optionsDivVisible','');
			_elem.className += " optionsDivInvisible";
			divArea.className = divArea.className.replace('selectAreaActive','');
		}
		
		// for mouseout
		/*_elem.timer = false;
		_elem.onmouseover = function() {
			if (this.timer) clearTimeout(this.timer);
		}
		_elem.onmouseout = function() {
			var _this = this;
			this.timer = setTimeout(function(){
				_this.style.height = "auto";
				_this.className = _this.className.replace('optionsDivVisible','');
				if (_elem.className.indexOf('optionsDivInvisible') == -1)
					_this.className += " optionsDivInvisible";
			},200);
		}*/
}
_active = false;
function hideSelectOptions(e)
{
	if(active_select)
	{
		if(!e) e = window.event;
		var _target = (e.target || e.srcElement);
		if(isElementBefore(_target,'selectArea') == 0 && isElementBefore(_target,'optionsDiv') == 0)
		{
			active_select.className = active_select.className.replace('optionsDivVisible', '');
			active_select.className = active_select.className.replace('optionsDivInvisible', '');
			active_select.className += " optionsDivInvisible";
			_active.className = _active.className.replace('selectAreaActive','');
			active_select = false;

			if(document.documentElement)
			{
				document.documentElement.onclick = function(){};
			}
			else
			{
				window.onclick = null;
			}
		}
	}
}

function isElementBefore(_el,_class)
{
	var _parent = _el;	
	do
	{
		_parent = _parent.parentNode;
	}
	while(_parent && _parent.className != null && _parent.className.indexOf(_class) == -1)
	
	if(_parent.className && _parent.className.indexOf(_class) != -1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
	
}

function findPosY(obj) {
	var posTop = 0;
	while (obj.offsetParent) {posTop += obj.offsetTop; obj = obj.offsetParent;}
	return posTop;
}
function findPosX(obj) {
	var posLeft = 0;
	while (obj.offsetParent) {posLeft += obj.offsetLeft; obj = obj.offsetParent;}
	return posLeft;
}




/* IE6 Hover fix module */
var ieHover={lazyMode:true,init:function(){this.setDefaults();return this},setDefaults:function(){this.fixActive=/MSIE 6/.test(navigator.userAgent);if(this.fixActive){this.hoverEvents=[];this.hoverQueue=[];this.activators={onhover:{on:"onmouseenter",off:"onmouseleave"},onactive:{on:"onmousedown",off:"onmouseup"}};window.attachEvent("onload",this.bind(this.domReady,this));window.attachEvent("onunload",this.bind(this.unhookHoverEvents,this))}},domReady:function(){this.pageReady=true;if(this.lazyMode){this.processStylesheets()}if(this.hoverQueue.length){for(var a=0;a<this.hoverQueue.length;a++){this.doFix(this.hoverQueue[a].s,this.hoverQueue[a].c)}}},processStylesheets:function(){var c=document.styleSheets,a=c.length;for(var b=0;b<a;b++){this.parseStylesheet(c[b])}},parseStylesheet:function(f){if(f.imports){try{var b=f.imports,a=b.length;for(var d=0;d<a;d++){this.parseStylesheet(f.imports[d])}}catch(g){}}try{var h=(this.currentSheet=f).rules,a=h.length;for(var c=0;c<a;c++){this.parseCSSRule(h[c])}}catch(g){}},parseCSSRule:function(f){var g=f.selectorText,b=f.style.cssText;if(!/(^|\s)(([^a]([^ ]+)?)|(a([^#.][^ ]+)+)):(hover|active)/i.test(g)||!b){return}var h=g.replace(/[^:]+:([a-z-]+).*/i,"on$1");var j=g.replace(/(\.([a-z0-9_-]+):[a-z]+)|(:[a-z]+)/gi,".$2"+h);var e=(/\.([a-z0-9_-]*on(hover|active))/i).exec(j)[1];var c=g.replace(/:(hover|active).*$/,"");var a=this.parseSelector(c);if(!a.length){return}this.currentSheet.addRule(j,b);for(var d=0;d<a.length;d++){this.addHoverElement(a[d],e,this.activators[h])}},fix:function(a,b){if(this.fixActive){if(this.pageReady){this.doFix(a,b)}else{this.hoverQueue.push({s:a,c:b})}}},doFix:function(a,c){if(this.fixActive&&typeof a==="string"){var d=this.parseSelector(a);for(var b=0;b<d.length;b++){this.addHoverElement(d[b],c||"hover",this.activators.onhover)}}},addHoverElement:function(c,b,a){if(!c.hovers){c.hovers={}}if(c.hovers[b]){return}c.hovers[b]=true;this.hookHoverEvent(c,a.on,function(){c.className+=" "+b});this.hookHoverEvent(c,a.off,function(){c.className=c.className.replace(new RegExp("\\s+"+b,"g"),"")})},hookHoverEvent:function(c,b,a){c.attachEvent(b,a);this.hoverEvents[this.hoverEvents.length]={node:c,type:b,handler:a}},unhookHoverEvents:function(){for(var b,a=0;a<this.hoverEvents.length;a++){b=this.hoverEvents[a];b.node.detachEvent(b.type,b.handler)}},parseSelector:(function(){var d=/^([^#.>`]*)(#|\.|\>|\`)(.+)$/;function e(g,f){var k=g.split(/\s*\,\s*/);var j=[];for(var h=0;h<k.length;h++){j=j.concat(b(k[h],f))}return j}function b(r,p,n){r=r.replace(" ","`");var m=r.match(d);var l,o,g,q,j,h;var k=[];if(m==null){m=[r,r]}if(m[1]==""){m[1]="*"}if(n==null){n="`"}if(p==null){p=document}switch(m[2]){case"#":q=m[3].match(d);if(q==null){q=[null,m[3]]}l=document.getElementById(q[1]);if(l==null||(m[1]!="*"&&!a(l,m[1]))){return k}if(q.length==2){k.push(l);return k}return b(q[3],l,q[2]);case".":if(n!=">"){o=c(p,m[1])}else{o=p.childNodes}for(j=0,h=o.length;j<h;j++){l=o[j];if(l.nodeType!=1){continue}q=m[3].match(d);if(q!=null){if(l.className==null||l.className.match("(\\s|^)"+q[1]+"(\\s|$)")==null){continue}g=b(q[3],l,q[2]);k=k.concat(g)}else{if(l.className!=null&&l.className.match("(\\s|^)"+m[3]+"(\\s|$)")!=null){k.push(l)}}}return k;case">":if(n!=">"){o=c(p,m[1])}else{o=p.childNodes}for(j=0,h=o.length;j<h;j++){l=o[j];if(l.nodeType!=1){continue}if(!a(l,m[1])){continue}g=b(m[3],l,">");k=k.concat(g)}return k;case"`":o=c(p,m[1]);for(j=0,h=o.length;j<h;j++){l=o[j];g=b(m[3],l,"`");k=k.concat(g)}return k;default:if(n!=">"){o=c(p,m[1])}else{o=p.childNodes}for(j=0,h=o.length;j<h;j++){l=o[j];if(l.nodeType!=1){continue}if(!a(l,m[1])){continue}k.push(l)}return k}}function c(g,f){if(f=="*"&&g.all!=null){return g.all}return g.getElementsByTagName(f)}function a(g,f){if(f=="*"){return true}return g.nodeName.toLowerCase().replace("html:","")==f.toLowerCase()}return e}()),bind:function(c,b,a){return function(){return c.apply(b,a||arguments)}}}.init();


/* dropdown for mobiles */
function initNavFix() {
	new touchNav({
		navBlock: 'nav'
	});
}

if (window.addEventListener) window.addEventListener("load", initNavFix, false);
else if (window.attachEvent) window.attachEvent("onload", initNavFix);

// navigation accesibility module
function touchNav(options) {
	this.options = {
		mobileReg: /(ipad|iphone|ipod|android|blackberry|iemobile)/gi,
		hoverClass: 'hover',
		followLink: false,
		menuItems: 'li',
		menuOpener: 'a',
		menuDrop: 'div',
		navBlock: null
	}
	for(var p in options) {
		this.options[p] = options[p];
	}
	this.init();
}
touchNav.prototype = {
	init: function() {
		this.isMobile = (this.options.mobileReg).test(navigator.userAgent);
		if(typeof this.options.navBlock === 'string') {
			this.menu = document.getElementById(this.options.navBlock);
		} else if(typeof this.options.navBlock === 'object') {
			this.menu = this.options.navBlock;
		}
		if(this.menu) {
			this.getElements();
			this.addEvents();
		}
	},
	getElements: function() {
		this.menuItems = this.menu.getElementsByTagName(this.options.menuItems);
	},
	hideActiveDropdown: function() {
		if(this.activeParent) {
			for(var i = 0; i < this.menuItems.length; i++) {
				this.removeClass(this.menuItems[i], this.options.hoverClass);
			}
			this.activeParent = null;
		}
	},
	getOpener: function(obj) {
		for(var i = 0; i < obj.childNodes.length; i++) {
			if(obj.childNodes[i].tagName && obj.childNodes[i].tagName.toLowerCase() == this.options.menuOpener.toLowerCase()) {
				return obj.childNodes[i];
			}
		}
		return false;
	},
	getDrop: function(obj) {
		for(var i = 0; i < obj.childNodes.length; i++) {
			if(obj.childNodes[i].tagName && obj.childNodes[i].tagName.toLowerCase() == this.options.menuDrop.toLowerCase()) {
				return obj.childNodes[i];
			}
		}
		return false;
	},
	addEvents: function() {
		// mobile event handlers
		if(this.isMobile) {
			for(var i = 0; i < this.menuItems.length; i++) {
				this.menuItems[i].touchNav = this;
				if(this.getDrop(this.menuItems[i])) {
					this.addHandler(this.getOpener(this.menuItems[i]), 'click', this.bind(this.clickHandler,this.menuItems[i]));
				}
			}
			this.addHandler(document.body, 'click', this.bind(this.outsideHandler, this));
			this.addHandler(document.body, 'touchstart', this.bind(this.outsideHandler, this));
		}
		// desktop event handlers
		else {
			for(var i = 0; i < this.menuItems.length; i++) {
				this.menuItems[i].touchNav = this;
				this.addHandler(this.menuItems[i], 'mouseover', this.mouseoverHandler);
				this.addHandler(this.menuItems[i], 'mouseout', this.mouseoutHandler);
			}
		}
	},
	outsideHandler: function(e) {
		var childFlag = false;
		if(this.activeParent) {
			this.outsideTarget = e.target || e.currentTarget || e.srcElement;
			while (this.outsideTarget.parentNode) {
				if(this.activeParent == this.outsideTarget) {
					childFlag = true;
					break;
				}
				this.outsideTarget = this.outsideTarget.parentNode;
			}
			if(!childFlag) {
				this.hideActiveDropdown();
			}
		}
	},
	mouseoverHandler: function() {
		this.touchNav.addClass(this, this.touchNav.options.hoverClass);
	},
	mouseoutHandler: function() {
		this.touchNav.removeClass(this, this.touchNav.options.hoverClass);
	},
	clickHandler: function(e) {
		// get current dropdown
		var tNav = this.touchNav;
		tNav.currentElement = e.currentTarget || e.srcElement;
		tNav.currentParent = tNav.currentElement.parentNode;

		// hide previous drop (if exists)
		if(tNav.activeParent && !tNav.isParent(tNav.activeParent, tNav.currentParent) && tNav.currentParent != tNav.activeParent) {
			tNav.hideActiveDropdown();
		}

		// handle current drop
		if(tNav.hasClass(tNav.currentParent, tNav.options.hoverClass)) {
			tNav.removeClass(tNav.currentParent, tNav.options.hoverClass);
			if(tNav.options.followLink) {
				window.location.href = tNav.currentElement.href;
			}
		} else {
			tNav.addClass(tNav.currentParent, tNav.options.hoverClass);
			tNav.activeParent = tNav.currentParent;
			return tNav.preventEvent(e);
		}
	},
	preventEvent: function(e) {
		if(!e) e = window.event;
		if(e.preventDefault) e.preventDefault();
		if(e.stopPropagation) e.stopPropagation();
		e.cancelBubble = true;
		return false;
	},
	isParent: function(parent, child) {
		while(child.parentNode) {
			if(child.parentNode == parent) {
				return true;
			}
			child = child.parentNode;
		}
		return false;
	},
	addHandler: function(object, event, handler) {
		if (typeof object.addEventListener != 'undefined') object.addEventListener(event, this.bind(handler,object), false);
		else if (typeof object.attachEvent != 'undefined') object.attachEvent('on' + event, this.bind(handler,object));
	},
	removeHandler: function(object, event, handler) {
		if (typeof object.removeEventListener != 'undefined') object.removeEventListener(event, handler, false);
		else if (typeof object.detachEvent != 'undefined') object.detachEvent('on' + event, handler);
	},
	hasClass: function(obj,cname) {
		return (obj.className ? obj.className.match(new RegExp('(\\s|^)'+cname+'(\\s|$)')) : false);
	},
	addClass: function(obj,cname) {
		if (!this.hasClass(obj,cname)) obj.className += " "+cname;
	},
	removeClass: function(obj,cname) {
		if (this.hasClass(obj,cname)) obj.className=obj.className.replace(new RegExp('(\\s|^)'+cname+'(\\s|$)'),' ');
	},
	bind: function(func, scope){
		return function() {
			return func.apply(scope, arguments);
		}
	}
}



//Browser Support Code for ajax start

function ajaxFunction(divid,url)
{
	
        var ajaxRequest;  // The variable that makes Ajax possible!
	try
	{	// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{	// Internet Explorer Browsers
		try
		{	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{	try
			{	
			 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{	// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	
	//Sending the querystring to server
	ajaxRequest.open("GET",url, true);
	ajaxRequest.send(null);
	
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
	{	if(ajaxRequest.readyState == 4)
		{	
		 	if (ajaxRequest.status == 200) 
			{						
				var ajaxDisplay = document.getElementById(divid);
				//alert(ajaxRequest.responseText);
				ajaxDisplay.innerHTML = ajaxRequest.responseText;						
			} 
			else 
			{
				alert("There is a problem in using XMLHTTP object:\n" + ajaxRequest.statusText);
			}
		}
	}


}
//Browser Support Code for ajax end



