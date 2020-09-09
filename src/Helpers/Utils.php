<?php
/**
 * Utils class
 *
 * @package SolidPress
 */

namespace Theme\Helpers;

/**
 * Utils class
 */
class Utils {
	/**
	 * Return url encoded svg for image placeholder
	 *
	 * @param integer $width - Svg width.
	 * @param integer $height - Svg height.
	 * @param string  $fill - Fill color, in case of hex format, the '#' must be omitted.
	 * @return string
	 */
	public static function image_placeholder( $width = 0, $height = 0, $fill = 'FFF' ): string {
		return "data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='{$width}' height='{$height}'%3e%3crect width='100%25' height='100%25' fill='%23{$fill}'/%3e%3c/svg%3e";
	}

	/**
	 * Get asset image full url
	 *
	 * @param string $filename
	 * @return string
	 */
	public static function get_asset_image_src( string $filename ): string {
		return get_stylesheet_directory_uri() . '/assets/images/' . $filename;
	}

	/**
	 * Sanitize post data
	 *
	 * @param string $data
	 * @return string
	 */
	public static function sanitize_post( string $data ): string {
		return wp_strip_all_tags( stripslashes( sanitize_text_field( filter_input( INPUT_POST, $data ) ) ) );
	}
}
