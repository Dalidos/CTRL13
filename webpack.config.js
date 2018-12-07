var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('bundle', './assets/js/main.js')
    .addStyleEntry('global', './assets/less/main.less')
    .enableLessLoader()
    .autoProvidejQuery()
    .enablePostCssLoader((options) => {
           options.config = {
                   path: 'postcss.config.js'
             };
        })
    .enableVersioning()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();
