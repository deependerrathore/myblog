<template>
    <div class="slug-widget">
        <div class="icon-wrapper wrapper">
        <b-icon pack="fa" icon="link"></b-icon>
        </div>

        <div class="url-wrapper wrapper">
            <span class="root-url">{{url}}</span>
            <span class="subdirectory-">/{{subdirectory}}/</span>
            <span class="slug" v-show="slug && !isEditing">{{slug}}</span>
            <input type="text" class="input is-small" name="slug-edit" v-show="isEditing" v-model="customSlug"/>
        </div>

        <div class="button-wrapper wrapper">
            <button class="button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="resetSlug">Reset</button>
        </div>
 
    </div>
</template>

<style scoped>
    .slug-widget{
        display:flex;
        justify-content:flex-start;
        align-items: flex-start;
    }
    .wrapper{
        margin-left:8px;
    }
    .slug{
        background-color: aquamarine;
        padding: 3px 5px;
    }
    .input{
        width: auto;
    }
</style>
<script>
export default {
    props:{
        url:{
            type: String,
            required: true,
        },
        subdirectory:{
            type: String,
            required: true,
        },
        title:{
            type: String,
            required: true,
        }
    },
    data(){
        return {
            slug: this.convertTitle(),
            isEditing: false,
            customSlug: '',
            wasEdited: false,
        }
    },
    methods:{
        convertTitle: function(){
            return Slug(this.title);
        },
        editSlug:function(){
            this.customSlug = this.slug;
            this.isEditing = true;
        },
        saveSlug:function(){
            if(this.customSlug != this.slug) this.wasEdited = true;
            this.slug = Slug(this.customSlug);
            this.isEditing = false;
        },
        resetSlug:function(){
            this.slug = this.convertTitle();
            this.wasEdited = false;
            this.isEditing = false;
        }
    },
    watch:{
        title:_.debounce(function(){
            if(!this.wasEdited){
                this.slug = this.convertTitle();
            }
        },500),
        slug:function(val){
            this.$emit('slug-changed',val);
        }
    }
}
</script>
