<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $this->page_title;?></title>
        <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
        <?php $this->loadCss();?>
    </head>
    <body>
        <div class="d-flex">
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <?php $this->getNav();?>
                <div class="container" style="margin-top: 3%;margin-bottom: 3%">
                    <div class="card">
                        <div class="card-header"><?php echo $this->page_title;?></div>
                        <div class="card-body">
                            <?php $this->getContent();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center">
            <a href="#"><?php echo 'Page loaded in ' . number_format(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],3) . ' seconds!';?></a>
        </footer>
    </body>

    <?php $this->loadJs();?>
</html>


<!-- Modal



        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div style="text-align:center"><img src="<?php //echo SITE_PATH; ?>/template/default/images/loading.gif" alt="LazyPHP"></div>
                </div>
            </div>
        </div>-->



