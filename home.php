<style type="text/css">
  html {
    /* Setting a base font size of 10px give us easier rem calculations
       Info: 1rem === 10px, 1.5rem === 15px, 2rem === 20px and so forth
     */
    font-size: 10px;
  }

  body {
    /* Native font stack https://getbootstrap.com/docs/4.2/content/reboot/#native-font-stack */
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
    font-size: 1.6rem;
    line-height: 1.5;
    text-align: center;
    color: #333;
    margin: 0;
  }

  h1 {
    font-size: 4rem;
    margin-bottom: 0;
  }

  @media (max-width: 460px) {
    h1 {
      font-size: 3.5rem;
      line-height: 1.2;
    }
  }

  h2 {
    font-size: 3.25rem;
  }

  a {
    color: #477ca7;
  }

  a:visited {
    color: #74638f;
  }

  #main {
    margin: 30px 8px;
    padding: 15px;
    border-radius: 5px;
    background: #eee;
  }

  @media (max-width: 460px) {
    #main {
      margin: 0;
    }
  }

  img {
    max-width: 100%;
    display: block;
    height: auto;
    margin: 0 auto;
  }

  #img-div {
    background: white;
    padding: 10px;
    margin: 0;
  }

  #img-caption {
    margin: 15px 0 5px 0;
  }

  @media (max-width: 460px) {
    #img-caption {
      font-size: 1.4rem;
    }
  }

  #headline {
    margin: 50px 0;
    text-align: center;
  }

  ul {
    max-width: 550px;
    margin: 0 auto 50px auto;
    text-align: left;
    line-height: 1.6;
  }

  li {
    margin: 16px 0;
  }

  blockquote {
    font-style: italic;
    max-width: 545px;
    margin: 0 auto 50px auto;
    text-align: left;
  }
</style>
<main id="main">
    <h1 id="title">Fausto Silva</h1>
    <p>O homem que salva os domingos</p>
    <figure id="img-div">
        <img id="image" src="imagens/faustoSilva.jpg" alt="Dr. Norman Borlaug seen standing in Mexican wheat field with a group of biologists"/>
        <figcaption id="img-caption">
        Fausto Silva durante as gravações para "Memória Globo".
      </figcaption>
    </figure>
    <section id="tribute-info">
        <h3 id="headline">Aqui uma breve introdução da vida de Fausto Silva:</h3>
        <ul>
            <li>Iniciou sua carreira aos quatorze anos, como repórter da rádio Centenário de Araras, no interior de São Paulo. Logo depois, mudou-se para Campinas e trabalhou durante cinco anos na Rádio Cultura, na qual comandou o musical New Pop International.</li>
            <li>Em 1970, foi contratado pela Rádio Record, na capital paulista, para apresentar o jornal da noite, do qual era também redator, e se iniciou no mundo do esporte, passando a trabalhar como repórter de campo na Jovem Pan - Rádio Panamericana.</li>
            <li>Além do rádio, Faustão também se dedicou ao jornalismo, tendo sido contratado pelo jornal O Estado de S. Paulo, como reporter esportivo. Foi nessa função que foi levado para a Rádio Globo em 1977, convidado por Osmar Santos. Nessa época, Osmar Santos estava cursando a faculdade de Administração Pública na Fundação Getúlio Vargas e tinha aulas com nomes destacados da política como Eduardo Suplicy e André Franco Montoro.</li>
        </ul>
        <h3>
            Para saber mais sobre este grande homem, <a id="tribute-link" href="https://pt.wikipedia.org/wiki/Fausto_Silva" target="_blank">clique aqui</a> e acesse sua biografia completa.
        </h3>
    </section>
</main>
<script type="text/javascript" src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>