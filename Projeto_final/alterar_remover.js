//Remover FORNECEDOR ---------------------------------------------

$(function(){
    $(".removerfornecedor").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        //id_fornecedor abaixo manda informações para remover_fornecedor
        obj_json = {id_fornecedor: id}
        $.post("remover_fornecedor.php", obj_json, function(retorno){
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Fornecedor removido com sucesso.");
                fornecedor = "#id_fornecedor" + id;
                $(fornecedor).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterarfornecedor").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        
        cnpj = $("#cnpj"+id).html();
        input_cnpj = "<input type='text' name='cnpj' value='" + cnpj + "'/>";
        $("#cnpj"+id).html(input_cnpj);

        telefone = $("#telefone"+id).html();
        input_telefone = "<input type='text' name='telefone' value='" + telefone + "'/>";
        $("#telefone"+id).html(input_telefone);

        nome = $("#nome"+id).html();
        input_nomefornecedor = "<input type='text' name='nome' value='" + nome + "'/>";
        $("#nome"+id).html(input_nomefornecedor);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterandofornecedor[value='" + id + "']").show();
    
    });

    $(".alterandofornecedor").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_fornecedor: id,
            cnpj: $("input[name='cnpj']").val(),
            telefone: $("input[name='telefone']").val(),
            nome: $("input[name='nome']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_fornecedor.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Fornecedor alterado com sucesso");
                //cnpj tem que ser replicado dentro de todos os campos (se não o span não fecha quando alterado)
                cnpj = $("input[name='cnpj']").val();
                $("#cnpj"+id).html(cnpj);

                telefone = $("input[name='telefone']").val();
                $("#telefone"+id).html(telefone);

                nome = $("input[name='nome']").val();
                $("#nome"+id).html(nome);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterarfornecedor[value='" + id + "']").show();
            }
        });
    });
});

//Remover FRUTAS ---------------------------------------------

$(function(){
    $(".removerfruta").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        obj_json = {nome_fruta: id}
        $.post("remover_fruta.php", obj_json, function(retorno){

            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Fruta removida com sucesso.");
                nome_fruta = "#nome_fruta" + id;
                $(nome_fruta).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterarfruta").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        
        datachegada = $("#datachegada"+id).html();
        input_chegada = "<input type='text' name='datachegada' value='" + datachegada + "'/>";
        $("#datachegada"+id).html(input_chegada);

        valor = $("#valor"+id).html();
        input_valor = "<input type='text' name='valor' value='" + valor + "'/>";
        $("#valor"+id).html(input_valor);

        quantia = $("#quantia"+id).html();
        input_quantia = "<input type='text' name='quantia' value='" + quantia + "'/>";
        $("#quantia"+id).html(input_quantia);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterandofruta[value='" + id + "']").show();
    
    });

    $(".alterandofruta").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            nome_fruta: id,
            datachegada: $("input[name='datachegada']").val(),
            valor: $("input[name='valor']").val(),
            quantia: $("input[name='quantia']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_fruta.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Fruta alterada com sucesso");
                //cnpj tem que ser replicado dentro de todos os campos (se não o span não fecha quando alterado)
                datachegada = $("input[name='datachegada']").val();
                $("#datachegada"+id).html(datachegada);

                valor = $("input[name='valor']").val();
                $("#valor"+id).html(valor);

                quantia = $("input[name='quantia']").val();
                $("#quantia"+id).html(quantia);
                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterarfruta[value='" + id + "']").show();
            }
        });
    });
});

//Remover ENDEREÇO ---------------------------------------------

$(function(){
    $(".removerendereco").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        obj_json = {id_endereco: id}
        $.post("remover_endereco.php", obj_json, function(retorno){
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Endereço removido com sucesso.");
                id_endereco = "#id_endereco" + id;
                $(id_endereco).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterarendereco").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        
        bairro = $("#bairro"+id).html();
        input_bairro = "<input type='text' name='bairro' value='" + bairro + "'/>";
        $("#bairro"+id).html(input_bairro);

        cep = $("#cep"+id).html();
        input_cep = "<input type='text' name='cep' value='" + cep + "'/>";
        $("#cep"+id).html(input_cep);

        rua = $("#rua"+id).html();
        input_rua = "<input type='text' name='rua' value='" + rua + "'/>";
        $("#rua"+id).html(input_rua);

        complemento = $("#complemento"+id).html();
        input_complemento = "<input type='text' name='complemento' value='" + complemento + "'/>";
        $("#complemento"+id).html(input_complemento);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterandoendereco[value='" + id + "']").show();
    });

    $(".alterandoendereco").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_endereco: id,
            bairro: $("input[name='bairro']").val(),
            cep: $("input[name='cep']").val(),
            rua: $("input[name='rua']").val(),
            complemento: $("input[name='complemento']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_endereco.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Endereço alterado com sucesso");
                //cnpj tem que ser replicado dentro de todos os campos (se não o span não fecha quando alterado)
                bairro = $("input[name='bairro']").val();
                $("#bairro"+id).html(bairro);

                cep = $("input[name='cep']").val();
                $("#cep"+id).html(cep);

                rua = $("input[name='rua']").val();
                $("#rua"+id).html(rua);

                complemento = $("input[name='complemento']").val();
                $("#complemento"+id).html(complemento);
                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterarendereco[value='" + id + "']").show();
            }
        });
    });
});

//Remover ATRIBUICAO ---------------------------------------------

$(function(){
    $(".removeratribuicao").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        obj_json = {id_atribuicao: id}
        $.post("remover_atribuicao.php", obj_json, function(retorno){
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Atribuição removida com sucesso.");
                id_atribuicao = "#id_atribuicao" + id;
                $(id_atribuicao).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alteraratribuicao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        
        titulo_funcao = $("#titulo_funcao"+id).html();
        input_titulo = "<input type='text' name='titulo_funcao' value='" + titulo_funcao + "'/>";
        $("#titulo_funcao"+id).html(input_titulo);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterandoatribuicao[value='" + id + "']").show();
    });

    $(".alterandoatribuicao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_atribuicao: id,
            titulo_funcao: $("input[name='titulo_funcao']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_atribuicao.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Atribuição alterada com sucesso");

                titulo_funcao = $("input[name='titulo_funcao']").val();
                $("#titulo_funcao"+id).html(titulo_funcao);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alteraratribuicao[value='" + id + "']").show();
            }
        });
    });
});

//Remover FUNCIONARIO ---------------------------------------------

$(function(){
    $(".removerfuncionario").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        obj_json = {nome: id}
        $.post("remover_funcionario.php", obj_json, function(retorno){
        console.log(retorno);
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Funcionário removido com sucesso.");
                nome = "#nome" + id;
                $(nome).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterarfuncionario").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        
        salario = $("#salario"+id).html();
        input_salario = "<input type='text' name='salario' value='" + salario + "'/>";
        $("#salario"+id).html(input_salario);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterandofuncionario[value='" + id + "']").show();
    });

    $(".alterandofuncionario").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            cpf: id,
            salario: $("input[name='salario']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_funcionario.php",post_json,function(resposta){
            console.log(resposta);
            if(resposta=='1'){
                $("#msg").html("Funcionário alterado com sucesso");

                salario = $("input[name='salario']").val();
                $("#salario"+id).html(salario);

                fruta_responsavel = $("input[name='fruta_responsavel']").val();
                $("#fruta_responsavel"+id).html(fruta_responsavel);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterarfuncionario[value='" + id + "']").show();
            }
        });
    });
});
