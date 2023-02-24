import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes } = props;
	const { text } = attributes;

	const onChangeText = ( newText ) => {
		setAttributes( { text: newText } );
	};
	return (
		<>
			<div { ...useBlockProps() }>
				<RichText
					className="text-box-title"
					onChange={ onChangeText }
					value={ text }
					placeholder={ __( 'Your Text', 'text-box' ) }
					tagName="h4"
					allowedFormats={ [] }
				/>
			</div>
		</>
	);
}
