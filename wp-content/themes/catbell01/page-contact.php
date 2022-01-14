<?php get_template_part('header'); ?>

<main class="main cntInner inner">
  <div id="contact">
    <h2 class="shoplist__title"><?php echo the_title(); ?></h2>
    <?php echo the_content(); ?>
  </div>
</main>

<style>
  #contact{ margin: 200px 0; }
  input,
  textarea {
    margin-bottom: 40px;
  }

  input {
    margin-top: 10px;
    height: 40px;
    padding: 12px;
    border: 1px solid #eeeeee;
    display: block;
    font-size: 16px;
    font-weight: bold;
    color: #555;
    background-color: #fff;
    background-image: none;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    width: 100%;
  }

  textarea {
    margin-top: 10px;
        padding: 24px;
    border: 1px solid #eeeeee;
    display: block;
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.4;
    color: #555;
    background-color: #fff;
    background-image: none;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    height: auto;
  }

  p { padding-bottom: 5px; display: block; font-size: 18px; font-weight: bold;}
  form {
    width: 100%;
    margin: auto;
  }

  input.wpcf7-form-control.has-spinner.wpcf7-submit {
       cursor: pointer;
    background: #fff;
    color: #555;
    border: 1px solid #cdcdcd;
    text-transform: uppercase;
    transition: all 0.25s ease-in-out;
    font-weight: bold;
    font-size: 18px;
    padding: 15px 40px;
    display: block;
    margin: 108px auto 0;
    width: 300px;
    height: 60px;
    border-radius: 3px;
    text-align: center;
  }

  input.wpcf7-form-control.has-spinner.wpcf7-submit:hover {
    color: #fff;
    background-color: #555;
  }
</style>

<?php get_footer(); ?>
</body>
</html>
