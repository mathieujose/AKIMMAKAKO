<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c99bda3c6bf360f5b3a0dd8d6335f7ca69206fadfaab63a2dcdf2355d605eced */
class __TwigTemplate_c50bd762bc318a4e77f6012af2354f8af56f8d21f1f37eadda6071abeeeabda2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Gestionnaire de modules • AKIMMAKAKO Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'ebc4903968cce932b71a7d966f164a7f';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '122de0bc1eb87b0029198e8d7ecd2599';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA';
    var admin_notification_get_link = '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications/ack?_t";
        // line 40
        echo "oken=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin361eatbeopv1pplp0s9/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/d";
        // line 67
        echo "ashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin361eatbeopv1pplp0s9\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/";
        // line 87
        echo "javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin361eatbeopv1pplp0s9\\/index.php?controller=AdminGamification&token=e5a1ced5f335770af8d89f13d427b7ae\";
            var current_id_tab = 40;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textCo";
        // line 110
        echo "lor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php\"  data-token=\"HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders?token=9bb9d7f51997b503d93b9b0690459ff7\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b160e6350d6ad485ecf8a5aaea72d795\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?token=9bb9d7f51997b503d93b9b0690459ff7\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=58004b4e5c18eea28d1d56f04554";
        // line 160
        echo "9ff8\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products-v2/create?token=9bb9d7f51997b503d93b9b0690459ff7\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/categories/new?token=9bb9d7f51997b503d93b9b0690459ff7\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"33\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?--vf15HA\"
        data-post-link=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin361eatbeopv1pplp0s9/index.php?controller";
        // line 199
        echo "=AdminSearch&amp;token=85d9189e11dacb4a89f8f2b0c85f4891\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" d";
        // line 216
        echo "ata-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders?token=9bb9d7f51997b503d93b9b0690459ff7\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b160e6350d6ad485ecf8a5aaea72d795\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?token=9bb9d7f51997b503d93b9b0690459ff7\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=58004b4e5c18eea28d1d56f045549ff8\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick";
        // line 252
        echo "-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products-v2/create?token=9bb9d7f51997b503d93b9b0690459ff7\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/categories/new?token=9bb9d7f51997b503d93b9b0690459ff7\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"32\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?--vf15HA\"
      data-post-link=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
