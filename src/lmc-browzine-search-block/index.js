import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { Disabled, PanelBody, TextControl } from "@wordpress/components";
import ServerSideRender from "@wordpress/server-side-render";

import "./style.scss";
import "./editor.scss";

registerBlockType("lmc-search-plugin/lmc-browzine-search-block", {

	edit: function (props) {
		const blockProps = useBlockProps({
			className: "lmc-browzine-search-block",
		});

		return (
			<div {...blockProps}>
				<InspectorControls>
					<PanelBody title={__('Settings', 'lmc-search-plugin')}>
						<TextControl
							label={__('Header Text', 'lmc-search-plugin')}
							value={props.attributes.headerText}
							onChange={(value) => props.setAttributes({ headerText: value })}
						/>
						<TextControl
							label={__('Help Text', 'lmc-search-plugin')}
							value={props.attributes.helpText}
							onChange={(value) => props.setAttributes({ helpText: value })}
						/>
					</PanelBody>
				</InspectorControls>
				<Disabled>
					<ServerSideRender
						block="lmc-search-plugin/lmc-browzine-search-block"
						attributes={props.attributes}
					/>
				</Disabled>
			</div>
		);
	},
	save: function () {
		return null;
	},
});
