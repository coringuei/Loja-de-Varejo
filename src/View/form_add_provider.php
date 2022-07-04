<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Varejo - Novo Provedor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <form action="../Controller/Provider.php" method="POST">
            <section class="mx-4 mt-4 columns-2">
                <article>
                    <label for="cnpj">CNPJ</label>
                    <input type="number" name="cnpj" id="cnpj" class="border border-blue-600" required min=0>
                </article>
                <article>
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name " class="border border-red-600 " required>
                    </article>
            </section>
            <section class="mx-4 mt-4 columns-3" >                
                <article>                      
                    <label for="postalCode">CEP</label>
                    <input type="number" name="postalCode" id="postalCode"  class="border border-blue-600" required>
                </article>
                <article>
                    <label for="city">Cidade</label>
                    <input type="text" name="city" id="city" class="border border-green-600" required>
                </article>
                <article>
                    <label for="publicPlace">Lugar Público</label>
                    <input type="text" name="publicPlace" id="publicPlace" class="border border-blue-600" required>
                </article>               
            </section>
            <section class="mx-4 mt-4 columns-2">
                <article>
                    <label for="streetNumber">Número da Rua</label>
                    <input type="number" name="streetNumber" id="streetNumber" class="border border-blue-600" required min=0>
                </article>
                <article>
                    <label for="neighborhood">Bairro</label>
                    <input type="text" name="neighborhood" id="neighborhood"  class="border border-red-600" required>
                </article>
            </section>
                <article class="flex justify-center mt-3">
                    <button type="submit" class="p-3 text-white bg-red-700">Cadastrar</button>
                </article>
        </form>
</body>
</html>