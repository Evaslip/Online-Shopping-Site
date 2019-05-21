$('input').keyup(function(event){
    
    if ($(this).val() == '') {
        $(this).css('border', '2px solid red');
        
    }
    else {
        $(this).css('border', '2px solid  grey');
    }

})

