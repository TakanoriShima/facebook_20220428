/* global $*/
$(function(){
  // 最初のtop画面のテキストアニメーション
  const title = $('#title').text();
  $('#title').text('');
  let count = 1;
  // text_animation関数を定義
  const text_animation = () => {
      const word = title.substr(0, count);
      // 挙動確認
      console.log(word);
      $('#title').text(word);
      count++;
      if(count > title.length) {
          clearInterval(timer);
      }
  };
  
  //タイマー処理、text_animation関数の実行(0,1秒間隔でタイピングのように文字を表示)。
  const timer = setInterval(text_animation, 100);
  
  // 画像アニメーション(fadein/fadeout)）
  const images = [
      'images/top_1.jpg', 
      'images/top_2.jpg', 
      'images/top_3.jpg',
      'images/top_4.jpg',
      'images/top_5.jpg',
      'images/top_6.jpg',
      'images/top_7.jpg'
    ];
    
  let ff_count = 1;
  // opacityを使用したアニメーション。
  const fadein_fadeout = () => {
      $('#mainVisual img').animate({'opacity': 0}, 1000, () => {
          $('#mainVisual img').prop('src', images[ff_count]);
          $('#mainVisual img').animate({'opacity': 1});
          ff_count++;
          if(ff_count === images.length){
              ff_count = 0;
          }
      });
  };
  
  // 5秒間隔で実行
  setInterval(fadein_fadeout, 5000);
  
});