const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('web/build/')
  .setPublicPath('/build')
  .addEntry('client', './client/entry.js')
  .enableSourceMaps(!Encore.isProduction())
  .cleanupOutputBeforeBuild()
  .enableReactPreset()
;

module.exports = Encore.getWebpackConfig();
