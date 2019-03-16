@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Blog Post</h1>
        </div>
        
    </div>
    <hr class="m-t-10">
    
    <form action="{{route('posts.store')}}" method="post">
        {{csrf_field()}}
        <div class="columns">
            <div class="column is-three-quarters">
                <b-field>
                    <b-input placeholder="Post Title" type="text"></b-input>
                </b-field>
                <div>
                    {{url('/blog')}}
                </div>

                <b-field>
                    <b-input type="textarea"
                        rows="30"
                        placeholder="Maxlength automatically counts characters">
                    </b-input>
                </b-field>
            </div> <!--end of .is-three-quarters-->
            <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget">
                    <div class="card-content">
                        <div class="author-widget widget-area">
                            <div class="selected-author">
                                <img src="https://placehold.it/50x50" class="is-pulled-left"/>
                                <div class="author">
                                    <h4>By : Deepender Singh</h4>
                                    <p class="subtitle">
                                        (deep)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-status-widget widget-area">
                            <div class="status">
                                <div class="status-icon">
                                    <b-icon pack="fa" icon="file-text" size="is-medium"></b-icon>
                                </div>
                                <div class="status-details">
                                    <h4><span class="status-emphasis">Draft</span> Saved</h4>
                                    <p>A Few Minutes Ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="publish-buttons-widget widget-area">
                            <div class="secondary-action-button">
                                <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                            </div>
                            <div class="primary-action-button">
                                <button class="button is-primary is-fullwidth">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--end of .is-one-quarter-->
        </div>
    </form>
       
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load',function(){
        var app = new Vue({
            el:'#app',
            data:{
    
            }
        });
    });
</script>
@endsection