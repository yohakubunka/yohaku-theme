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


particlesJS('particles-js',{
  // シェイプの設定
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#72deff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
);


lottie.loadAnimation({
  container: document.getElementById("lottie1"),
  renderer: "svg",
  loop: false,
  autoplay: true,
  path: "wp-content/themes/yohaku-theme/js/30172-flex-confetti.json"
});
