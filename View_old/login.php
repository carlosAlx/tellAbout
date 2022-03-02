<div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="border-box">
                            <h4 class="text-primary">Ja possui cadastro</h4>
                            <form method="POST" >
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" required="" placeholder="Enter your Email" name="email" id="email" class="form-control" aria-required="true">
                            
                                    <label for="password">Password</label>
                                    <input type="password" required="" placeholder="Enter your Password" name="password" id="password" class="form-control" aria-required="true">
                                </div>
                                <button name="submit" id="form-submit" type="submit" class="btn btn-md btn-black">Sign In</button>
                                <a class="float-right">Forgot password?</a>
                            </form>            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border-box">
                            <h4   class="text-primary">Não possui cadastro</h4>
                            <p > Se você ainda não possui um cadastro, basta clicar no botão abaixo. Rapido e fácil.</p>
                            <a class="btn btn-outline-primary" href="<?php echo BASE_URL ?>author/newAuthor/">Novo Cadastro</a>  
                        </div>
                    </div>
                </div>
</div>
