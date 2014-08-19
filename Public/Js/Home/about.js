/*左侧导航条选项卡*/
function setTab(name,cursel,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById("con_"+name+"_"+i);
  menu.className=i==cursel?"hover":"";
 con.style.display=i==cursel?"block":"none";
 }
}

/*左侧导航条高亮*/
function change_bg(obj){
var a=document.getElementsByClassName("leftnav")[0].getElementsByTagName("a");
for(var i=0;i<a.length;i++){a[i].className="";}
obj.className="select";
}

/*图片变亮*/
    $(function(){
     $('.span4 img,.span6 img,.app-bar img,.nav img,.span60 img,.hero-unit img').each(function(){}).hover(function(){$(this).animate({opacity:0.6});}, function(){$(this).animate({opacity:1});});
    });
