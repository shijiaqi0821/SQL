<?php
    for($i=1;$i<=100;$i++){
        echo "&nbsp;<button class='set'>$i</button>&nbsp;";
        if($i%10 ==0){
            echo "<br>";
        }
    }
?>
<script>
    var sets = document.getElementsByClassName("set");
    //console.log(seats);

    for(var i=0;i<sets.length;i++)
    {
        sets[i].style.backgroundColor = '';        //默认颜色
        sets[i].addEventListener('click',function(e){

            var xz = confirm("是否要选中" + this.innerHTML + "座位")
            //console.log(xz);
            if(xz){
                //发送ajax请求 选中此座位
                this.style.backgroundColor = 'yellow';     //选中后座位变色
                var xhr = new XMLHttpRequest();

                var set_id = this.innerHTML;
                xhr.open('GET', '/sets.php?id='+set_id, true);
                xhr.send();

                xhr.onreadystatechange = function(){
                    if (xhr.readyState === XMLHttpRequest.DONE){
                        if (xhr.status === 200){
                            alert(xhr.responseText);
                        } else {
                        }
                    } else {
                    }
                }
            }
        });
    }
</script>
