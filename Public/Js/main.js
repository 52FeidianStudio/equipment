        var curIndex=0;
        //时间间隔 单位毫秒
        var timeInterval=1000;
        var arr=new Array();
        arr[0]="__PUBLIC__/Pic/top.jpg";
        arr[1]="__PUBLIC__/Pic/lab.jpg";
        arr[2]="__PUBLIC__/Pic/Login.png";
        arr[3]="__PUBLIC__/Pic/phone.jpg";
        arr[4]="__PUBLIC__/Pic/aite.jpg";
        arr[5]="__PUBLIC__/Pic/top.jpg";
        arr[6]="__PUBLIC__/Pic/top.jpg";
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