@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Permission</h1>
        </div>
    </div>
    <hr class="m-t-10">
    <div class="card">
        <div class="card-content">
            <div class="columns">
                <div class="column">
                    <form action="{{route('permissions.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="block">
                            <b-radio name="permission_type" v-model="permissionType" native-value="basic">Basic Permission</b-radio>
                            <b-radio name="permission_type" v-model="permissionType" native-value="crud">CRUD Permission</b-radio>
                        </div>
                        <div class="field" v-if="permissionType == 'basic'">
                            <div class="field">
                                <label for="display_name" class="label">Name(Display Name)</label>
                                <div class="control">
                                    <input class="input" type="text" name="display_name" id="display_name"/>
                                </div>
                            </div>
                            <div class="field">
                                <label for="name" class="label">Slug</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" id="name"/>
                                </div>
                            </div>
                            <div class="field">
                                <label for="description" class="label">Description</label>
                                <div class="control">
                                    <input class="input" type="text" name="description" id="description" placeholder="Describe what this permission does"/>
                                </div>
                            </div>
                        </div>
                        <div class="field" v-if="permissionType == 'crud'">
                            <div class="field">
                                <label for="resource" class="label">Resource</label>
                                <div class="control">
                                    <input class="input" type="text" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
                                </div>
                            </div>
                            <div class="columns m-t-20">
                                <div class="column is-one-quarter">
                                    <section>
                                        <div class="field">
                                            <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
                                            <b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
                                            <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
                                            <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
                                        </div>
                                    </section>
                                </div>
                                <input type="hidden" name="crud_selected" :value="crudSelected"/>
                                <div class="column">
                                    <table class="table is-fullwidth" v-if="resource.length>=3">
                                        <thead>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                        </thead>
                                        <tbody>
                                            <tr v-for="item in crudSelected">
                                                <td v-text="crudName(item)"></td>
                                                <td v-text="crudSlug(item)"></td>
                                                <td v-text="crudDescription(item)"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <button class="button is-success">Create Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load',function(){
        var app = new Vue({
            el: '#app',
            data(){
                return{
                    permissionType: 'crud',
                    resource:'',
                    crudSelected:[]
                }
            },
            methods: {
                crudName:function(item){
                    return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                },
                crudSlug: function(item) {
                    return item.toLowerCase() + "-" + app.resource.toLowerCase();
                },
                crudDescription: function(item) {
                    return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                }
            },
            
        });
    });
</script>
    @endsection