const webpackConfig = require('@nextcloud/webpack-vue-config')
const ESLintPlugin = require('eslint-webpack-plugin')
const StyleLintPlugin = require('stylelint-webpack-plugin')
const path = require('path')

const appId = 'dashboardsearchbar'
webpackConfig.entry = {
	main: { import: path.join(__dirname, 'src', 'main.js'), filename: 'main.js' },
	dashboardVue: { import: path.join(__dirname, 'src', 'dashboardVue.js'), filename: appId + '-dashboardVue.js' },
}

webpackConfig.plugins.push(
	new ESLintPlugin({
		extensions: ['js', 'vue'],
		files: 'src',
		configType: 'flat',
		eslintPath: 'eslint/use-at-your-own-risk'
	}),
)
webpackConfig.plugins.push(
	new StyleLintPlugin({
		files: 'src/**/*.{css,scss,vue}',
	}),
)

webpackConfig.module.rules.push({
	test: /\.svg$/i,
	type: 'asset/source',
})

module.exports = webpackConfig
