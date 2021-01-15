var ua = {};
ua.name = window.navigator.userAgent.toLowerCase();
ua.isiPhone = ua.name.indexOf('iphone') >= 0;
ua.isAndroid = ua.name.indexOf('android') >= 0;
ua.isTouch = ('ontouchstart' in window);
$(function(){
    if($("#actual_intro_submit").length){
        $(document).on('click', '#actual_intro_submit', function(){
            $("#actual_intro_result_table tr").show();
            var company_name = $("#company_name_select").val();
            var material_name = $("#material_name_select").val();
            var product_name = $("#product_name_select").val();
            var free_word = $("#free_word_search").val();
            if(free_word){
                $("#actual_intro_result_table tr td").parent().hide();
                $.each($("#actual_intro_result_table tr td"), function (index, element) {
                    var row_text = $(element).text();
                    if (row_text.indexOf(free_word) != -1) {
                        $(element).parent().show();
                    } else {
                    }
                });
            }
            if(company_name){
                $("#actual_intro_result_table tr td[data-company][data-company != "+company_name+"]").parent('tr').hide();
            }
            if(material_name){
                $("#actual_intro_result_table tr td[data-material][data-material != "+material_name+"]").parent('tr').hide();
            }
            if(product_name){
                $("#actual_intro_result_table tr td[data-product][data-product != "+product_name+"]").parent('tr').hide();
            }
        });
    }
    if(ua.isiPhone || ua.isAndroid){
        $('.telnum').each(function(){
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
    }
});
//popup
function popupImage() {
    var popup = document.getElementById('js-popup');
    if(!popup) return;

    var blackBg = document.getElementById('js-black-bg');
    var closeBtn = document.getElementById('js-close-btn');
    var showBtn = document.getElementById('js-show-popup');

    closePopUp(blackBg);
    closePopUp(closeBtn);
    closePopUp(showBtn);
    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.toggle('is-show');
      });
    }
  }
  popupImage();