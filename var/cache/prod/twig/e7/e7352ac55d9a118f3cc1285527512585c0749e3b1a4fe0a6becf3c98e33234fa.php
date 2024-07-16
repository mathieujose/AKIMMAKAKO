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

/* __string_template__db1365c81d4332302d50c5a0633ba2eede64d90dcd34f2a4a16788c6987c1f50 */
class __TwigTemplate_2ef91dae8e45215179db53105f24d1b897ccf96014e1035a8d024c022c7d37ea extends Template
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

<title>Couleurs • AKIMMAKAKO Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignColors';
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
    var token = '1e6af9fa495691c7e7add0fb918aec7e';
    var currentIndex = 'index.php?controller=AdminPsxDesignColors';
    var employee_token = '122de0bc1eb87b0029198e8d7ecd2599';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0';
    var admin_notification_get_link = '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications/ack?_token=V6r2Cp";
        // line 40
        echo "Yv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0';
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
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin361eatbeopv1pplp0s9\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admi";
        // line 70
        echo "n361eatbeopv1pplp0s9\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/prestashop\\/admin361eatbeopv1pplp0s9\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\";
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
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/publi";
        // line 86
        echo "c/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin361eatbeopv1pplp0s9/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin361eatbeopv1pplp0s9\\/index.php?controller=AdminGamification&token=e5a1ced5f335770af8d89f13d427b7ae\";
            var current_id_tab = 160;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin361eatbeopv1pplp0s9/index.php/common/notifications?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0',
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
    <script type=\"module\" src=\"https://unpkg.com/@";
        // line 118
        echo "prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/index-colors.js\"></script>


