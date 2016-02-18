<?php
include("header.php");
include("menu.php");
?>    
<div class="col-md-7 col-sm-8 col-xs-12 ">
    
        
                <?php
                if(isset($show_share) && $show_share===true)
                { ?>
                        <div class="col-md-1" >
                            
                            <h5><span class="btn btn-sm btn-warning btn-file">
                                <i class="glyphicon glyphicon-cloud-upload"></i> 
                            <input type="file" id="img" multiple name="img[]" class="form-control" />
                            </span>
                                </h5>
                        </div>
                        <div class="col-md-10" >
                        <?php if (!Helper::isUser()) { ?>
                            <h5 class="pull-right">You post anonymously:  <a href="/user/register/" class="btn btn-primary btn-sm">signin now!</a></h5>
                        <?php } ?>
                        </div>
                <div class="col-md-11 stream-input">
                    
                    <form method="post" action="/api/content/" enctype="multipart/form-data">
                        
                        <textarea id="share_area" name="content" cols="30" class="form-control"></textarea>

                            <div class="row preview www">

                                <p class="text-right">
                                    <button class="btn btn-info close">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </button>
                                </p>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="" id="og_img" />
                                </div>
                                <div class="col-md-9">
                                    <h3 id="og_title"></h3>

                                    <p id="og_desc"></p>

                                </div>
                                <div class="col-md-12">
                                    <a href="" id="www_link"></a>
                                </div>
                            </div>
                            <div class="row preview img">
                                <div class="col-md-12">
                                    <p class="text-right">
                                        <button class="btn btn-info close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </p>
                                    <img class="img-responsive" src="" id="preview_img" />
                                </div>

                            </div>
                            <div class="row preview upload">
                                <div class="col-md-12">
                                    <p class="text-right">
                                        <button class="btn btn-info close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </p>
                                    <div id="uploadPreview"></div>
                                </div>

                            </div>
                            <div class="row preview video">
                                <div class="col-md-12">
                                    <p class="text-right">
                                        <button class="btn btn-info close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </p>
                                    <div id="video_target" class="embed-responsive embed-responsive-16by9"></div>
                                </div>

                            </div>
                            <input type="hidden" name="metadata" id="metadata" />
                            <input type="text" name="mail" class="hide" value="" />
                            <button class="btn btn-lg btn-info pull-right"><i class="glyphicon glyphicon-heart"></i> <?php echo _('Share now!'); ?></button>
                            
                        </form>
                    </div>
                <?php } ?>
        
        <div class=" stream-row animated bounceInDown" 
             data-permalink="<?php echo (isset($permalink) ? $permalink : ""); ?>" 
             data-hash="<?php echo (isset($hash) && !empty($hash) ? $hash : ""); ?>"
             data-user="<?php echo (isset($user) && !empty($user) ? $user : ""); ?>"
             data-random="<?php echo (isset($random) && !empty($random) ? $random : ""); ?>"
             >
            <div class="stream col-md-11"></div>
        </div>
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

<div class="col-md-3 hidden-sm hidden-xs">
    

    
    <ul class="list-group" id="notifications">
        
    </ul>
    
</div>
<?php

include("footer.php");
