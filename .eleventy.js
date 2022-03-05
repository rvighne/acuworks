module.exports = config => {
	config.addGlobalData('layout', 'layout')
	config.setTemplateFormats(['ejs'])
	config.addPassthroughCopy('styles')
	config.addPassthroughCopy('fonts')
	config.addPassthroughCopy('images')
}
