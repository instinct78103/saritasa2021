<?php


if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_Nectar_Flip_Box extends WPBakeryShortCode
    {
    }
}

function map_flip_box()
{
    return [
        "name" => __("Flip Box", "js_composer"),
        "base" => "nectar_flip_box",
        "icon" => sar_image_url('logo-small.png'),
        "category" => __('Saritasa', 'js_composer'),
        "description" => __('Add a flip box element', 'js_composer'),
        "params" => [
            [
                "type" => "textarea",
                "heading" => __("Front Box Content", "js_composer"),
                "param_name" => "front_content",
                "description" => __("The text that will display on the front of your flip box", "js_composer"),
                "group" => 'Front Side',
            ],
            [
                "type" => "fws_image",
                "heading" => __("Background Image", "js_composer"),
                "param_name" => "image_url_1",
                "value" => "",
                "group" => 'Front Side',
                "description" => __("Select a background image from the media library.", "js_composer"),
            ],
            [
                "type" => "colorpicker",
                "class" => "",
                "heading" => "Background Color",
                "group" => 'Front Side',
                "param_name" => "bg_color",
                "value" => "",
                "description" => "",
            ],
            [
                "type" => 'checkbox',
                "heading" => __("BG Color overlay on BG Image", "js_composer"),
                "param_name" => "bg_color_overlay",
                "group" => 'Front Side',
                "description" => __("Checking this will overlay your BG color on your BG image", "js_composer"),
                "value" => [__("Yes", "js_composer") => 'true'],
            ],
            [
                "type" => "dropdown",
                "class" => "",
                "group" => 'Front Side',
                "heading" => "Text Color",
                "param_name" => "text_color",
                "value" => [
                    "Dark" => "dark",
                    "Light" => "light",
                ],
                'save_always' => true,
            ],
            [
                'type' => 'dropdown',
                'heading' => __('Icon library', 'js_composer'),
                "group" => 'Front Side',
                'value' => [
                    __('Font Awesome', 'js_composer') => 'fontawesome',
                    __('Iconsmind', 'js_composer') => 'iconsmind',
                    __('Linea', 'js_composer') => 'linea',
                    __('Steadysets', 'js_composer') => 'steadysets',
                ],
                'param_name' => 'icon_family',
                'description' => __('Select icon library.', 'js_composer'),
            ],
            [
                "type" => "iconpicker",
                "heading" => __("Icon Above Title", "js_composer"),
                "param_name" => "icon_fontawesome",
                "group" => 'Front Side',
                "settings" => ["emptyIcon" => true, "iconsPerPage" => 4000],
                "dependency" => ['element' => "icon_family", 'value' => 'fontawesome'],
                "description" => __("Select icon from library.", "js_composer"),
            ],
            [
                "type" => "iconpicker",
                "heading" => __("Icon", "js_composer"),
                "param_name" => "icon_iconsmind",
                "group" => 'Front Side',
                "settings" => ['type' => 'iconsmind', 'emptyIcon' => false, "iconsPerPage" => 4000],
                "dependency" => ['element' => "icon_family", 'value' => 'iconsmind'],
                "description" => __("Select icon from library.", "js_composer"),
            ],
            [
                "type" => "iconpicker",
                "heading" => __("Icon Above Title", "js_composer"),
                "param_name" => "icon_linea",
                "group" => 'Front Side',
                "settings" => ['type' => 'linea', "emptyIcon" => true, "iconsPerPage" => 4000],
                "dependency" => ['element' => "icon_family", 'value' => 'linea'],
                "description" => __("Select icon from library.", "js_composer"),
            ],
            [
                "type" => "iconpicker",
                "heading" => __("Icon", "js_composer"),
                "param_name" => "icon_steadysets",
                "group" => 'Front Side',
                "settings" => ['type' => 'steadysets', 'emptyIcon' => false, "iconsPerPage" => 4000],
                "dependency" => ['element' => "icon_family", 'value' => 'steadysets'],
                "description" => __("Select icon from library.", "js_composer"),
            ],
            [
                "type" => "dropdown",
                "class" => "",
                'save_always' => true,
                "heading" => "Icon Color",
                "param_name" => "icon_color",
                "group" => 'Front Side',
                "value" => [
                    "Accent Color" => "Accent-Color",
                    "Extra Color 1" => "Extra-Color-1",
                    "Extra Color 2" => "Extra-Color-2",
                    "Extra Color 3" => "Extra-Color-3",
                    "Color Gradient 1" => "extra-color-gradient-1",
                    "Color Gradient 2" => "extra-color-gradient-2",
                ],
                'description' => __('Choose a color from your', 'salient') . ' <a target="_blank" href="' . admin_url() . '?page=Salient&tab=6"> ' . __('globally defined color scheme', 'salient') . '</a>',
            ],
            [
                "type" => "textfield",
                "group" => 'Front Side',
                "heading" => __("Icon Size", "js_composer"),
                "param_name" => "icon_size",
                "description" => __("Please enter the size for your icon. Enter in number of pixels - Don't enter \"px\", default is \"60\"", "js_composer"),
            ],
            [
                "type" => "textarea_html",
                "heading" => __("Back Box Content", "js_composer"),
                "param_name" => "content",
                "admin_label" => true,
                "group" => 'Back Side',
                "description" => __("The content that will display on the back of your flip box", "js_composer"),
            ],
            [
                "type" => "fws_image",
                "heading" => __("Background Image", "js_composer"),
                "param_name" => "image_url_2",
                "value" => "",
                "group" => 'Back Side',
                "description" => __("Select a background image from the media library.", "js_composer"),
            ],
            [
                "type" => "colorpicker",
                "class" => "",
                "heading" => "Background Color",
                "group" => 'Back Side',
                "param_name" => "bg_color_2",
                "value" => "",
                "description" => "",
            ],
            [
                "type" => 'checkbox',
                "heading" => __("BG Color overlay on BG Image", "js_composer"),
                "param_name" => "bg_color_overlay_2",
                "group" => 'Back Side',
                "description" => __("Checking this will overlay your BG color on your BG image", "js_composer"),
                "value" => [__("Yes", "js_composer") => 'true'],
            ],
            [
                "type" => "dropdown",
                "class" => "",
                "group" => 'Back Side',
                "heading" => "Text Color",
                "param_name" => "text_color_2",
                "value" => [
                    "Dark" => "dark",
                    "Light" => "light",
                ],
                'save_always' => true,
            ],
            [
                "type" => "textfield",
                "heading" => __("Min Height", "js_composer"),
                "param_name" => "min_height",
                "admin_label" => false,
                "group" => 'General Settings',
                "description" => __("Please enter the minimum height you would like for you box. Enter in number of pixels - Don't enter \"px\", default is \"300\"", "js_composer"),
            ],

            [
                "type" => "dropdown",
                "class" => "",
                'save_always' => true,
                "heading" => "Horizontal Content Alignment",
                "param_name" => "h_text_align",
                "group" => 'General Settings',
                "value" => [
                    "Left" => "left",
                    "Center" => "center",
                    "Right" => "right",
                ],
            ],
            [
                "type" => "dropdown",
                "class" => "",
                'save_always' => true,
                "heading" => "Vertical Content Alignment",
                "param_name" => "v_text_align",
                "group" => 'General Settings',
                "value" => [
                    "Top" => "top",
                    "Center" => "center",
                    "Bottom" => "bottom",
                ],
            ],

            [
                "type" => "dropdown",
                "class" => "",
                'save_always' => true,
                "heading" => "Flip Direction",
                "param_name" => "flip_direction",
                "group" => 'General Settings',
                "value" => [
                    "Horizontal To Left" => "horizontal-to-left",
                    "Horizontal To Right" => "horizontal-to-right",
                    "Vertical To Bottom" => "vertical-to-bottom",
                    "Vertical To Top" => "vertical-to-top",
                ],
            ],
        ],
        "html_template" => SAR_TEMPLATES . '/elements/flip-box.php',
    ];
}

if (function_exists('vc_lean_map')) {
    add_action('vc_before_init', function () {
        vc_lean_map('nectar_flip_box', 'map_flip_box');
    });
}