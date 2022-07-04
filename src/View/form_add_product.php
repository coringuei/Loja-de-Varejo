<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../controller/Product.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
            <article> 
            <label for ="barCode" >Código de Barra </label>
            <input type ="number" name = "barCode" id ="barCode" class="border border-blue-600" required>
            </article>    
        
            <article>
                <label for="name" class="cursor-pointer">Nome do Produto</label>
                <input type="text" id="name" name="name" class="border border-red-600" required>
            </article>
            <article>
                <label for="provider" class="cursor-pointer">Fornecedor :</label>
                <select  name="provider" id="provider" class="border border-emerald-600">
                    <option value=1>Fornecedor 1</option>
                    <option value=2>Fornecedor 2</option>
                    <option value=3>Fornecedor 3</option>
                </select>
            </article>                            
        </section>
        <section class = "mx-4 mt-4 columns-2">
            <article>
                <label for="quantity" class= "cursor-painter">Quantidade em Estoque</label>
                <input type="number" name="quantity" id= "quantity" class="border border-green-600" required min=1 max=1000 >
            </article>
            <article>
                <label for="cost" class="cursor-pointer">Custo de Aquisição: </label>
                <input type="number" name="cost" id="cost" class="border border-blue-600" required min=1 max=10000>
            </article>
        </section>
        <section>
            <article class ="mx-4 mt-4">
                <label for="price">Preço</label>
                <input type="number" id="price" name="price" min=1 max=1000  class="border border-green-600" required>
            </article>    
        </section>
            <article class="flex justify-center mt-3">
            <button type="submit" class= "p-3 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
           
    </form>
</body>

</html>