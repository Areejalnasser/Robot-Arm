<!DOCTYPE html>
<html>
    <head>
        <title>Control</title>
        <body>
            <center>
                <input type="range"  min="0" max="100" value="0" id="get1"  onchange="fetch1()"><span id="demo1"></span>
                <br>
                <input type="range"  min="0" max="100" value="0" id="get2" onchange="fetch2()"><span id="demo2"></span>
                <br>
                <input type="range"  min="0" max="100" value="0" id="get3" onchange="fetch3()"><span id="demo3"></span>
                <br>
                <input type="range"  min="0" max="100" value="0" id="get4" onchange="fetch4()"><span id="demo4"></span>
                <br>
                <input type="range"  min="0" max="100" value="0" id="get5" onchange="fetch5()"><span id="demo5"></span>
                <br>
                <input type="range"  min="0" max="100" value="0" id="get6" onchange="fetch6()"><span id="demo6"></span>
                <br>	
                <br>
                <br>		
                 <button type="submit">Save</button>   
                <br>	
                <br>
                <button type="submit">Running</button>
                </center>					
                                    
                 <script class="slider1">
                        
                        function fetch1(){
                var slider = document.getElementById("get1");
                var output = document.getElementById("demo1");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                        
                    </script>
                    <script class="slider2">
                    function fetch2(){
                var slider = document.getElementById("get2");
                var output = document.getElementById("demo2");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                </script>
                
                   <script class="slider3">
                    function fetch3(){
                var slider = document.getElementById("get3");
                var output = document.getElementById("demo3");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                </script>
                
                   <script class="slider4">
                    function fetch4(){
                var slider = document.getElementById("get4");
                var output = document.getElementById("demo4");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                </script>
                
                   <script class="slider5">
                    function fetch5(){
                var slider = document.getElementById("get5");
                var output = document.getElementById("demo5");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                </script>
                
                   <script class="slider6">
                    function fetch6(){
                var slider = document.getElementById("get6");
                var output = document.getElementById("demo6");
                output.innerHTML = slider.value;
                
                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
                }
                </script>
        
        +
        </body>
    </head>
</html>