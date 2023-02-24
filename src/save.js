import { useBlockProps, RichText } from '@wordpress/block-editor';
import classnames from 'classnames';
export default function save( { attributes } ) {
	const { text, textAlignment, shadow } = attributes;

	const classes = classnames( `block-info-align-${ textAlignment }`, {
		'has-shadow': shadow,
	} );
	return (
		<RichText.Content
			{ ...useBlockProps.save( { className: classes } ) }
			tagName="h4"
			value={ text }
		/>
	);
}
