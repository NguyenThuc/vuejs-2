<template>
    <div>
        <SideBarLeft></SideBarLeft>

        <div class="page-aside-left">
            <div class="page bg-white">

                <div class="page-header pb-0">
                    <h1 class="page-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" class="modal-icons float-left mr-10 mr-5"><g fill="none" fill-rule="evenodd"><circle cx="13.75" cy="17.75" r="3.75" fill="#DADFE3"></circle><g stroke-width="1.5" stroke-linecap="round"><path stroke="#6F7C87" d="M29.39 31.39H5.75a2 2 0 0 1-2-2V5.75a2 2 0 0 1 2-2h23.64a2 2 0 0 1 2 2v23.64a2 2 0 0 1-2 2z"></path><path stroke="#000" d="M16.838 16.788a3.448 3.448 0 1 1-6.897 0 3.448 3.448 0 0 1 6.897 0zm-8.375 9.327a3.135 3.135 0 0 1 3.135-3.135h3.583a3.135 3.135 0 0 1 3.136 3.135m9.899-14.26a4.718 4.718 0 1 1-9.435 0 4.718 4.718 0 0 1 9.435 0zm-4.761-1.817v3.436m-1.718-1.718h3.436" stroke-linejoin="round"></path></g></g></svg>
                        New contact</h1>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item">
                            <router-link  data-placement="right" data-toggle="tooltip"
                                          data-original-title="Contact" to="/contact" >
                                Home
                            </router-link>
                            </li>
                        <li class="breadcrumb-item">
                        <router-link  data-placement="right" data-toggle="tooltip"
                                      data-original-title="Contact" to="/contact">
                            Contacts
                        </router-link>
                        </li>
                        <li class="breadcrumb-item active">New Contact</li>
                    </ol>
                </div>

                <!-- Contacts Content -->
                <div class="page-main page-content p-0">
                     <div class="panel-body ">
                        <div class="row row-lg">
                            <div class="col-md-12 col-lg-6">

                                <form  method="post"  v-on:submit.prevent="addContact" >

                                    <div v-if="errors.length">
                                        <b class="text-danger">Please correct the following error(s):</b>

                                        <ul class="error-messages">
                                            <li class="custom-error"  v-for="(value, key) in errors" :key="key">
                                                <span class="text-danger" v-text="value" />
                                            </li>
                                        </ul>

                                    </div>


                                    <div class="form-group form-group-sm row">
                                        <label class="col-md-3 col-form-label font-weight-400">Full Name: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-sm" name="name" v-model="form.name" placeholder="Enter the name of this person" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm row">
                                        <label class="col-md-3 col-form-label font-weight-400">Title: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-sm"  v-model="form.job_title" name="job_title" placeholder="Enter a title" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group form-group-sm row">
                                        <label class="col-md-3 col-form-label font-weight-400">Avatar: </label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control form-control-sm" name="File"  autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label font-weight-400">Company: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-sm" name="company"  v-model="form.company" placeholder="Enter an company" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group  row">
                                        <label class="col-md-3 col-form-label font-weight-400">About: </label>
                                        <div class="col-md-9">
                                            <textarea v-model="form.about" class="form-control form-control-sm" placeholder="Enter some text"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label font-weight-400"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary waves-effect waves-classic" > ADD CONTACT </button>
                                            <button type="reset" class="btn btn-default btn-outline waves-effect waves-classic">RESET</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <TheFooter> </TheFooter>
    </div>
</template>

<script>
    import SideBarLeft from "@/components/SideBarLeft";
    import TheFooter from "@/components/TheFooter";
    import axios from 'axios';
    export default {
        name: "Contact-add",
        components : { SideBarLeft ,TheFooter } ,
        data() {
            return {
                errors: [],
                info: [],
                result : [],
                auth_token :[],
                form: {
                    name: "",
                    job_title: "",
                    company: null,
                    avatar: null,
                    about: ""
                },

            }
        },
        methods: {
            checkForm: function (e) {
                this.errors = [];
                if (!this.form.name) {
                    this.errors.push('Name required.');
                }
                if (!this.form.job_title) {
                    this.errors.push("Title required.");
                }
                else if (!this.errors.length) {
                    return true;
                }
                e.preventDefault();
            },
            addContact () {
                this.auth_token = localStorage.getItem("auth_token") ;
                this.$http.post('/v1/contact' , JSON.stringify(this.form) ,{
                    headers: {
                        'X-STRINGEE-AUTH' : eval(this.auth_token),
                    }
                })
                    .then(respond => {
                     //   console.log(respond);
                        if(respond.data.msg=="Success") {
                            this.$router.push('/contact');
                        }else {
                            this.errors.push(respond.data.msg );
                        }
                        return respond.data;
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })

            }
        }

    }
</script>

<style scoped>
    @import '../assets/css/contacts.css';
</style>