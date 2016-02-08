	

jQuery(function() {
	

    var options1 = {
        range: "max",
        min: 0,
        max: 9,
      
        value: 0,
        slide: function(event, ui) {
            var min = ui.value;   
            jQuery('input[name="step1[p1]"]').val(min);
                       
        }
    }, min, max;
    
    var options2 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p2]"]').val(min);
                           
            }
        }, min, max;
    
    var options3 = {
            range: "max",
            min: 0,
            max: 10,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p3]"]').val(min);
                           
            }
        }, min, max;
    
    var options4 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p4]"]').val(min);
                           
            }
        }, min, max;
    
    var options5 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p5]"]').val(min);
                           
            }
        }, min, max;
    
    var options6 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p6]"]').val(min);
                           
            }
        }, min, max;
    
    var options7 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p7]"]').val(min);
                           
            }
        }, min, max;
    
    var options8 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p8]"]').val(min);
                           
            }
        }, min, max;
    
    var options9 = {
            range: "max",
            min: 0,
            max: 9,
          
            value: 0,
            slide: function(event, ui) {
                var min = ui.value;   
                jQuery('input[name="step1[p9]"]').val(min);
                           
            }
        }, min, max;
    jQuery("#slider-range1").slider(options1);
    jQuery("#slider-range2").slider(options2);
    jQuery("#slider-range3").slider(options3);
    jQuery("#slider-range4").slider(options4);
    jQuery("#slider-range5").slider(options5);
    jQuery("#slider-range6").slider(options6);
    jQuery("#slider-range7").slider(options7);
    jQuery("#slider-range8").slider(options8);
    jQuery("#slider-range9").slider(options9);
    
    min1 = jQuery("#slider-range1").slider("value");
    jQuery('input[name="step1[p1]"]').val(min1);
    
    min2 = jQuery("#slider-range2").slider("value");
    jQuery('input[name="step1[p2]"]').val(min2);
    
    min3 = jQuery("#slider-range3").slider("value");
    jQuery('input[name="step1[p3]"]').val(min3);
    
    min4 = jQuery("#slider-range4").slider("value");
    jQuery('input[name="step1[p4]"]').val(min4);
    
    min5 = jQuery("#slider-range5").slider("value");
    jQuery('input[name="step1[p5]"]').val(min5);
    
    min6 = jQuery("#slider-range6").slider("value");
    jQuery('input[name="step1[p6]"]').val(min6);
    
    min7 = jQuery("#slider-range7").slider("value");
    jQuery('input[name="step1[p7]"]').val(min7);
    
    min8 = jQuery("#slider-range8").slider("value");
    jQuery('input[name="step1[p8]"]').val(min8);
    
    min9 = jQuery("#slider-range9").slider("value");
    jQuery('input[name="step1[p9]"]').val(min9);
  
});
