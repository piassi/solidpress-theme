<?php

namespace Theme\Models;

/**
 * Image Model
 */
class Image {
	/**
	 * Src - image full url
	 *
	 * @var string
	 */
	public $src = '';

	/**
	 * Width - image width size
	 *
	 * @var int
	 */
	public $width = 0;

	/**
	 * Height - image height size
	 *
	 * @var int
	 */
	public $height = 0;

	/**
	 * Alt - image alt text
	 *
	 * @var string
	 */
	public $alt = '';

	/**
	 * Sizes - Image alternative sizes
	 *
	 * @var array
	 */
	public $sizes = array();

	/**
	 * Init Image model instance
	 *
	 * @param string  $src
	 * @param integer $width
	 * @param integer $height
	 * @param string  $alt
	 * @param array   $sizes
	 */
	public function __construct( string $src = '', int $width = 0, int $height = 0, string $alt = '', array $sizes = array() ) {
		$this->src    = $src;
		$this->width  = $width;
		$this->height = $height;
		$this->alt    = $alt;
		$this->sizes  = $sizes;

		return $this;
	}

	/**
	 * Create new Image object from post thumbnail
	 *
	 * @param integer|WP_Post $post - Post ID or WP_Post object. Default is global $post.
	 * @return Image
	 */
	public static function from_post_thumbnail( $post = 0 ): Image {
		$post          = get_post( $post );
		$id            = isset( $post->ID ) ? $post->ID : 0;
		$attachment_id = get_post_thumbnail_id( $id );

		return self::from_acf( acf_get_attachment( $attachment_id ) );
	}

	/**
	 * Create new Image object from ACF image field
	 *
	 * @param array $acf_field
	 * @return Image
	 */
	public static function from_acf( $acf_field ): Image {
		return new Image(
			$acf_field['url'] ?? '',
			$acf_field['width'] ?? 0,
			$acf_field['height'] ?? 0,
			$acf_field['alt'] ?? '',
			$acf_field['sizes'] ?? array()
		);
	}

	/**
	 * Return a new Image object for provided size
	 *
	 * @param string $size - image size as defined in add_image_size
	 * @return Image
	 */
	public function size( string $size ): Image {
		return new Image(
			$this->sizes[ $size ] ?? $this->src,
			$this->sizes[ "{$size}-width" ] ?? $this->width,
			$this->sizes[ "{$size}-height" ] ?? $this->height,
			$this->alt
		);
	}

	/**
	 * PHP __toString magic method
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->src;
	}
}