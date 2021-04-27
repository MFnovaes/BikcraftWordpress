<style type="text/css">
  .qualidade:after {
    background: url("<?php echo get_template_directory_uri(); ?>/img/linhas.svg") no-repeat center;
  }

  .quebra {
    background: url("<?php echo get_template_directory_uri(); ?>/img/bg-footer.jpg") no-repeat center;
    background-size: cover;
  }
</style>

<section class="quebra">
  <blockquote class="quote-externo container">
    <p>
      "O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."
    </p>
    <cite>WILLIAN MORRIS</cite>
  </blockquote>
</section>
<footer>
  <div class="footer">
    <div class="container">
      <div class="grid-8 footer_historia">
        <h3>Nossa história</h3>
        <p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.</p>
      </div>
      <div class="grid-4 footer_contato">
        <h3>Contato</h3>
        <ul>
          <li>21 233121231</li>
          <li>contato@bikcraft.com</li>
          <li>Itajubá - MG</li>
        </ul>
      </div>
      <div class="grid-4 footer_redes">
        <h3>Rede Social</h3>
        <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
      </div>
    </div>
  </div>
  <div class="copy">
    <div class="container">
      <p class="grid-16">Bikcraft 2021 - Alguns direitos reservados.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>