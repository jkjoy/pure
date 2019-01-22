<div class="footer">
<!-- 输出一言 -->
  <p id="hitokoto">:D 获取中...</p>
  <script>
    var xhr = new XMLHttpRequest();
    xhr.open('get', 'https://v1.hitokoto.cn');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        var data = JSON.parse(xhr.responseText);
        var hitokoto = document.getElementById('hitokoto');
        hitokoto.innerText = data.hitokoto;
      }
    }
    xhr.send();
  </script>
<!-- copyright -->
<p>Powered by <a href="http://typecho.org">Typecho</a> | Theme Pure by <a href="https://cokewithice.com">BigCoke</a>
</div>
         <canvas id="canvas" style="position:fixed;top:0px;left:0px;z-index:1;opacity:0.5;z-index:-10000"></canvas>
        <script type="text/javascript">
           //获得canvas容器
          var canvas = document.getElementById('canvas'); 
          //获得画笔
          var ctx = canvas.getContext('2d'); 
          //canvas设置宽度
          canvas.width = canvas.parentNode.offsetWidth; 
          //canvas设置高度
          canvas.height = canvas.parentNode.offsetHeight;
          //如果浏览器支持requestAnimFrame则使用requestAnimFrame否则使用setTimeout 
          window.requestAnimFrame = (function(){ 
          return window.requestAnimationFrame  || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame || 
            function( callback ){ 
                 window.setTimeout(callback, 1000 / 60); 
            }; 
          })(); 
          // 波浪大小
          var boHeight = canvas.height / 10;
          var posHeight = canvas.height / 1.2;
          //初始角度为0 
          var step = 0; 
          //定义三条不同波浪的颜色 
          var lines = ["#F5FFFA", "#F8F8FF", "#F0FFFF"]; 
          function loop(){ 
              //清除canvas内容
               ctx.clearRect(0,0,canvas.width,canvas.height); 
               step++; 
               //画3个不同颜色的矩形 
               for(var j = lines.length - 1; j >= 0; j--) { 
                ctx.fillStyle = lines[j]; 
                //每个矩形的角度都不同，每个之间相差45度 
                var angle = (step+j*50)*Math.PI/180; 
                var deltaHeight = Math.sin(angle) * boHeight;
                var deltaHeightRight = Math.cos(angle) * boHeight; 
                ctx.beginPath();
                ctx.moveTo(0, posHeight+deltaHeight); 
                ctx.bezierCurveTo(canvas.width/2, posHeight+deltaHeight-boHeight, canvas.width / 2, posHeight+deltaHeightRight-boHeight, canvas.width, posHeight+deltaHeightRight); 
                ctx.lineTo(canvas.width, canvas.height); 
                ctx.lineTo(0, canvas.height); 
                ctx.lineTo(0, posHeight+deltaHeight); 
                ctx.closePath(); 
                ctx.fill(); 
           }
           requestAnimFrame(loop);
          } 
          loop(); 
     </script>
