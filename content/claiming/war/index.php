<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Land Claiming</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/war-title.webp); background-position: center;">
        <div>
          <h1>Land Claiming > War</h1>
          <h2>Powered by Lands</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Start a War</h3>
            <p>Any land can declare war. Only lands with 3 or more members are at risk of having war declared against them. At least one member of a land must be online for war to be declared against them. Additionally, once war is declared, the lands will have 5 minutes to prepare.</p>
            <p>To declare war against another land, you must set that land as your enemy first, using <strong>/lands relations enemies add</strong>. Then you can use <strong>/war declare</strong> to declare war against them.</p>
          </section>
          <section>
            <h3>During War</h3>
            <p>During the war, both lands can enter each others land, place scaffolding and ladders, and open doors.</p>
            <p>Currently, there are no other impacts of being at war.</p>
          </section>
        </div>
        <div>
          <section>
            <h3>End a War</h3>
            <p>Wars last 7 days, or until either side gets enough kills or surrenders.</p>
            <p>Currently, there is no reward for winning a war.</p>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <ul>
              <li><strong>/war declare</strong> - Declare war.</li>
              <li><strong>/war info</strong> - See info on current war.</li>
              <li><strong>/war menu</strong> - Open war GUI.</li>
              <li><strong>/land relations enemies add</strong> - Add a land as an enemy.</li>
              <li><strong>/land relations enemries remove</strong> - Remove a land as an enemy.</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
