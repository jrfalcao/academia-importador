<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Escola de Importadores &#8211; O maior Curso de Importação do Brasil</title>
        <meta name="description" content="O único curso de importação confiável e garantido, que ensina o passo a passo para comprar nas lojas dos EUA e receber em sua casa. Aprenda agora." />
        <!-- Bootstrap -->
        <link href="<?= BASE ?>assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASE ?>assets/css/style.css" rel="stylesheet">
        <link href="<?= BASE ?>assets/fonts/Acme-Regular.ttf" rel="stylesheet">
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?= BASE ?>assets/vendor/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= BASE ?>assets/vendor/bootstrap/bootstrap.min.js"></script>
        
        <script src="<?= BASE ?>assets/js/script.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="header">
            <div class="container header_int">
                <div class="row">
                    <div class="topo_left">
                        <figure class="col-xs-12 col-md-6">
                            <a href="<?= BASE ?>">
                                <img src="<?= BASE ?>assets/images/logorep_branco.png" class="img-responsive">
                            </a>
                        </figure>
                    </div>
                    <div class="topo_dir">                    
                        <nav class="nav navbar col-xs-12 col-md-6">
                            <u>
                                <a href="#"><li>Blog</li></a>
                                <a class="scrollSuave" href="#depoimentos"><li>Depoimentos</li></a>
                                <a class="scrollSuave" href="#garantias"><li>Garantia</li></a>
                                <a class="scrollSuave" href="#contato"><li>Contato</li></a>
                                <a class="scrollSuave" href="#aviso"><li>Aviso Legal</li></a>
                            </u>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div> 

        <section class="footer">
            <a id="aviso"></a>
            <div class="container">
                <div class="conteudo">
                    AVISO LEGAL<br>
                    Ao abordar questões financeiras, de qualquer um dos nossos produtos, sites, vídeos, depoimentos ou outros conteúdos, fazemos todos os esforços cabíveis e, em especial através da nossa equipe de suporte e pós-venda, de forma a garantir que os conteúdos aqui abordados representem fielmente o nosso curso digital e sua capacidade educacional dentro do âmbito da importação legalizada, prezando pela lei e direitos constitucionais de todo e qualquer cidadão brasileiro. No entanto, a ACADEMIA DO IMPORTADOR não garante que você conseguirá obter quaisquer resultados usando qualquer uma de nossas ideias, ferramentas, estratégias e recomendações, e nada em nossos Sites é uma promessa ou garantia para você obter sucesso nas importações. VOCÊ CONCORDA QUE O USO OU INCAPACIDADE DE USO DO PRODUTO É POR SUA CONTA E RISCO. Ao adquirir o produto, você aceita, concorda e entende que você é totalmente responsável por seu progresso e resultados de sua participação e que nós não oferecemos nenhuma representação, garantia ou garantias verbalmente ou por escrito sobre seu desempenho no aprendizado ou resultados de qualquer tipo. Você é o único responsável por suas ações e resultados na vida e negócios que dependem de fatores pessoais, incluindo, mas não necessariamente limitado a, a sua habilidade, conhecimento, habilidade, dedicação, conhecimento de negócios, rede e situação financeira, para citar apenas alguns. Você também entende que qualquer depoimento ou aprovações emitidas por nossos clientes ou público representado em nossos sites, conteúdo, páginas de destino, páginas de vendas ou ofertas não foram avaliadas cientificamente por nós e os resultados experimentados pelos indivíduos podem variar significativamente. Quaisquer declarações descritas no nosso websites, programas, conteúdos e ofertas são simplesmente nossa opinião e, portanto, não são garantias ou promessas de desempenho real. Nós não oferecemos assessoria jurídica, médica, psicológica ou financeira profissional.
                </div>
                <br><br>
                <p class="footer-copyright">Copyright 2016/<?= date('Y') ?> - Escola de Importadores - All Rights Reserved</p>
                <a href="https://academiadoimportador.com/representantes/" target="_blank">Sobre representantes</a>
            </div>
        </section>  
        
    </body>

</html>
