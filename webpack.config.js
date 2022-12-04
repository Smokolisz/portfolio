const path = require('path');


// const PurgecssPlugin = require('purgecss-webpack-plugin');

module.exports = {
    entry: ['./src/index.js', './src/index.css'],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
        clean: true,
    },
    optimization: {
        minimize: true,
        removeEmptyChunks: true,
        removeAvailableModules: true,
        providedExports: true,
    },
    module: {
        rules: [
            
        ]
    },
    plugins: [
        // new PurgecssPlugin({
        //     paths: glob.sync(`${PATHS.src}/**/*`, { nodir: true })
        // })
    ]
};