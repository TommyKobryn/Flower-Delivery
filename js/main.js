
$('.shaky').on("mouseover",function(){
$(this).css("font-size","100%");
$(this).effect("bounce", { times: 1 },{distance : 5}, "slow" );
});
$('.shaky').on("mouseout",function(){
$(this).css("font-size","100%");
$(this).effect("");
});
