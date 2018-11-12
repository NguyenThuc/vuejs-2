<template>

    <div>

<SideBarLeft></SideBarLeft>

        <div class="body app-contacts page-aside-left">
            <div class="page bg-white">
                <div class="page-aside">
                    <!-- Contacts Sidebar -->
                    <div class="page-aside-switch">
                        <i class="icon md-chevron-left" aria-hidden="true"></i>
                        <i class="icon md-chevron-right" aria-hidden="true"></i>
                    </div>
                    <div class="page-aside-inner page-aside-scroll">
                        <div data-role="container">
                            <div data-role="content">
                                <div class="page-aside-section">
                                    <div class="list-group">
                                        <a class="list-group-item justify-content-between" href="#">
                  <span>
                    <i class="icon md-inbox" aria-hidden="true"></i> All contacts
                  </span>
                                            <span class="item-right">61</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="page-aside-section">
                                    <h5 class="page-aside-title">LABEL</h5>
                                    <div class="list-group has-actions">
                                        <div class="list-group-item" data-plugin="editlist">
                                            <div class="list-content">
                                                <span class="item-right">10</span>
                                                <span class="list-text">Work</span>
                                                <div class="item-actions">
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="list-editable">
                                                <div class="form-group form-material">
                                                    <input type="text" class="form-control empty" name="label" value="Work">
                                                    <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
                                                            aria-label="Close" aria-expanded="true"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item" data-plugin="editlist">
                                            <div class="list-content">
                                                <span class="item-right">5</span>
                                                <span class="list-text">Family</span>
                                                <div class="item-actions">
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="list-editable">
                                                <div class="form-group form-material">
                                                    <input type="text" class="form-control empty" name="label" value="Family">
                                                    <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
                                                            aria-label="Close" aria-expanded="true"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item" data-plugin="editlist">
                                            <div class="list-content">
                                                <span class="item-right">16</span>
                                                <span class="list-text">Private</span>
                                                <div class="item-actions">
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="list-editable">
                                                <div class="form-group form-material">
                                                    <input type="text" class="form-control empty" name="label" value="Private">
                                                    <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
                                                            aria-label="Close" aria-expanded="true"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item" data-plugin="editlist">
                                            <div class="list-content">
                                                <span class="item-right">30</span>
                                                <span class="list-text">Friends</span>
                                                <div class="item-actions">
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
                                                    <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="list-editable">
                                                <div class="form-group form-material">
                                                    <input type="text" class="form-control empty" name="label" value="Friends">
                                                    <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
                                                            aria-label="Close" aria-expanded="true"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <a id="addLabelToggle" class="list-group-item" href="#" data-toggle="modal"
                                           data-target="#addLabelForm">
                                            <i class="icon md-plus" aria-hidden="true"></i> Add New Label
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contacts Content -->
                <div class="page-main">
                    <!-- Contacts Content Header -->
                    <div class="page-header">
                        <h1 class="page-title">Contact List</h1>
                        <div class="page-header-actions">
                            <form>
                                <div class="input-search input-search-dark">
                                    <i class="input-search-icon md-search" aria-hidden="true"></i>
                                    <input type="text" class="form-control" name="" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contacts Content -->
                    <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">
                        <!-- Actions -->
                        <div class="page-content-actions">
                            <div class="float-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-pure" data-toggle="dropdown" aria-expanded="false">
                                        More
                                        <span class="icon md-chevron-down" aria-hidden="true"></span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">More</a>
                                        <a class="dropdown-item" href="#">More</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
                            </div>
                            <div class="btn-group btn-group-flat">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
                                            type="button"><i class="icon md-folder" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">work</a>
                                        <a class="dropdown-item" href="#">Family</a>
                                        <a class="dropdown-item" href="#">Private</a>
                                        <a class="dropdown-item" href="#">Friends</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Trash</a>
                                        <a class="dropdown-item" href="#">Spam</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
                                            type="button"><i class="icon md-tag" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">work</a>
                                        <a class="dropdown-item" href="#">Family</a>
                                        <a class="dropdown-item" href="#">Private</a>
                                        <a class="dropdown-item" href="#">Friends</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contacts -->


                        <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr"
                               data-selectable="selectable">
                            <thead>
                            <tr>
                                <th class="pre-cell"></th>
                                <th class="cell-30" scope="col">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                  />
                  <label for="select_all"></label>
                </span>
                                </th>
                                <th class="cell-300" scope="col">Name</th>
                                <th class="cell-300" scope="col">Job Title</th>
                                <th scope="col">Company</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">About</th>
                                <th class="suf-cell"></th>
                            </tr>
                            </thead>
                            <tbody>

