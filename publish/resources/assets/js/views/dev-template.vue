<template>
	<div>
		<h1 class="title is-1 has-text-centered">DevTemplate</h1>
		<p  class="title is-1 has-text-centered">THIS IS CONTENT OF: dev-template\publish\resources\assets\js\views\dev-template.vue</p>

		<div v-for="(model, index) in models" class="hero"  >
			<h1 class="title is-1 has-text-centered centered"> 
				DevTemplate {{ model.id }}
			</h1>
		</div>
		
		<h2 class="title is-2 has-text-centered">Example of component dev-template-detail</h2>
		<dev-template-detail></dev-template-detail>

	</div>
</template>


<style>

</style>


<script>
	import DevTemplateDetail from '../../components/dev-template/dev-template-detail';

	export default {

		data(){
			return {
				models:	[],
			};
		},
		created(){
			axios.get('/db/dev-template').then( response => this.models = response.data );
		},
		mounted(){

		}, 
		methods:{

		},
		components:{
			'dev-template-detail': DevTemplateDetail,
		}
	};
</script> 
