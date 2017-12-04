{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <link type="text/css" rel="stylesheet" href="__CSS__/tz.css"/>
    <style type="text/css">
        *{ padding: 0; margin: 0; }

        body{ background:#fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; }
        .system-message{ 
            /*padding: 24px 48px; margin:0 auto;*/
                padding: 24px 48px;
                width: 600px;
                margin: 0 auto;
                padding-left: 400px;
        }

        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px; }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px; }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
    </style>
</head>
<body style="background: #ae1212">


<div class="all-wrap">
  <div class="all">
    <div class="yarn"></div>
    <div class="cat-wrap">
      <div class="cat">
        <div class="cat-upper">
          <div class="cat-leg"></div>
          <div class="cat-leg"></div>
          <div class="cat-head">
            <div class="cat-ears">
              <div class="cat-ear"></div>
              <div class="cat-ear"></div>
            </div>
            <div class="cat-face">
              <div class="cat-eyes"></div>
              <div class="cat-mouth"></div>
              <div class="cat-whiskers"></div>
            </div>
          </div>
        </div>











    






<div class="cat-leg">
              <div class="cat-leg">
                <div class="cat-leg">
                  <div class="cat-leg">
                    <div class="cat-leg">
                      <div class="cat-leg">
                        <div class="cat-leg">
                          <div class="cat-leg">
                            <div class="cat-leg">
                              <div class="cat-leg">
                                <div class="cat-leg">
                                  <div class="cat-leg">
                                    <div class="cat-leg">
                                      <div class="cat-leg">
                                        <div class="cat-leg">
                                          <div class="cat-leg">
                                            <div class="cat-paw"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cat-tail">
              <div class="cat-tail">
                <div class="cat-tail">
                  <div class="cat-tail">
                    <div class="cat-tail">
                      <div class="cat-tail">
                        <div class="cat-tail">
                          <div class="cat-tail">
                            <div class="cat-tail">
                              <div class="cat-tail">
                                <div class="cat-tail">
                                  <div class="cat-tail">
                                    <div class="cat-tail">
                                      <div class="cat-tail">
                                        <div class="cat-tail">
                                          <div class="cat-tail -end"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div style="margin-top:100px "class="system-message">
        <?php switch ($code) {?>
            <?php case 1:?>
            <h1></h1>
            <p class="success"><?php echo(strip_tags($msg));?></p>
            <?php break;?>
            <?php case 0:?>
            <h1>:(</h1>
            <p class="error"><?php echo(strip_tags($msg));?></p>
            <?php break;?>
        <?php } ?>
        <p class="detail"></p>
        <p class="jump">
            页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
        </p>
    </div>






    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };

            }, 3000);

        })();
    </script>
</body>
</html>
