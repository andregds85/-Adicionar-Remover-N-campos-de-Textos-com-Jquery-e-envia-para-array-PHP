<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>Adicionar e Remover Campo com JQuery</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Adicionar e Remover Campo com Jquery</h1>
        <form method="post" action="recebe.php">
            <div id="formulario">
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" name="titulo[]" placeholder="Nome">
                    <button type="button" id="add-campo"> + </button>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                cont++;
                //https://api.jquery.com/append/
                $('#formulario').append('<div class="form-group" id="campo' + cont + '"> <label>Nome: </label><input type="text" name="titulo[]" placeholder="Nome"> <button type="button" id="' + cont + '" class="btn-apagar"> - </button></div>');
            });

            $('form').on('click', '.btn-apagar', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
        </script>
    </body>
</html>




