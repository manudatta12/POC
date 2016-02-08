	

jQuery(function() {



    var options = {
        range: true,
        min: 15000,
        max: 160000,
        step:1000,
        values: [25000,80000],
        slide: function(event, ui) {
            var min = ui.values[0],
                max = ui.values[1];
            jQuery("#amount").val("Min Rs." + min + " - Max Rs." + max);          
            jQuery('input[name="step2[spendmin]"]').val(min);
            jQuery('input[name="step2[spendmax]"]').val(max);
        }
    }, min, max;
    jQuery("#slider-range").slider(options);
    min = jQuery("#slider-range").slider("values", 0);
    max = jQuery("#slider-range").slider("values", 1);
    jQuery('input[name="step2[spendmin]"]').val(min);
    jQuery('input[name="step2[spendmax]"]').val(max);
   // alert (min);
    jQuery("#amount").val("Min Rs." + min + " - Max Rs." + max);
    

   
});