<!--{{datas.rows}}-->
<!--<tr v-for='data in datas'>-->
    <!--<td>{{data.id}}</td>-->
    <!--<td>{{data.name}}</td>-->
    <!--<td>{{data.password}}</td>-->
    <!--<td>{{data.age}}</td>-->
<!--</tr>-->

                            <tr   v-for='data in datas.rows' data-url="panel.tpl" data-toggle="slidePanel">

                                <td class="pre-cell"></td>
                                <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_10"
                  />
                  <label for="contacts_10"></label>
                </span>
                                </td>
                                <!--<td class="cell-300">-->
                                    <!--<a class="avatar" href="#">-->
                                        <!--&lt;!&ndash;<img class="img-fluid" src="../../global/portraits/10.jpg" alt="...">&ndash;&gt;-->
                                    <!--</a>-->
                                    <!--Ronnie Ellis-->
                                <!--</td>-->
                                <td class="">{{data.name}}</td>
                                <td class="">{{data.job_title}}</td>
                                <td class="">{{data.company}}</td>
                                <td class="">{{data.company_name}}</td>
                                <td class="">{{data.about}}</td>

                                <td class="suf-cell"></td>
                            </tr>
                            </tbody>
                        </table>

                        <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
                    </div>
                </div>
            </div>
        </div>

    <!-- Site Action -->
    <div class="site-action" data-plugin="actionBtn">
        <router-link   to = "/contact/add">
        <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic">
            <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
            <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
        </button>
        </router-link>
        <!--<button type="button"   class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic">-->
            <!--<router-link   to = "/contact/add">-->
                <!--<i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>-->
                <!--<i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>-->
            <!--</router-link>-->
        <!--</button>-->
        <div class="site-action-buttons">
            <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                <i class="icon md-delete" aria-hidden="true"></i>
            </button>
            <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                <i class="icon md-folder" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <!-- End Site Action -->

        <div class="site-gridmenu">
            <div>
                <div>
                    <ul>
                        <li>
                            <a href="apps/mailbox/mailbox.html">
                                <i class="icon md-email"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/calendar/calendar.html">
                                <i class="icon md-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/contacts/contacts.html">
                                <i class="icon md-account"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/media/overview.html">
                                <i class="icon md-videocam"></i>
                                <span>Media</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/documents/categories.html">
                                <i class="icon md-receipt"></i>
                                <span>Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/projects/projects.html">
                                <i class="icon md-image"></i>
                                <span>Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps/forum/forum.html">
                                <i class="icon md-comments"></i>
                                <span>Forum</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="icon md-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <TheFooter> </TheFooter>
</div>
</template>

<script>
    import SideBarLeft from "@/components/SideBarLeft";
    import TheFooter from "../components/TheFooter";

    export default {
        name: "Contact",
        components : {TheFooter, SideBarLeft } ,
        data(){
            return {
                datas:[] ,
                name :[],
                job_title :[],
                company :[],
                company_name :[],
                about :[],
            }
        },
        created:function(){
            this.listContact();
        },
        methods : {
            listContact() {
                this.auth_token = localStorage.getItem("auth_token") ;
                this.$http.get('/v1/contact' , {
                    headers: {
                        'X-STRINGEE-AUTH' : eval(this.auth_token),
                    }
                })
                    .then(respond => {
                        //   console.log(respond);
                        if(respond.data.msg=="Success") {
                            this.datas=respond.data.data;
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