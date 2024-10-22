import Vue from 'vue'
import './vueBootstrap.js'
import SearchEngineWidget from './views/SearchEngineWidget.vue'

document.addEventListener('DOMContentLoaded', () => {
	OCA.Dashboard.register('searchenginedashboard-vue-widget', (el, { widget }) => {
		const View = Vue.extend(SearchEngineWidget)
		new View({
			propsData: { title: widget.title },
		}).$mount(el)
	})
})