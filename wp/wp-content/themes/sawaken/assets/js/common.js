$(function(){
    if($("#actual_intro_submit").length){
        $(document).on('click', '#actual_intro_submit', function(){
            $("#actual_intro_result_table tr").show();
            var company_name = $("#company_name_select").val();
            var material_name = $("#material_name_select").val();
            var product_name = $("#product_name_select").val();
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
});
