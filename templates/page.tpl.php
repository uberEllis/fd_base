<section id="content" data-equalizer data-equalizer-mq="medium-up">
  
  <section role="main" id="pageContent" class="pageContent" data-equalizer-watch><?php // columns large-7 large-push-2 ?>
    <h1 class="page-title">Main content</h1>
    <p>Drumstick cupim filet mignon meatball, bacon t-bone salami pig kielbasa biltong fatback landjaeger pork chop sirloin frankfurter. Sausage kielbasa short loin shankle, chuck drumstick tongue swine flank andouille pork loin shoulder short ribs pancetta. Cupim ham hock porchetta meatloaf ground round strip steak alcatra capicola turducken boudin venison beef ribs pork belly chicken. Landjaeger ham hock tri-tip pig fatback t-bone. Cow pig strip steak jowl bacon tail.</p>
  </section>

  <?php if ($page['sidebar_first'] || $page['sidebar_second']) { ?>
  <aside id="sidebars">
    <?php if ($page['sidebar_first']) { ?>
    <section id="sidebar-first" class="sidebar-first" data-equalizer-watch><?php // columns large-2 large-pull-7 ?>
      <h2>Left sidebar title</h2>
      <p>Ball tip corned beef alcatra, chuck tongue chicken swine pork chop. Spare ribs fatback doner meatball chuck prosciutto ground round drumstick, picanha porchetta shoulder strip steak boudin pig. Shank chicken tenderloin meatloaf beef, fatback pig bacon pork loin. Salami landjaeger leberkas porchetta. Short loin ham biltong bresaola. Shank cupim bresaola t-bone beef shoulder doner jerky tail pastrami landjaeger.</p>
    </section><!-- #sidebar-second -->
    <?php } ?>

    <?php if ($page['sidebar_second']) { //|| $page['CTA']) { ?>
    <section id="sidebar-second" class="sidebar-second" data-equalizer-watch><?php // columns large-3 ?>
      <h2>Right sidebar title</h2>
      <p>Shankle boudin cupim, porchetta bresaola salami ham. Jowl ground round flank turkey. Cupim pork belly drumstick tri-tip jerky short loin pig landjaeger alcatra. Tail meatloaf pig ground round pork belly corned beef tongue leberkas alcatra porchetta turducken. Pork chop shankle beef ribs, sausage ground round pastrami capicola tri-tip meatloaf. Shank ball tip ground round cupim tenderloin, chuck andouille picanha hamburger pork beef ribs turkey tri-tip ham.</p>
    </section><!-- #sidebar-second -->
    <?php } ?>
  </aside><!-- #sidebars -->
  <?php } // endif sider or sidebar ?>
</section>


<?php // Footer ?>
<section id="pagefooter">

  <?php if ($page['footer_message'] || $page['colophon']) { ?>
  <div class="row">
    <div id="footermessage" class="small-12 medium-9 large-8 columns">
      <?php print render($page['footer_message']); ?>
    </div>
    <div id="colophon" class="small-12 medium-3 large-4 columns">
      <?php print render($page['colophon']); ?>
    </div><!-- colophon -->
  </div><!-- row -->
  <?php } // endif colophon or footer message ?>

</section>
<?php // end Footer ?>