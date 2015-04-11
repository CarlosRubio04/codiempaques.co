<footer>
    <div class="container">
                    
        <div class="row" id="<?php if(!isset($_REQUEST['content'])){
                    echo "back-footer";
                }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                    echo "back-content-foo";
                }
                else{
                    echo "back-footer";
                }?>">
            <div class="col-md-12">
                <div class="col-md-3 widget">
                    <div class="clearfix">
					<div  class="<?php if(!isset($_REQUEST['content'])){
                                echo "ico-map-home";
                            }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                                echo "ico-map-cont";
                            }
                            else{
                                echo "ico-map-home";
                            }?>">
                        </div>
                        <div class="feature-contents">
                            <h3>Cra.</h3>
                            <p>67 No. 9A-63</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <div class="clearfix">
					<div class="<?php if(!isset($_REQUEST['content'])){
                                echo "ico-tel-home";
                            }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                                echo "ico-tel-cont";
                            }
                            else{
                                echo "ico-tel-home";
                            }?>">
                            
                        </div>

                        <div class="feature-contents">
                            <h3>Fax</h3>
                            <p>2627285 - 2623198</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <div class="clearfix">
					<div class="<?php if(!isset($_REQUEST['content'])){
                                echo "ico-envelop-home";
                            }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                                echo "ico-envelop-cont";
                            }
                            else{
                                echo "ico-envelop-home";
                            }?>">
                            
                        </div>
                        <div class="feature-contents">
                            <h3>Gerencia</h3>
                            <p>s.lopez@codiempaques.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <div class="clearfix">
					<div class="clearfix">
                        <div class="<?php if(!isset($_REQUEST['content'])){
                                echo "ico-envelop-home";
                            }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                                echo "ico-envelop-cont";
                            }
                            else{
                                echo "ico-envelop-home";
                            }?>">
                        </div>
                        <div class="feature-contents">
                            <h3>Depto/ventas</h3>
                            <p>ventas@codiempaques.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <p>Lorem ipsum dolor sit amet, usu vidisse concludaturque ne, tritani temporibus no sit</p>
        </div>
    </div>
    <!-- /container -->
</footer>
