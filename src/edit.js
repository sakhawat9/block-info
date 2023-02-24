import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	RichText,
	BlockControls,
	AlignmentToolbar,
} from '@wordpress/block-editor';
import classnames from 'classnames';
import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes } = props;
	const { text, textAlignment, shadow } = attributes;

	const onChangeAlignment = ( newAlignment ) => {
		setAttributes( { textAlignment: newAlignment } );
	};
	const onChangeText = ( newText ) => {
		setAttributes( { text: newText } );
	};

	const classes = classnames( `block-info-align-${ textAlignment }`, {
		'has-shadow': shadow,
	} );
	return (
		<>
			<BlockControls>
				<AlignmentToolbar
					value={ textAlignment }
					onChange={ onChangeAlignment }
				/>
			</BlockControls>
			<div
				{ ...useBlockProps( {
					className: classes,
				} ) }
			>
				<RichText
					className="block-info-title"
					onChange={ onChangeText }
					value={ text }
					placeholder={ __( 'Your Text', 'block-info' ) }
					tagName="h4"
					allowedFormats={ [] }
				/>
			</div>
		</>
	);
}
