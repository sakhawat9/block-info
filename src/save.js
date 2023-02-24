import { useBlockProps, RichText } from '@wordpress/block-editor';
import classnames from 'classnames';
export default function save( { attributes } ) {
	const { text, textAlignment, shadow, shadowOpacity } = attributes;

	const classes = classnames( `block-info-wrapper`, {
		'has-shadow': shadow,
		[ `shadow-opacity-${ shadowOpacity }` ]: shadow && shadowOpacity,
	} );
	const textClasses = classnames(
		`block-info-title`,
		`block-info-align-${ textAlignment }`
	);
	return (
		<div { ...useBlockProps.save( { className: classes } ) }>
			<span className="dashicons dashicons-info-outline"></span>
			<RichText.Content
				className={ textClasses }
				tagName="h4"
				value={ text }
			/>
		</div>
	);
}
