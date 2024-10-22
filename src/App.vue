<template>
	<NcAppContent>
		<div id="searchengine">
		</div>
	</NcAppContent>
</template>

<script>
import NcAppContent from '@nextcloud/vue/dist/Components/NcAppContent.js'

export default {
	name: 'App',
	components: {
		NcAppContent,
	},
}
</script>

<style scoped lang="scss">
#searchengine {
	display: flex;
	justify-content: center;
	margin: 16px;
}
</style>
