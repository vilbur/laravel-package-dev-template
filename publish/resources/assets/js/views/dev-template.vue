<template>
	<div>
		<div v-for="(model, index) in models" class="hero"  >
			<h1 class="title is-1 has-text-centered centered">
				DevTemplate {{ model.id }}
			</h1>
		</div>
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
			axios.get('/api/dev-template').then( response => this.models = response.data );
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
