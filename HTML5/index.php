
<!--video 28-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--O Internet Explorer não suporta o doctype para HTML5, então provavelmente ele vai acabar indo para um modo chamado Quirks Mode.

O Quirks mode faz o site ser interpretado como uma versão mais antiga do IE, o que pode fazer teu site falhar, então ao ao usar X-UA-Compatible com o valor IE=edge ele vai forçar o navegador renderizar com a mais recente.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    <h1>Trabalhando com listas</h1>
    <h2>Listas ordenadas</h2>
    <ol><!--lista ordenada-->
            <li>Inicio</li>
            <li><a href="https://www.unimed.coop.br/viver-bem/saude-em-pauta/bom-dia-10-dicas-para-acordar-cedo-e-bem-disposto" target="_blank" rel="external" >Link externo</a></li><!-- trabalhando com link target="_blank abrir nova pagina ..a tag rel e para mostrar para o navegador q o link é externo semantico-->
            <li><a href="pagina1.html" rel="next">Exemplo CSS em linha</a> </li><!--link entre duas paginas internas a mesma pasta..o rel nesta ocasião mostra para qual pagina o lik direciona nocaso next e para proxima pagina-->
            <li><a href="pagina2.html"> Exemplo Download e css local</a></li>       
    </ol>

    <ol type="1" start="4"> <!--lista ordenada tipo numerica iniciando em 4-->
            <li><a href="formulario/pagina3.html">Exemplo diretorio</a></li>
            <li><a href="pagina4.html">Exemplo imagens</a></li>
            <li><a href="pagina5.html"> Exemplo videos</a></li>


    </ol>

    <ol type="A"> <!--lista ordenada tipo letras-->
            <li><a href="pagina6.html">Exercicio videos</a></li>
            <li><a href="pagina7.html">Exemplo CSS externo</a></li>
            <li><a href="../Aula/cores1.html">Ultima pagina</a></li>


    </ol>
    <ol type="I"> <!--lista ordenada tipo nume romanos -->
            <li><a href="../Aula/responsividade.html">Responsividade</a></li>
            <li><a href="../Aula/tabela.html">Tabela</a></li>
            <li><a href="../Aula/video.html">Video</a></li>


    </ol>

    <h2>Lista não ordenadas</h2>

    <ul type="circle"><!--disc, circle, square-->

            <li>Arroz</li>
            <ol>
                <li>Branco</li>
                <li>Parbolizado</li>
            </ol>
            <li>Feijão</li>
            <li>Carne</li>

    </ul>

    <h2>Listas aninhadas</h2>
    <ol>
        <li>Carros</li>
        <ul type="circle" >
            <li>Rosa</li>
            <li>Azul</li>
            <li>Branco</li>
        </ol>


    </ul>

    <h2>Lista de Definição</h2>
    <dl>Termo</dl>
    <dd>Definição</dd>


    <dl>HTML</dl>
    <dd>Linguagem de marcação para criação de paginas web</dd>

</body>
</html>