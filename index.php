<?php

    session_start();

    if (isset($_SESSION['idUser'])) {
        //header('Location: products.php');
        //exit;
    }

    $page_title = 'CanecArte - Home';
    $style_sheets = ['public/css/style.css', 
                     'public/css/home.css'];
    $icon_folder = 'public/images/logos/favicon.png';

    require("public/includes/head.php");

?>

    <div class="shop-car">
        <img src="public/icons/shop-car.svg" alt="">
    </div>
    
    <div class="container">
        <header id="top">
            <div class="content">
                <a href="#home" class="logo">
                    Canec<span>Art</span>
                </a>
        
                <nav>
                    <a href="index.php" data-checked="home" class="btn">Home</a>
                    <a href="public/views/products.php" data-checked="products" class="btn">Produtos</a>
                    <a href="#Estatics" data-checked="estatics" class="btn">Estatísticas</a>
                    <a href="public/views/development.php" data-checked="development" class="btn">Desenvolvimento</a>
                    <a href="public/views/register.php" data-checked="register" class="btn primary">Cadastre-se</a>
                </nav> 
            </div> 
        </header>
    
        <section class="hero">
            <div class="content">
                <img src="public/images/hero-image.png" alt="">

                <div>
                    <h2>Sua caneca é nossa arte</h2>
                    <div class="text">Vendemos canecas personalizadas de maneira artesanal.</div>
                    <div class="text">Trazemos qualidade, variedade e durabilidade</div>
                </div>
            </div>  
    
            <div class="hero-wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
    
        <section class="cards">
            <div class="card">
                <img src="public/images/card1-image.png" alt="">
                <h3>Prontas para você...</h3>
                <p>Contando com diversas canecas personalizadas feitas sobre diferentes formas, tipos e desenhos, nossa empresa busca oferecer com eficiência o produto perfeito voltado diretamente à você.</p>
            </div>

            <div class="card">
                <img src="public/images/card2-image.jpg" alt="">
                <h3>Confortável para o Meio Ambiente...</h3>
                <p>Pensando na Sustentabilidade, nós da CanecArt oferecemos uma nova linha de canecas ecológicas. Feitas a partir de fibra de coco e plástico PP, nossa linhas busca unir preços baixos produtos de grande qualidade.</p>
            </div>

            <div class="card">
                <img src="public/images/card3-image.jpg" alt="">
                <h3>Perfeita para Presentear...</h3>
                <p>Com vários modelos e embalagens decorativos, lembre-se que uma caneca sempre cai como um excelente lembrança numa data especial.</p>
            </div>
        </section>
    
        <section class="movie">
            <div class="left">
                <h3>Como Fazemos?</h3>
                <p>O vídeo ao lado, representando um dos maiores princípios da CanecaArt, ensinará diversas maneiras práticas e criativas de como reutilizar canecas sublimadas ou até mesmo quebradas, colaborando com o meio ambiente para um mundo melhor.</p>
            </div>

            <div class="right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/I1CpF4ybNcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <footer>
            <div class="footer-wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="content">
                <div class="left">
                    <a href="index.php" data-checked="home" class="btn">Home</a>
                    <a href="public/views/products.php" data-checked="products" class="btn">Produtos</a>
                    <a href="#Estatics" data-checked="estatics" class="btn">Estatísticas</a>
                    <a href="public/views/development.php" data-checked="development" class="btn">Desenvolvimento</a>
                    <a href="public/views/register.php" data-checked="register" class="btn primary">Cadastre-se</a>
                </div>

                <div class="back-to-top">
                    <a href="#top">
                        Voltar ao topo
                    </a>
                </div>

                <div class="right">
                    <span>Bianca Oliveira de Camargo - 03</span>
                    <span>Felipe Lima Estevanatto - 06</span>
                    <span>Carla Julia Franco de Toledo - 04</span>
                    <span>Gabriel Gomes Nicolim - 08</span>
                    <span>Samuel Sensolo Goldflus - 32</span>
                </div>
            </div>
        </footer>

</body>
</html>