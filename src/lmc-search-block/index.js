import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps } from "@wordpress/block-editor";
import { Disabled } from "@wordpress/components";
import ServerSideRender from "@wordpress/server-side-render";

import "./style.scss";
import "./editor.scss";

registerBlockType("lmc-search-plugin/lmc-search-block", {

	edit: function (props) {
		const blockProps = useBlockProps({
			className: "lmc-search-block",
		});

		return (
			<div {...blockProps}>
				<Disabled>
					<ServerSideRender
						block="lmc-search-plugin/lmc-search-block"
					/>
				</Disabled>
			</div>
		);
	},
	save: function () {
		return null;
	},
});
