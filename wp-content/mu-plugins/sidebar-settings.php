<?php

add_action("acf/init", function () {
  acf_add_options_page([
    "page_title" => __("Sidebar", "municipio-gatsby-intranet"),
    "menu_title" => __("Sidebar", "municipio-gatsby-intranet"),
    "menu_slug" => "municipio-intranet-sidebar-settings",
    "capability" => "edit_posts",
    "parent_slug" => "themes.php",
    "show_in_graphql" => true,
    "graphql_field_name" => "municipioIntranetSidebarSettings",
  ]);

  acf_add_local_field_group([
    "key" => "group_municipio_intranet_sidebar",
    "title" => __("Available tools", "municipio-gatsby-intranet"),
    "fields" => [
      [
        "key" => "field_municipio_intranet_sidebar_tools",
        "label" => __("Available tools", "municipio-gatsby-intranet"),
        "name" => "tools",
        "type" => "repeater",
        "show_in_graphql" => true,
        "layout" => "table",
        "button_label" => __("Add tools", "municipio-gatsby-intranet"),
        "sub_fields" => [
          [
            "key" => "field_municipio_intranet_sidebar_tools_name",
            "label" => __("Name", "municipio-gatsby-intranet"),
            "name" => "label",
            "type" => "text",
            "show_in_graphql" => true,
          ],
          [
            "key" => "field_municipio_intranet_sidebar_tools_url",
            "label" => __("URL", "municipio-gatsby-intranet"),
            "name" => "url",
            "type" => "url",
            "show_in_graphql" => true,
          ],
        ],
      ],
    ],
    "location" => [
      [
        [
          "param" => "options_page",
          "operator" => "==",
          "value" => "municipio-intranet-sidebar-settings",
        ],
      ],
    ],
    "show_in_graphql" => true,
    "graphql_field_name" => "tools",
  ]);
});
