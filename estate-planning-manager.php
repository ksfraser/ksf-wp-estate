<?php
/**
 * Estate Planning Manager — WordPress UI for Ksfraser\Estate.
 *
 * Displays a client's estate plan (inventory, probate estimate, estate-tax
 * estimate, gap flags) and provides a sync bridge to the PersonalRecordsOrganizer
 * executor-facing app. Calculation logic is delegated to the ksfraser/ksf-estate
 * package — this plugin only renders and bridges.
 *
 * @package Ksfraser\WP\Estate
 * Plugin Name: Estate Planning Manager
 * Description: WordPress UI for KSF estate planning calculations.
 * Version: 1.0.0
 * Author: Kevin Fraser
 */

namespace Ksfraser\WP\Estate;

// Render an estate-plan summary card for a given client (debtor_no).
function render_estate_plan( int $debtor_no ): string {
    // Delegate to the shared business logic package.
    // use Ksfraser\Estate\EstatePlanningEngine;
    // $engine = new EstatePlanningEngine(/* pdo */, /* transfer */, /* beneficiary */);
    // $result = $engine->calculate(new CalculationContext('estate_planning', $params));
    return sprintf( '<div class="ksf-estate-plan" data-debtor="%d">%s</div>',
        $debtor_no, esc_html__( 'Estate plan loading…', 'ksf-estate' ) );
}

// Register the shortcode [ksf_estate_plan debtor="123"].
add_shortcode( 'ksf_estate_plan', static function ( $atts ) {
    $atts = shortcode_atts( [ 'debtor' => 0 ], $atts, 'ksf_estate_plan' );
    return render_estate_plan( (int) $atts['debtor'] );
} );
