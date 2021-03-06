<?php
/**
 * Main class
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if ( ! class_exists( 'DEVN_FILTER_Helper' ) ) {

    class DEVN_FILTER_Helper {

        public static function attribute_taxonomies() {
            global $woocommerce;

            if ( ! isset( $woocommerce ) ) {
                return array();
            }

            $attributes = array();
            if ( function_exists( 'wc_get_attribute_taxonomies' ) ) {
                $attribute_taxonomies = wc_get_attribute_taxonomies();
            }
            else {
                $attribute_taxonomies = $woocommerce->get_attribute_taxonomies();
            }

            if ( empty( $attribute_taxonomies ) ) {
                return array();
            }
            foreach ( $attribute_taxonomies as $attribute ) {

                /* FIX TO WOOCOMMERCE 2.1 */
                if ( function_exists( 'wc_attribute_taxonomy_name' ) ) {
                    $taxonomy = wc_attribute_taxonomy_name( $attribute->attribute_name );
                }
                else {
                    $taxonomy = $woocommerce->attribute_taxonomy_name( $attribute->attribute_name );
                }


                if ( taxonomy_exists( $taxonomy ) ) {
                    $attributes[] = $attribute->attribute_name;
                }
            }

            return $attributes;
        }

    }
}