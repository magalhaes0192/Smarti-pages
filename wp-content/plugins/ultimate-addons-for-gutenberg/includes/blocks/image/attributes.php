<?php
/**
 * Block Information & Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$image_attribute   = UAGB_Block_Helper::uag_generate_border_attribute( 'image' );
$overlay_attribute = UAGB_Block_Helper::uag_generate_border_attribute(
	'overlay'
);

return array_merge(
	array(
		'height'                      => '',
		'width'                       => '',
		'widthTablet'                 => '',
		'heightTablet'                => '',
		'widthMobile'                 => '',
		'heightMobile'                => '',
		'layout'                      => 'default',
		// image.
		'imageTopMargin'              => '',
		'imageRightMargin'            => '',
		'imageLeftMargin'             => '',
		'imageBottomMargin'           => '',
		'imageTopMarginTablet'        => '',
		'imageRightMarginTablet'      => '',
		'imageLeftMarginTablet'       => '',
		'imageBottomMarginTablet'     => '',
		'imageTopMarginMobile'        => '',
		'imageRightMarginMobile'      => '',
		'imageLeftMarginMobile'       => '',
		'imageBottomMarginMobile'     => '',
		'imageMarginUnit'             => 'px',
		'imageMarginUnitTablet'       => 'px',
		'imageMarginUnitMobile'       => 'px',
		'align'                       => '',
		'alignTablet'                 => '',
		'alignMobile'                 => '',
		// heading.
		'headingShowOn'               => 'always',
		'headingLoadGoogleFonts'      => false,
		'headingFontFamily'           => 'Default',
		'headingFontWeight'           => '',
		'headingFontStyle'            => 'normal',
		'headingTransform'            => '',
		'headingFontSize'             => '',
		'headingColor'                => '#fff',
		'headingTransform'            => '',
		'headingDecoration'           => '',
		'headingFontSizeType'         => 'px',
		'headingFontSizeTypeTablet'   => 'px',
		'headingFontSizeTypeMobile'   => 'px',
		'headingFontSizeMobile'       => '',
		'headingFontSizeTablet'       => '',
		'headingLineHeight'           => 'em',
		'headingLineHeightType'       => 'em',
		'headingLineHeightMobile'     => '',
		'headingLineHeightTablet'     => '',
		'headingTopMargin'            => '',
		'headingRightMargin'          => '',
		'headingLeftMargin'           => '',
		'headingBottomMargin'         => '',
		'headingTopMarginTablet'      => '',
		'headingRightMarginTablet'    => '',
		'headingLeftMarginTablet'     => '',
		'headingBottomMarginTablet'   => '',
		'headingTopMarginMobile'      => '',
		'headingRightMarginMobile'    => '',
		'headingLeftMarginMobile'     => '',
		'headingBottomMarginMobile'   => '',
		'headingMarginUnit'           => 'px',
		'headingMarginUnitTablet'     => 'px',
		'headingMarginUnitMobile'     => 'px',
		// overlay.
		'overlayOpacity'              => 0.2,
		'overlayHoverOpacity'         => 1,
		'overlayPositionFromEdge'     => 15,
		'overlayPositionFromEdgeUnit' => 'px',
		'overlayBackground'           => '',
		// caption.
		'captionShowOn'               => 'hover',
		'captionAlign'                => 'center',
		'captionColor'                => '',
		'captionLoadGoogleFonts'      => false,
		'captionFontFamily'           => '',
		'captionFontStyle'            => 'normal',
		'captionTransform'            => '',
		'captionDecoration'           => '',
		'captionFontSizeType'         => 'px',
		'captionFontSizeTypeTablet'   => 'px',
		'captionFontSizeTypeMobile'   => 'px',
		'captionLineHeightType'       => 'em',
		'captionFontSize'             => '',
		'captionFontWeight'           => '',
		'captionFontSizeTablet'       => '',
		'captionFontSizeMobile'       => '',
		'captionLineHeight'           => '',
		'captionLineHeightTablet'     => '',
		'captionLineHeightMobile'     => '',
		'captionTopMargin'            => '',
		'captionRightMargin'          => '',
		'captionLeftMargin'           => '',
		'captionBottomMargin'         => '',
		'captionTopMarginTablet'      => '',
		'captionRightMarginTablet'    => '',
		'captionLeftMarginTablet'     => '',
		'captionBottomMarginTablet'   => '',
		'captionTopMarginMobile'      => '',
		'captionRightMarginMobile'    => '',
		'captionLeftMarginMobile'     => '',
		'captionBottomMarginMobile'   => '',
		'captionMarginUnit'           => 'px',
		'captionMarginUnitTablet'     => 'px',
		'captionMarginUnitMobile'     => 'px',
		// seperator.
		'seperatorShowOn'             => 'hover',
		'seperatorStyle'              => '',
		'seperatorColor'              => '#fff',
		'seperatorWidth'              => 30,
		'separatorWidthType'          => '%',
		'seperatorThickness'          => 2,
		'seperatorThicknessUnit'      => 'px',
		'seperatorTopMargin'          => '',
		'seperatorRightMargin'        => '',
		'seperatorLeftMargin'         => '',
		'seperatorBottomMargin'       => '',
		'seperatorTopMarginTablet'    => '',
		'seperatorRightMarginTablet'  => '',
		'seperatorLeftMarginTablet'   => '',
		'seperatorBottomMarginTablet' => '',
		'seperatorTopMarginMobile'    => '',
		'seperatorRightMarginMobile'  => '',
		'seperatorLeftMarginMobile'   => '',
		'seperatorBottomMarginMobile' => '',
		'seperatorMarginUnit'         => 'px',
		'seperatorMarginUnitTablet'   => 'px',
		'seperatorMarginUnitMobile'   => 'px',
		// image shadow.
		'useSeparateBoxShadows'       => true,
		'imageBoxShadowColor'         => '#00000070',
		'imageBoxShadowHOffset'       => 0,
		'imageBoxShadowVOffset'       => 0,
		'imageBoxShadowBlur'          => '',
		'imageBoxShadowSpread'        => '',
		'imageBoxShadowPosition'      => 'outset',
		'imageBoxShadowColorHover'    => '',
		'imageBoxShadowHOffsetHover'  => 0,
		'imageBoxShadowVOffsetHover'  => 0,
		'imageBoxShadowBlurHover'     => '',
		'imageBoxShadowSpreadHover'   => '',
		'imageBoxShadowPositionHover' => 'outset',
		// mask.
		'maskShape'                   => 'none',
		'maskSize'                    => 'auto',
		'maskPosition'                => 'center center',
		'maskRepeat'                  => 'no-repeat',
		'objectFit'                   => '',
		'objectFitTablet'             => '',
		'objectFitMobile'             => '',
		'headingLetterSpacing'        => '',
		'headingLetterSpacingTablet'  => '',
		'headingLetterSpacingMobile'  => '',
		'headingLetterSpacingType'    => 'px',
		'captionLetterSpacing'        => '',
		'captionLetterSpacingTablet'  => '',
		'captionLetterSpacingMobile'  => '',
		'captionLetterSpacingType'    => 'px',
		'customHeightSetDesktop'      => false,
		'customHeightSetTablet'       => false,
		'customHeightSetMobile'       => false,
		// For Global Block Styles.
		'globalBlockStyleName'        => '',
		'globalBlockStyleId'          => '',
		'disableLazyLoad'             => false,
	),
	$image_attribute,
	$overlay_attribute
);
