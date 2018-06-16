<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!--==========================
Contact Section
============================-->

<div class="contato">
<section id="contato" class="section-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h3>Contato</h3>
      <p>Frase de insentivação ao pedido de orçamento</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Endereço</h3>
          <address>R: David A. Rassi / Sala 01  Qd:73 Lt: 27 - Centro</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>telefone</h3>
          <p><a href="tel:+155895548855">(64) 3461 - 58-13</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:info@example.com">centerseg.pdr@gmail.com</a></p>
        </div>
      </div>
    </div>

    <div class="form">
      <div id="sendmessage">Obrigado pela preferência</div>
      <div id="errormessage"></div>
      <form action="InterSeg/class/src/mail.php" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome" data-rule="minlen:4" data-msg="Por favor preencha o campo Nome" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" data-rule="email" data-msg="Por favor preencha o campo Email" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor preencha o campo Assunto" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor preencha o campo Mensagem" placeholder="Mensagem"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->

</div>

