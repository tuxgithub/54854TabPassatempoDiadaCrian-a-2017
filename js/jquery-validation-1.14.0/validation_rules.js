/****REGRAS DE VALIDAÇÃO DOS FORMULÁRIOS****/


 $().ready(function() {


    $("#formRegisto").validate({
        errorContainer: $("#formRegisto p.error"),
        //errorPlacement- para nao incluir as labels com erros por baixo de cada input
        errorPlacement: function(error, element) { },
        rules: {
            nome: "required",
            
            fatura: {
                required:true,
                accept: "image/*,application/pdf",
            },
            
            email: {
                required:true,
                email:true,
            },
            checkTermos: "required",
            // checkDadosTerceiros: "required",
            // checkAutorizoDados: "required",
            
            
        },
        

    });

   


});