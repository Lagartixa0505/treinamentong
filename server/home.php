<?php
include('protect.php'); // Inclua seu arquivo de proteção

if (!isset($_SESSION['nome'])) {
    header('Location: index.php'); // Redirecione se o usuário não estiver logado
    exit();
}
// Verifica o grupo do usuário
$grupo_usuario = isset($_SESSION['grupo']) ? $_SESSION['grupo'] : 0; // Valor padrão caso o grupo não esteja definido

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ngtreinamentos.com.br</title>
    <link rel="icon" href="logo1.jpeg" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <style>
        

        #banner {
            width: 100%;
            height: 300px; /* Altura do banner */
            overflow: hidden; /* Para ocultar imagens que excedem a altura */
            position: relative; /* Para posicionar as imagens */
        }

        #banner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Para garantir que as imagens cubram todo o espaço do banner */
            object-position: center;
            position: absolute; /* Para posicionar as imagens em relação ao banner */
            top: 0;
            left: 0;
            opacity: 0; /* Começa com todas as imagens invisíveis */
            transition: opacity 1s ease; /* Transição suave entre as imagens */
        }

        #banner img.active {
            opacity: 1; /* Mostra a imagem ativa */
        }



        

    </style>
</head>
<body>
    <header>
        <!-- Barra de navegação -->
        <nav>
            
            <div>
                <ul>
                    <li><a href="#"><img src="assets/logo2.png" alt="Logo da sddobrasil"></a></li>
                    <!-- Adicione mais itens de navegação conforme necessário -->
                </ul>
            </div>
            <script>
                function redirectToprotect() {
                    window.location.href = 'logout.php'; 
                }
            </script>
            
            
            <div id="login-button">
                <button type="button" class="add-to-cart-button" onclick="redirectToprotect()">Sair</button>  
                <?php
                    if ($grupo_usuario == 88) {
                        echo '<button type="button" >Adicionar curso</button>';
                        echo '<button type="button" >Editar Banner</button>';
                    }

                    
                ?>
                
                <button type="button" class="botao"><?php echo htmlspecialchars($_SESSION['nome']);?></button>
            </div>
        </nav>
    </header>

    <main>            
        <!-- Banner de destaque -->
        <section id="banner">
            <img src="assets/banner1.jpeg" alt="Banner de Destaque" class="active">
            <img src="assets/banner2.jpeg" alt="Banner de Destaque">
        </section>
    </main>
    <!-- Container de produtos -->
    <div class="product-container">
        <!-- Produtos -->

        <!--Suporte-->
        <div class="product">
            <img src="assets/produto1.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectToSupport()">Começar</button>
        </div>
        
        <script>
            function redirectToSupport() {
                window.location.href = 'suporte.html'; // Redireciona para suporte.html na mesma janela
            }
        </script>
        
        
        <!--Financeiro-->
        <div class="product">
            <img src="assets/produto2.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectTofinan()">Começar</button>
        </div>
        
        <script>
            function redirectTofinan() {
                window.location.href = 'financeiro.html'; // Redireciona para suporte.html na mesma janela
            }
        </script>

        <!--Comercial-->
        <div class="product">
            <img src="assets/produto3.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectToComercial()">Começar</button>
        </div>

        <script>
            function redirectToComercial() {
                window.location.href = 'comercial.html'; 
            }
        </script>

        <!--Nucleo-->
        <div class="product">
            <img src="assets/produto4.jpeg" alt="Produto 2">
            <button type="button"  class="add-to-cart-button" onclick="redirectToNucleo()">Começar</button>
        </div>

        <script>
            function redirectToNucleo() {
                window.location.href = 'nucleo.html'; 
            }
        </script>

        <!--Torre-->
        <div class="product">
            <img src="assets/produto5.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectToTorre()">Começar</button>
        </div>

        <script>
            function redirectToTorre() {
                window.location.href = 'torre.html'; 
            }
        </script>

        <!--Provisionamento-->
        <div class="product">
            <img src="assets/produto6.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectToProvisionamento()">Começar</button>
        </div>

        <script>
            function redirectToProvisionamento() {
                window.location.href = 'provisionamento.html'; 
            }
        </script>

        <!--Estoque-->
        <div class="product">
            <img src="assets/produto7.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" onclick="redirectToEstoque()">Começar</button>
        </div>

        <script>
            function redirectToEstoque() {
                window.location.href = 'provisionamento.html'; 
            }
        </script>

        <!--Em espera-->
        <div class="product">
            <img src="assets/espera.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button" >Começar</button>
        </div>
        <script>
            function redirectToEspera() {
                window.location.href = 'espera.html'; 
            }
        </script>

        <!--Em espera-->
        <div class="product">
            <img src="assets/espera.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button">Começar</button>
        </div>
        <!--Em espera-->
        <div class="product">
            <img src="assets/espera.jpeg" alt="Produto 2">
            <button type="button" class="add-to-cart-button">Começar</button>
        </div>
        
        
        <!-- Adicione mais produtos conforme necessário -->
    </div>
    </main>
    
    <footer>
        
    </footer>
    
    <!-- O Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Este é o conteúdo do modal.</p>
        </div>
    </div>

    <script>
        // Obter todas as imagens do banner
        const images = document.querySelectorAll('#banner img');

        let index = 0; // Índice da imagem atual

        // Função para alternar as imagens
        function changeImage() {
            // Ocultar a imagem atual
            images[index].classList.remove('active');
            
            // Atualizar o índice para a próxima imagem
            index = (index + 1) % images.length;
            
            // Mostrar a próxima imagem
            images[index].classList.add('active');
        }

        // Chamar a função changeImage a cada 3 segundos (3000 milissegundos)
        setInterval(changeImage, 3000);
        // Obtém o modal
        
     
    </script>

</body>
</html>
