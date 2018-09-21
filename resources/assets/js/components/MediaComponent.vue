<template>
    <div class="d-flex col-md-4">
        <div class="card mb-4" style="width: 18rem;">
			<img class="card-img-top" :src="media.thumbnail_url" />
            <div class="card-body">
                <h5 class="card-title">
                    <a :href="'https://www.youtube.com/watch?v='+media.source_id">
                    {{media.title}}
                     </a>
                </h5>
				<p class="card-text">{{media.description}}</p>
                <input type="checkbox" :id="media.id" name="delete[]" :value="media.id">
                <label :for="media.id">Delete this video</label>
			</div>
        </div>
    </div>
</template>
<script>
export default {
        props : ['title', 'media']
    }
</script>
<style>

</style>