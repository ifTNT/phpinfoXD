<!-- Copyright (c) 2015 ifTNT -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <script>
            function init(){
                var strs = [
                    "宇智波騙你",
                    "宇智波笑你",
                    "不要隨便亂看",
                    "XD",
                    "走開啦",
                    "滾",
                    "phpinfo"
                ];
                var str = strs[Math.floor(Math.random() * strs.length)];
                var win = {
                    w: window.innerWidth,
                    h: window.innerHeight
                };
                var FontSize = Math.min((win.w-20) / (str.length+1), win.h*0.8);
                FontSize = Math.floor(FontSize);

                var XD = document.createElement("div");
                XD.innerHTML = str;
                XD.style.fontSize = FontSize + "px";
                XD.style.marginTop = (win.h*0.8 - FontSize)/2 + "px";
                XD.style.fontWeight = 800;
                XD.style.width = "100%";
                XD.style.textAlign = "center";
                document.body.appendChild(XD);
            }
            init();
        </script>
    </body>
</html>
