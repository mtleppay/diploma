@extends('layouts.main')
@section('content')


        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center><div class="panel-title">Регистрация</div></center>
                           <!--  <div style="float:right; font-size: 85%; position: relative; top:-10px">
                            <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a>
                            </div> -->
                        </div>  
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="signup">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Имя</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstName" placeholder="Имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Фамилия</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastName" placeholder="Фамилия">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Пароль</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Пароль">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Повторите пароль</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
                                    </div>
                                </div>
                                    
                              <!--   <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Зарегистрироваться</button>
                                       
                                    </div>
                                </div>
                                
                              <!--   <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                 -->
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>

    @stop