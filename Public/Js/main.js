        var curIndex=0;
        //时间间隔 单位毫秒
        var timeInterval=1000;
        
        setInterval(changeImg,timeInterval);
        function changeImg()
    {
            var obj=document.getElementById("obj");
          if (curIndex==arr.length-1) 
            {
                curIndex=0;
            }
            else
            {
                curIndex+=1;
            }
            obj.src=arr[curIndex];
    }