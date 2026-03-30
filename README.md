# LMC Search Box Plugin

Allows insertion of a library catalog search box into any WordPress page viathe `LMC Catalog Search Box` block. In addition, it allows insertion of a Browzine search box into any WordPress page via the `LMC Browzine Search Box` block.

## Structure
The plugin is structured as follows:
- `src/` - Source code for the plugin
    - `lmc-search-block/` - Catalog Search Block
    - `lmc-browzine-search-block/` - Browzine Search Block
- `build/` - Build output for the plugin
- `lmc-search-plugin.php` - Main plugin file

## Build Processes
The block portion of this plugin requires a build process. This is managed using wp-scripts.

The following NPM commands are available:
```bash
npm start      # watch files and recompile on change
npm run build  # do a one-time build with production settings
``