";
        // line 122
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpsxdesigncolors\"
  data-base-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php\"  data-token=\"V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\"></a>
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
         href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=58004b4e5c18eea28d1d56f045";
        // line 156
        echo "549ff8\"
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
        data-rand=\"29\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/colors?-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\"
        data-post-link=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Couleurs - Liste\"
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
      action=\"/prestashop";
        // line 195
        echo "/admin361eatbeopv1pplp0s9/index.php?controller=AdminSearch&amp;token=85d9189e11dacb4a89f8f2b0c85f4891\"
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
        <a class=";
        // line 212
        echo "\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
    >Nouveau bon de réd";
        // line 247
        echo "uction</a>
      <a class=\"dropdown-item quick-row-link\"
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
      data-rand=\"154\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/colors?-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\"
      data-post-link=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminQuickAccesses&token=c78faa5360edd8a6c0d821ab4bd85dda\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Couleurs - Liste\"
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
            &lt;strong&gt;Votre boutique est en mode mainte";
        // line 289
        echo "nance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/maintenance/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\"
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
                          <li class=\"nav-i";
        // line 328
        echo "tem\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
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
              �";
        // line 378
        echo "�tes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
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
        <span class=\"employe";
        // line 427
        echo "e_profile\">Ravi de vous revoir Kossi Mathieu Jose</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/1/edit?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/toggle-navigation?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                            ";
        // line 468
        echo "              
                    
          
            <li class=\"category-title\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
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
                       ";
        // line 504
        echo "                 </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
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
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5";
        // line 541
        echo "\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/invoices/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/credit-slips/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/orders/delivery-slips/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarts&amp;token=c61f8c2fdc6fa0ac9f72056a24dbaa68\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
     ";
        // line 571
        echo "                                   </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
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
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/products?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/categories?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Catégories
                             ";
        // line 600
        echo "   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/monitoring/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminAttributesGroups&amp;token=56f7090d1a206f24c9b21dd4dc2a77f0\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/catalog/brands/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAt";
        // line 630
        echo "tachments\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/attachments/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCartRules&amp;token=58004b4e5c18eea28d1d56f045549ff8\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/stocks/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customers/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <spa";
        // line 660
        echo "n>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customers/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/addresses/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin361eatbeopv";
        // line 691
        echo "1pplp0s9/index.php?controller=AdminCustomerThreads&amp;token=58fd09f09be0805d0bdac81c26cdb399\" class=\"link\">
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
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/sell/customer-service/order-messages/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id";
        // line 720
        echo "=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminReturn&amp;token=fa2a724ad8e4b17b85a7668bff3bbbd8\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics/legacy/stats?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
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
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics/legacy/stats?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                         ";
        // line 750
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/metrics?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/modules/catalog/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                 ";
        // line 785
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/modules/catalog/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/modules/manage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/themes?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arr";
        // line 813
        echo "ow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/themes?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=222e02555197783cbc5cbba9a02d40d6\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/mbo/themes/catalog/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                 ";
        // line 842
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/mail_theme/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/cms-pages/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/design/modules/positions/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp";
        // line 870
        echo "0s9/index.php?controller=AdminImages&amp;token=290084747dcbda4b2c375b83c8741cd3\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/link-widget/list?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Liste de liens
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
                                                      
                              
                                                            
       ";
        // line 902
        echo "                       <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminCarriers&amp;token=f336e9450318bc338175daf31ef47818\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/shipping/preferences/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/payment_methods?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"su";
        // line 931
        echo "bmenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/payment_methods?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/payment/preferences?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/localization/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_ar";
        // line 961
        echo "row_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/localization/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/zones/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/taxes/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                          ";
        // line 991
        echo "                                  
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/improve/international/translations/settings?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Traductions
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
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fff3334a876202b372388481de18c492\" class=";
        // line 1018
        echo "\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/settings?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                      ";
        // line 1056
        echo "  </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/preferences/preferences?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
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
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/preferences/preferences?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/order-preferences/?_token=V6r2CpYv-771bEQMs6s_UYpcydW";
        // line 1084
        echo "cVKs2ufLqmHCKHD0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/product-preferences/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/customer-preferences/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/contacts/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-lev";
        // line 1115
        echo "eltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/shop/seo-urls/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin361eatbeopv1pplp0s9/index.php?controller=AdminSearchConf&amp;token=528e900cdd8205b52161713f79252498\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/system-information/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse";
        // line 1144
        echo "-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/system-information/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/performance/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/administration/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/pr";
        // line 1173
        echo "estashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/emails/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/import/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/employees/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/sql-requests/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                  ";
        // line 1203
        echo "                                          
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/logs/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/webservice-keys/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/feature-flags/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
              ";
        // line 1229
        echo "                  <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/configure/advanced/security/?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"link\"> Sécurité
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
                                                    <i class=\"material-icons su";
        // line 1260
        echo "b-tabs-arrow\">
                                                                    keyboard_arrow_down
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
                      <li class=\"breadcrumb-item\">Personnalisation</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/colors?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" aria-current=\"page\">Couleurs</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Couleurs          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminPsxDesignColors?version=8.1.0&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ";
        // line 1314
        echo "                                                                                                                                                                                                                                                                                                                                                                       <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/themes?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab \" data-submenu=\"158\">
                      Thèmes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/logos?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"159\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/colors?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab active current\" data-submenu=\"160\">
                      Couleurs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                       ";
        // line 1338
        echo "                                         <li class=\"nav-item\">
                    <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/improve/design/fonts?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"161\">
                      Polices
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn";
        // line 1357
        echo "-floating-item btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminPsxDesignColors?version=8.1.0&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1377
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
  <a href=\"/prestashop/admin361eatbeopv1pplp0s9/index.php/modules/pseditionbasic/homepage?_token=V6r2CpYv-771bEQMs6s_UYpcydWcVKs2ufLqmHCKHD0\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1411
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 122
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1377
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

    // line 1411
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
        return "__string_template__db1365c81d4332302d50c5a0633ba2eede64d90dcd34f2a4a16788c6987c1f50";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1594 => 1411,  1573 => 1377,  1562 => 122,  1553 => 1411,  1513 => 1377,  1491 => 1357,  1470 => 1338,  1444 => 1314,  1388 => 1260,  1355 => 1229,  1327 => 1203,  1295 => 1173,  1264 => 1144,  1233 => 1115,  1200 => 1084,  1170 => 1056,  1130 => 1018,  1101 => 991,  1069 => 961,  1037 => 931,  1006 => 902,  972 => 870,  942 => 842,  911 => 813,  881 => 785,  844 => 750,  812 => 720,  781 => 691,  748 => 660,  716 => 630,  684 => 600,  653 => 571,  621 => 541,  582 => 504,  544 => 468,  501 => 427,  450 => 378,  398 => 328,  357 => 289,  313 => 247,  276 => 212,  257 => 195,  216 => 156,  177 => 122,  171 => 118,  137 => 86,  119 => 70,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__db1365c81d4332302d50c5a0633ba2eede64d90dcd34f2a4a16788c6987c1f50", "");
    }
}