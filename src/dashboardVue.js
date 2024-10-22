import Vue from 'vue'
import './vueBootstrap.js'
import SearchBarWidget from './views/SearchBarWidget.vue'

document.addEventListener('DOMContentLoaded', () => {
	OCA.Dashboard.register('searchbardashboard-vue-widget', (el, { widget }) => {
		const View = Vue.extend(SearchBarWidget)
		new View({
			propsData: { title: widget.title },
		}).$mount(el)
	})
})