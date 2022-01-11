<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('../common.php');
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Make production">
    <title>Make production</title>
    <link rel="icon" href="images/favicon.png">
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Page Scroll Effects JS & CSS -->
    <script src="js/velocity/velocity.min.js"></script>
    <script src="js/velocity/velocity.ui.min.js"></script>
    <script src="js/velocity/main.js"></script>
    <link rel="stylesheet" href="js/velocity/velocity.css">
    <!-- Smooth Scrolling -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <!-- Slick.js -->
    <script src="js/slick/slick.min.js"></script>
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <!-- Featherlight.js -->
    <script src="js/featherlight/featherlight.js"></script>
    <link rel="stylesheet" href="js/featherlight/featherlight.css">
    <!-- Custom JS & CSS -->
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script>
      var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
    </script>
</head>
<body>
  <div class="container">  
    <header>
      <div class="gnb-inner">
        <div class="logo">
          <a href="contact.html"><img src="images/logo.png" alt="Return to the index page"></a>
        </div>
        <a href="#" class="hamburger-button">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
        <div class="overlay">
          <nav class="menu">
            <ul>
              <li><a href="contact.html">Home</a></li>
              <li><a href="contact.html">About</a></li>
              <li><a href="contact.html">Portfolio</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div> 
      </div>  
    </header>
    <div class="cd-section visible" id="contact">
      <div class="content">
        <div class="home-inner">
          <h3 class="welcome-text">Contact <span> <br> <img src="images/home-logo.png" alt=""></span></h3>
          <div class="contact-heading">
            <span>Creative</span>
            <span>Design</span>
            <span>History</span>
          </div>
        </div>
      </div>
    </div>
    <div class="cd-section" id="contact form">
      <div class="contact">
        <div class="contact-inner">
          <div class="contact-feature">
            <div class="contact-form">
              <h3><b>Contact</b></h3>
                <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
                <form name="fwrite" id="fwrite" action="/bbs/write_update.php" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="bo_table" value="free">
                  <div class="send-box1">
                    <div class="client-info">
                      <h3>고객 정보</h3>
                      <label for="name">Name <span>*</span></label>
                      <input type="text" name="wr_1" placeholder="담당자 / 회사명">
                      <label for="phone">Phone <span>*</span></label>
                      <input type="tel" name="wr_2" placeholder="연락처">    
                      <label for="email">Email <span>*</span></label>
                      <input type="email" name="wr_3" placeholder="이메일">
                    </div>
                  </div>
                  <div class="send-box2">
                    <div class="project-info">
                      <h3>프로젝트 정보</h3>
                    </div>
                    <div class="project-type">
                    <div>
                        <input type="checkbox" name="wr_4[]" id="branding" value="branding"/>
                        <label for="branding">브랜딩 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="promotion" value="promotion"/>
                        <label for="promotion">홍보 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="ad" value="ad"/>
                        <label for="ad">광고 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="fashion" value="fashion"/>
                        <label for="fashion">패션 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="making" value="making"/>
                        <label for="making">메이킹 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="motion" value="motion"/>
                        <label for="motion">모션그래픽 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="content" value="content"/>
                        <label for="content">콘텐츠 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="spot" value="spot"/>
                        <label for="spot">현장 스케치 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="etc" value="etc"/>
                        <label for="etc">기타 영상</label>
                      </div>
                      <!-- <div>
                        <input type="checkbox" id="brand" name="wr_4[]" value="brand"/>
                        <label for="brand">브랜드 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="promotion" name="wr_4[]" value="promotion"/>
                        <label for="promotion">홍보 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="viral" name="wr_4[]" value="viral"/>
                        <label for="viral">바이럴 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="spot" name="wr_4[]" value="spot"/>
                        <label for="spot">현장 스케치 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="event" name="wr_4[]" value="event"/>
                        <label for="event">행사 오프닝 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="fashion" name="wr_4[]" value="fashion"/>
                        <label for="fashion">패션 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="motion" name="wr_4[]" value="motion"/>
                        <label for="motion">모션그래픽 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" id="content" name="wr_4[]" value="content"/>
                        <label for="content">콘텐츠 개발</label>
                      </div> -->
                    </div>
                  </div>
                  <div class="send-box3"> 
                    <div class="project-content">
                      <h3>상세 문의 내용</h3>
                    </div>
                    <div class="project-budget">
                      <label for="project-budget">제작 예산 <span>*</span></label>
                      <select id="project-budget" name="wr_5">
                        <optgroup label="영상">
                          <option value="10 ~ 100 만원 이하">10 ~ 100 만원 이하</option>
                          <option value="100 ~ 300 만원 이하">100 ~ 300 만원 이하</option>
                          <option value="300 ~ 500 만원 이하">300 ~ 500 만원 이하</option>
                          <option value="500 ~ 1000 만원 이하">500 ~ 1000 만원 이하</option>
                          <option value="1000 ~ 2000 만원 이하">1000 ~ 2000 만원 이하</option>
                          <option value="2000 ~ 3000 만원 이하">2000 ~ 3000 만원 이하</option>
                          <option value="3000 ~ 5000 만원 이하">3000 ~ 5000 만원 이하</option>
                          <option value="5000 만원 이상">5000 만원 이상</option>    
                        </optgroup>
                        <optgroup label="기타">
                          <option value="협의 후 결정">협의 후 결정</option>   
                        </optgroup>
                      </select>
                      <div class="project-title">
                        <label>프로젝트 <span>*</span></label>
                        <input type="text" id="text" name="wr_subject" placeholder="프로젝트 제목을 입력해 주세요.">
                      </div>
                    </div>
                    <div class="reference_url">
                      <p>디자인 참고 사이트나 영상 링크 주소(Url)를 알려주세요.</p>
                      <span>※ http:// 또는&nbsp;https:// 포함하여 입력해주세요.&nbsp;</span>
                      <input type="url" id="url" name="wr_link1" placeholder="주소(Url)">
                    </div>
                    <div class="message">
                      <label for="message">문의 내용 <span>*</span></label>
                      <textarea name="wr_content" id="message" rows="10" cols="80" placeholder="프로젝트 내용을 입력해 주세요."></textarea>
                    </div>
                    <div class="filebox">
                      <input class="upload-name" value="첨부파일" placeholder="첨부파일">
                      <label for="file">파일찾기</label> 
                      <input type="file" id="file" name="bf_file[]">
                    </div>
                  </div>
                  <button type="submit" id="submit_btn">send message</button>
                </form>  
            </div>  
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footer id="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer">
            <ul>
              <li><a href="https://section.blog.naver.com/BlogHome.naver?directoryNo=0&currentPage=1&groupId=0" target="_blank">Blog</a></li>
              <li><a href="https://www.instagram.com/makeproduction_2021/" target="_blank">Instagram</a></li>
              <li><a href="https://www.youtube.com/channel/UCs_Xcf4ZZ80Y6NsAYLBDrAQ" target="_blank">Youtube</a></li>
            </ul>
            <p>
              &copy;
              <a href="contact.html">Make production </a>All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    // hamburger button //
    $(function() {
      $('.hamburger-button').on('click', function(event){
        event.preventDefault();
      $(this).toggleClass('active');
      $('.overlay').toggleClass('visible');
      });
    });

      // Change CSS with Scroll
    $(window).scroll(function(){
      if($(window).scrollTop() > 50) {
        $('header').addClass('active')
      }
      else {
        $('header').removeClass('active')
      }
    })

    /* $("#submit_btn").click(function () {
            $.ajax({
                url: "http://13.125.208.237:3000",
                method: "POST",
                data: {
                    title: "견적서",
                    category: "50~100",
                    contents: $('input[name=contents]').val()
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    alert(data);
            }
        })
    }); */

    // filebox //
    $("#file").on('change',function(){
    var fileName = $("#file").val();
    $(".upload-name").val(fileName);
    });
  </script>

<script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        console.log(f.wr_4);

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
  
</body>
</html>