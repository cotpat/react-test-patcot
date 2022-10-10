const Path = require('path');
const webpackConfig = require('@syntro-opensource/webpack-config');
const {
    resolves,
    modules,
    plugins,
} = webpackConfig;


const ENV = process.env.NODE_ENV;
const PATHS = {
  // the root path, where your webpack.config.js is located.
  ROOT: Path.resolve(),
  // your node_modules folder name, or full path
  MODULES: 'node_modules',
  // thirdparty folder containing copies of packages which wouldn't be available on NPM
  THIRDPARTY: 'thirdparty',
  // the root path to your javascript source files
  SRC: Path.resolve('app/client/src'),
};

const config = [{
    name: 'default',
    entry: {
      main: Path.resolve(__dirname, 'app/client/src/global/bundle.js')
    },
    output: {
      path: Path.resolve(__dirname, 'app/client/dist/global'),
      filename: 'bundle.js',
    },
    devtool: (ENV !== 'production') ? 'source-map' : '',
    resolve: resolves(ENV, PATHS),
    module: modules(ENV, PATHS),
    plugins: plugins(ENV, PATHS),
    }, {
    name: 'react',
    entry: {
      main: Path.resolve(__dirname, 'app/client/src/react/bundle.jsx')
    },
    output: {
      path: Path.resolve(__dirname, 'app/client/dist/react'),
      filename: 'bundle.js',
    },
    devtool: (ENV !== 'production') ? 'source-map' : '',
    resolve: {
        ...resolves(ENV, PATHS),
        alias: {
            ...resolves(ENV, PATHS).alias,
            // We resolve root fo quick access to scss
            'Root': Path.resolve(__dirname, 'app/client/src/back/'),
        },
        extensions: [
            ...resolves(ENV, PATHS).extensions,
            '.json', '.js', '.jsx', '.gql', '.graphql'
        ],
    },
    module: {
      ...modules(ENV, PATHS),
      rules: [
        ...modules(ENV, PATHS).rules,
        {
          test: /\.(graphql|gql)$/,
          exclude: /node_modules/,
          loader: 'graphql-tag/loader',
        }
      ]
    },
    plugins: plugins(ENV, PATHS),
    }
];

module.exports = config;
