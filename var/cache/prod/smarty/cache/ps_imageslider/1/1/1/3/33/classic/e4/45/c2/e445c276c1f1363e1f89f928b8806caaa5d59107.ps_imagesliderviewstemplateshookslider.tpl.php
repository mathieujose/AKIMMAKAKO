<?php
/* Smarty version 4.3.1, created on 2024-07-12 10:06:38
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6691002ee36006_59421167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1720352404,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6691002ee36006_59421167 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/fr/10-luxe">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/aed4debc9e983b7aa198581210013a9cb525a5d6_Rectangle 1.png" alt="LUXE" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">LUXE</h2>
                  <div class="caption-description"><h3>Un produit de luxe est un bien ou un service caractérisé par sa qualité supérieure, son exclusivité, et souvent son prix élevé.</h3></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/11-outils-informatiques">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/616a1b5ca2f88a4e8818d46409def55ba67fdce7_Rectangle 3.png" alt="OUTILS INFORMATIQUE" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">OUTILS INFORMATIQUE</h2>
                  <div class="caption-description"><h3>Un outil informatique est un logiciel ou un matériel utilisé pour faciliter, automatiser, ou améliorer des tâches informatiques. </h3></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/12-materiaux-de-construction">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/94580319d6e9ab000d55b766ba9a1cbda330495c_Rectangle 2.png" alt="MATERIAUX DE CONSTRUCTIONS" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">MATERIAUX DE CONSTRUCTIONS</h2>
                  <div class="caption-description"><h3>Ce sont des outils et machines utilisés dans la réalisation de projets de construction. </h3></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
