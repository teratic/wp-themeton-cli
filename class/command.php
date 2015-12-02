<?php

/**
 * Migrate your DB using WP Sync DB.
 */
class ThemetonCLI extends WP_CLI_Command {

	/**
	 * Compile less files of theme.
	 **
	 * ## EXAMPLES
	 *
	 * 	wp themeton lessc
	 *
	 *
	 * @since 1.0
	 */
	public function lessc( $args, $assoc_args ) {
    if (!class_exists('TTLess')) {
      WP_CLI::error( 'Themeton required class not present');
    }

		$result =   TTLess::build_css();

		if ( $result ) {
			WP_CLI::success( __( 'Less files compiled successfully', 'wp-themeton-cli' ) . ' : ' . $result );
		}

	}

}

WP_CLI::add_command( 'themeton', 'ThemetonCLI' );