";
        // line 296
        echo "              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/maintenance/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
  ";
        // line 336
        echo "            data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=c61f8c2fdc6fa0ac9f72056a24dbaa68\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div ";
        // line 384
        echo "class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Kossi Mathieu Jose\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Kossi Mathieu Jose</span>
      </div>

      <a class=\"drop";
        // line 434
        echo "down-item employee-link profile-link\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/1/edit?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminLogin&amp;logout=1&amp;token=167d54a829aeba29e11ffd1577989b27\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/toggle-navigation?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-";
        // line 475
        echo "submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminDashboard&amp;token=5b3b1d56e3a2369a9f47100e74b63769\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
   ";
        // line 512
        echo "                                       
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin361e";
        // line 546
        echo "atbeopv1pplp0s9/index.php/sell/orders/invoices/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/credit-slips/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/delivery-slips/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarts&amp;token=c61f8c2fdc6fa0ac9f72056a24dbaa68\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
   ";
        // line 577
        echo "               
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/categories?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Catégories
                                </a>
                              </li>

                                              ";
        // line 607
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/monitoring/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminAttributesGroups&amp;token=56f7090d1a206f24c9b21dd4dc2a77f0\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/brands/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/i";
        // line 635
        echo "ndex.php/sell/attachments/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCartRules&amp;token=58004b4e5c18eea28d1d56f045549ff8\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/stocks/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customers/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                            ";
        // line 667
        echo "                        <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customers/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/addresses/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCustomerThreads&amp;token=58fd09f09be0805d0bdac81c26cdb3";
        // line 695
        echo "99\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCustomerThreads&amp;token=58fd09f09be0805d0bdac81c26cdb399\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customer-service/order-messages/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop";
        // line 725
        echo "/admin361eatbeopv1pplp0s9/index.php?controller=AdminReturn&amp;token=fa2a724ad8e4b17b85a7668bff3bbbd8\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics/legacy/stats?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics/legacy/stats?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                  ";
        // line 756
        echo "                          
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/modules/catalog/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                             ";
        // line 789
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/modules/catalog/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/themes?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard";
        // line 818
        echo "_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/themes?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=222e02555197783cbc5cbba9a02d40d6\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/themes/catalog/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                         ";
        // line 847
        echo "     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/mail_theme/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/cms-pages/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/modules/positions/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminImages&amp;token=290084747dcbda4b2c375b83c8741cd3\" class=\"lin";
        // line 874
        echo "k\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/link-widget/list?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarriers&amp;token=f336e9450318bc338175daf31ef47818\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers";
        // line 906
        echo "\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarriers&amp;token=f336e9450318bc338175daf31ef47818\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/shipping/preferences/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/payment_methods?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
             ";
        // line 937
        echo "                 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/payment_methods?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/preferences?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/localization/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                 ";
        // line 967
        echo "                           </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/localization/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/zones/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/taxes/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" ";
        // line 996
        echo "data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/translations/settings?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fff3334a876202b372388481de18c492\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fff3334a876202b372388481de18c492\" class=\"link\"> Google
                                </a>
                              </li>

  ";
        // line 1026
        echo "                                                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsfacebookModule&amp;token=0f595b0a5700563b5d9df68082560285\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/settings?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                 ";
        // line 1063
        echo "                                     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/preferences/preferences?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/preferences/preferences?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/order-preferences/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Commandes
                                </a>
            ";
        // line 1090
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/product-preferences/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/customer-preferences/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/contacts/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a hr";
        // line 1120
        echo "ef=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/seo-urls/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminSearchConf&amp;token=528e900cdd8205b52161713f79252498\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/system-information/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      ";
        // line 1149
        echo "
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/system-information/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/performance/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/administration/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/emails/?_token=HdBbSvSXdXlQ6";
        // line 1177
        echo "xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/import/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/sql-requests/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 1208
        echo "veltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/logs/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/webservice-keys/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/feature-flags/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advance";
        // line 1233
        echo "d/security/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsAssistantSettings&amp;token=fa6262e5ebe8cae3230e3a65f7103647\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminKlaviyoPsConfig&amp;token=00be36735036a8dcf9b744637df52c1c\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard";
        // line 1265
        echo "_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=HdBbSvSXdXlQ";
        // line 1315
        echo "6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/alerts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                  ";
        // line 1342
        echo "      <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/updates?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"fa";
        // line 1358
        echo "lse\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"tg\",\"shop_version\":\"8.1.0\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/\",\"shop_uuid\":\"c1cb403d-68b6-4242-ad19-8a1ba854749f\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC8iLCJzaG9wX3V1aWQiOiJjMWNiNDAzZC02OGI2LTQyNDItYWQxOS04YTFiYTg1NDc0OWYifQ.mDSqd65iSlnCs_6ZNZaL9bUomIrkwIqMI8W5aH7EW5s\",\"mbo_version\":\"4.11.3\",\"mbo_reset_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_t";
        // line 1393
        echo "oken=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\",\"user_id\":\"1\",\"admin_token\":\"HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\",\"refresh_url\":\"http:\\/\\/localhost\\/prestashop\\/admin361eatbeopv1pplp0s9\\/index.php?controller=apiSecurityPsMbo&token=93e5a47fdfe1547a6f262e00b1fef96a\",\"installed_modules\":[{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/i";
        echo "mprove\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"mbeshipping\",\"status\":\"uninstalled\",\"version\":\"2.1.8\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mbeshipping?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"p";
        echo "s_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token";
        echo "=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"disabled__mobile_disabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.15\",\"config_url\":";
        echo "\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.4.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.12\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsD";
        echo "TnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"i";
        echo "d\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/config";
        echo "ure\\/ps_wirepayment?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":nul";
        echo "l},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null}],\"upgradable_modules\":[],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/improve\\/modules\\/updates?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\",\"module_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\",\"theme_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-07-07\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/modules/catalog/cdc_error?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1406
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=HdBbSvSXdXlQ6xLisrzZDXxxjTB9HsDTnT5--vf15HA\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1440
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1406
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1440
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c99bda3c6bf360f5b3a0dd8d6335f7ca69206fadfaab63a2dcdf2355d605eced";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1633 => 1440,  1612 => 1406,  1601 => 126,  1592 => 1440,  1552 => 1406,  1529 => 1393,  1492 => 1358,  1474 => 1342,  1445 => 1315,  1393 => 1265,  1359 => 1233,  1332 => 1208,  1299 => 1177,  1269 => 1149,  1238 => 1120,  1206 => 1090,  1177 => 1063,  1138 => 1026,  1106 => 996,  1075 => 967,  1043 => 937,  1010 => 906,  976 => 874,  947 => 847,  916 => 818,  885 => 789,  850 => 756,  817 => 725,  785 => 695,  755 => 667,  721 => 635,  691 => 607,  659 => 577,  626 => 546,  590 => 512,  551 => 475,  508 => 434,  456 => 384,  406 => 336,  364 => 296,  318 => 252,  280 => 216,  261 => 199,  220 => 160,  181 => 126,  163 => 110,  138 => 87,  116 => 67,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c99bda3c6bf360f5b3a0dd8d6335f7ca69206fadfaab63a2dcdf2355d605eced", "");
    }
}
