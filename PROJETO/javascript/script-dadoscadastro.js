$("#cep").keyup(function(){
    // Remove tudo o que não é número para fazer a pesquisa
    var cep = this.value.replace(/[^0-9]/, "");
    
    // Validação do CEP; caso o CEP não possua 8 números, então cancela
    // a consulta
    if(cep.length != 8){
        return false;
    }
    
    //url do site para consulta do CEP
    var url = "https://viacep.com.br/ws/"+cep+"/json/";
    
    // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
    // caso ocorra algum erro (o cep pode não existir, por exemplo) a
    // usabilidade não seja afetada, assim o usuário pode continuar//
    // preenchendo os campos normalmente
    $.getJSON(url, function(dadosRetorno){
        try{
            // Preenche os campos de acordo com o retorno da pesquisa
            $("#rua").val(dadosRetorno.logradouro);
            $("#bairro").val(dadosRetorno.bairro);
            $("#cidade").val(dadosRetorno.localidade);
            $("#estado").val(dadosRetorno.uf);
        }catch(ex){}
        });
    });

    //transforma dados do input em maiusculo
    $(document).ready(function() {
        // Seleciona o campo de entrada
        var input = $("#estado");
      
        // Adiciona um ouvinte de eventos para o evento "input" (quando o valor do campo é alterado)
        input.on('input', function() {
          // Obtém o valor atual do campo de entrada
          var texto = input.val();
      
          // Transforma o valor em maiúsculas e define-o de volta no campo
          input.val(texto.toUpperCase());
        });
      });

      $(document).ready(function() {
        // Adicione o método de validação personalizado para verificar a idade
        $.validator.addMethod("maiorDeIdade", function(value, element) {
            // Obtém a data de nascimento inserida no campo
            var selectedDate = new Date(value);

            // Calcula a data atual
            var currentDate = new Date();

            // Calcula a data de corte para 18 anos atrás da data atual
            var cutoffDate = new Date(currentDate);
            cutoffDate.setFullYear(cutoffDate.getFullYear() - 18);

            // Compara a data de nascimento com a data de corte
            return selectedDate <= cutoffDate;
        })});

        $(document).ready(function() {
            // Adicione o método de validação personalizado para verificar a idade
            $.validator.addMethod("idadeMaxima", function(value, element) {
                // Obtém a data de nascimento inserida no campo
                var selectedDate = new Date(value);

                // Calcula a data atual
                var currentDate = new Date();

                // Calcula a data de corte para 112 anos atrás da data atual
                var cutoffDate = new Date(currentDate);
                cutoffDate.setFullYear(cutoffDate.getFullYear() - 112);

                // Compara a data de nascimento com a data de corte
                return selectedDate >= cutoffDate;
            })});



const form = document.querySelector("#form");
const nomeInput = document.querySelector("#nome");
const cpfInput = document.querySelector("#CPF");
const generoInput = document.querySelector("#genero");
const datanascimentoInput = document.querySelector("#datanascimento");
const nomematernoInput = document.querySelector("#nomematerno");
const celularInput = document.querySelector("#celular");
const telfixoInput = document.querySelector("#telfixo");
const cepInput = document.querySelector("#cep");
const ruaInput = document.querySelector("#rua");
const numeroInput = document.querySelector("#numero");
const bairroInput = document.querySelector("bairro");
const cidadeInput = document.querySelector("cidade");
const estadoInput = document.querySelector("estado");
const loginInput = document.querySelector("#login");
const senhaInput = document.querySelector("#senha");
const confirmarsenhaInput = document.querySelector("#confirmarsenha");

$("#nome").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});
$("#nomematerno").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});
$("#rua").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});
$("#bairro").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});
$("#cidade").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});
$("#estado").on("input", function(){
    var regexp = /[^a-zA-Zà-úÀ-Ú,' ']/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});



