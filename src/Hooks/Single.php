<?php
/**
 * Single
 *
 * @package SolidPress
 */

namespace Theme\Hooks;

use SolidPress\Core\Hook;
use Apfelbox\FileDownload\FileDownload;

/**
 * Enqueue assets for current template
 */
class Single extends Hook {

	/**
	 * Adds actions
	 */
	public function __construct() {
        $this->add_action( 'template_redirect', 'template_redirect' );
	}

	/**
	 * Single page redirect
	 *
	 * @return void
	 */
	public function template_redirect(): void {
		if ( ! ( is_single() && get_post_type() === 'post' ) ) {
			return;
		}

		$link = get_field( 'link' );
		if ( has_term( 'link', 'content_type' ) && $link ) {
			wp_safe_redirect( $link, 301 );
		}

		$file = get_attached_file( get_field( 'arquivo' ) );
		if ( has_term( 'documentos', 'content_type' ) && $file ) {
			$file_download = FileDownload::createFromFilePath( $file );
			$file_download->sendDownload( basename( $file ) );
		}
	}
}
