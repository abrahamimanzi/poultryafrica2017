
//  var $type = $('#document_type'), $id = $('#document_id');
//    $type.change(function () {
//        if ($type.val() == 'No ID Card') {
//            $id.attr('disabled', 'disabled');
//        } else {
//            $id.removeAttr('disabled').val('');
//        }
//    }).trigger('change');

$("#document_type").change(function(){
    if($("#document_type").val() == 'No ID Card'){
       $("#document_id").val($(this).val());
       $("#document_id").attr('placeholder', '');
    }else{
        $("#document_id").val($(!this).val());
         $("#document_id").attr('placeholder', 'Document Number');
    }

}); 


// Word counting function 
    
$(document).ready(function() {
    $('#business_tweet').on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 50) {
            // Split the string on first 30 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 50).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count').text(words);
            $('#word_left').text(50-words);
        }
    });
 });

//     Another line
$(document).ready(function() {
    $('#business_impact').on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 50) {
            // Split the string on first 30 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 50).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count1').text(words);
            $('#word_left1').text(50-words);
        }
    });
 });
//  Another line
$(document).ready(function() {
    $('#business_products').on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 200) {
            // Split the string on first 30 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 200).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count2').text(words);
            $('#word_left2').text(200-words);
        }
    });
 });
//  Another line
$(document).ready(function() {
    $('#business_client').on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 50) {
            // Split the string on first 30 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 50).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count3').text(words);
            $('#word_left3').text(50-words);
        }
    });
 });

//	Count the words

//Line 1
$("#business_tweet").focusin(function() {
    $(".words").show();
}).focusout(function () {
    $(".words").hide();
});
//Line 2
$("#business_impact").focusin(function() {
    $(".words1").show();
}).focusout(function () {
    $(".words1").hide();
});
//Line 3
$("#business_products").focusin(function() {
    $(".words2").show();
}).focusout(function () {
    $(".words2").hide();
});
//Line 4
$("#business_client").focusin(function() {
    $(".words3").show();
}).focusout(function () {
    $(".words3").hide();
});