$(document).ready(function(){
    $("#CPF").mask("000.000.000-00");
});
$(document).ready(function(){
    $("#celular").mask("(00) 00000-0000");
});
$(document).ready(function(){
    $("#telfixo").mask("(00) 0000-0000");
});
$(document).ready(function(){
    $("#cep").mask("00000-000");
});
$(document).ready(function(){
    $("#numero").mask("00000");
});
$(document).ready(function(){
    $("#estado").mask("AA");
});

jQuery.validator.setDefaults({
    success: "valid"
  });
$("#formInteiro").validate({
    normalizer: function( value ) {
        return $.trim( value );
        
    },
    
    

    rules:{
        nome:{
            required: true,
            minlength: 10,
            minWords: 2,
        },
        CPF:{
            required: true,
            cpfBR: true,
        },
        genero: {
            required: true
        },
        datanascimento:{
            required: true,
            date: true,
            idadeMaxima: true,
            maiorDeIdade: true,
            

        },
        nomematerno:{
            required: true,
            minlength: 10,
            minWords: 2,
        },
        celular: {
            required: true,
            minlength: 15,
        },
        telfixo: {
            required: true,
            minlength: 14,
        },
        cep: {
            required: true,
            minlength: 8,
            postalcodeBR: true,
        },
        rua: {
            required: true,
        },
        numero: {
            required: true,
            minlength: 1,
        },
        bairro: {
            required: true,
        },
        cidade: {
            required: true,
        },
        estado: {
            required: true,
            pattern: /^(AC|AL|AM|AP|BA|CE|DF|ES|GO|MA|MG|MS|MT|PA|PB|PE|PI|PR|RJ|RN|RO|RR|RS|SC|SE|SP|TO)$/
        },
        login: {
            required: true,
            minlength: 4,
        },
        senha: {
            required: true,
            minlength: 8,
        },
        confirmarsenha: {
            required: true,
            equalTo: "#senha",
        },

     

    },
    
    

    messages: {
        nome:{
            minlength: "*Obrigatório ao menos 10 caracteres",
            minWords: "*Obrigatório nome e sobrenome",
            required: "*Informe seu nome",
        },

        CPF: {
            required: "*Informe seu CPF",
            cpfBR: "*Informe um CPF válido",
        },

        genero:{
            required: "*Selecione alguma opção",
            minlength: "*Informe seu nome corretamente",

        },

        datanascimento: {
            required: "*Informe sua data de nascimento",
            idadeMaxima: "*Matuzalém?",
            maiorDeIdade: "Você precisa ser maior de 18 anos"
        },

        nomematerno:{
            minlength: "*Obrigatório no mínimo 10 caracteres",
            minWords: "*Obrigatório nome e sobrenome",
            required: "*Informe o nome materno",
        },

        celular:{
            minlength: "Preencha corretamente",
            required: "*Informe o seu número de celular",
        },

        telfixo:{
            minlength: "Preencha corretamente",
            required: "*Informe o seu número de telefone fixo",
        },
        cep:{
            minlength: "Preencha o seu CEP corretamente",
            postalcodeBR: "Preencha com um CEP válido",
            required:"*Informe seu CEP",
        },
        rua:{
            required: "*Informe sua rua",
        },
        numero:{
            required: "*Informe seu número",
            minlength: "*Informe seu número corretamente",
        },
        bairro:{
            required: "*Informe seu bairro",
        },
        cidade:{
            required: "*Informe sua cidade",
        },
        estado:{
            required: "*Informe sua UF",
            pattern: "*Informe uma UF válida"
        },
        login:{
            required: "*Crie seu login",
            minlength: "*Obrigatório no mínimo 4 caracteres"
        },
        senha:{
            required: "*Crie sua senha",
            minlength: "*Obrigatório no mínimo 8 caracteres"
        },
        confirmarsenha:{
            required: "*Confirme sua senha",
            equalTo: "*As duas senhas devem ser iguais"
        },
        
    },

    
        

    submitHandler: function (form)  {


      form.submit();
      
    }
    
});



