
<template>
    <div class=" page-login-v3 layout-full">

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
  <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="../assets/logo-blue.png" alt="...">
            <h2 class="brand-text font-size-18">Remark</h2>
          </div>
          <form  novalidate="true"  @submit="checkForm" method="post"  v-on:submit.prevent="onSubmit"  autocomplete="off">


            <div v-if="errors.length">
              <b class="text-danger">Please correct the following error(s):</b>

              <ul class="error-messages">
                <li class="custom-error"  v-for="(value, key) in errors" :key="key">
                  <span class="text-danger" v-text="value" />
                </li>
              </ul>

            </div>

            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="email" class="form-control" name="email" v-model="user.email" />
              <label class="floating-label">Email</label>
            </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="password" class="form-control" name="password" v-model="user.password"/>
              <label class="floating-label">Password</label>
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox">Remember me</label>
              </div>
              <a class="float-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
          </form>
          <p>Still no account? Please go to <a href="register-v3.html">Sign up</a></p>
        </div>

      </div>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY amazingSurge</p>
        <p>© 2017. All RIGHT RESERVED.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>

  </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "Login",
        data() {
            return {
                errors: [],
                info: [],
                result : [],
                auth_token : [],
                user: {
                    email: null,
                    password: null,
                },
            }
        },
        methods: {
            checkForm: function (e) {
                this.errors = [];
                if (!this.user.email) {
                    this.errors.push('Email required.');
                }
                if (!this.user.password) {
                    this.errors.push("Password required.");
                }
                else if (!this.errors.length) {
                    return true;
                }
                e.preventDefault();
            },
            onSubmit () {
                axios.post('https://pcc-test.stringee.com/v1/account', JSON.stringify(this.user))
                    .then(respond => {
                        // login successful if there's a jwt token in the response
                        if (respond.data.msg == "Success") {
                            // store user details and jwt token in local storage to keep user logged in between page refreshes
                            this.$router.push('/contact');
                            localStorage.setItem('user', JSON.stringify(respond.data));
                            let auth_token = JSON.stringify(respond.data.portals[0].auth_token) ;
                            localStorage.setItem('auth_token',auth_token );
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
  .custom-error {
    display: block;
  }
  @import '../assets/css/login-v3.css';
</style>