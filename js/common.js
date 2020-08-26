//フォントサイズを加速度をつけて変化させる
// ( y = 1.043431674^x ) == ( 40 = 1.043431674^80 )
// $(function(){
//   if (767 >= screen.width) {
//     var i = 10;
//     while(i < 81){
//       var font_size = Math.pow(1.043431674, i);
//       font_size = font_size + 10;
//       $('.font' + i).css('font-size',font_size);
//       i++;
//     }
//   }
//   window.addEventListener("resize", function(event) {
//   if (767 >= screen.width) {
//     var i = 10;
//     while(i < 81){
//       var font_size = Math.pow(1.043431674, i);
//       font_size = font_size + 10;
//       $('.font' + i).css('font-size',font_size);
//       i++;
//     }
//   }else {
//     var i = 10;
//     while(i < 81){
//       $('.font' + i).css('font-size',i);
//       i++;
//     }
//   }
// });
// });
