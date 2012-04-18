jQuery(document).ready(function(){
     	
});



/**
 * Function to generate preview in search results
 */
(function ($) {
      
    Drupal.behaviors.runmemo = { 

      attach: function (context,settings) {  

        $('#block-system-main table.views-view-grid td').each(function(){
          var markup = $(this).html();

          if ($(this).has("div").length == 0) {
                  $(this).css("border", "none");
          }

        });
        if ($('.page-search-result #block-system-main table.views-view-grid').length == 1) { 
          var initial_img = $('#block-system-main table.views-view-grid tr.row-first td.col-first img').attr('src');
          //for highlight the thumbnail image related to the preview image
          $('#block-system-main table.views-view-grid tr.row-first td.col-first img').attr('style','border: 1px solid green;');

          var initial_preview = initial_img.replace('thumbnail', 'preview-with-watermark');

          $("#prev_img").html('<img src="'+initial_preview+'" />');

          var initial_cost = $('#block-system-main table.views-view-grid tr.row-first td.col-first #node_cost').text();
          $(".page-search-result span#photo_cost label").text(initial_cost);

          var initial_authour_name = $('#block-system-main table.views-view-grid tr.row-first td.col-first #authour_first_name').text();
          $(".page-search-result span#photo_author label").text(initial_authour_name);
          //change the addtocart hidden value.
          var wrap_id = $("#block-system-main table.views-view-grid tr.row-first td.col-first img").parent().attr('id');
          var exploded = wrap_id.split('thumb-');
          var new_id =  exploded[1];
          $("#cart_hidden").val(new_id) ; 

          // Add/remove functionality based on the cart contents
          var cart_contents = new Array();
          var cart_str = $('.view-footer #cart_hidden_nids input').val();

          //var temp = new Array();
          cart_contents = cart_str.split(",");

          if(jQuery.inArray(new_id, cart_contents) == -1) {
          $('.page-search-result #search-result-cart .form-submit').removeClass('remove_cart');
                  $('.page-search-result #search-result-cart .form-submit').addClass('add_cart');


          }
          else{

              $('.page-search-result #search-result-cart .form-submit').removeClass('add_cart');
              $('.page-search-result #search-result-cart .form-submit').addClass('remove_cart');

          }
        }

        else {
          $(".page-search-result #sidebar-second .content").hide();
        }


        //onload ajax calling in the search result page
        if ($('.page-search-result #block-system-main table.views-view-grid').length == 1) { 
          var base_path = Drupal.settings.basePath;
          $.ajax({
                    type: "POST",
                    url: base_path + "cart_add_remove?nid",
                    success: function(msg) {
                      var msg_arr = msg.split("|");
                      var no_of_items = msg_arr['0'];
                      var total_cost = msg_arr['1'];
                      var checked_string_nids = msg_arr['2'];
                      $('.summary_selected_photos .placeholder').html(no_of_items);
                      $(".summary_cost .placeholder").html(total_cost);
                      if(no_of_items != 0) {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:block');
                        $('.view-footer #cart_hidden_nids input').val(checked_string_nids);
                      }
                      else {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:none');
                      }
                      
                      var checked_products_nids = new Array();
                      checked_products_nids = checked_string_nids.split(",");
                        
                      $('.page-search-result #block-system-main div.node_check input').each(function(){
                        var name_id = $(this).val();
                        if(jQuery.inArray(name_id, checked_products_nids) != -1) {
                          $('.page-search-result #block-system-main div.node_check #'+name_id).attr('checked','checked') ;
                          var label_class_name = $(this).parent('label').attr('class');
                          if(label_class_name != 'label_check c_on') {
                            $(this).parent('label').removeClass('label_check').addClass('label_check c_on');
                          }
                        }
                        
                      });
                   }
          });
        }

        
        $('.page-search-result #block-system-main div.node_check').each(function(){
          
          var name_id = $(this).parent().children('span').text();
          $(this).html('<label class="label_check" for="'+name_id+'" id="check_'+name_id+'"><input type="checkbox" name="id_'+name_id+'" id="'+name_id+'" value="'+name_id+'" class="img_check"/></label>');
        });
        

        


        //runner number in the find section for front page
        if($(" #runner_number ").length > 0 ) {
          if(($(" #runner_number ").val() == '')) {
            $(" #runner_number ").val("My Number");

          }
        }

        $(" #runner_number ").click(function() {

          if($(" #runner_number ").val() == 'My Number') {
            $(" #runner_number ").val(""); 
          }
        });


        $("#runner_number ").blur(function() {
          if(($(" #runner_number ").val() == 'My Number') || ($(" #runner_number ").val() == ''))
            $(" #runner_number ").val("My Number"); 
        });


        //recent event 1 'My Number' text blur functionality 

        if($(" #number_recent_event1").length > 0 ) {
          if(($(" #number_recent_event1 ").val() == '')) {
            $(" #number_recent_event1 ").val("My Number");

          }
        }

        $(" #number_recent_event1 ").click(function() {

          if($(" #number_recent_event1 ").val() == 'My Number') {
            $(" #number_recent_event1 ").val(""); 
          }
        });


        $("#number_recent_event1 ").blur(function() {
          if(($(" #number_recent_event1 ").val() == 'My Number') || ($(" #number_recent_event1 ").val() == ''))
            $(" #number_recent_event1 ").val("My Number"); 
        });


        //recent event 2 'My Number' text blur functionality 

        if($(" #number_recent_event2").length > 0 ) {
          if(($(" #number_recent_event2 ").val() == '')) {
            $(" #number_recent_event2 ").val("My Number");

          }
        }

        $(" #number_recent_event2 ").click(function() {

          if($(" #number_recent_event2 ").val() == 'My Number') {
            $(" #number_recent_event2 ").val(""); 
          }
        });


        $("#number_recent_event2 ").blur(function() {
          if(($(" #number_recent_event2 ").val() == 'My Number') || ($(" #number_recent_event2 ").val() == ''))
            $(" #number_recent_event2 ").val("My Number"); 
        });

        //message for adding and removing cart
        //$(".page-search-result #center").prepend('<div class="cart_msg" style="display:none"></div>');

        //for remove the set message when adding items in the cart 
      if($('.messages a').length>0) {

        if($('.messages a').html() == 'your shopping cart') {
          $('.messages').attr('style','display:none');
        }
      }

      if($('.page-search-result #search-result-cart .summary_selected_photos .placeholder').length > 0) {
          if($('.page-search-result #search-result-cart .summary_selected_photos .placeholder').html() <= 0) {
            //for hide the proceed to checkout link in the search result page when no items in the cart
            $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:none');
          }
        }
        //for add to cart functionality when check the checkbox in the search result page
        //store this nids in the array
        var checked_products_nids = new Array();
        $('div .node_check input').click(function() {
            var class_name = $(this).parent('label').attr('class');
            if(class_name == 'label_check c_on'){
              $(this).parent('label').removeClass('label_check c_on').addClass('label_check');
            }
            else {
              $(this).parent('label').removeClass('label_check').addClass('label_check c_on');
            }


            var base_path = Drupal.settings.basePath;
            var checked_id = $(this).val();
            $.ajax({
                type: "POST",
                url: base_path + "cart_add_remove?nid="+checked_id,
                success: function(msg){
                  var op = msg;
                  if(op == 1){
                    cart_add(checked_id);

                    $('#check_'+checked_id).attr('class','label_check c_on');

                  }
                  else {
                  cart_remove(checked_id);

                    $('#check_'+checked_id).attr('class','label_check');

                  }

                }
            });
            //change add to cart button
            var cart_hidden  = $('#cart_hidden').val();
            var buttonclass  = $('#add_to_cart').attr('class');
            var currentclass = buttonclass.split('form-submit ');

            if(checked_id == cart_hidden){

              if(currentclass[1] == 'add_cart'){
                $('.page-search-result #search-result-cart .form-submit').removeClass('add_cart');
                $('.page-search-result #search-result-cart .form-submit').addClass('remove_cart');

              }
              else{
                $('.page-search-result #search-result-cart .form-submit').removeClass('remove_cart');
                $('.page-search-result #search-result-cart .form-submit').addClass('add_cart');
              }
            }

        });


        //cart add functionality
        function cart_add(checked_id)  {
          
          var base_path = Drupal.settings.basePath;
          $.ajax({
                    type: "POST",
                    url: base_path + "cart_add_remove?nid",
                    success: function(msg){
                      var msg_arr = msg.split("|");
                      var no_of_items = msg_arr['0'];
                      var total_cost = msg_arr['1'];
                      var checked_products_nids = msg_arr['2'];
                      $('.summary_selected_photos .placeholder').html(no_of_items);
                      $(".summary_cost .placeholder").html(total_cost);
                      if(no_of_items != 0) {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:block');
                        $('.view-footer #cart_hidden_nids input').val(checked_products_nids);
                      }
                      else {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:none');
                      }
                    }
          });

        }

        //cart remove functionality 
        function cart_remove(checked_id)  {
          var base_path = Drupal.settings.basePath;
          $.ajax({
                    type: "POST",
                    url: base_path + "cart_add_remove?nid",
                    success: function(msg){
                      var msg_arr = msg.split("|");
                      var no_of_items = msg_arr['0'];
                      var total_cost = msg_arr['1'];
                      var checked_products_nids = msg_arr['2'];
                      $('.summary_selected_photos .placeholder').html(no_of_items);
                      $(".summary_cost .placeholder").html(total_cost);
                      if(no_of_items != 0) {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:block');
                        $('.view-footer #cart_hidden_nids input').val(checked_products_nids);
                      }
                      else {
                        $('.page-search-result .content #search-result-cart .proceed_to_cart a').attr('style','display:none');
                      }
                    }
          });

        }
        // addtocart button functionality
          $('#add_to_cart').click(function() {

          var base_path = Drupal.settings.basePath;
          var checked_id = $('#cart_hidden').val();
          var class_name = $('#check_'+checked_id).attr('class');
          if(class_name == 'label_check c_on'){
            $(this).parent('label').removeClass('label_check c_on').addClass('label_check');
            $('#'+checked_id).attr('checked',false);
             
          }
          else {
            $(this).parent('label').removeClass('label_check').addClass('label_check c_on');
            $('#'+checked_id).attr('checked',true);
             
          }

              $.ajax({
                type: "POST",
                url: base_path + "cart_add_remove?nid="+checked_id,
                success: function(msg){
                  var op = msg
                  if(op == 1){
                    cart_add(checked_id);

                      $('#check_'+checked_id).attr('class','label_check c_on');
                      $('.page-search-result #search-result-cart .form-submit').removeClass('add_cart');
                      $('.page-search-result #search-result-cart .form-submit').addClass('remove_cart');
                  }
                  else {
                    cart_remove(checked_id);

                    $('#check_'+checked_id).attr('class','label_check');
                    $('.page-search-result #search-result-cart .form-submit').removeClass('remove_cart');
                    $('.page-search-result #search-result-cart .form-submit').addClass('add_cart');

                  }

                }
            });
            return false;
        });



        $('.page-search-result #block-system-main div.field-content img').bind('click', function() { 
          
          //for highlight the thumbnail image related to the preview image
          $('.page-search-result #block-system-main div.field-content img').attr('style','border: 1px solid #E9E9E9;'); 
          $(this).attr('style','border: 1px solid green;');

          var imgsrc = $(this).attr('src');	
          var price_txt = $(this).parents("td").find("span#node_cost").text();
          $(".page-search-result span#photo_cost label").text(price_txt);

          var node_author_txt = $(this).parents("td").find("span#authour_first_name").text();
          $(".page-search-result span#photo_author label").text(node_author_txt);

          var replacementurl = imgsrc.replace('thumbnail', 'preview-with-watermark');

          $("#prev_img").html('<img src="'+replacementurl+'" />');

          //change the addtocart button id
          var wrap_id1 = $(this).parent().attr('id');
          var exploded = wrap_id1.split('thumb-');
          var new_id =  exploded[1];
          $("#cart_hidden").val(new_id) ;

          // Add/remove functionality based on the cart contents
          var cart_contents = new Array();
          var cart_str = $('.view-footer #cart_hidden_nids input').val();

          //var temp = new Array();
          if($('#'+new_id).attr('checked') == true){

            $('.page-search-result #search-result-cart .form-submit').removeClass('add_cart');
            $('.page-search-result #search-result-cart .form-submit').addClass('remove_cart');
                  }
                  else{

            $('.page-search-result #search-result-cart .form-submit').removeClass('remove_cart');
                    $('.page-search-result #search-result-cart .form-submit').addClass('add_cart');
                  }
          
        });

        //mouseover cost bubble for search result page
        $(".page-search-result #block-system-main div.field-content img").mouseover(function() {  
          var img_cost = $(this).parents("td").find("span#node_cost").html();
          var img_cost_arr = img_cost.split('.');
          if(img_cost_arr['1'] == '00') {
            $(this).parents("td").find("span#node_cost").html(img_cost_arr['0']);
          }

          $(this).parents("td").find("span#node_cost").attr('style','display:block !important;');   
        }).mouseout(function(){
        $(this).parents("td").find("span#node_cost").attr('style','display:none !important;');
        });
        
        //mouseover cost bubble for review order page
        $(".page-cart-checkout-review .order-review-table .review-order-img img").mouseover(function() {
          $(this).parent("td").find("span#node_cost").attr('style','display:block !important;');   
        }).mouseout(function(){
          
          $(this).parent("td").find("span#node_cost").attr('style','display:none !important;');
        });

        //change the first tr class name in the review order page 
       if($('.page-cart-checkout-review .content .order-review-table').length >0) {
         $('.page-cart-checkout-review .content .order-review-table tr:first').removeClass('pane-title-row').addClass('review-order-title');
         $('.page-cart-checkout-review .content .order-review-table tr.review-button-row #uc-cart-checkout-review-form div:first').attr('id','review-order-action');
       }

       

      if (($("#block-feedback-form")).length > 0 ) {

        $("#block-feedback-form .content").hide();
        $("body.page-feedback #block-feedback-form .content").show();
        $("body.page-feedback #block-feedback-form #feedback-form").show();
        var txt_link = parent.window.document.location;
        $("input#edit-url-hidden").val(txt_link);
      }
          var link_chg = $("div#link-display").text();
      $("#block-feedback-form h2").html('<a class="feedback-link-new" href="'+link_chg+'"></a>');

      Drupal.feedbackFormToggle = function ($block, enable) {
        $block.find('form').slideToggle('medium');
        if (enable) {
          $('#feedback-form-toggle', $block).html('[ + ]');
          $("#block-feedback-form .content").hide();
          $("#feedback-form").attr('style','display:none;');

        }
        else {
          $('#feedback-form-toggle', $block).html('[ &minus; ]');
          $("#block-feedback-form .content").show();
          $("#feedback-form").attr('style','display:block;');

        }
      };

      if($("#feedback-form .error").length > 0 ) {

          $("#block-feedback-form .content").show();
          $("#feedback-form").attr('style','display:block;');

      }



      $("#fb_close_link").click(function() {

          parent.Drupal.overlay.close();

      });

      
      Drupal.behaviors.feedbackFormSubmit = {
        attach: function (context) {


          var $context = $(context);
          if (!$context.is('#feedback-status-message')) {
            return;
          }
          // Collapse the form.
          $('#block-feedback-form .feedback-link').click();
          // Blend out and remove status message.
          window.setTimeout(function () {
            $context.fadeOut('slow', function () {
              $context.remove();
            });
          }, 3000);

              parent.Drupal.overlay.close();
        }
      };
	  
	  

    }


  };
  
  /*End Check box design for search results page*/
     
})(jQuery);

